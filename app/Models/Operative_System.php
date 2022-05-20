<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operative_System extends Model
{
    use HasFactory;
    protected $table = 'operative_systems';
    public $timestamps = false;

    public function phone(){
        return $this->belongsTo(Phone::class);
    }
}
