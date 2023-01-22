<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function registerPage(){
        return view('register');
    }

    public function register(Request $request){
        $request->validate([
            'nik' => 'required|min:13|max:13',
            'name' => 'required|string|min:3|max:40|unique:users',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:5|max:20',
            'confirmed' => 'required|same:password',
            'address' => 'required|string|min:5',
            'number' => 'required|min:10|max:13'
        ]);

        $newUser = new User();
        $newUser->NIK = $request->input('nik');
        $newUser->name = $request->input('name');
        $newUser->email = $request->input('email');
        $newUser->password = bcrypt($request->input('password'));
        // 1 = Admin, 2 = Member. For now only members could register.
        $newUser->role_id = 2;
        $newUser->save();


        $newMemberData = new Member();
        // For now there is no KTP Photo. Remove from migration if not used.
        $newMemberData->userId = User::latest()->first()->id;
        $newMemberData->address = $request->input('address');
        $newMemberData->phoneNumber = $request->input('number');

        // Balance currently defaulted at 0. Remove this line if
        // it automatically set value to 0
        $newMemberData->Balance = 0;
        $newMemberData->save();

        return redirect()->route('login');
    }

    public function login(Request $request){
        // assumption cuma pakai email & password
        $cred = $request->validate([
            'email' => 'required|email|string',
            'password' => 'required|min:5|max:20|string'
        ]);

        // remember me (remove if not used)
        // cookie only for 5 min
        if($request->remember){
            Cookie::queue('emailCookie', $request->email, 5);
        }

        if(!Auth::attempt($cred, $request->input('remember'))){
            return redirect()->back()->withErrors('Invalid Credentials');
        }
        return redirect('/');
    }

    public function logout(Request $request){
        Auth::logout();

        // redirect, could return route aswell.
        return redirect('/');
    }
}
