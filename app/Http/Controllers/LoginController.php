<?php
   namespace App\Http\Controllers;

   use Illuminate\Http\Request;
   use App\Http\Requests;
   use App\Models\contract; 

   class LoginController extends Controller{
    public function showform() {
        return view('login');
    }
   }
?>