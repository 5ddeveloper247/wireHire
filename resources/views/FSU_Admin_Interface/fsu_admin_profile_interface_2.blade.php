@extends('FSU_Admin_Interface.layout.master')
@push('title','Admin Profile')
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
              <a class="text-decoration-none" href="javascript:void(0)">
                <div class="h4 text-center txtcolor bg-white py-3 mt-4" onclick="showProfileInfo()">Profile <i
                    class="fa-sharp fa-solid fa-chevron-right float-end mx-2 mt-1"></i></div>
              </a>
              <!-- <a class="text-decoration-none" href="javascript:void(0)"><div class="h4 text-center txtcolor bg-white py-3 mt-4" onclick="ShowAccordmicInfo()">Academic Information <i class="fa-sharp fa-solid fa-chevron-right float-end mx-2 mt-1"></i></div></a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="pagebox1 p-4 m-4 bgform">
          <div class="row ">
            <div class="col-md-6 p-1 dainputda">
              Genders
              <input class="form-control" placeholder="Male">
              Email address
              <input class="form-control" placeholder="email111@gmail.com">
              Position
              <input class="form-control" placeholder="FSU Admin">
              Department
              <input class="form-control" placeholder="Computer Informtion Systems">
              College
              <input class="form-control" placeholder="College of Computer Science and Information Technology">
            </div>
            <div class="col-md-6 p-1 dainputda">
              Employ Manager
              <input class="form-control" placeholder="Dr abdullah alqahtani">
              National ID
              <input class="form-control" placeholder="123546789">
              University ID
              <input class="form-control" placeholder="123546789">
              Address
              <input class="form-control" placeholder="Kohbar,123">
              Phone Number
              <input class="form-control" placeholder="123456789">
              <div class="row">
                <div class="col">
                  <button class="btn bgcolor btn-lg text-white mt-3 float-end ">Update Profile</button>
                </div>
             </div>
             <div class="row">
                <div class="col">
                  <button class="btn bgcolor btn-lg text-white mt-3 float-end shoot1">Update Password</button>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </div>
  </div>


    <!-- model -->
    <div class="pop1 d-none">
        <div class="row p-3">
          <div class="col-md-5 m-auto bg-white popadd">
      <div class="page6box py-3 p-2">
        <span style="font-size:22px;" class="shoot1" >Update Password</span>
        <script>
          function playd(){
            alert('ok dao');
          }
        </script>
        <i class="fa-solid bandeka   fa-xmark " onclick="bsdo();"></i>
      </div>
      <div class="row p-2 mb-5">
        <div class="col-md-6 ">
          <p  style="font-size:18px;font-weight:bold;">Old Password</p>
          </div>
        <div class="col-md-6">
          <input class="form-control mb-3">
          </div>
        <div class="col-md-6 ">
          <p  style="font-size:18px;font-weight:bold;">New Password</p>
          </div>
        <div class="col-md-6">
          <input class="form-control mb-3">
          </div>
        <div class="col-md-6 ">
          <p  style="font-size:18px;font-weight:bold;">Confirm Password</p>
          </div>
        <div class="col-md-6">
          <input class="form-control mb-3">
          <button class="btn btn-outline-secondary btn-md" onclick="bsdo();">Cancel</button>
          <button class="btn btn-outline-secondary btn-md" onclick="playd()">Update</button>
          </div>
      
      </div>
      
          </div>
        </div>
      </div>
      <!-- end model -->
@endsection

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
   
  //   function showSubMenu(){
  //       if($('.submenu').css('display') != 'block'){
  //         $('.submenu').show();
  //       }else{
  //         $('.submenu').hide();
  //       }
  //   }
  
  // 
@endpush