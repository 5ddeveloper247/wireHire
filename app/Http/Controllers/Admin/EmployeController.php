<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Department;
use App\Models\candidatemodel\Candidate;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\JobPosition;
use App\Models\JobCriteria;
use App\Models\admin\Employee;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;




class EmployeController extends Controller
{
    public function employe(){

        $departs = Department::all();

        $employees = Employee::with('Department')->get();
       
        $users = User::all();
        return view('FSU_Admin_interface.employee_account_managment_interface_1',compact('departs','employees','users'));
    }
    public function add_employee(Request $request){
        
        // validation     ......
        $request->request->add(['email' => $request->email_address]);
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'gender' => 'required',
            'national_id' => 'required',
            'university_id' => 'required',
            'email' => 'required|email|unique:users|unique:candidates',
            'department'  => 'required',
            'college' => 'required',
            'tel_number' => 'required',
            'address' => 'required',
        ]);

      
        // saving data .......

        // $enol = Employee::create($request->all());
        $employe = new Employee;
        
        $employe->name = $request->name;
        $employe->position = $request->position;
        $employe->gender = $request->gender;
        $employe->national_id = $request->national_id;
        $employe->university_id = $request->university_id;
        $employe->email_address = $request->email_address;
        $employe->depart_id = $request->department;
        $employe->college = $request->college;
        $employe->tel_number = $request->tel_number;
        $employe->address = $request->address;
        
          // user data ...
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->position;
        $user->save();
   

        // employee . ..
        $employe->user_id = $user->id;
        $employe->save();
     
        Alert::success('success', 'Inserted successfully');
        return redirect()->back();
    }

    public function view_profile($id){
        
        $employee_view = Employee::find($id);
        $departs = Department::all();
        return view('FSU_Admin_interface.view_employe_profile',compact('employee_view','departs'));

    }

    public function update_employe(Request $request,$id){
    
       
        $update = Employee::where('id',$id)->with('User')->first();
       
        $request->validate([
            // 'name' => 'required',
            'position' => 'required',
            'gender' => 'required',
            'national_id' => 'required',
            'university_id' => 'required',
            'email' => 'required|email',
            'department'  => 'required',
            'college' => 'required',
            'tel_number' => 'required',
            'address' => 'required',
        ]);
       
        $update->update([
            'position' => $request->position,
            'gender' => $request->gender,
            'national_id' => $request->national_id,
            'email_address' => $request->email,
            'depart_id' => $request->department,
            'college' => $request->college,
            'university_id' => $request->university_id,
            'tel_number' => $request->tel_number,
            'address' => $request->address
        ]);

        Alert::success('success', 'Updated Successfuly');
        return redirect()->back();
      
      
    }

    // makking password for new employe  at admin side ......

    public function update_password(Request $request,$id){
        
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::find($id);
     
        $user->password = hash::make($request->get('password'));
        $user->save();

        Alert::success('success', 'Updated successfully');
        return redirect()->back();
    }

    // delete employe profile at admin side ....

    public function delete_employe($id){
    

        $employe = Employee::find($id);
       
        $user = User::find($employe->user_id);
       
        $user->delete();
        $employe->delete();

        return redirect()->back();


    }

}
