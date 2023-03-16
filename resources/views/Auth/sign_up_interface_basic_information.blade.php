@extends('layout.master')
@push('title', 'Signup')
@push('css')

@endpush

@section('main-content')
    <div class="body">
        <div class="top container-fluid">
            <div class="navbar1">
                <div class="navdata1 ">
                    <img src="{{asset('image/logo.png')}}" class="img-fluid">
                </div>
                <div class="navdata2 pt-3">
                    <h2>WireHire</h2>
                </div>
                <div class="navdata3 mx-3 pt-3">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <!-- <div
                                                                                                                                                                                              class="form bg-dark float-end"
                                                                                                                                                                                              style="
                width: 40px;
                height: 30px;
                border-radius: 50%;
                border: 1px solid grey;
              "
                                                                                                                                                                                            >
                                                                                                                                                                              <i class="fa-solid fa-user"></i>                                                                                                                                                 </div> -->
                    </form>
                </div>
            </div>
        </div>
        <div class="topm">
            <nav class="navbar px-4 navbar-expand-lg navbar-light bg-light">
                <div class="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav bsdo me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active mx-2" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-2" href="{{route('contact_us')}}">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-2" href="{{ route('Auth.login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-2" href="{{ route('Auth.signup') }}">Sign Up</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </nav>
            <div class="page3 my-5 pt-5">
                <div class="col-md-9 m-auto">
                    <div class="py-3 text-center bgcolor text-white h4">Register</div>
                </div>

                <form action="{{route('cand_register')}}" method="post">
                    @csrf
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="bg-dark" style="height:650px;">
                                            <h1>ful</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-8 bggrey pt-4">
                                        <div class="row m-0 gy-5 pb-5">
                                          
                                            <div class="col-md-4">
                                                First Name
                                                <input type="text" class="form-control" value="{{old('fname')}}" name="fname">
                                                @error('fname')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                Middle Name
                                                <input type="text" value="{{old('mname')}}" class="form-control" name="mname">
                                                @error('mname')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                Last Name
                                                <input type="text" value="{{old('lname')}}" class="form-control" name="lname">
                                                @error('lname')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                Date:
                                                <input  type="date" value="{{old('date')}}" class="form-control" name="date">
                                                @error('date')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                            {{-- <div class="col-md-4">
                                                Month:
                                                <input class="form-control" name="month">
                                            </div>
                                            <div class="col-md-4">
                                                Year:
                                                <input class="form-control" name="year">
                                            </div> --}}
                                            <div class="col-md-4">
                                                Gender

                                                <select name="gender" value="{{old('gender')}}" class="form-control">
                                                    <option selected>--select--</option>
                                                    <option value="gender">female</option>
                                                    <option value="male">male</option>
                                                </select>
                                                @error('gender')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                                {{-- <input class="form-control" placeholder="female" > --}}
                                            </div>
                                            <div class="col-md-4">
                                                Email
                                                <input type="email" class="form-control" value="{{old('email')}}" placeholder="" name="email">
                                                @error('email')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                Phone Number
                                                <input type="text" value="{{old('phoneno')}}" class="form-control" name="phoneno">
                                                @error('phoneno')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                Passwort Number
                                                <input type="text" value="{{old('passportno')}}" class="form-control" name="passportno">
                                                @error('passportno')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                Nationality
                                                <input type="text" class="form-control"  value="{{old('nationality')}}" name="nationality">
                                                @error('nationality')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                Location
                                                <input type="text" class="form-control" value="{{old('location')}}" name="location">
                                                @error('location')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                Passord
                                                <input type="password" class="form-control" name="password">
                                                @error('password')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                Confirm Password
                                                <input type="password" class="form-control" name="confirm_password">
                                                @error('confirm_password')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <button class="bgcolor text-white mt-4 py-2 w-100">
                                                    submit
                                                    {{-- <a
                                                        class="text-white text-decoration-none"
                                                        href="#">Continue</a> --}}
                                                    </button>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
               
            </div>

            <div class="footer pt-3 mt-4">
                <div class="mfooter mx-3">
                    <div class="col-md-12 px-5">
                        <div class="row pt-4">
                            <div class="col-md-4 footer1">
                                <div class="boxfooter icons">
                                    <span><i class="fa-brands fa-square-instagram"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-comments"></i></span>
                                    <span><i class="fa-brands fa-twitter"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-phone"></i></span>
                                </div>
                            </div>
                            <div class="col-md-4 footer1">
                                <div class="box menu pt-2">
                                    <span>Home</span>
                                    <span>Menu</span>
                                    <span>Login</span>
                                </div>
                            </div>
                            <div class="col-md-4 viewda footer1">
                                <div class="box">
                                    <input type="text" class="form-control" placeholder="Search Here" />
                                    <span><i class="fa-sharp fa-solid fa-magnifying-glass search"></i>
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

    @endpush
