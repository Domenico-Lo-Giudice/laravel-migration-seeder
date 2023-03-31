<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use App\Http\Controllers\Controller;

class TrainController extends Controller
{
    public function index () {
        $trains = Train::where('departure_time', '>=', date('Y-m-d'))->get();
    
        return view('welcome', [
            'trains' => $trains
        ]);
}
}