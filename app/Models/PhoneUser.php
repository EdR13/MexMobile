<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneUser extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'phone_id',
     ];

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function phone(){
        return $this->belongsToMany(Phone::class);
    }


}
