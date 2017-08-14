<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function abousUs(){
    	return view('about-us');
    }

    public function service(){
    	return view('service');
    }

    public function serviceDetail(){
        return view('service-detail');
    }

    public function location(){
    	return view('location');
    }

    public function contact(){
    	return view('contact');
    }

    public function logros(){
    	return view('logros');
    }

    public function team(){
    	return view('team');
    }

    public function transport(){
    	return view('transport');
    }

    public function faq(){
    	return view('faq');
    }
}
