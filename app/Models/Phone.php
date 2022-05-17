<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Phone extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function image(){
        return $this->belongsToMany(Image::class);
    }

    public function color(){
        return Color::find($id)->color;
    }

    public function manufacturer($id){
        return Manufacturer::find($id)->name;
    }

    public function operative_system($id){
        return Operative_System::find($id)->name;
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
