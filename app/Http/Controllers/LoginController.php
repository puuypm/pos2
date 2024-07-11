<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
// use Alert; atau seperti di line 9
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->to('home');
        }
        Alert::error('Upss', 'Mohon Periksa Kembali Email dan Password Anda');
        return back();
    }
    public function register()
    {
        return view('register');
    }
    public function actionRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        User::create($request->all());
        Alert::success('Sukses', 'Daftar Berhasil');
        return redirect()->to('register')->with('success', 'Register Berhasil');
    }
}
