<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\admin\Employee;
use Illuminate\Http\Request;
use App\Models\candidatemodel\Candidate;
use Illuminate\Support\Facades\hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\candidatemodel\Academic;
// use Illuminate\Support\Facades\Rule;
use App\Models\User;
class AuthController extends Controller
{

    // candidate registration ......

    public function candidate_reg(Request $request)
    {

        $request->validate([
            'fname' => 'required|min:3|max:50',
            'mname' => 'required|min:3|max:30',
            'lname' => 'required|min:3|max:25',
            'date' => 'required',
            'gender' => 'required',
            'email' => 'required|email|unique:candidates|unique:users',
            'phoneno' => 'required',
            'passportno' => 'required',
            'nationality' => 'required',
            'location' => 'required',
            'password' => 'required|min:7',
            'confirm_password' => 'required|same:password|min:7'

        ], [
                'email.unique' => 'User Email must be Unique',

            ]);
        $candidate = Candidate::create([
            'firstname' => $request->fname,
            'middlename' => $request->mname,
            'lastname' => $request->lname,
            'date' => $request->date,
            'gender' => $request->gender,
            'email' => $request->email,
            'phoneno' => $request->phoneno,
            'passportno' => $request->passportno,
            'nationality' => $request->nationality,
            'location' => $request->location,
            'password' => hash::make($request->password),

        ]);

        Session()->put('candidate_login', $candidate->id);
        Alert::success('Success', 'You\'ve Successfully Registered');
        return redirect()->route('Auth.signup_academic');

    }

    // canididate login part 

    public function candidatelogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // candidate login..... 

        $candidate = Candidate::where('email', $request->email)->first();
        if ($candidate && hash::check($request->password, $candidate->password)) {
            Session()->put('candidate_login', $candidate->id);
            Session()->put('academic',1);
            Alert::success('Success', 'You\'ve loged in successfully');
            return redirect()->route('condidate_dashboard');
        }

        // user login ......

        $user = User::where('email', $request->email)->first();          
            if ($user && hash::check($request->password, $user->password)) {
                $en = Employee::where('user_id',$user->id)->where('employee_status',1)->count();
                if($en){
                    Alert::error('Fail','Your Account Have Been Archieved');
                    return redirect()->back();
                
                }
                Session()->put('user_login', $user->id);
                Session()->put('user_role', $user->role);
                // Session()->put('password',$user->password);
                
                Alert::success('Success', 'You\'ve loged in successfully');
                return redirect()->route($this->redirectUrl($user->role));
            }
            Alert::error('fail', 'Something Wrong !');
            return redirect("login")->with('fail', 'Check Your Loged In Information');
    }

    public function redirectUrl($role)
    {
        if ($role == 1)
            return 'fsu.dashboard';
        if ($role == 2)
            return 'member.interfaces';
        if ($role == 3 || $role == 4 )
            return 'depart_user_dashoard';
    }
}

?>