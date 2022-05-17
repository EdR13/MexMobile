<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Color;
use App\Models\Images;
use App\Models\Manufacturer;
use App\Models\Operative_System;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PhoneController extends Controller
{
    private $reglasValidacion = [
        'manufacter' => 'required|numeric|exists:manufacters', //Posiblemente se necesite el ID aquí
        'color' => 'required|numeric|exists:colors',
        'os' => 'required|numeric|exists:operative_systems',
        'model' => 'required|min:5|max:45',
        'name' => 'required|min:5|max:45',
        'storage' => 'required|numeric|in:64,128,256,512,1024',
        'ram' => 'required|numeric|max:12',
        'batery' => 'required|numeric|max:7000',
        '5g_capable' => 'required|boolean',
        'release_year' => 'required|numeric|min:2015|max:2022',
        'price' => 'required|numeric|min:0',
    ];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::all(); //or get
        return view('home', compact('phones'));
    }

    public function controlPanel()
    {
        $phones = Phone::all(); //or get

        $images = Images::all(); ///Esto se debe arreglar
        return view('admin.tablePhones', compact('phones','images'));
    }
    
    public function myOrders()
    {
        $orders = Auth::user()->order('user')->get(); //listado de solo ese usuario 
        return view('phones.orders', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request ->validate($this->reglasValidacion);

        //dd('accede a metodo store');
        //dd($request->all());
   
        $phone = new Phone();
        $phone ->manufacter = $request ->manufacter;
        $phone ->color = $request ->color;
        $phone ->os = $request ->os;
        $phone ->model = $request ->model;
        $phone ->name = $request ->name;
        $phone ->storage = $request ->storage;
        $phone ->ram = $request ->ram;
        $phone ->batery = $request ->batery;
        //$phone ->5g_capable = $request ->5g_capable;
        $phone ->release_year = $request ->release_year;
        $phone ->price = $request ->price;
        $phone ->photo = $request ->photo;
        $phone ->save();

        return redirect('/phone');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(Phone $phone)
    {
        return view('phones.showPhone', compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phone)
    {
        return view('phones.formPhones', compact('phone'));
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
        $request ->validate($this->reglasValidacion);

        $phone ->manufacter = $request ->manufacter;
        $phone ->color = $request ->color;
        $phone ->os = $request ->os;
        $phone ->model = $request ->model;
        $phone ->name = $request ->name;
        $phone ->storage = $request ->storage;
        $phone ->ram = $request ->ram;
        $phone ->batery = $request ->batery;
        //$phone ->5g_capable = $request ->5g_capable;
        $phone ->release_year = $request ->release_year;
        $phone ->price = $request ->price;
        $phone ->photo = $request ->photo;
        $phone ->save();

        return redirect('/phone/' . $phone->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone)
    {
        $phone ->delete();
        return redirect('/ControlPanel')->with('success', 'Phone Deleted successfully.');
    }

    public function bindImages(Request $request)
    {

    }
}
