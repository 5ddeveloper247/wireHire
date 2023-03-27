@extends('FSU_Admin_Interface.layout.master')
@push('title','Admin Profile')
@push('css')
 
@endpush

@section('main-content')

  @include('sweetalert::alert')

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

             <form action="{{route('admin.profile.update',$profile->id)}}" method="post">
              @csrf

             Name
              <input class="form-control"  name='name'  value="{{$profile->name}}">
            @error('name')
              <div class="text-danger">{{$message}}</div>
            @enderror
             
              Email address
              <input class="form-control" name='email_address'  value="{{$profile->email_address}}">

              @error('email_address')
              <div class="text-danger">{{$message}}</div>
               @enderror

              Position
              <input class="form-control"   disabled  value="{{ ($emProfile->position == 1) ? 'Fsu Admin':'' }}">
              <input hidden  name="position" value="{{$emProfile->position}}">


              @error('position')
              <div class="text-danger">{{$message}}</div>
               @enderror

              Department
              <select disabled class="form-control mb-3" >
	              			<!-- <option value="" >Select Department</option> -->
				          	@foreach ($departs as $depart )
				            	<option  value="{{$depart->id}}" @if( $profile->depart_id == $depart->id) selected  @endif >{{$depart->department}}</option>
				          	@endforeach
	             
	            		</select>
              <input type="number" name="depart_id" hidden value="{{$profile->depart_id}}">
              @error('depart_id')
              <div class="text-danger">{{$message}}</div>
               @enderror

              College
              <input class="form-control" disabled   value="{{$profile->college}}">
              <input type="text" name="college" hidden value="{{$profile->college}}">
              @error('college')
              <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="col-md-6 p-1 dainputda">
              Genders
              <select name="gender" class="form-control">
                  <option selected>--select--</option>
                  <option value="female" {{ $profile->gender == 'female' ? 'selected' : '' }}>female</option>                                   
                <option value="male" {{ $profile->gender == 'male' ? 'selected' : '' }}>male</option>
              </select>
              @error('gender')
              <div class="text-danger">{{$message}}</div>
            @enderror
              National ID
              <input class="form-control" type="number" name='national_id' ty  value="{{$profile->national_id}}">
              @error('number')
              <div class="text-danger">{{$message}}</div>
             @enderror
              University ID
              <input class="form-control" name='university_id'  value="{{$profile->university_id}}">
              @error('un')
              <div class="text-danger">{{$message}}</div>
               @enderror
              Address
              <input class="form-control"  name='address' value="{{$profile->address}}">
              @error('address')
              <div class="text-danger">{{$message}}</div>
            @enderror
              Phone Number
              <input class="form-control" name="tel_number" type="tel" value="{{$profile->tel_number}}">
              @error('tel_number')
              <div class="text-danger">{{$message}}</div>
            @enderror
              <div class="row">
                <div class="col">
                  <button class="btn bgcolor btn-lg text-white mt-3 float-end ">Update Profile</button>
                </div>
             </div>
             <div class="row">
                <div class="col">
                  <a href='javascript:void(0)' class="btn bgcolor btn-lg text-white mt-3 float-end shoot1">Update Password</a>
                </div>
              </div>

            </div>

          </div>
          </form>
        </div>

      </div>

      
    </div>
  </div>


    <!-- model -->

    <form action="{{route('admin.password')}}" methode="post">
      @csrf
    <div class="pop1 d-none">
        <div class="row p-3">
          <div class="col-md-5 m-auto bg-white popadd">
          <div class="page6box py-3 p-2">
            <span style="font-size:22px;" class="shoot1" >Update Password</span>
           
            <i class="fa-solid bandeka   fa-xmark " onclick="bsdo();"></i>
          </div>
          <div class="row p-2 mb-5">
            <div class="col-md-6 ">
              <p  style="font-size:18px;font-weight:bold;">Old Password</p>
              </div>
            <div class="col-md-6">
              <input type="password" class="form-control mb-3" name="oldpassword">
              @error('oldpassword')
                <div class="text-danger">{{$message}}</div>
              @enderror
              </div>
            <div class="col-md-6 ">
              <p  style="font-size:18px;font-weight:bold;">New Password</p>
              </div>
            <div class="col-md-6">
              <input type="password"  class="form-control mb-3" name="password" >
              @error('password')
                <div class="text-danger">{{$message}}</div>
              @enderror
              </div>
            <div class="col-md-6 ">
              <p  style="font-size:18px;font-weight:bold;">Confirm Password</p>
              </div>
            <div class="col-md-6">
              <input type="password"  class="form-control mb-3" name="password_confirmation">
              @error('confirmation_password')
                <div class="text-danger">{{$message}}</div>
              @enderror
              <button class="btn btn-outline-secondary btn-md" onclick="bsdo();">Cancel</button>
              <button class="btn btn-outline-secondary btn-md" onclick="playd()">Update</button>
              </div>
      
      </div>
      
          </div>
        </div>
      </div>

    </form>
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