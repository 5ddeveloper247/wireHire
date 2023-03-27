<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Models\JobPosition;
use App\Models\admin\Employee;
use App\Models\admin\Department;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


class ProfileController extends Controller
{
    public function adminProfile(){
     
        $user = Session::get('user_login');
       
      
        $profile = Employee::where('user_id',$user)->with('user','department')->first();
       
        $departs =Department::all(); 

        return view('FSU_Admin_Interface.fsu_admin_profile_interface_2',compact('profile','departs'));
    }


    public function updateProfile(AdminRequest $request,$id){

        

        $employe = Employee::findOrFail($id);
   
        
        if($employe){
            $employe->update($request->all());
            $request->request->add(['email'=>$request->email_address]);
            User::find($employe->user_id)->update($request->all());
        }
        Alert::success('success','updated successfully');
        return redirect()->back();
       
       

    }

    // update password . ... 

    public function adminPassword(Request $request)
    {
      

        if (strcmp($request->get('oldpassword'), $request->get('password')) == 0) {
            Alert::error('fail', 'New Password cannot be same as your current password. Please choose a different password.');
        }

        $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|min:6|confirmed',
            // 'confirm_password' => 'required|same:password|min:6',

        ]);
       
        $user = User::find(Session::get('user_login'));
        $user->password = hash::make($request->get('password'));
        Alert::success('success', 'Updated successfully');
        $user->save();
        return redirect()->back();

    }
}
