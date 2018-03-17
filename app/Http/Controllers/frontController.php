<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profil;
use App\berita;

class frontController extends Controller
{
    public function index(){
    	$profil = profil::find(1);
    	$berita=berita::all();
    	return view('layouts.user', compact('profil','berita'));
    }
}
