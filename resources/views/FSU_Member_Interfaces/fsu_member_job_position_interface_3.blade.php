@extends('FSU_Member_Interfaces.layout.master')
@push('title','member job position interface 3')
@push('css')
 
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('/') }}/third_party/toastr/css/toastr.min.css" />
@endpush
<style>
  .setdozama
  {
z-index: 9999;
  }
  </style>
@section('main-content')
<div class="page3 my-5 py-5">
	<div class="row m-0">
    	<h4 class="text-white text-center py-3 bgcolor">Job Positions</h4>
        	<div class="col-md-12">
            	<div class="tablebox">
            		<!-- <button class="btn bgcolor text-white my-3 shoot1">Filter <i
                      class="fa-sharp fa-solid fa-filter "></i></button> --> 
                	<button class="btn shoot2 float-end bgcolor text-white my-3 mx-3" > Create New Advertisement </button>
              		<table class="table table-responsive border" id="example">
                  		<thead>
                    		<th>Job ID</th>
                    		<th>Job Title</th>
                    		<th>Position</th>
                    		<th>Department</th>
                    		<th>Author</th>
                    		<th>Release Date</th>
                    		<th>Approve Status</th>
                    		<th>Publication Status</th>
                    		<th>Details</th>
                   
                  		</thead>
                  	<tbody>

                    	@foreach ($positions as $position )
                        
                    
                    	<tr>
                      		<td>{{$position->id}}</td>
                 
                      		<td>{{$position->job_location}}</td>
		                	<td>{{$position->job_position}}</td>
		                   	<td>{{$position->Department->department}}</td>
                      
	                      	<td>
	                        	{{ $position->user->name ?? 'null' }}
	                      	</td>
                      		<td>{{ $position->created_at->format('d/m/Y') }}</td>
                      		<td>
	                     		<div class="dropdown">
	                          		<button id="selected" style="background-color : #1d1c47; color:white;" class="btn btn-sm " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
	                                	@if($position->approve  == 1)
	                                      	{{'Approved'}}
	                                  	@elseif($position->approve  == 2)
	                                      	{{'Decline'}}
	                                  	@else
	                                      	{{'Waiting'}}
	                                	@endif
	                          		</button>
	                          		{{-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
	
	                           			<form action="{{route('approve.status',$position->id)}}" method="post">
	                                		@csrf
	                                    	<input type="hidden" name="flag" value="1">
	                                  		<li><button type="submit" class="dropdown-item" >Approve</button></li>
	                              		</form>
	                                  
	                              		<form action="{{route('approve.status',$position->id)}}" method="post">
	                                		@csrf
	                                  		<input type="hidden" name="flag" value="2">
	                                  		<li><button  type="submit" class="dropdown-item" >Decline</button></li>
	
	                             		</form>
	                           
	                          		</ul> --}}
	                        	</div>
                      
                       
                      		</td>
	                      	<td>
	                        
	                        	<form action="{{route('change.job_status_member',$position->id)}}" method="post">
	                            	@csrf   
	                                        
	                              	<button type="submit"   id="btn" name="changeStatus" {{ $position->approve == 1 ? '' : 'disabled' }}  class="btn {{$position->status == 1 ? 'btn-success' : 'btn-danger' }} ">
	                                  	{{$position->status == 1 ? 'Active' : 'In Active'  }}
	                              	</button>
	             
	                        	</form>
	
	                      	</td>
	                 		<td>
	                			<a href="{{route('specific.jobinterface')}}" class="btn bt-sm" style="background-color : #1d1c47;color : white;">Detail</a>
	        				</td>
            			</tr>

                    	@endforeach
                    
                    
                  	</tbody>
             	</table>
          	</div>
        </div>
  	</div>
</div>

        <!-- models -->

<form id="sendJobPosition_form" action="{{route('job_position_member')}}" method="post">
@csrf

	<div class="pop2Main model setcriteria d-none">
    	<div class="row p-3">
      		<div class="col-md-5 m-auto bg-white popadd">
	        	<div class="page6box py-3 p-2">
	          		<span style="font-size: 22px; font-weight: bold;">Set Criteria</span>
	          		<i class="fa-solid bandeka fa-xmark" onclick="bsdo1();"></i>
	       	 	</div>
	        	<div class="row p-2 mb-5">
	
	 	       		<div class="col-md-6">
	            		<p style="font-size: 15px; font-weight: bold;" >Years of Experience</p>
	          		</div>
	
	          		<div class="col-md-6">
	            		<input class="form-control mb-3" type="number" id="job_06" name="year_of_experience" />
	            		@error('year_of_experience')
	            		<div class="text-danger">{{$message}}</div>
	            		@enderror
	          		</div>
	
	          		<div class="col-md-6">
	            		<p style="font-size: 15px; font-weight: bold;" >University Ranking</p>
	          		</div>
	
					<div class="col-md-6">
						<input class="form-control mb-3" type="number" id="job_07"
							name="university_ranking" /> @error('university_ranking')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
	
					<div class="col-md-6">
			            <p style="font-size: 15px; font-weight: bold;">
			              Numbers of Certificates
			            </p>
			      	</div>
	
					<div class="col-md-6">
						<input type="number" class="form-control mb-3" id="job_08"
							name="number_of_certificate" /> @error('number_of_certificate')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
	
					<div class="col-md-6">
	            		<p style="font-size: 15px; font-weight: bold;">Number of Skills</p>
	          		</div>
	            	<div class="col-md-6">
	            		<input type="number" class="form-control mb-3" id="job_09" name="no_of_skill" />
	             		@error('no_of_skill')
	            		<div class="text-danger">{{$message}}</div>
	            		@enderror
	          		</div>
	
	          		<div class="col-md-6">
	            		<p style="font-size: 15px; font-weight: bold;" type="text" >Field Experience:</p>
	          		</div>
	
	          		<div class="col-md-6">
	            		<input class="form-control mb-3" id="job_10" name="field_experience" />
	            		@error('field_experience')
	            		<div class="text-danger">{{$message}}</div>
	            		@enderror
	            		<a href="javascript:;" class="btn btn-outline-secondary btn-md" onclick="bsdo1();">Previous</a>
	            	
	            		<button type="button"  class="btn btn-outline-secondary btn-md sendPosition" >Send</button>
	          		</div>
	        	</div>
      		</div>
    	</div>
	</div>


    
	<div class="pop1 model1 d-none">
    	<div class="row p-3">
      		<div class="col-md-5 m-auto bg-white popadd">
        		<div class="page6box py-3 p-2">
          			<span style="font-size: 22px; font-weight: bold;" >Job Announcement</span >
          			<i class="fa-solid bandeka fa-xmark" onclick="bsdo2();"></i>
        		</div>
        		<input type="hidden" name="user_id" value="{{session()->get('user_login')}}" hidden>
        		<div class="row p-2 mb-5">
	          		<div class="col-md-6">
	            		<p style="font-size: 15px; font-weight: bold;">Job Title:</p>
	          		</div>

	          		<div class="col-md-6">
	            		<input class="form-control mb-3" type="text" id="job_01"  name="job_title" />
	            		@error('job_title')
	                		<div class="text-danger">{{$message}}</div>
	            		@enderror
	          		</div>

	          		<div class="col-md-6">
	            		<p style="font-size: 15px; font-weight: bold;">Job Location:</p>
	          		</div>

	          		<div class="col-md-6">
	            		<input class="form-control mb-3" type="text" id="job_02" name="job_location" />
	            		@error('job_location')
	            			<div class="text-danger">{{$message}}</div>
	            		@enderror
	          		</div>

	          		<div class="col-md-6">
	            		<p style="font-size: 15px; font-weight: bold;">Job Position:</p>
	          		</div>

	          		<div class="col-md-6">
	            		<input class="form-control mb-3" type="text" id="job_03" name="job_position" />
	            		@error('job_position')
	            			<div class="text-danger">{{$message}}</div>
	            		@enderror
	          		</div>

	          		<div class="col-md-6">
	            		<p style="font-size: 15px; font-weight: bold;" >Department:</p>
	          		</div>

	          		<div class="col-md-6">
	            		<select id="job_04" name="department" class="form-control mb-3">
	              			<option value='' selected>--select--</option>
				          	@foreach ($departs as $depart )
				            	<option value="{{$depart->id}}">{{$depart->department}}</option>
				          	@endforeach
	             
	            		</select>
	            		@error('department')
	            			<div class="text-danger">{{$message}}</div>
	           			@enderror
	          		</div>

	          		<div class="col-md-6">
	            		<p style="font-size: 15px; font-weight: bold;" >Job Description:</p>
	          		</div>

	          		<div class="col-md-6">
	            		<input class="form-control mb-3" type="text" id="job_05" name="job_description" />
	            		@error('job_description')
	            			<div class="text-danger">{{$message}}</div>
	            		@enderror
	            		
	            		<a href="javascript:;" class="btn btn-outline-secondary btn-md" onclick="bsdo2();">Cancel</a>
	            		<a href="javascript:;" class="btn btn-outline-secondary btn-md next">Next</a>
	          		</div>
        		</div>
      		</div>
   		</div>
	</div>
      
</form>

@endsection

@push('script')
    
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/third_party/toastr/js/toastr.min.js"></script>
    
  <script>

  	toastr.options = {
  		timeOut : 0,
  		extendedTimeOut : 100,
  		tapToDismiss : true,
  		debug : false,
  		fadeOut: 10,
  		positionClass : "toast-top-center"
  	};
	
    $(document).ready(function () {
    	$("#example").DataTable({
			order: []
		});
    });
  </script>
  <script>
    $(".shoot1").click(function () {
      $(".model").removeClass("d-none");
    });

    $(".next").click(function () {

    	if($("#job_01").val() == ''){
      		toastr.error('Job Title is required.', '', {timeOut: 3000});return;
       	}
    	if($("#job_02").val() == ''){
      		toastr.error('Job Location is required.', '', {timeOut: 3000});return;
       	}
    	if($("#job_03").val() == ''){
      		toastr.error('Job Position is required.', '', {timeOut: 3000});return;
       	}
    	if($("#job_04").val() == ''){
      		toastr.error('Department is required.', '', {timeOut: 3000});return;
       	}
    	if($("#job_05").val() == ''){
      		toastr.error('Job Description is required.', '', {timeOut: 3000});return;
       	}
    	
    	$(".setcriteria").removeClass("d-none");
  	});

    $(".sendPosition").click(function () {

    	if($("#job_06").val() == ''){
      		toastr.error('Years of Experience is required.', '', {timeOut: 3000});return;
       	}
    	if($("#job_07").val() == ''){
      		toastr.error('University Ranking is required.', '', {timeOut: 3000});return;
       	}
    	if($("#job_08").val() == ''){
      		toastr.error('Number of certificates is required.', '', {timeOut: 3000});return;
       	}
    	if($("#job_09").val() == ''){
      		toastr.error('Number of Skills is required.', '', {timeOut: 3000});return;
       	}
    	if($("#job_10").val() == ''){
      		toastr.error('Field Experience is required.', '', {timeOut: 3000});return;
       	}
       	
    	$("#sendJobPosition_form").submit();
  	});
    
    function bsdo() {
      $(".model").addClass("d-none");
    }


  </script>
  <script>
    $(".shoot2").click(function () {
    	$("#job_01, #job_02, #job_03, #job_04, #job_05, #job_06, #job_07, #job_08, #job_09, #job_10").val('');
      $(".model1").removeClass("d-none");
    });

    function bsdo1() {
        $(".model").addClass("d-none");
      }
    
    function bsdo2() {
      $(".model1").addClass("d-none");
    }


  </script>
  <script>

    function showSubMenu() {
      if ($('.submenu').css('display') != 'block') {
        $('.submenu').show();
      } else {
        $('.submenu').hide();
      }
    }

  </script>
@endpush