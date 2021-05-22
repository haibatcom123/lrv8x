<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\contract;

class PostController extends Controller
{
    public function showform() {
        return view('create');
    }
    public function validationform(Request $request) {
        // $this->validation($request,[
        //     'name'=>'required|max:50',
        //     'address'=>'required',
        //     'email'=>'required',
        //     'content'=>'required'
        // ]);
        echo "<pre>";
            print_r($request->all());
        
        echo "</pre>";
        $validatedData = $request->validate([
            'name' => ['required', 'max:255', 'alpha'],
            'address' => ['required'],
            'email' => ['required', 'max:256', 'email'],
            'content' => ['required'],
        ]);
        
    }
    public function addDatabase(Request $request){
        if($request->isMethod('post')){
        $name = $request->input("name");
        $address = $request->input("address");
        $email = $request->input("email");
        $content = $request->input("content");

        echo "<pre>";
            print_r($request->all());
        
        echo "</pre>";
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'address' => ['required'],
            'email' => ['required', 'max:256', 'email'],
            'content' => ['required'],
        ]);
        $contract = new contract();

        $contract->name = $name;
        $contract->address = $address;
        $contract->email = $email;
        $contract->content = $content;
            
        $contract->save();
        
    }
}
}