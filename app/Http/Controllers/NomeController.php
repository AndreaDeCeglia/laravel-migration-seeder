<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class NomeController extends Controller
{
    public function index(){
        $all_trains = Train::all();
        return view('welcome', compact('all_trains'));
    }
}
