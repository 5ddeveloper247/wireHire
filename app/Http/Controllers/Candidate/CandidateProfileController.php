<?php

namespace App\Http\Controllers\candidate;

use App\Models\candidatemodel\Academic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\candidatemodel\Candidate;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;

class CandidateProfileController extends Controller
{
    public function candidate_profile()
    {
        // dd(Session::get('candidate_login'));
        $candidate = Candidate::find(Session::get('candidate_login'));
        $academic = Academic::where('candidate_id', Session::get('candidate_login'))->first();
       
        return view('condidate_interfaces.condidates_profile_interface_1', compact('candidate', 'academic'));
    }

    public function update_profile(Request $request)
    {
      

        $request->validate([
            'firstname' => 'required|min:3|max:50',
            'middlename' => 'required|min:3|max:30',
            'lastname' => 'required|min:3|max:25',
            'date' => 'required',
            'gender' => 'required',
            'email' => 'required',
            // 'email' => 'required|email|unique:candidates|unique:users',
            'phoneno' => 'required',
            'passportno' => 'required',
            'nationality' => 'required',
            'location' => 'required',


        ]);

        
        Candidate::where('id', Session::get('candidate_login'))
            ->update($request->except('_token'));
        //  Candidate::update(['id'=>Session::get('candidate_login')],$request->all());
        return redirect()->back();


    }

    // update password . ... 

    public function update_password(Request $request)
    {

        if (strcmp($request->get('old_password'), $request->get('password')) == 0) {
            Alert::error('fail', 'New Password cannot be same as your current password. Please choose a different password.');
        }

        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed',
            // 'confirm_password' => 'required|same:password|min:6',

        ]);

        $user = Candidate::find(Session::get('candidate_login'));
        $user->password = hash::make($request->get('password'));
        Alert::success('success', 'Updated successfully');
        $user->save();
        return redirect()->back();

    }


}