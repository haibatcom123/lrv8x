<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\contract;

class PostController extends Controller
{
    public function showform() {
        return view('test');
    }
    public function validationform(Request $request) {
        echo "<pre>";
            print_r($request->all());
        
        echo "</pre>";
        // $this->validation($request,[
        //     'name'=>'required|max:50',
        //     'address'=>'required',
        //     'email'=>'required',
        //     'content'=>'required'
        // ]);
    }
    public function addDatabase(Request $request){
        if($request->isMethod('post')){
        $name = $request->input("name");
        $address = $request->input("address");
        $email = $request->input("email");
        $content = $request->input("content");

        // $contract = new contract([
        //     'name'=>$name,
        //     'address'=>$address,
        //     'email'=>$email,
        //     'content'=>$content
        // ]);
        $contract = new contract();

        $contract->name = $name;
        $contract->address = $address;
        $contract->email = $email;
        $contract->content = $content;
            
        $contract->save();
        echo "<pre>";
            print_r($request->all());
        
        echo "</pre>";
        }

    }
}
