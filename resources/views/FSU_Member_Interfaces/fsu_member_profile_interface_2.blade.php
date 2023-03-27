@extends('FSU_Member_Interfaces.layout.master')
@push('title','member profile ')
@push('css')

@section('main-content')

@include('sweetalert::alert')
  
<div class="page3 my-5 ">
    <div class="row m-0">
      <div class="col-md-3  bg-secondary">
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
            <form action="{{route('update.member.profile',$emProfile->id)}}" method="post">
             @csrf
              Gender
              <select name="gender" class="form-control">
                  <option selected>--select--</option>
                  <option value="female" {{ $emProfile->gender == 'female' ? 'selected' : '' }}>female</option>                                   
                <option value="male" {{ $emProfile->gender == 'male' ? 'selected' : '' }}>male</option>
              </select>
              @error('gender')
                <div class="text-danger">{{$message}}</div>
              @enderror
              Email address
              <input type="email" name="email_address" class="form-control" value="{{ $emProfile->email_address}}">
              @error('email_address')
                <div class="text-danger">{{$message}}</div>
              @enderror
              Position
              <input class="form-control" disabled  value="{{ ($emProfile->position == 2) ? 'FSU Member':'' }}">
              <input type="number" name="position" value="{{$emProfile->position}}"  hidden>
              @error('position')
                <div class="text-danger">{{$message}}</div>
              @enderror

              Department

              <select disabled class="form-control mb-3" >
				          	@foreach ($departs as $depart )
				            	<option  value="{{$depart->id}}" @if( $emProfile->depart_id == $depart->id) selected  @endif >{{$depart->department->department}}</option>
				          	@endforeach
	            		</select>
             
              <input class="form-control" name='depart_id' value="{{$emProfile->depart_id}}" hidden>
              @error('depart_id')
                <div class="text-danger">{{$message}}</div>
              @enderror
              College
              <input class="form-control" disabled  value="{{$emProfile->college}}">
              <input type="text" name="college" value="{{$emProfile->college}}" hidden>
              @error('college')
                <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="col-md-6 p-1 dainputda">
              Name
              <input class="form-control"  name="name" value="{{$emProfile->name}}">
              @error('name')
                <div class="text-danger">{{$message}}</div>
              @enderror
              National ID
              <input class="form-control" name="national_id"  value="{{$emProfile->national_id}}">
              @error('national_id')
                <div class="text-danger">{{$message}}</div>
              @enderror
              University ID
              <input class="form-control" name="university_id"  value="{{$emProfile->university_id}}">
              @error('university_id')
                <div class="text-danger">{{$message}}</div>
              @enderror
              Address
              <input class="form-control" name="address" value="{{$emProfile->address}}">
              @error('address')
                <div class="text-danger">{{$message}}</div>
              @enderror
              Phone Number
              <input class="form-control" name="tel_number" value="{{$emProfile->tel_number}}">
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
                  <button class="btn bgcolor btn-lg text-white mt-3 float-end shoot1">Update Password</button>
                </div>
              </div>


            </div>

          </div>
          </form>
        </div>

      </div>
      

     
    </div>
  </div>

  <form action="{{route('member.password.updated')}}" method="post">
    @csrf
    <div class="pop1 d-none">
    <div class="row p-3">
      <div class="col-md-5 m-auto bg-white popadd">
        <div class="page6box py-3 p-2">
          <span style="font-size:22px;" class="shoot1">Update Password</span>
          
          <i class="fa-solid bandeka   fa-xmark " onclick="bsdo();"></i>
        </div>
        <div class="row p-2 mb-5">
          <div class="col-md-6 ">
            <p style="font-size:18px;font-weight:bold;">Old Password</p>
          </div>
          <div class="col-md-6">
            <input class="form-control mb-3" type="password" name="oldpassword">
            @error('oldpassword')
              <div class="text-danger">{{$message}}</div>
            @enderror
          </div>
          <div class="col-md-6 ">
            <p style="font-size:18px;font-weight:bold;">New Password</p>
          
          </div>
          <div class="col-md-6">
            <input class="form-control mb-3" type="password"  name="password">
            @error('password')
              <div class="text-danger">{{$message}}</div>
            @enderror
          </div>
          <div class="col-md-6 ">
            <p style="font-size:18px;font-weight:bold;">Confirm Password</p>
          </div>
          <div class="col-md-6">
            <input class="form-control mb-3" type="password"  name="password_confirmation">
            @error('Password_confirmation')
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

 
    function showProfileInfo() {
      $('.profile-info').show();
      $('.accordmic-info').hide();
    }
    function ShowAccordmicInfo() {
      $('.accordmic-info').show();
      $('.profile-info').hide();
    }
  </script>
@endpush

