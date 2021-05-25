<?php
   namespace App\Http\Controllers;

   use Illuminate\Http\Request;
   use App\Http\Requests;
   use App\Models\contract; 
   use Illuminate\Support\Facades\Auth;

   class LoginController extends Controller{
    public function showform() {
        return view('login');
    }

    // public function validate($data){
    //     return Validator::make($data,[
    //         'email' => ['required', 'max:50', 'email'],
    //         'password'=>'required',
    //     ]);
    // }
    public function index(Request $request){
        if($request->isMethod('post')){
            $email = $request->input('email');
            $password = $request->input('password');
            if(Auth::attemp(['email'=>$email,'password' => $password])){
                return Redirect::to('/create');
            }else{
                return Redirect::to('/login')->withInput()->withErrors("Invalid Email or password!");
            }
            return back() -> withInput();
        }
        return view('login');
    }
   
}
   
?>