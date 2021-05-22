<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatController extends Controller
{
    public function index()
    {
        return view(create);
    }

    public function create()
    {
        return view(create);
    }

    public function store(Request $request)
    {
        $contracts = new contract;
        $contracts->name = $request->name;
        $contracts->address = $request->address;
        $contracts->email = $request->email;
        $contracts->content = $request->content;
        $contracts->save();
        return redirect()->action('CreateController@create');
    }
    
}
