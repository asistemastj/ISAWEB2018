<?php

namespace App\Http\Controllers\Area;

use App\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #lista de areas
        $areas = Area::all();
        return response()->json(['data' => $areas]);
    }

}
