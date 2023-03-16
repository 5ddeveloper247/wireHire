@extends('FSU_Member_Interfaces.layout.master')
@push('title','member calender Interface')
@push('css')
       <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}" />

    <link href="{{asset('fullcalendar/packages/core/main.css')}}" rel="stylesheet" />
    <link href="{{asset('fullcalendar/packages/daygrid/main.css')}}" rel="stylesheet" />
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
            <h4 class="text-white text-center py-3 bgcolor">
              Department Calendar
            </h4>
          </div>
          <div class="row">
            <div class="col-md-10 m-auto">
              <div class="tablebox">
                <div class="content">
                  <div id="calendar"></div>
                </div>

                

                <script>
                  document.addEventListener("DOMContentLoaded", function () {
                    var calendarEl = document.getElementById("calendar");

                    var calendar = new FullCalendar.Calendar(calendarEl, {
                      plugins: ["interaction", "dayGrid"],
                      defaultDate: "2020-02-12",
                      editable: true,
                      eventLimit: true, // allow "more" link when too many events
                      events: [
                        {
                          title: "All Day Event",
                          start: "2020-02-01",
                        },
                        {
                          title: "Long Event",
                          start: "2020-02-07",
                          end: "2020-02-10",
                        },
                        {
                          groupId: 999,
                          title: "Repeating Event",
                          start: "2020-02-09T16:00:00",
                        },
                        {
                          groupId: 999,
                          title: "Repeating Event",
                          start: "2020-02-16T16:00:00",
                        },
                        {
                          title: "Conference",
                          start: "2020-02-11",
                          end: "2020-02-13",
                        },
                        {
                          title: "Meeting",
                          start: "2020-02-12T10:30:00",
                          end: "2020-02-12T12:30:00",
                        },
                        {
                          title: "Lunch",
                          start: "2020-02-12T12:00:00",
                        },
                        {
                          title: "Meeting",
                          start: "2020-02-12T14:30:00",
                        },
                        {
                          title: "Happy Hour",
                          start: "2020-02-12T17:30:00",
                        },
                        {
                          title: "Dinner",
                          start: "2020-02-12T20:00:00",
                        },
                        {
                          title: "Birthday Party",
                          start: "2020-02-13T07:00:00",
                        },
                        {
                          title: "Click for Google",
                          url: "http://google.com/",
                          start: "2020-02-28",
                        },
                      ],
                    });

                    calendar.render();
                  });
                </script>

                <script src="js/main.js"></script>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('script')

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('fullcalendar/packages/core/main.js')}}"></script>
<script src="{{asset('fullcalendar/packages/interaction/main.js')}}"></script>
<script src="{{asset('fullcalendar/packages/daygrid/main.js')}}"></script>
     <script>
   
      function showSubMenu(){
          if($('.submenu').css('display') != 'block'){
            $('.submenu').show();
          }else{
            $('.submenu').hide();
          }
      }
   
  </script>
@endpush