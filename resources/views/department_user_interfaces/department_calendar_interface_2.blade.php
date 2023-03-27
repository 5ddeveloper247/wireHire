<?php 
$calendar = json_encode ( isset($calender) ? $calender : array() );

?>

@extends('department_user_interfaces.layout.master')
@push('title', 'Department Calender')
@push('css')

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet" />

<link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}" />

<link href="{{asset('fullcalendar/packages/core/main.css')}}" rel="stylesheet" />
<link href="{{asset('fullcalendar/packages/daygrid/main.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{ url('/') }}/third_party/toastr/css/toastr.min.css" />
<style>
    .fc-button-primary {
      color: #fff;
      background-color: #1d1c47;
      border-color: #1d1c47;
    }
  
    .fc-event {
      background-color: #1d1c47;
      border-color: #1d1c47;
    }
  </style>
@endpush

@section('main-content')

<div class="page3 my-5 py-5">
    <div class="row m-0">
      <h4 class="text-white shoot1 text-center py-3 bgcolor">
        Calendar
      </h4>
    </div>
    <div class="row">
      <div class="col-md-10 m-auto">
        <div class="tablebox">
          <div class="content">
            <div id="calendar"></div>
          </div>



    	

          <!-- <script src="js/main.js"></script> -->
        </div>
      </div>
    </div>
	<div class="pop1 model1 d-none">
		<div class="row p-3">
			<div class="col-md-5 m-auto bg-white popadd">
				<div class="page6box py-3 p-2">
					<span style="font-size: 22px;">Add Date</span> 
					<i class="fa-solid bandeka fa-xmark" onclick="bsdo1();"></i>
				</div>

				<div class="row p-0 ">
					<div class="col-md-9 m-auto">
					<input type="hidden" id="csrf" value="{{ csrf_token() }}">
					</div>
					<div class="col-md-12">
						<div class="row p-2">
							<div class="col-md-6">
								<h5>Job Title</h5>
							</div>
							<div class="col-md-6">
								<h5>Job Position</h5>
							</div>
							<div class="col-md-6">
								<div class="box border">
									<input type="date" class="form-control" id="cal_date">

								</div>
							</div>
							<div class="col-md-6">
								<div class="box border">
									<input type="time" class="form-control" id="cal_time">

								</div>
							</div>
							
							<div class="col-md-12 mt-3">
								<button class="btn btn-outline-secondary btn-md float-end mx-1" onclick="bsdo1();">Cancel</button>
								<button type="button" class="btn btn-outline-secondary btn-md float-end" onclick="addDateRecord();">Add</button>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
   {{-- {{ dd(asset('/'))}} --}}
@endsection

@push('script')

<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{ url('/') }}/third_party/toastr/js/toastr.min.js"></script>

<script src="{{asset('third_party/moment/moment.min.js')}}"></script>
<script src="{{asset('fullcalendar/packages/core/main.js')}}"></script>
<script src="{{asset('fullcalendar/packages/interaction/main.js')}}"></script>
<script src="{{asset('fullcalendar/packages/daygrid/main.js')}}"></script>
<script>

toastr.options = {
		timeOut : 0,
		extendedTimeOut : 100,
		tapToDismiss : true,
		debug : false,
		fadeOut: 10,
		positionClass : "toast-top-center"
	};
	
    $(".shoot1").click(function () {
      $(".pop1").removeClass("d-none");
    });

    function bsdo() {
      $(".pop1").addClass("d-none");
    }

    function showSubMenu() {
      if ($('.submenu').css('display') != 'block') {
        $('.submenu').show();
      } else {
        $('.submenu').hide();
      }
    }

    $("#rowAdder").click(function () {
      newRowAdd =
        '<div class="row mt-2">\
                  <div class="col-md-5">\
                    <input type="date" class="form-control border-0">\
                    <hr class="m-0 bgcolor " style="opacity: 1; height: 2px;">\
                  </div>\
                  <div class="col-md-5">\
                    <input type="time" class="form-control border-0">\
                    <hr class="m-0 bgcolor " style="opacity: 1; height: 2px;">\
                  </div>\
                  <div class="col-md-2">\
                    <i class="fa-solid fa-square-minus font-weight-bolder" onclick="DeleteRow(this)"></i>\
                  </div>\
                </div>';

      $('#newinput').append(newRowAdd);
    });

    function DeleteRow(el) {
      $(el).closest(".row").remove();
    }
    function bsdo1() {
        $(".model1").addClass("d-none");
      }


function addDateRecord(){

		var userId = "{{session()->get('user_login')}}";
		var today = new Date();
		var todayDate = moment(today).format('Y-MM-DD');
		var todayTime = moment(today).format('HH:mm:ss');
		
		
		var startDate = $("#cal_date").val() != '' ? moment($("#cal_date").val()).format('Y-MM-DD') : '';
		var startTime = $("#cal_time").val();// != '' ? moment($("#cal_time").val()).format('HH:mm') : '';
		
		
		if(startDate == ''){
			toastr.error('Date is required.', '', {timeOut: 3000})
			return;
		}
		if(startTime == ''){
			toastr.error('Time is required.', '', {timeOut: 3000})
			return;
		}

		if(startDate < todayDate){
			toastr.error('Date must be greater then current date.', '', {timeOut: 3000})
			return;
		}

		if(startDate == todayDate){
			if(startTime < todayTime){
				toastr.error('Time must be greater then current time.', '', {timeOut: 3000})
				return;
			}
		}
		var token = $("#csrf").val();

        $.ajax({
            url:"user/addCalendarDate",
            type:"POST",
            data:{userId:userId, startDate:startDate, startTime:startTime, _token:token},
            dataType : 'JSON',
            success:function(data) {

                if(data.done == true || data.done == 'true'){

                	toastr.success(data.msg, '', {timeOut: 3000})
                	
                	location.reload();
              	
              	}else{
              		toastr.error(data.msg, '', {timeOut: 3000})
              	}
            }
        })
		
	}
	
  </script>
  
  <script>

/*[
		          	{
		    			title: "All Day Event",
		    		start: "2023-03-01",
		       },
		       {
		         	title: "Long Event",
		         	start: "2023-03-07",
		         	end: "2023-03-10",
		       },
		       {
		         	groupId: 999,
		         	title: "Repeating Event",
		         	start: "2023-03-09T16:00:00",
		       },
		       {
		         groupId: 999,
		         title: "Repeating Event",
		         start: "2023-03-16T16:00:00",
		       },
		       {
		         title: "Conference",
		         start: "2023-03-11",
		         end: "2023-03-13",
		       },
		       {
		         title: "Meeting",
		         start: "2023-03-12T10:30:00",
		         end: "2023-03-12T12:30:00",
		       },
		       {
		         title: "Lunch",
		         start: "2023-03-12T12:00:00",
		       },
		       {
		         title: "Meeting",
		         start: "2023-03-12T14:30:00",
		       },
		       {
		         title: "Happy Hour",
		         start: "2023-03-12T17:30:00",
		       },
		       {
		         title: "Dinner",
		         start: "2023-03-12T20:00:00",
		       },
		       {
		         title: "Birthday Party",
		         start: "2023-03-13T07:00:00",
		       },
		       {
		         title: "Click for Google",
		         url: "http://google.com/",
		         start: "2023-03-28",
		    	},
		   	]*/
  
  var userId = "{{session()->get('user_login')}}";
  document.addEventListener("DOMContentLoaded", function () {

		var calendarEl = document.getElementById("calendar");

		var calendar = new FullCalendar.Calendar(calendarEl, {
	 		plugins: ["interaction", "dayGrid"],
		    defaultDate: "{{date('Y-m-d')}}",
		   	selectable: true,
		    editable: true,
		    eventLimit: true, // allow "more" link when too many events
		    events: <?= $calendar ?>,
		    dayClick: function(event, jsEvent, view) {
		
		   		alert('Date: ' + date.format());
					
		    },
		 	select:function(event, jsEvent, view)  {
	
		 		var today = new Date();
// 		 		console.log(moment(today).format('HH:mm:ss'));
		 		var todayDate = moment(today).format('Y-MM-DD');
		 		var startDate = moment(event.start).format('Y-MM-DD');
		 		
				if(startDate < todayDate){
					toastr.error('Unable to add back dated record.', '', {timeOut: 3000})
					return;
				}
		 		
	        	$('#cal_date').val(startDate);
	    		$(".model1").removeClass("d-none");
			 
			},
		    eventClick:  function(event1, jsEvent, view) {
		
		    	console.log(event1.event.title);
		      	console.log(event1.event.start);
		    },
	      
	    });

		calendar.render();
	});
	</script> 

@endpush