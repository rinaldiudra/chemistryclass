<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
// b
use Illuminate\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.user')->with('users',$user);
        // $users = DB::select('select * from users');
        // return view('user',['users'=>$users]);
    }
}
