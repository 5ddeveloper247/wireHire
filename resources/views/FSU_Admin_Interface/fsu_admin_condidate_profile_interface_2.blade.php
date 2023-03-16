@extends('FSU_Admin_Interface.layout.master')
@push('title','fsu Admin condidate profile interface 2')
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
                  <a class="text-decoration-none" href="javascript:void(0)"><div class="h4 text-center txtcolor bg-white py-3 mt-4" onclick="showProfileInfo()">Profile <i class="fa-sharp fa-solid fa-chevron-right float-end mx-2 mt-1"></i></div></a>
                  <a class="text-decoration-none" href="javascript:void(0)"><div class="h4 text-center txtcolor bg-white py-3 mt-4" onclick="ShowAccordmicInfo()">Academic Information <i class="fa-sharp fa-solid fa-chevron-right float-end mx-2 mt-1"></i></div></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="pagebox1 p-4 m-4 bgform profile-info">
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
                  <!-- <button class="btn bgcolor btn-lg text-white mt-3 float-end shoot1">Update Password</button> -->

                </div>


              </div>
            </div>
            <div class="pagebox1 p-4 m-4 bgform accordmic-info" style="display: none;">
              <div class="row ">
                <div class="col-md-6 p-1 dainputda">
                  Academic Degree
                  <input class="form-control" placeholder="Master Degree">

                  Major
                  <input class="form-control" placeholder="computer science">
                  Year of Graduation
                  <input class="form-control" placeholder="2015">
                  University Name
                  <input class="form-control" placeholder="British University">

                </div>
                <div class="col-md-6 p-1 dainputda">
                  University Rank
                  <input class="form-control" placeholder="567">
                  University location
                  <input class="form-control" placeholder="London,United kingdom">
                  Cumulative GPA
                  <input class="form-control" placeholder="4.5">
                  GPA out of
                  <input class="form-control" placeholder="5">
                </div>
                <div class="col-md-6 resume gcolor mt-3 text-white py-3">
                  <div class="resumebox  p-3 bgcolor">
                    <p>
                      Resume

                    </p>
                    <i class="fa-solid fa-file-pdf"></i>
                    <span>
                      CandidateResume.PDF
                    </span>
                  </div>
                </div>

                <div class="col-md-6 resume  mt-3 text-white py-3">
                  <div class="resumebox p-3 bgcolor">
                    <p>
                      Transcript
                    </p>
                    <i class="fa-solid fa-file-pdf"></i>
                    <span>
                      UniversityTranscript.PDF
                    </span>
                  </div>
                </div>
                <div class="col-md-6 resume  mt-3 text-white py-3">
                  <div class="resumebox p-3 bgcolor">
                    <p>
                      Certificates
                    </p>
                    <i class="fa-solid fa-file-pdf"></i>
                    <span>
                      CandidateCertificates.PDF
                    </span>
                  </div>
                </div>
                <div class="col-md-6 resume  mt-3 text-white py-3">
                  <div class="resumebox p-3 bgcolor">
                    <p>
                      Teaching Prefernces
                    </p>
                    <i class="fa-solid fa-file-pdf"></i>
                    <span>
                      TeachingPrefernces.PDF
                    </span>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
@endsection
@push('script')
     <script>
    function showProfileInfo(){
        $('.profile-info').show();
        $('.accordmic-info').hide();
    }
    function ShowAccordmicInfo(){
        $('.accordmic-info').show();
        $('.profile-info').hide();
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