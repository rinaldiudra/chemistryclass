<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'users';
    protected $fillable = [
    	'id','name','email','created_at'
    ];
}
