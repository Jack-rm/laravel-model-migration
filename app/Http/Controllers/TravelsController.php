<?php

namespace App\Http\Controllers;

use App\Models\Travel;

use Illuminate\Http\Request;

class TravelsController extends Controller
{
    public function show($id){
        
        $travel = Travel::findOrFail($id);

        return view('travel', compact('travel'));
    }
    
    public function index(){

        $travels = Travel::all();

        $data = compact('travels');

        return view('home', $data);
    }
}
