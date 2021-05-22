<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contract;
class HomeController extends Controller
{
    public function index(){
        $data = contract::all();
        dd($data);
        return view('home',compact('data'));
    }
}
