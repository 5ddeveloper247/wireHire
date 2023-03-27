@extends('department_user_interfaces.layout.master')
@push('title', 'department profile')
@push('css')
@endpush

@section('main-content')
<div class="page3 my-5 ">
    <div class="row m-0">
      <div class="col-md-3  bg-secondary" style="height:600px;">
        <div class="profile1 mt-5 pt-5 text-center">
          <div class="profile ">
            <i class="fa-solid fa-user"></i>
          </div>
          <div>
            <div class="head ">
              <h4 class=" mt-3 text-white">Dr Abdullah Qahtani</h4>
              <a class="text-white text-decoration-none" href="{{route('depart_user_profile')}}">
                <div class="h4 text-center txtcolor bg-white py-3 mt-4">Profile</div>
              </a>
              <a class="text-white text-decoration-none" href="{{route('fsu_admin_condidate_profile')}}">
                <div class="h4 text-center txtcolor bg-white py-3 mt-4">Academic Information</div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="pagebox1 p-4 m-4 bgform">
          <div class="row ">
            <div class="col-md-6 p-1 dainputda">
              Name
              <input class="form-control" placeholder="Candidate Name">

              Email Address
              <input class="form-control" placeholder="email111@gmail.com">

              Phone Number
              <input class="form-control" placeholder="123456789">


              Nationality
              <input class="form-control" placeholder="Suadi Aeabia">

            </div>
            <div class="col-md-6 p-1 dainputda">
              Gender
              <input class="form-control" placeholder="Female">
              Birth Date
              <input class="form-control" placeholder="1/01/2010">
              Passport Number
              <input class="form-control" placeholder="123456789">
              Location
              <input class="form-control" placeholder="Suadi Aeabia">
              <button class="btn bgcolor btn-lg text-white mt-3 float-end shoot1">Update Password</button>

            </div>


          </div>
        </div>

      </div>
    </div>
  </div>


@endsection
<div class="pop1 d-none">
    <div class="row p-3">
      <div class="col-md-5 m-auto bg-white popadd">
        <div class="page6box py-3 p-2">
          <span style="font-size:22px;">Update Password</span>
          <i class="fa-solid bandeka   fa-xmark " onclick="bsdo();"></i>
        </div>
        <div class="row p-2 mb-5">
          <div class="col-md-6 ">
            <p style="font-size:18px;font-weight:bold;">Old Password</p>
          </div>
          <div class="col-md-6">
            <input class="form-control mb-3">
          </div>
          <div class="col-md-6 ">
            <p style="font-size:18px;font-weight:bold;">New Password</p>
          </div>
          <div class="col-md-6">
            <input class="form-control mb-3">
          </div>
          <div class="col-md-6 ">
            <p style="font-size:18px;font-weight:bold;">Confirm Password</p>
          </div>
          <div class="col-md-6">
            <input class="form-control mb-3">
            <button class="btn btn-outline-secondary btn-md">Cancel</button>
            <button class="btn btn-outline-secondary btn-md">Update</button>
          </div>
  
        </div>
  
      </div>
    </div>
  </div>
@push('script')
<script>
    $(".shoot1").click(function () {

      $('.pop1').removeClass('d-none');
    });
    $(".sees").click(function () {

    });
    function bsdo() {

      $('.pop1').addClass('d-none');
    }

  </script>
@endpush