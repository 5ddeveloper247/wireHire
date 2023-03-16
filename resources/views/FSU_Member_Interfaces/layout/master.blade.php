<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesh eet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link  href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}"  rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    

    <title>@stack('title')</title>
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
   
    @stack('css')

  </head>

<body>
    <div class="body">

         <div class="top container-fluid">
         <div class="navbar1">
        <div class="navdata1 pt-1">
          <img src="{{asset('image/logo.png')}}" class="img-fluid" />
        </div>
        <div class="navdata2 pt-3">
          <h2>WireHire</h2>
        </div>
        <div class="navdata3 mx-3 mt-3">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <a class="text-white text-decoration-none" href="{{route('fsu_member_profile_interface2')}}">
              <div class="form bg-dark float-end" style="
                    width: 40px;
                    height: 30px;
                    border-radius: 50%;
                    border: 1px solid grey;
                  ">
                <i class="fa-solid fa-user"></i>
              </div>
            </a>
          </form>
        </div>
      </div>
    </div>

    <div class="topm">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav bsdo me-auto mb-2 mb-lg-0">
            <li class="nav-item active mx-2">
              <a class="nav-link active" href="{{route('member.interfaces')}}">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" onclick="showSubMenu()" href="#" id="navbarDropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link active mx-2" href="{{route('contact_us')}}">Contact Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active mx-2" href="{{route('logout')}}">logout</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="submenu " style="display: none;    background-color: #f8f9fa!important;">
        <div class="row">
          <div class="col-3">
            <a class="dropdown-item" href="{{route('fsu_member_job_interfaces_3')}}"> Member Job Position </a>
            <a class="dropdown-item" href="{{route('fsu_member_specific_job')}}"> Member Specific Job </a>
            {{-- <a class="dropdown-item" href="{{route('fsu_member_applicant_ranking')}}">Member Applicant Ranking</a> --}}
          </div>
          <div class="col-3">
            {{-- <a class="dropdown-item" href="{{route('fsu_member_calendar')}}"> Member Calendar </a> --}}
            <a class="dropdown-item" href="{{route('fsu_member_recieved_request')}}">Member Received
              Request</a>
            {{-- <a class="dropdown-item" href="{{route('fsu_member_interview_1')}}">Candidate Short-list</a> --}}
            
          </div>
          <div class="col-3">
           
          </div>
          <div class="col-3">
          
          </div>
        </div>
      </div>
        <div class="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          
        </div>
      </div>
      </nav>

       {{-- main content --}}

        @yield('main-content')
    
         {{-- footer --}}

        <div class="footer pt-3">
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
    </div>
    
    <script src="https://kit.fontawesome.com/b98cad50b5.js" crossorigin="anonymous" ></script>
    <script   src="https://code.jquery.com/jquery-3.6.3.js"  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="  crossorigin="anonymous"  ></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script>

      function showSubMenu() {
        if ($('.submenu').css('display') != 'block') {
          $('.submenu').show();
        } else {
          $('.submenu').hide();
        }
      }
  
    </script>
    @stack('script')

</body>
</html>