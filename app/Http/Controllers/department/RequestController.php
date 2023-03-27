<?php

namespace App\Http\Controllers\department;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\EmployeeCalender;
use App\Models\admin\Employee;
use App\Models\EmployeeRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class RequestController extends Controller
{
    public function showRequest(){
        $empRequests = EmployeeRequest::all();
        return view('department_user_interfaces.all_request_forms_interface_1',compact('empRequests'));
    }
    
    public function department_calender(){
    
    	$data['calender'] = $this->loadAllDepartmentCalendar(session()->get('user_login'));
    	 
    	return view('department_user_interfaces.department_calendar_interface_2')->with($data);
    }
    

    // edit request ...

    public function editRequest($id){
        $eRequest = EmployeeRequest::find($id);
        if($eRequest){
           return response()->json([
                'status' => 200,
                'eRequest' => $eRequest
           ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'request Not found',
            ]);
        }
    }


    public function add_request(Request $request){
       
        // validate Request .....

        $validator = Validator::make($request->all(),[
            'jobtitle' => 'required',
            'jobposition' => 'required',
            'description' => 'required',
            'major' => 'required',
            'no_employe' => 'required',
            'experience' => 'required'
        ]);

    
        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);

        }else{
            // get session id for employe_id 
                $id = Session::get('user_login');
                
                // save data in employe request table ...
                $emp_request = new EmployeeRequest;

                $emp_request->job_title = $request->jobtitle;
                $emp_request->position = $request->jobposition;
                $emp_request->request_date = Carbon::now();
            
                $emp_request->min_experience = $request->experience;
                $emp_request->no_of_employe = $request->no_employe;
                $emp_request->major = $request->major;
                $emp_request->description = $request->description;
                $emp_request->employee_id = $id;

                $emp_request->save();
                return response()->json([
                    'status' => 200,
                    'done' => true,
                    'message' => 'Inserted successfully'
                    
                ]);
                // Alert::success('success','Inserted Successfully');
                // return redirect()->back();
        }

        
    }

    // update requets ...

    public function updateRequest(Request  $request, $id){

     
        $uRequest = EmployeeRequest::find($id);
        $validator = Validator::make($request->all(),[
            'jobtitle' => 'required',
            'jobposition' => 'required',
            'description' => 'required',
            'major' => 'required',
            'no_employe' => 'required',
            
            'experience' => 'required'

        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 201,
                'errors' => $validator->messages(),
            ]);
        }else{
            $uRequest->job_title = $request->jobtitle;
            $uRequest->position = $request->jobposition;
            $uRequest->request_date = Carbon::now();
                        
            $uRequest->min_experience = $request->experience;
            $uRequest->no_of_employe = $request->no_employe;
            $uRequest->major = $request->major;
            $uRequest->description = $request->description;
            $uRequest->employee_id = $id;
    
            $uRequest->update();
            return response()->json([
                'status' => 200,
                'success' => 'Updated successfuly',
            ]);
        }

    

     

    }

    // delete employe request ....

    public function delete_request_data($id){
        $employe = EmployeeRequest::find($id);
        $employe->delete();
        Alert::success('success','Deleted successfully');
        return redirect()->back();
       
    }

    
    
    public function addCalendarDate(Request $request){
    	$EmployeeCalender = new EmployeeCalender();
    	 
    	 
    	$userId = $request->userId;
    	$startDate = $request->startDate;
    	$startTime = $request->startTime;
    	 
    
    	 
    	$result = DB::table ( 'calenders' )->insertGetId (
    			array ( 'date' => $startDate,
    					'time' => date("H:i:s", strtotime($startTime)),
    					'employee_id' => $userId,
    					'status' => 'available',
    					'datetime' => date ( 'Y-m-d H:i:s' ),
    					'created_at' => date ( 'Y-m-d H:i:s' ),
    					'updated_at' => date ( 'Y-m-d H:i:s' )
    			)
    			);
    	 
    	$arrRes['done'] = true;
    	$arrRes['msg'] = 'Date Added Successfully';
    	 
    	echo json_encode ( $arrRes );
    }
    
    function loadAllDepartmentCalendar($employeeId) {
    	$currentDate = date('Y-m-d');
    	 
    	$result = DB::table('calenders as a')->select('a.*')
    	->where('a.employee_id', $employeeId)
    	->where("a.date", ">=", "$currentDate")
    	->get();
    	 
    	foreach ($result as $row) {
    		$tempStart = $row->date.''.$row->time;
    		$data [] = array (
    				'id' => $row->id,
    				'title' => 'Interview With Candidate',
    				'start' => $startDate = date("Y-m-d H:i:s", strtotime($tempStart)),
    				'employee_id' => $row->employee_id,
    				'created_at' => $row->created_at,
    				'updated_at' => $row->updated_at
    		);
    	}
    
    	 
    	return isset($data) ? $data : array();
    }
 

 
}
