<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdentitasController extends Controller
{
     public function daftar(){
    	return view('pages.daftar');
     }


	// public function daftarMhs(Request $request)
	// {
	// 	$mhs = new Informasi;

	// 	$mhs->nim = $request->nim;
	// 	$mhs->jurusan = $request->jurusan;
	// 	$mhs->fakultas = $request->fakultas;
	// 	$mhs->save();

	// 	return redirect('/daftar');
	// }
	public function tampilM()
		{
			$users = Users::all();

			return view('pages.tampil',['users' => $users]);
		}
}
