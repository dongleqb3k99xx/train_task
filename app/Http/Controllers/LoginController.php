<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function getLogin()
    {
    	return view('product.home');
    }
    public function postLogin(Request $request){

    	$login = [
    	'email' => 'required|email',
      'password' => 'required|min:6',

      ];
      $messages = [
      'email.required' =>'You must enter email', 
      'email.email' =>'Email do not properly formatted', 
      'password.required' =>'You must enter password', 
      'password.password ' =>'password At least 6 characters ', 
      ];
      $validator=Validator::make($request->all(),$login,$messages);
      if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }else{
        $email = $request->email; 
        $password = $request->password; 
        

        // dd(Auth::attempt(['email'=>$email, 'password'=>$password], true, true) ); 
        // die;
        if(Auth::attempt(['email'=>$email, 'password'=>$password], true) ){
            // if login success
           return redirect()->intended('home');
             // dd ('dang nhap thanh cong');

        }else{
            $errors = new MessageBag(['errorlogin'=>'account or password incorrect']);  
            return redirect()->back()->withInput()->withErrors($errors);
            // dd('that bai');
        }
    }
        // return ('controllerCall');
}

}
