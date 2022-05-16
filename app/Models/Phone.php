<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    public function image(){
        return $this->belongsToMany(Image::class);
    }

    public function color(){
        return $this->belongsToMany(Color::class);
    }

    public function manufacter(){
        return $this->hasOne(Manufacter::class);
    }

    public function operative_system(){
        return $this->hasOne(Operative_System::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
