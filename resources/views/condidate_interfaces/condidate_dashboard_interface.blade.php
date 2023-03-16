@extends('condidate_interfaces.layout.master')
@push('title', 'condidate dashboard')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <style>
        .image img {
            width: 100%;
        }
    </style>
@endpush

@section('main-content')
    @include('sweetalert::alert')
    <div class="row service m-0 mt-4">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="row">
                    <div class="py-3 text-center bgcolor text-white h4 mt-5">Dashboard</div>

                    <div class="col-md-12">
                        <h2 class="mt-4">Job Opportunities</h2>
                    </div>
                    <div class="col-md-12  p-0">
                        <div class="servicebox">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper mt-5">
                                    <div class="swiper-slide control">
                                        <div class="image">
                                            <img src="{{ asset('image/1job.jpeg') }}" height="200">
                                            <div class="data p-3">
                                                <h3>Full courses!</h3>
                                                <p>A quick brown fox jumps over the lazy dog
                                                    A quick brown fox jumps over the lazy dog.
                                                </p>
                                                <a class="text-white text-decoration-none"
                                                    href="Sign up Interface (Academic Information).html"><button
                                                        class="btn  text-white bgcolor">Apply Now!</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide control">
                                        <div class="image">
                                            <img src="{{ asset('image/2job.jpeg') }}" height="200">
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
                                            <img src="{{ asset('image/3job.jpeg') }}" height="200">
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
                                            <img src="{{ asset('image/background.jpg') }}" height="200">
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
                                            <img src="{{ asset('image/background.jpg') }}" height="200">
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
                                            <img src="{{ asset('image/background.jpg') }}" height="200">
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
                                            <img src="{{ asset('image/background.jpg') }}" height="200">
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
                                            <img src="{{ asset('image/background.jpg') }}" height="200">
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
                                            <img src="{{ asset('image/background.jpg') }}" height="200">
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus odit asperiores ullam
                            obcaecati vel, consequuntur natus cupiditate impedit autem! Illo, exercitationem quos distinctio
                            cum earum impedit aperiam molestias tempore corporis.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus odit asperiores ullamLorem
                            ipsum dolor sit amet consectetur adipisicing elit. Repellendus odit asperiores ullam obcaecati
                            vel, consequuntur natus cupiditate impedit autem! Illo, exercitationem quos distinctio cum earum
                            impedit aperiam molestias tempore corporis.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus odit asperiores ullam
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')
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
    {{-- <script>
   
  function showSubMenu(){
      if($('.submenu').css('display') != 'block'){
        $('.submenu').show();
      }else{
        $('.submenu').hide();
      }
  }

</script> --}}
@endpush
