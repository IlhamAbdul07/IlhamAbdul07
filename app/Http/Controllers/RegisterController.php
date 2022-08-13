<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;
 

class RegisterController extends Controller
{
    public function index(){
        return view('Register.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
    // Validasi data
    $validatedData = $request->validate([
            'name'=>'required|min:5|regex:/^[a-zA-Z\s]*$/',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:8|unique:users',
            'checkPassword'=>'required|same:password'
        ]);

        // Enkripsi Password
        //$validatedData['password']= bcrypt($validatedData['password']);
        $validatedData['password']= Hash::make($validatedData['password']);

        // Upload data ke Database
        User::create($validatedData);

        // Meneruskan Ke Laman Login
        $request->session()->flash('success', 'Berhasil Registrasi Silahkan Login');
        return redirect('/login');
        // ->with('success', 'Berhasil Registrasi Silahkan Login');
    }
}
