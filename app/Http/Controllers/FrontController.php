<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function abousUs(){
    	return view('nosotros');
    }

    public function service(){
    	return view('servicios');
    }

    public function location(){
    	return view('ubicacion');
    }

    public function contact(){
    	return view('contacto');
    }

    public function logros(){
    	return view('historia');
    }

    public function transport(){
    	return view('transporte');
    }
}
