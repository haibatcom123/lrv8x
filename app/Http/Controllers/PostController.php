<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showform() {
        return view('admin/create');
    }
    public function validationform(Request $request) {
        echo "<pre>";
            print_r($request->all());
        echo "</pre>";

        $this->validation($request,[
            'name'=>'required|max:50',
            'address'=>'required',
            'email'=>'required',
            'content'=>'required',

        ]);
    }
}
