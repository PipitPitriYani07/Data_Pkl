<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginpage(Request $request){
        return view('login');
    }

    public function registerpage(Request $request){
        return view('register');
    }

    public function registered(Request $request){
        // dd($request->all());
        $request->validate([
         'name'            => 'required',
         'email'           => 'required',
         'password'        => 'required'
        ]);
        // echo "lolos";

        $dataStore = [
        'name'          => $request->name,
        'email'         => $request->email,
        'password'      => Hash::make($request->password)
        ];
        User::create($dataStore);
        echo "Data berhasil di simpan";
    }

    public function ceklogin(Request $request){
        if(Auth::attempt(['email'=> $request->email, 'password' => $request->password])){
           return redirect('/indexsekolah');
        } else {
        echo "Login Tidak Berhasil";
        }
    }
}
