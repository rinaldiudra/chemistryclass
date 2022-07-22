<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;

class PenggunaController extends Controller
{
	 $user = Auth::user();
        return view('admin.user')->with('users',$user);
	}
	 // public function users(){
  //       $users = User::all();
  //       return view('admin.user', ['admin' => $users]);
    }

    //
}
