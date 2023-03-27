<?php

namespace App\Http\Controllers\fsumember;

use App\Http\Controllers\Controller;
use App\Models\admin\Employee;
use App\Models\admin\Department;
use App\Models\User;
use App\Http\Requests\MemberRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Http\Request;

class MemberProfileController extends Controller
{
    public function memberProfile(){
        $user = Session::get('user_login');
        $emProfile = Employee::where('user_id',$user)->with('user','department')->first();
       $departs = Employee::all();
        return view('FSU_Member_Interfaces.fsu_member_profile_interface_2',compact('emProfile','departs'));
    }


    public function updateMemberProfile(MemberRequest $request , $id){
        $member = Employee::findOrFail($id);
     
        if($member){
            $member->update($request->all());
            $request->request->add(['email' => $request->email_address]);
            User::find($member->user_id)->update($request->all());
        }
        Alert::success('success','Updated successfully');
        return redirect()->back();
    }

    

    public function updatePassword(Request $request){



        $validator = Validator::make($request->all(),[
            'oldpassword' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        if($request->get('oldpassword') == $request->get('password')) {
            
            Alert::error('fail', 'New Password cannot be same as your current password. Please choose a different password.');
            return redirect()->back();
        }

        if($validator->fails()){
            return redirect('fsu/member/profile2/interface')
                ->withErrors($validator)
                ->withInput();
        };
        $user = User::find(Session::get('user_login'));
        $user->password = Hash::make($request->get('password'));
        Alert::success('success', 'Updated successfully');
        $user->save();
        return redirect()->back();

    }
}
