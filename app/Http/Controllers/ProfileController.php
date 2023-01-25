<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends BaseController
{
    public function profile(){
        if(Auth::user()->role_id == 1) {
            $data = Admin::where('userId', Auth::user()->id)->get()->first();

            return view('viewProfileAdmin', compact('data'));
        } else if(Auth::user()->role_id == 2) {
            $data = Member::where('userId', Auth::user()->id)->get()->first();

            return view('viewProfileMember', compact('data'));
        }
    }

    public function editProfilePage(){
        return view('editProfile');
    }

    public function editPasswordPage(){
        return view('editPassword');
    }

    public function editProfile(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'address' => 'required|string|min:5',
            'number' => 'required|min:10|max:14'
        ]);

        User::whereId(Auth::user()->id)->update([
            'name' => $request['name'],
            'email' => $request['email']
        ]);

        Member::where('user_id', Auth::user()->id)->update([
            'address' => $request['address'],
            'phoneNumber' => $request['number']
        ]);

        return redirect()->route('profile');
    }

    public function editPassword(Request $request){
        $request->validate([
            'oldPassword' => 'string|required|min:5|max:20',
            'newPassword' => 'string|required|min:5|max:20',
            'confirmNewPassword' => 'string|required|same:newPassword',
        ]);

        if(Hash::check($request['oldPassword'], Auth::user()->password)){
            User::whereId(Auth::user()->id)->update([
                'password' => bcrypt($request['newPassword'])
            ]);
            return redirect()->route('profile');
        }
        else{
            return redirect()->back()->withErrors('Invalid Old Password');
        }
    }
}
