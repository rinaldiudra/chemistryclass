<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePenggunaController extends Controller
{
    public function indexMateri(){
    	return view ('users.materi');
    }

    public function bacaMateri(){
    	return view ('users.bacamateri');
    }

    public function downloadMateri(){
    	return view ('users.download');

  //   	        // mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->paginate(10);
 
  //   	        // mengirim data pegawai ke view index
		// return view('index',['pegawai' => $pegawai]);
 
	}
 

}
