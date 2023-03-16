@extends('FSU_Admin_Interface.layout.master')
@push('title', 'View Profile')
@push('css')
<style>
.form-control{
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 0px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    /* border-radius: 0.25rem; */
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;

}
    </style>
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
                                    <div class="h4 text-center txtcolor bg-white py-3 mt-4" onclick="showProfileInfo()">Profile
                                        <i class="fa-sharp fa-solid fa-chevron-right float-end mx-2 mt-1"></i></div>
                                </a>
                                <!-- <a class="text-decoration-none" href="javascript:void(0)"><div class="h4 text-center txtcolor bg-white py-3 mt-4" onclick="ShowAccordmicInfo()">Academic Information <i class="fa-sharp fa-solid fa-chevron-right float-end mx-2 mt-1"></i></div></a> -->
                            </div>
                        </div>
                    </div>
                </div>

             
                {{-- <form action="{{route('update_employe_profile',$employee_view->id)}}" method="post"> --}}
                    {{-- @csrf --}}
                    
                    <div class="col-md-9">
                        <form action="{{route('update_employe_profile',$employee_view->id)}}" method="post" >
                            @csrf
    
                        <div class="pagebox1 p-4 m-4 bgform">
                            <div class="row ">
                                <div class="col-md-6 p-1 dainputda">
                                    <label>Gender</label>
                                       <select class="form-control mb-2 py-3 selectdo" name="gender">
                                            <option value="female" @if (old('gender') == "female") {{ 'selected' }} @endif>Female</option>
                                            <option value="male" @if (old('gender') == "male") {{ 'selected' }} @endif>Male</option>
                                       </select>
                                       @error('gender')
                                           <div class="text-danger">{{$message}}</div>
                                       @enderror

                                    <label> Email address</label>
                                    <input class="form-control py-3"  value="{{$employee_view->email_address}}" name="email" placeholder="email111@gmail.com">
                                    @error('email')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror

                                   <label>  Position</label>
                                        <select name="position" class="form-control mb-2 py-3 selectdo">
                                            <option value="2" @if($employee_view->position == 2) {{ 'selected' }} @endif>Fsu Member</option>
                                            <option value="3"   @if ($employee_view->position == 3) {{ 'selected' }} @endif>Deprtment Chair</option>
                                            <option value="4"   @if ($employee_view->position == 4){{ 'selected' }} @endif>Deprtment Viewer</option>
                                            {{-- <option>Fsu viewer</option>
                                            <option>4rth</option> --}}
                                            </select>
                                    @error('position')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                            
                                   <label>Department</label>
                                        <select class="form-control mb-2 selectdo py-3" name="department">
    
                                            @foreach ($departs as $depart )
                                            <option value="{{$depart->id}}" @if ($employee_view->depart_id == $depart->id) {{ 'selected' }} @endif>{{$depart->department}}</option>
                                            @endforeach
                            
                                        </select>

                                 @error('department')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
    
    
                                    College
                                    <input class="form-control"  name="college" value="{{$employee_view->college}}" 
                                        placeholder="College of Computer Science and Information Technology">
                                @error('college')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror


                                </div>
                                <div class="col-md-6 p-1 dainputda">
                                    {{-- Employ Manager
                                    <input class="form-control"  value="{{$employee_view->gender}}"  placeholder="Dr abdullah alqahtani"> --}}
                                    National ID
                                    <input class="form-control" name="national_id"  value="{{$employee_view->national_id}}"  placeholder="123546789">

                                    @error('national_id')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror


                                    University ID
                                    <input class="form-control" name="university_id"  value="{{$employee_view->university_id}}"  placeholder="123546789">

                                    @error('university_id')
                                    <div class="text-danger">{{$message}}</div>
                                  @enderror

                                    Address
                                    <input class="form-control" name="address"  value="{{$employee_view->address}}"  placeholder="Kohbar,123">
                                    @error('address')
                                    <div class="text-danger">{{$message}}</div>
                                  @enderror
                                    Phone Number
                                    <input class="form-control" name="tel_number" value="{{$employee_view->tel_number}}"  placeholder="123456789">
                                    @error('tel_number')
                                    <div class="text-danger">{{$message}}</div>
                                  @enderror
                                    <div class="row ">
                                        <div class="col-md-12 ">
                                            <button class="btn bgcolor btn-lg text-white mt-3 float-end ">Update Profile</button>
                         
                                            <a  href="#" class="btn bgcolor btn-lg text-white mt-3 float-end mx-3 shoot1">Update
                                                Password</a>
                                        </div>
                                    </div>
        
                                </div>
        
                            </div>
                        </div>
                    </form>
                    </div>
                
            
         
             
            </div>
        </div>
    
    
   

    <!-- model -->

    <form action="{{route('update_employe_password',$employee_view->user->id)}}" method="post">
        @csrf
        <div class="pop1 d-none">
            <div class="row p-3">
                <div class="col-md-5 m-auto bg-white popadd">
                    <div class="page6box py-3 p-2">
                        <span style="font-size:22px;"  class="shoot1">Update Password</span>
                      
                    </div>
                    <div class="row p-2 mb-5">
                        {{-- <div class="col-md-6 ">
                            <p style="font-size:18px;font-weight:bold;">Old Password</p>
                        </div>
                        <div class="col-md-6">
                            <input type="pasword" name="old_password" class="form-control mb-3">
                        </div> --}}
                        <div class="col-md-6 ">
                            <p style="font-size:18px;font-weight:bold;">New Password</p>
                        </div>
                        <div class="col-md-6">
                            <input type="password" name="password" class="form-control border mb-3">
                        </div>
                        <div class="col-md-6 ">
                            <p style="font-size:18px;font-weight:bold;">Confirm Password</p>
                        </div>
                        <div class="col-md-6">
                            <input type="password" name="password_confirmation" class="form-control border mb-3">
                            <a href="#" class="btn btn-outline-secondary btn-md" onclick="bsdo();">Cancel</a>
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
        $(".shoot1").click(function() {

            $('.pop1').removeClass('d-none');
        });
        $(".sees").click(function() {

        });

        function bsdo() {

            $('.pop1').addClass('d-none');
        }
    </script>

@endpush
