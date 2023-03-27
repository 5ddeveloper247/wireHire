@extends('FSU_Member_Interfaces.layout.master')
@push('title','fsu Member Interface')
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<style>
  html,
  body {
    position: relative;
    height: 100%;
  }

  body {
    background: #eee;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
  }
  .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: justify;
      font-size: 18px;
      background: rgb(255, 255, 255);

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .banner {
      height: 80vh;
    }
    .dataimage {
      positon: absolute;
      top: 0px;
      left: 0px;
    }
    .dataslide {
    }
    .page3 {
      background-color: #b4b6bf !important;
      height: auto;
    }
    .navdata1 {
      border-right: 1px solid #8186b2;
    }
    .navdata1 img {
      width: 100px;
      height: 76px;
    }
    .iconsd span i{
      font-size: 80px!important;
    color: #1d1c47!important;
    float: right!important;
    line-height: 0px!important;

    }
    .imgprofile{
      background-image: url("{{ asset('image/1job.jpeg')}}");
    }
    .imgprofile1{
      background-image: url("{{ asset('image/2job.jpeg')}}");
    }
    .imgprofile2{
      background-image: url("{{ asset('image/3job.jpeg')}}");
    }

    .mainheading h3 {
    background-color: white;
    position: relative;
    top: 120px;
    font-weight: bold;
    width: 220px;
    font-size: 16px;
    white-space: nowrap;
}
    .swiper-button-next:after, .swiper-rtl .swiper-button-prev:after {
    content: '';
}
    .swiper-button-next, .swiper-button-prev {
     position: relative; 
    top: 200%; 
     z-index: 10; 
     cursor: pointer; 
    display: flex;
    align-items: center;
    justify-content: center;
    }
.page3{
  background-color: white!important;
}.formselector a{
  text-decoration: none;
 color:black;
 background: #dedee6;
}
</style>
@endpush
@section('main-content')

<div class="page3 my-5 pt-5">
        <div class="row">
          <div class="col-md-9 m-auto">
            <h1 class="py-3 text-center bgcolor text-white h4">Dashboard</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-md-10 bgcolor p-5 m-auto my-5 p-0">
            <div class="Dashboardcard">
              <div class="swiper mySwiper ">
                
                <div class="swiper-wrapper">
                  <div class="swiper-slide formselector">
                    <a href="">
                    <div class="dataimage" style="background: #dedee6;height: auto;">
                      <div class="imgprofile" style="height: 200px">
                      <div class="mainheading">
                      <h3 class="py-3">Request Forms</h3>
                      </div>
                        </div>
                      <div class="dataslide p-3" >
                        <h1></h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Delectus nisi enim veritatis, deleniti
                          temporibus quia dolorum,
                        </p>
                        <div class="iconsd ">
                          <span>
                            <i class="bi bi-arrow-right-short "></i>
                          </span>
                        </div>
                      </div>
                    </div></a>
                  </div>
                  <div class="swiper-slide formselector">
                    <a href="" style="background-color:white;">
                    <div class="dataimage">
                      <div class="imgprofile1" style="height: 200px">
                        <div class="mainheading">
                         <h3 class="py-3">job positions</h3>
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
                  </a>
                  </div>
                  <div class="swiper-slide formselector">
                    <a href="">
                    <div class="dataimage" style="background: #dedee6;height: auto;">
                      <div class="imgprofile2" style="height: 200px">
                        <div class="mainheading">
                         <h3 class="py-3">Genegrate Reports</h3>
                        </div>
                       </div>
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
                  </a>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <div class="imgprofile1" style="height: 200px">
                        <div class="mainheading">
                         <h3 class="py-3">Monitor Website Traffic</h3>
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
                  
                  <div class="swiper-slide">
                    <div class="dataimage" style="background: #dedee6;height: auto;">
                      <div class="imgprofile2" style="height: 200px">
                        <div class="mainheading">
                         <h3 class="py-3">Generate Reports</h3>
                        </div>
                       </div>
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
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <div class="imgprofile1" style="height: 200px">
                        <div class="mainheading">
                         <h3 class="py-3">Request Form</h3>
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
                          <span> <i class="bi bi-arrow-right-short"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage" style="background: #dedee6;height: auto;">
                      <div class="imgprofile2" style="height: 200px">
                        <div class="mainheading">
                         <h3 class="py-3">Request Form</h3>
                        </div>
                       </div>
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
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <div class="imgprofile1" style="height: 200px">
                        <div class="mainheading">
                         <h3 class="py-3">Request Form</h3>
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
                          <span> <i class="bi bi-arrow-right-short"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage" style="background: #dedee6;height: auto;">
                      <div class="imgprofile2" style="height: 200px">
                        <div class="mainheading">
                         <h3 class="py-3">Request Form</h3>
                        </div>
                       </div>
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
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <div class="imgprofile1" style="height: 200px">
                        <div class="mainheading">
                         <h3 class="py-3">Request Form</h3>
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
                  <div class="swiper-slide">
                    <div class="dataimage" style="background: #dedee6;height: auto;">
                      <div class="imgprofile2" style="height: 200px">
                        <div class="mainheading">
                         <h3 class="py-3">Request Form</h3>
                        </div>
                       </div>
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
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <div class="imgprofile1" style="height: 200px">
                        <div class="mainheading">
                         <h3 class="py-3">Request Form</h3>
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
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div> -->

              </div>
            </div>
          </div>
        </div>

      </div>
@endsection

@push('script')
      <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 0,
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