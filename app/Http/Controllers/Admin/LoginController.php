<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show_login_view(){
        return view('admin.auth.login');
    }
    public function login(LoginRequest $request){
        if(auth()->guard('admin')->attempt(['username'=>$request->username,'password'=>$request->password])){
            return redirect()->route('admin.dashboard') ;
        }else{
            return redirect()->route('admin.show_login') ;
        }
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('admin.show_login');
    }


    // function make_new_admin(){
    //     $admin = new App\Models\Admin();
    //     $admin->name = "admin";
    //     $admin->username = "admin";
    //     $admin->password = bcrypt('password');
    //     $admin->email = "admin@gmail.com";
    //     $admin->com_code = 1 ;
    //     $admin->save() ;
    // }

}
