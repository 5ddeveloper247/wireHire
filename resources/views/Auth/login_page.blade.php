@extends('layout.master')
@push('title', 'login')
@push('css')
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
      <style>
    .page2 {
      background-color: #1d1c47;
      height: 600px;
    }
    .banner2 {
      background-color: #ffffff;
      /* height:400PX; */
    }
    .formborder {
      border-right: 1px solid rgb(215, 215, 215);
    }
    .form1 {
      position: relative;
    }
    .lock {
      color: rgb(255, 255, 255);
      position: absolute;
      bottom: 53px;
      left: 35px;
    }
    .menu span {
    }
    .zamado {
      background-image: url("image/loginpage.jpeg");
      height: 420px;
      background-position: center;
      background-size: cover;
    }
  </style>
@endpush
@section('main-content')

  {{-- sweet alert --}}
  @include('sweetalert::alert')

    <div class="body">
      <div class="top container-fluid">
        <div class="navbar1">
          <div class="navdata1">
            <img src="image/logo.png" class="img-fluid" />
          </div>
          <div class="navdata2 pt-3">
            <h2>WireHire</h2>
          </div>
          <div class="navdata3 mx-3 pt-3">
            <form class="d-flex">
              <input class="form-control me-2" type="search"  placeholder="Search"  aria-label="Search"   />     

            </form>
          </div> 
        </div>
      </div>
      <div class="topm">
        <nav class="navbar px-4 navbar-expand-lg navbar-light bg-light">
          <div class="">
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav bsdo me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active mx-2" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="{{route('contact_us')}}">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="{{route('Auth.login')}}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="{{route('Auth.signup')}}">Sign Up</a>
                </li>
             
               
              </ul>
            </div>
          </div>
        </nav>
        <form action="{{route('cand_login')}}" method="post">
          @csrf
          <div class="page2 my-5 pt-5">
            <div class="row banner2 mt-5">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4 formborder">
                    <div class="form1 p-4">
                      {{-- <i class="fa-solid bandeka fa-xmark"></i> --}}
                      <h1 class="text-center mt-4">LOG IN</h1>
                      @error('email')
                          <div class="text-danger">{{$message}}</div>
                      @enderror
                      Email
                      <input type="text" value="{{old('email')}}" name="email" class="form-control mb-3"  placeholder=""  /> 
                      @error('password')
                      <div class="text-danger">{{$message}}</div>
                      @enderror 
                      Password
                        
                      <input  name="password" type="password"  class="form-control mb-3"  placeholder=""   />
                      <input type="checkbox" class="mb-3" />
                      Remember me<br />

                      <a href="#">Forgot Password?</a>
                      <i class="fa-sharp fa-solid fa-lock lock"></i>
                      <button  class="form-control my-3 bgcolor text-white fw-bold" >   Log In </button>                    
                    </div>
                  </div>
                  <div class="col-md-8 zamado"></div>
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
                <div class="box icons">
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
                  <input  type="text"  class="form-control"  placeholder="Search Here" />
                  <span  ><i class="fa-sharp fa-solid fa-magnifying-glass search"    ></i>
                   
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

`  <script src="https://kit.fontawesome.com/b98cad50b5.js" crossorigin="anonymous"></script>
  

@endpush

