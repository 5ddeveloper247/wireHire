@extends('condidate_interfaces.layout.master')
@push('title', 'condidate dashboard')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <style>
   
        #endbtn{
            margin-right: 50px;
            margin-top: 20px;
            background-color: #1d1c47; 
            color : white;
        }
        
  .image img {
    width: 100%;
    height:200px;
  }

  .iconsd span i {
    font-size: 80px !important;
    color: #1d1c47 !important;
    float: right !important;
    line-height: 0px !important;

  }

  .parent {
    position: relative;
  }


 
  .imgprofile1 {
        background-image: url("{{asset('/image/1job.jpeg')}}");
     

      }
 



  .mainheading h3 {
    background-color: white;
    position: relative;
    top: 120px;
    font-weight: bold;
    width: 250px;
    font-size: 22px;
    white-space: nowrap;

  }
    </style>
@endpush

@section('main-content')
    @include('sweetalert::alert')
    <div class="row service m-0 mt-4">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="row">
                  
                
      <div class="row service m-0 mt-4">
        <div class="col-md-12">
          <div class="container-fluid">
            <div class="row">
              <div class="py-3 text-center bgcolor text-white h4 mt-5">Dashboard</div>

              <div class="col-md-12">
                <h2 class="mt-4">Job Opportunities</h2>
              </div>
              <div class="col-md-12  p-0 parent">
                <div class="servicebox">
                  <div class="swiper mySwiper">
                    <div class="swiper-wrapper mt-5">
                      <div class="swiper-slide control">
                        <div class="image">
                     
                          <img src="{{ asset('image/1job.jpeg') }}" class="img-fluid" />
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
                          <img src="{{ asset('image/2job.jpeg') }}" class="img-fluid" />
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
                          <img src="{{ asset('image/3job.jpeg') }}" class="img-fluid" />
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
                          <img src="{{ asset('image/1job.jpeg') }}" class="img-fluid" />
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
                          <img src="{{ asset('image/2job.jpeg') }}" class="img-fluid" />
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
                          <img src="{{ asset('image/3job.jpeg') }}" class="img-fluid" />
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
                          <img src="{{ asset('image/1job.jpeg') }}" class="img-fluid" />
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
                          <img src="{{ asset('image/2job.jpeg') }}" class="img-fluid" />
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
                          <img src="{{ asset('image/3job.jpeg') }}" class="img-fluid" />
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
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-pagination"></div>

                </div>
                <a href="{{route('job_listing')}}" class="btn text-white bgcolor float-end mt-4">View More</a>

              </div>
              <div class="col-md-5 mb-5 bgcolor m-auto para">
                <div class="row">
                  <div class="col-md-8 my-5 m-auto p-0 bg-white">
                    <div class="swiper-slidenone bg-white">
                      <div class="dataimage">
                        <div class="imgprofile1 " style="height: 200px">
                          
                          <div class="mainheading">
                            <h3 class="py-3 px-2">Application Status</h3>
                          </div>
                        </div>
                        <!-- <img src="image/2job.jpeg" style="height: 200px" /> -->
                        <div class="dataslide p-3">
                          <h1></h1>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Delectus nisi enim veritatis, deleniti
                            temporibus quia dolorum,
                          </p>
                          <div class="iconsd ">
                            <span> <i class="bi bi-arrow-right-short "></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
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
