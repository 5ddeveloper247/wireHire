<?php

namespace App\Http\Controllers\Candidate;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\candidatemodel\Academic;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;

class CandidateController extends Controller
{
    public function acadamic_reg(Request $request)
    {
   
    
        $required = '';
        if(Session()->has('academic')){
            $required = 'required';
        }
  
        $request->validate([
            'academic_degre' => 'required',
            'major' => 'required',
            'year_of_graduate' => 'required',
            'uni_name' => 'required',
            'uni_rank' => 'required',
            'uni_location' => 'required',
            'cumulative_gpa' => 'required',
            'gpa_out_of' => 'required',

            'resume' => $required,
            'transcript' => $required,
            'certificate' => $required,
            'teaching_prep' => $required,
        ]);
   
        try{
            DB::beginTransaction();
        
        $academic = Academic::updateOrCreate(
            ['candidate_id' => Session::get('candidate_login')],
            $request->except('_tokens','resume','transcript','certificate','teaching_prep')
        );
      
        if($request->hasFile('resume')){
            $resume = $request->file('resume');
            $resumeName = time() .'.'.$resume->getClientOriginalExtension();
            $resume->move('candidate/resume',$resumeName);
            $academic->resume = $resumeName;
        }
  
        if($request->hasFile('transcript')){
            $transcript = $request->file('transcript');
            $transcriptName = time() .'.'.$transcript->getClientOriginalExtension();
            $transcript->move('candidate/transcript', $transcriptName);
            $academic->transcript = $transcriptName;
        }
        
        if($request->hasFile('certificate')){
            $certificate = $request->file('certificate');
            $certificateName = time() .'.'.$certificate->getClientOriginalExtension();
            $certificate->move('candidate/certificate',$certificateName);
            $academic->certificate = $certificateName;
        }
      
        if($request->hasFile('teaching_prep')){
            $teaching = $request->file('teaching_prep');
            $teachingName = time() .'.'.$teaching->getClientOriginalExtension();
            $teaching->move('candidate/sertificate',$teachingName);
            $academic->teaching_prep = $teachingName;
        }
     
        $academic->save();

        
            DB::commit();
           
        }catch(\Exception $e){
           
            DB::rollback();
            dd('die');
        }
        if(Session()->has('academic')){
            
            return redirect()->route('condidate_profile');
            
        }
      
            session()->forget('condidate_login');
            Alert::success('success', 'Registered Sucessfully');
            return redirect()->route('Auth.login');

     }



}