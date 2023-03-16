<?php

namespace App\Http\Controllers\Admin;

use App\Models\JobPosition;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function admin_profile(){
        $profile = JobPosition::with('user')
                  ->where('user_id',Session::get('user_login'))
                  ->first();

        return view('FSU_Admin_Interface.fsu_admin_profile_interface_2',compact('profile'));
    }
}
