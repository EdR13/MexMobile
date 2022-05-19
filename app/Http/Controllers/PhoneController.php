<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Color;
use App\Models\Image;
use App\Models\Manufacturer;
use App\Models\Operative_System;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\ImagePhone;
use App\Models\PhoneUSer;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;



class PhoneController extends Controller
{
    private $reglasValidacion = [
        'manufacturer' => 'required|numeric|exists:manufacturers,id', //Posiblemente se necesite el ID aquí
        'color' => 'required|numeric|exists:colors,id',
        'os' => 'required|numeric|exists:operative_systems,id',
        'model' => 'required|min:5|max:45',
        'name' => 'required|min:5|max:45',
        'storage' => 'required|numeric|in:64,128,256,512,1024',
        'ram' => 'required|numeric|max:12',
        'battery' => 'required|numeric|min:2800|max:7000',
        'fiveg_capable' => 'required|boolean',
        'release_year' => 'required|numeric|min:2015|max:2022',
        'price' => 'required|numeric|min:0',
        'images.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::all(); //or get
        $images = Image::all();
        return view('home', compact('phones', 'images'));
    }

    public function controlPanel()
    {
        if (!Gate::allows('hasPermission')) {
            abort(403);
        }
        $phones = Phone::all();
        return view('admin.tablePhones', compact('phones'));
    }
    
    public function myOrders()
    {   
        if (!Gate::allows('can')) {
            abort(403);
        }
        $orders = PhoneUser::where('user_id', Auth::user()->id)->get('phone_id');
        $phones= Phone::whereIn('id', $orders)->get();
        return view('orders.indexOrders', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('hasPermission')) {
            abort(403);
        }
        $os = Operative_System::all();
        $manufacturers = Manufacturer::all();
        $colors = Color::all();
        return view('phones.formPhones',  compact('os', 'manufacturers', 'colors'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Gate::allows('hasPermission')) {
            abort(403);
        }
        $request ->validate($this->reglasValidacion);
        
        $phone = new Phone();
        $phone ->manufacturer_id = $request ->manufacturer;
        $phone ->color_id = $request ->color;
        $phone ->os_id = $request ->os;
        $phone ->model = $request ->model;
        $phone ->name = $request ->name;
        $phone ->storage = $request ->storage;
        $phone ->ram = $request ->ram;
        $phone ->battery = $request ->battery;
        $phone ->fiveg_capable = $request ->fiveg_capable;
        $phone ->release_year = $request ->release_year;
        $phone ->price = $request ->price;
        $phone->save();

        if($request->images){
            foreach($request->images as $key=> $image)
            {
                $img= new Image();
                $imageName = $request['model'].'-img-'.time().rand(1,1000).'.'.$image->extension();
                $img ->image = $imageName;
                $image->move(\public_path("/phones"), $imageName);
                $img->save();
                $imgPhone = new ImagePhone();
                $imgPhone->phone_id = $phone->id;
                $imgPhone->image_id = $img->id;
                $imgPhone->save();
            }
        }

        return redirect('/ControlPanel')->with('success', $phone->name.' created successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(Phone $phone)
    {
        $img = ImagePhone::where('phone_id', $phone->id)->get('image_id');
        $images= Image::whereIn('id', $img)->get();
        return view('phones.showPhones', compact('phone', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phone)
    {
        if (!Gate::allows('hasPermission')) {
            abort(403);
        }
        $os = Operative_System::all();
        $manufacturers = Manufacturer::all();
        $colors = Color::all();
        $img = ImagePhone::where('phone_id', $phone->id)->get('image_id');
        $images= Image::whereIn('id', $img)->get();
        return view('phones.formPhones',  compact('os', 'manufacturers', 'colors', 'phone', 'images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phone $phone)
    {
        if (!Gate::allows('hasPermission')) {
            abort(403);
        }

        $request ->validate($this->reglasValidacion);

        $phone ->id = $phone->id;
        $phone ->manufacturer_id = $request ->manufacturer;
        $phone ->color_id = $request ->color;
        $phone ->os_id = $request ->os;
        $phone ->model = $request ->model;
        $phone ->name = $request ->name;
        $phone ->storage = $request ->storage;
        $phone ->ram = $request ->ram;
        $phone ->battery = $request ->battery;
        $phone ->fiveg_capable = $request ->fiveg_capable;
        $phone ->release_year = $request ->release_year;
        $phone ->price = $request ->price;
        $phone->save();

        if($request->images){
            foreach($request->images as $key=> $image)
            {
                if(!property_exists($image, 'image'))
                {
                    $img= new Image();
                    $imageName = $request['model'].'-img-'.time().rand(1,1000).'.'.$image->extension();
                    $img ->image = $imageName;
                    $image->move(\public_path("/phones"), $imageName);
                    $img->save();
                    $imgPhone = new ImagePhone();
                    $imgPhone->phone_id = $phone->id;
                    $imgPhone->image_id = $img->id;
                    $imgPhone->save();
                }
            }
        }

        return redirect('/ControlPanel')->with('success', $phone->name.' updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone)
    {
        if (!Gate::allows('hasPermission')) {
            abort(403);
        }
        $list = ImagePhone::where('phone_id', $phone->id)->get('image_id');
        $images= Image::whereIn('id', $list)->get();
        foreach($images as $image)
        {
            if(File::exists("phones/".$image->image))
            {
                File::delete("images/".$image->image);
            }
        }
        $phone ->delete();
        return redirect('/ControlPanel')->with('success', $phone->name.' deleted successfully!');
    }

    public function deletePhoto($id)
    {
        if (!Gate::allows('hasPermission')) {
            abort(403);
        }
        $img = Image::where('id', $id)->get()->first();
        if(File::exists("phones/".$img->image))
        {
            File::delete("images/".$img->image);
        }
        $img->delete();
        return back()->with('success', 'Image deleted successfully!');
    }
}
