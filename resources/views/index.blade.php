@extends('layout.master')
@push('title', 'home')
@push('css')
    <style>
        .image img {
            width: 100%;
        }
    </style>
@endpush

@section('main-content')
    <div class="body">
        <div class="top container-fluid">
            <div class="navbar1">
                <div class="navdata1">
                    <h2>LOGO</h2>
                </div>
                <div class="navdata2">
                    <h2>WireHire</h2>
                </div>
                <div class="navdata3 mx-3">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </div>
        <div class="topm ">
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
            <div class="banner text-white">
                <div class="row  m-0  pt-5">

                    <div class="col-md-1 pt-5 mt-5  part">
                    </div>
                    <div class="col-md-6 mt-5 mx-3 part2 p-3">
                        <h5>College of Computer Science And<br> Information Technology </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin
                            gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam
                            fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc
                            eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean </p>
                    </div>
                </div>
            </div>
            <div class="row service m-0 mt-4">
                <div class="col-md-12">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="mt-4">Job Opportunities</h2>
                            </div>
                            <div class="col-md-12  p-0">
                                <div class="servicebox">
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper mt-5">
                                            <div class="swiper-slide control">
                                                <div class="image">
                                                    <img src="{{asset('image/1job.jpeg')}}" height="200">
                                                    <div class="data p-3">
                                                        <h3>Full courses!</h3>
                                                        <p>A quick brown fox jumps over the lazy dog
                                                            A quick brown fox jumps over the lazy dog.
                                                        </p>
                                                        <button class="btn  text-white bgcolor">Apply Now!</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide control">
                                                <div class="image">
                                                    <img src="{{asset('image/2job.jpeg')}}" height="200">
                                                    <div class="data p-3">
                                                        <h3>Full courses!</h3>
                                                        <p>A quick brown fox jumps over the lazy dog
                                                            A quick brown fox jumps over the lazy dog.
                                                        </p>
                                                        <button class="btn  text-white bgcolor">Apply Now!</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="swiper-slide control">
                                                <div class="image">
                                                    <img src="{{asset('image/3job.jpeg')}}" height="200">

                                                    <div class="data p-3">
                                                        <h3>Full courses!</h3>
                                                        <p>A quick brown fox jumps over the lazy dog
                                                            A quick brown fox jumps over the lazy dog.
                                                        </p>
                                                        <button class="btn text-white bgcolor">Apply Now!</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="swiper-slide control">
                                                <div class="image">
                                                    <img src="{{asset('image/1job.jpeg')}}" height="200">

                                                    <div class="data p-3">
                                                        <h3>Full courses!</h3>
                                                        <p>A quick brown fox jumps over the lazy dog
                                                            A quick brown fox jumps over the lazy dog.
                                                        </p>
                                                        <button class="btn text-white bgcolor">Apply Now!</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="swiper-slide control">
                                                <div class="image">
                                                    <img src="{{asset('image/2job.jpeg')}}" height="200">

                                                    <div class="data p-3">
                                                        <h3>Full courses!</h3>
                                                        <p>A quick brown fox jumps over the lazy dog
                                                            A quick brown fox jumps over the lazy dog.
                                                        </p>
                                                        <button class="btn text-white bgcolor">Apply Now!</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="swiper-slide control">
                                                <div class="image">
                                                    <img src="{{asset('image/3job.jpeg')}}" height="200">

                                                    <div class="data p-3">
                                                        <h3>Full courses!</h3>
                                                        <p>A quick brown fox jumps over the lazy dog
                                                            A quick brown fox jumps over the lazy dog.
                                                        </p>
                                                        <button class="btn text-white bgcolor">Apply Now!</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="swiper-slide control">
                                                <div class="image">
                                                    <img src="{{asset('image/1job.jpeg')}}" height="200">

                                                    <div class="data p-3">
                                                        <h3>Full courses!</h3>
                                                        <p>A quick brown fox jumps over the lazy dog
                                                            A quick brown fox jumps over the lazy dog.
                                                        </p>
                                                        <button class="btn text-white bgcolor">Apply Now!</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="swiper-slide control">
                                                <div class="image">
                                                    <img src="{{asset('image/2job.jpeg')}}" height="200">

                                                    <div class="data p-3">
                                                        <h3>Full courses!</h3>
                                                        <p>A quick brown fox jumps over the lazy dog
                                                            A quick brown fox jumps over the lazy dog.
                                                        </p>
                                                        <button class="btn text-white bgcolor">Apply Now!</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="swiper-slide control">
                                                <div class="image">
                                                    <img src="{{asset('image/3job.jpeg')}}" height="200">

                                                    <div class="data p-3">
                                                        <h3>Full courses!</h3>
                                                        <p>A quick brown fox jumps over the lazy dog
                                                            A quick brown fox jumps over the lazy dog.
                                                        </p>
                                                        <button class="btn text-white bgcolor">Apply Now!</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="swiper-button-next"></div>
                                                                                                                  <div class="swiper-button-prev"></div> -->
                                    <div class="swiper-pagination"></div>

                                </div>
                            </div>
                            <div class="col-md-12 para">
                                <h3 class="py-3">Working With Us</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus odit asperiores
                                    ullam obcaecati vel, consequuntur natus cupiditate impedit autem! Illo, exercitationem
                                    quos distinctio cum earum impedit aperiam molestias tempore corporis.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus odit asperiores
                                    ullamLorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus odit
                                    asperiores ullam obcaecati vel, consequuntur natus cupiditate impedit autem! Illo,
                                    exercitationem quos distinctio cum earum impedit aperiam molestias tempore corporis.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus odit asperiores
                                    ullam
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    @endsection


    @push('script')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <!-- Swiper JS -->
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
        </script>

    @endpush
