<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        // questo fa in modo di prenderli tutti
        $tranisList = Train::all();
        //$tranisList = Train::limit(20)->get();
        // filtrare i treni
        // $tranisList = Train::where()


        return view('guest.train', compact('tranisList'));
    }
}
