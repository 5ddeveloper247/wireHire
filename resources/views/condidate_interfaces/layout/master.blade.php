<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />


    <title>@stack('title')</title>
    @stack('css')
</head>


<body>
    <div class="body">
        <div class="top container-fluid">
            <div class="navbar1">
                <div class="navdata1 p">
                    <img src="{{ asset('image/logo.png') }}" class="img-fluid">
                </div>
                <div class="navdata2 pt-3">
                    <h2>WireHire</h2>
                </div>
                <div class="navdata3 mx-3 mt-3">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <a class="text-white text-decoration-none" href="{{ route('condidate_profile') }}">
                            <div class="form bg-dark float-end"
                                style="
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
        <div class="topm ">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav bsdo me-auto mb-2 mb-lg-0">
                        <li class="nav-item active mx-2">
                            <a class="nav-link active" href="{{ route('condidate_dashboard') }}">Home <span
                                    class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" onclick="showSubMenu()" href="#"
                                id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Menu
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-2" href="{{route('contact_us')}}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-2" href="{{ route('logout') }}">log out</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="submenu " style="display: none;    background-color: #f8f9fa!important;">
                <div class="row">
                    <div class="col-3">
                        <a class="dropdown-item" href="{{ route('job_listing') }}"> Job Listings </a>
                        <a class="dropdown-item" href="{{ route('application_status') }}"> Application Status </a>
                        <!-- <a class="dropdown-item" href="FSU Member Applicant Ranking Interface.html">Member Applicant Ranking</a> -->
                    </div>
                    <div class="col-3">
                        <!-- <a class="dropdown-item" href="FSU Member Calendar Interface.html"> Member Calendar </a>
        <a class="dropdown-item" href="FSU Member Received Request Forms Interface 2.html">Member Received Request</a> -->
                        <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                    <div class="col-3">
                        <!-- <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                    <div class="col-3">
                        <!-- <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </div>
            </div>

            {{-- main content --}}
            @yield('main-content')


            <div class="footer pt-3">
                <div class="mfooter mx-3">
                    <div class="col-md-12 px-5">
                        <div class="row  pt-4">

                            <div class="col-md-4 footer1">
                                <div class="box icons ">
                                    <span><i class="fa-brands fa-square-instagram"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-comments"></i></span>
                                    <span><i class="fa-brands fa-twitter"></i></span>
                                    <span><i class="fa-sharp fa-solid fa-phone"></i></span>

                                </div>
                            </div>
                            <div class="col-md-4 footer1">
                                <div class="box menu pt-2 ">
                                    <span>Home</span>
                                    <span>Menu</span>
                                    <span>Login</span>
                                </div>
                            </div>
                            <div class="col-md-4 viewda footer1">
                                <div class="box">
                                    <input type="text" class="form-control " placeholder="Search Here">
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

    {{-- script part --}}
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b98cad50b5.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    {{-- sweet alert  --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

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
