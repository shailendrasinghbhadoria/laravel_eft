<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Input;
use App\Models\Admin_user;
use App\Http\Controllers\Crypt;

class WelcomeController extends Controller
{
    public function index()
    {
      return view('login');
    }

    public function authenticate(Request $request)
    { 
         
            $user= Admin_user::where('email', $request->input('email'))->get();
           if(($user[0]->password)==$request->input('password'))
           {
            $request->session()->put('user', $user[0]->name);
            $request->session()->put('id', $user[0]->id);
            return redirect()->route('welcomeView');
           }
    
           else
           {        
              return redirect()->route('Login.signin')
                                ->with('error', 'Username & password incorrect');
                
            }
    
        
    }

    public function welcome()
    { 
        return view('welcome');

    }

}
