<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;

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

    public function editProfile(){
        return view('editProfile');
    }

    public function editPassword(){
        return view('editPassword');
    }
}
