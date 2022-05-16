<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacter extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function phone(){
        return $this->belongsTo(Phone::class);
    }
}
