<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\candidate\CandidateController;
use App\Http\Controllers\candidate\CandidateProfileController;
use App\Http\Controllers\Admin\EmployeController;
use App\Http\Controllers\Admin\JobPositionController;
use App\Http\Controllers\Admin\FsuAdminController;

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Candidate\JobListingController;

use Illuminate\Support\Facades\Session;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('contact', function () {
    return view('contact_us');
})->name('contact_us');

Route::get('logout', function () {
    Session::flush();
    return redirect()->route('Auth.login');
})->name('logout');

// Baisc sign Up

Route::get('signup', function () {
    return view('Auth.sign_up_interface_basic_information');
})->name('Auth.signup');
Route::get('login', function () {
    return view('Auth.login_page');
})->name('Auth.login');
Route::post('candidate/regsiter', [AuthController::class, 'candidate_reg'])->name('cand_register');
Route::post('candidate/login', [AuthController::class, 'candidatelogin'])->name('cand_login');



// FSU ADMIN Dashboard.... and middleware

Route::middleware(['fsuadmin'])->group(function () {

    Route::get('fsu/dashboard',function () {
            return view('FSU_Admin_interface.fsu_admin_dashboard');
        }
    )->name('fsu.dashboard');

    // Route::get('fsu/admin/profile',function () {
    //     return view('FSU_Admin_Interface.fsu_admin_profile_interface_2');
    //     }
    // )->name('fsu_admin_profile');
    Route::get('fsu/admin/profile',[ProfileController::class,'admin_profile'])->name('fsu_admin_profile');

    // employee account ...
    Route::get('employee/account', [EmployeController::class, 'employe'])->name('fsu_admin_employee_account');
    Route::post('fsu/admin/add_employe', [EmployeController::class, 'add_employee'])->name('fsuadmin.add_employe');
    Route::get('view/employe/profile/{id}', [EmployeController::class, 'view_profile'])->name('fsu_view_employe_view');
    Route::post('update/employe/profile/{id}',[EmployeController::class,'update_employe'])->name('update_employe_profile');
    Route::post('update/employe/password/{id}',[EmployeController::class,'update_password'])->name('update_employe_password');
    Route::get('delete/employe/record/{id}',[EmployeController::class,'delete_employe'])->name('delete.employe.record');



    // status ...
    Route::post('change/status/{id}',[JobPositionController::class,'status'])->name('change.status');

    // job Position and criteria ...

    Route::get('job/position3', [JobPositionController::class, 'jobposition_view'])->name('fsu_admin_job_position3');
    Route::post('fsu/admin/job/position', [JobPositionController::class, 'job_position'])->name('job_position');



    route::get('archieved',function () {
            return view('FSU_Admin_interface.archieved_accounts_interface');
        })->name('fsu_admin_archieved_accounts');

    route::get( 'form/request',function () {
            return view('FSU_Admin_interface.request_form_interface_3');
        })->name('fsu_admin_form_request');

    Route::get('monitor/website',function () {
            return view('FSU_Admin_interface.monitor_website_traffic_interface');
        })->name('fsu_admin_monitor_trafic');

    Route::get('generate/reports',function () {
            return view('FSU_Admin_interface.fsu_admin_generate_reports_interface_1');
        })->name('fsu_admin_generate_reports');

    Route::get('generate/reports2',function () {
            return view('FSU_Admin_interface.fsu_admin_generate_reports_interface_2');
        })->name('fsu_admin_generate_reports2');

    Route::get('specific/job',function () {
            return view('FSU_Admin_interface.fsu_admin_specific_job_interface_1');
        })->name('fsu_admin_specific_job1');

    Route::get('view/specific/job',function () {
            return view('FSU_Admin_interface.fsu_admin_view_specific_job_interface');
        })->name('fsu_admin_view_specfic_job');

    Route::get('condidate/profile/interface2',function () {
            return view('FSU_Admin_interface.fsu_admin_condidate_profile_interface_2');
        })->name('fsu_admin_condidate_profile');

    Route::get('applicant/ranking',function () {
            return view('FSU_Admin_interface.applicant_ranking');
        })->name('fsu_admin_applicant_ranking');

    Route::get('view/applicant/ranking',function () {
            return view('FSU_Admin_interface.fsu_admin_view_applicant_ranking_interface');
        })->name('fsu_admin_view_applicant_ranking');

    Route::get('view/calendar/interface',function () {
            return view('FSU_Admin_interface.fsu_admin_view_calendar_interface_2');
        })->name('fsu_admin_view_calendar_interface');

    Route::get( 'condidate/short-list/interview_1',function () {
        return view('FSU_Admin_interface.fsu_recommend_condidate_short-list_interview_1');
    })->name('fsu_recommend_condidate_short-list_interview_1');
       
        

    Route::get('condidate/short-list/interview_2',function () {
            return view('FSU_Admin_interface.fsu_recommend_condidate_short-list_interview_2');
        })->name('fsu_recommend_condidate_short-list_interview_2');

});



//FSU Member Interfaces and middleware  

Route::middleware(['fsumember'])->group(function () {

    Route::get('fsu/member/interface',function () {
            return view('FSU_Member_Interfaces.fsu_member_interfaces');
        })->name('member.interfaces');



    Route::get('fsu/member/interfaces1',function () {
            return view('FSU_Member_Interfaces.fsu_member_job_position_interface_3');
        })->name('fsu_member_job_interfaces_3');

    Route::get('fsu/member/specific/job',function () {
            return view('FSU_Member_Interfaces.fsu_member_specific_job_interface');
        })->name('fsu_member_specific_job');

    Route::get('fsu/member/profile/interface',function () {
            return view('FSU_Member_Interfaces.fsu_member_candidate_profile_interface_1');
        })->name('fsu_member_profile_interface1');

    Route::get('fsu/member/profile2/interface',function () {
            return view('FSU_Member_Interfaces.fsu_member_profile_interface_2');
        })->name('fsu_member_profile_interface2');

    Route::get('member/applicant/interface',function () {
            return view('FSU_Member_Interfaces.fsu_member_applicant_ranking_interface');
        })->name('fsu_member_applicant_ranking');

    Route::get('member/calendar/interface',function () {
            return view('FSU_Member_Interfaces.fsu_member_calendar_interface');
        })->name('fsu_member_calendar');

    Route::get('member/recieved/request_forms', function () {
            return view('FSU_Member_Interfaces.fsu_member_received_request_forms_interface_2');
        })->name('fsu_member_recieved_request');

    Route::get( 'member/short-list/interview_1',function () {
            return view('FSU_Member_Interfaces.fsu_recommended_member_short-list_interview_1');
        } )->name('fsu_member_interview_1');
   

    Route::get( 'member/short-list/interview_2',function () {
     return view('FSU_Member_Interfaces.fsu_recommended_member_short-list_interview_2');
    })->name('fsu_member_interview_2');
   
});


// condidate interfaces....

Route::middleware(['candidate'])->group(function () {

    Route::get('candidate/interface', function () {
        return view('condidate_interfaces.condidate_dashboard_interface');
    } )->name('condidate_dashboard');
    
    Route::get('application/status/interface', function () {
        return view('condidate_interfaces.application_status_interface');
    })->name('application_status');

    // candidate profile 
    Route::get('condidate/profile/interface', [CandidateProfileController::class, 'candidate_profile'])->name('condidate_profile');
    Route::post('condidate/profile/update', [CandidateProfileController::class, 'update_profile'])->name('update.profile');

     // update password
    Route::post('condidate/profile/update/password', [CandidateProfileController::class, 'update_password'])->name('update.password');
    Route::get('job/listing/interface_1', [JobListingController::class, 'show_job'])->name('job_listing');



    // academic interface

    Route::get('academic/signup', function () {
        return view('Auth.signup_academic_interface');
    }  )->name('Auth.signup_academic');
            
    Route::post('academic/signup/info', [CandidateController::class, 'acadamic_reg'])->name('academic_info');
  
    
});



// Department user Interfaces and middleware    

Route::middleware(['fsudepart'])->group(function () {
    Route::get('department/user/dashboard',function () {
            return view('department_user_interfaces.department_user_dashboard');
        })->name('depart_user_profile');

    Route::get('department/user/profile',function () {
            return view('department_user_interfaces.department_user_profile_2');
        })->name('depart_user_dashoard');

    Route::get('department/user/all/request/form',function () {
            return view('department_user_interfaces.all_request_forms_interface_1');
        })->name('all_request_form');

    Route::get('department/calender',function () {
            return view('department_user_interfaces.department_calendar_interface_2');
        })->name('department_calender');

    Route::get('department/condidate/interview',function () {
            return view('department_user_interfaces.fsu_recommended_candidate_short_list_interview_1');
        })->name('condidate_short_list');


    Route::get('department/condidate/interview2',function () {
            return view('department_user_interfaces.fsu_recommended_candidate_short_list_interview_2');
        })->name('condidate_short_list2');
});
