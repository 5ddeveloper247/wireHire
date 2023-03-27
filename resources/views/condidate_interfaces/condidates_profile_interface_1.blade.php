@extends('condidate_interfaces.layout.master')
@push('title', 'condidate profile')
@push('css')
<style>
    .cursor-pointer{
      cursor:pointer;
    }
    
  </style>
@endpush
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
                                <div class="h4 text-center txtcolor bg-white py-3 mt-4" onclick="showProfileInfo()">Profile
                                    <i class="fa-sharp fa-solid fa-chevron-right float-end mx-2 mt-1"></i>
                                </div>
                            </a>
                            <a class="text-decoration-none" href="javascript:void(0)">
                                <div class="h4 text-center txtcolor bg-white py-3 mt-4" onclick="ShowAccordmicInfo()">
                                    Academic
                                    Information <i class="fa-sharp fa-solid fa-chevron-right float-end mx-2 mt-1"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <form action="{{ route('update.profile') }}" method="post">
                    @csrf
                    <div class="pagebox1 p-4 m-4 bgform profile-info">
                        <div class="row ">
                            <div class="col-md-6 p-1 dainputda">
                                Name
                                <input type="text"  class="form-control" value="{{ $candidate->firstname }}" name="firstname"
                                    placeholder="Candidate Name">
                                @error('firstname')
                                <div class="text-danger">{{$message}}</div>
                                @enderror

                                middle name
                                <input type="text"  class="form-control" value="{{ $candidate->middlename }}" name="middlename"
                                    placeholder="Candidate Name">
                                    @error('middlename')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror

                                last name
                                <input type="text"   class="form-control" value="{{ $candidate->lastname }}" name="lastname"
                                    placeholder="Candidate Name">

                                    @error('lastname')
                                <div class="text-danger">{{$message}}</div>
                                @enderror

                                Email Address
                                <input type="email" class="form-control" name="email" value="{{ $candidate->email }}"
                                    placeholder="email111@gmail.com">
                                    @error('email')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror

                                Phone Number
                                <input type="number" class="form-control" name="phoneno" value="{{ $candidate->phoneno }}"
                                    placeholder="123456789">
                                    @error('phoneno')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror


                                Nationality
                                <input type="text" class="form-control" name="nationality" value="{{ $candidate->nationality }}"
                                    placeholder="Suadi Aeabia">
                                    @error('nationality')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror

                            </div>
                            <div class="col-md-6 p-1 dainputda">
                                <label for="gender">
                                    Gender
                                </label>
                                <select name="gender" class="form-control">
                                    <option selected>--select--</option>
                                    <option value="gender" {{ $candidate->gender == 'female' ? 'selected' : '' }}>female
                                    </option>
                                    <option value="male"{{ $candidate->gender == 'male' ? 'selected' : '' }}>male</option>
                                </select>
                                @error('gender')
                                <div class="text-danger">{{$message}}</div>
                                @enderror

                                Birth Date 
                                <input type="date" name="date" value="{{ $candidate->date }}" class="form-control"
                                    placeholder="1/01/2010">

                                    @error('date')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror

                                Passport Number
                                <input type="text" name="passportno" value="{{ $candidate->passportno }}" class="form-control"
                                    placeholder="123456789">
                                    @error('passportno')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                Location
                                <input type="text" name="location" value="{{ $candidate->location }}" class="form-control"
                                    placeholder="Suadi Aeabia">
                                    @error('location')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                <div class="row">
                                    <div class="col">
                                        <button class="btn bgcolor btn-lg text-white mt-3 float-end ">Update
                                            Profile</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="#" class="btn bgcolor btn-lg text-white mt-3 float-end shoot1">Update
                                            Password</a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </form>

                    {{-- profile academic information --}}


                <form action="{{route('academic_info')}}" method="post">

                    @csrf
                    <input type="text" name="candidate_id" value="{{ session()->get('candidate_login') }}" hidden>
                    <div class="pagebox1 p-4 m-4 bgform accordmic-info" style="display: none;">
                        <div class="row ">
                            <div class="col-md-6 p-1 dainputda">
                                Academic Degree
                                <input name="academic_degre" value="{{ $academic->academic_degre }}" class="form-control"
                                    placeholder="Master Degree">
                                @error('academic_degre')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                               

                                Major
                                <input name="major" value="{{ $academic->major }}" class="form-control"
                                    placeholder="computer science">
                                @error('major')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                    

                                Year of Graduation
                                <input name="year_of_graduate" value="{{ $academic->year_of_graduate }}"
                                    class="form-control" placeholder="2015">

                                @error('year_of_graduate')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                 

                                University Name
                                <input name="uni_name" value="{{ $academic->uni_name }}" class="form-control"
                                    placeholder="British University">

                                @error('uni_name')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                      

                            </div>
                            <div class="col-md-6 p-1 dainputda">
                                University Rank
                                <input name="uni_rank" value="{{ $academic->uni_rank }}" class="form-control"
                                    placeholder="567">
                                @error('uni_rank')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                           


                                University location
                                <input name="uni_location" value="{{ $academic->uni_location }}"class="form-control"
                                    placeholder="London,United kingdom">
                                @error('uni_location')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                              


                                Cumulative GPA
                                <input name="cumulative_gpa" value="{{ $academic->cumulative_gpa }}"
                                    class="form-control" placeholder="4.5">

                                 @error('cumulative_gpa')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                              


                                GPA out of
                                <input name="gpa_out_of" value="{{ $academic->gpa_out_of }}" class="form-control"
                                    placeholder="5">
                                @error('gpa_out_of')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                              
                            </div>
                            <div class="col-md-6 resume gcolor mt-3 text-white py-3 cusror-pointer">
                                <div class="resumebox  p-3 bgcolor">
                                    <p>
                                        Resume

                                    </p>
                                    <i class="fa-solid fa-file-pdf"></i>
                                    <span>
                                        <label for="resume">
                                            {{$academic->resume}}
                                        </label>
                                        
                                    </span>
                                    <input type="file" id="resume" onchange="changefile(this)" accept=".pdf" name="resume" class="form-control" hidden>
                                </div>
                            </div>

                            <div class="col-md-6 resume  mt-3 text-white py-3">
                                <div class="resumebox p-3 bgcolor">
                                    <p>
                                        Transcript
                                    </p>
                                    <i class="fa-solid fa-file-pdf"></i>
                                    <span>
                                        <label for="transcript">
                                            {{$academic->transcript}}
                                          </label>
                                            
                                    </span>
                                    <input type="file" id="transcript" onchange="changefile(this)" accept=".pdf" name="transcript" class="form-control" hidden>
                                </div>
                            </div>
                            <div class="col-md-6 resume  mt-3 text-white py-3">
                                <div class="resumebox p-3 bgcolor">
                                    <p>
                                        Certificates
                                    </p>
                                    <i class="fa-solid fa-file-pdf"></i>
                                    <span>
                                 

                                       <label for="certificate">
                                        {{$academic->certificate}}
                                      </label>
                                        
                                    </span>
                                    <input type="file" id="certificate" onchange="changefile(this)" accept=".pdf" name="certificate" class="form-control" hidden>
                                </div>
                            </div>
                            <div class="col-md-6 resume  mt-3 text-white py-3">
                                <div class="resumebox p-3 bgcolor">
                                    <p>
                                        Teaching Prefernces
                                    </p>
                                    <i class="fa-solid fa-file-pdf"></i>
                                    <span>
                                        <label for="teaching_prep">
                                            {{$academic->teaching_prep}}
                                        </label>
                                        
                                     
                                    </span>
                                    <input type="file" id="teaching_prep" onchange="changefile(this)" accept=".pdf" name="teaching_prep" class="form-control" hidden>
                                </div>
                            </div>
                            <button class="btn bgcolor btn-lg text-white mt-3 float-end ">Update Information</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>

    <!-- model -->
    <form action="{{ route('update.password') }}" method="post">
        @csrf
        <div class="pop1 d-none">
            <div class="row p-3">
                <div class="col-md-5 m-auto bg-white popadd">
                    <div class="page6box py-3 p-2">
                        <span style="font-size:22px;" class="shoot1">Update Password</span>
                        <script>
                            function playd() {
                                alert('ok dao');
                            }
                        </script>
                        <i class="fa-solid bandeka   fa-xmark " onclick="bsdo();"></i>
                    </div>
                    <div class="row p-2 mb-5">
                        <div class="col-md-6 ">
                            <p style="font-size:18px;font-weight:bold;">Old Password</p>

                        </div>
                        <div class="col-md-6">
                            <input type="password"name="old_password" class="form-control mb-3">
                            @error('old_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 ">
                            <p style="font-size:18px;font-weight:bold;">New Password</p>

                        </div>
                        <div class="col-md-6">
                            <input type="password" name="password" class="form-control mb-3">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 ">
                            <p style="font-size:18px;font-weight:bold;">Confirm Password</p>

                        </div>
                        <div class="col-md-6">
                            <input type="password" name="password_confirmation" class="form-control mb-3">
                            @error('password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <button class="btn btn-outline-secondary btn-md" onclick="bsdo();">Cancel</button>
                            <button class="btn btn-outline-secondary btn-md">Update</button>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </form>

    <!-- </divend model -->
@endsection

@push('script')
    <script>
        $(".shoot1").click(function() {
            $('.pop1').removeClass('d-none');
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


        function showSubMenu() {
            if ($('.submenu').css('display') != 'block') {
                $('.submenu').show();
            } else {
                $('.submenu').hide();
            }
        }

       

function changefile(el) {
    $(el).siblings('span').find('label').text($(el)[0].files[0].name);
 };


    </script>
@endpush
