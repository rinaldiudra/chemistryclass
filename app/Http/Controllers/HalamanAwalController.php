<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanAwalController extends Controller
{
    public function halamanAwal(){
    	return view ('users.halamanawal');
    }
}
