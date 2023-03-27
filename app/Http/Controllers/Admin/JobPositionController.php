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

class JobPositionController extends Controller
{
      // fsu admin job position and criteria .....

   	public function jobposition_view(){
        $positions = JobPosition::with('user','Department')->orderBy('id', 'desc')->get();
        $departs = Department::all();
        return view('FSU_Admin_Interface.fsu_admin_job_position_interface_3',compact('positions','departs'));
    }
    public function jobpositionMember_view(Request $request){
    	$userId = session()->get('user_login');
    	$positions = JobPosition::with('user','Department')->where('user_id', $userId)->orderBy('id', 'desc')->get();

    	$departs = Department::all();
    	return view('FSU_Member_Interfaces.fsu_member_job_position_interface_3',compact('positions','departs'));
    }
     
    public function job_position(Request $request){
       
        $request->validate([

             // job position ...

             'job_title' => 'required',
             'job_location' => 'required',
             'job_position' => 'required',
             'department' => 'required',
             'job_description' => 'required',
             

            //  criteria .... 
            'year_of_experience' => 'required',
            'university_ranking' => 'required',
            'number_of_certificate'=> 'required',
            'no_of_skill' => 'required',
            'field_experience' => 'required',
        ]);
      
        // job criteria ....
      
        // save data ....

       $jobposition = JobPosition::create(
            $request->only('job_title','job_location','job_position','job_description','user_id')
        );
        $jobposition->user_id = $request->user_id;
        $jobposition->depart_id = $request->department;
        $jobposition->save();
      
        $jobcriteria = JobCriteria::create(
            $request->only('year_of_experience','university_ranking','number_of_certificate', 'no_of_skill','field_experience')
        );
        $jobcriteria->jobposition_id = $jobposition->id;
        $jobcriteria->save();
        Alert::success('success','registered successfully');
        return redirect()->back();

    }

    public function status($id){
        
        $JobPosition = JobPosition::find($id);
       
        if ( $JobPosition->status == 1 ) {
            $JobPosition->status = 0;
        }else{
            $JobPosition->status =1;
        }
        $JobPosition->save();

        
        Alert::success('success','status updated successfully');
        return redirect()->back();
    }

    public function approve($id){
        $jobposition = JobPosition::find($id);
        
        $flag = isset($_REQUEST['flag']) ? $_REQUEST['flag'] : '';
        
        if($flag == '1'){
        	$jobposition->approve = 1;	// approve
        }else if($flag == '2'){
        	$jobposition->approve = 2; 	// decline
        }else{
        	$jobposition->approve = 0;	// waiting
        }
//         if($jobposition->approve == 0){
//             $jobposition->approve = 1; 
//         }
//         else if($jobposition->approve == 1){
//             $jobposition->approve = 2;
//         }else{
//             $jobposition->approve = 1;
//         }

        $jobposition->save();
        Alert::success('success','status updated successfully');
        return redirect()->back();
    }

}
