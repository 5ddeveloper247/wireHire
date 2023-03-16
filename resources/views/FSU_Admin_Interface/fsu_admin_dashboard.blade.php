@extends('FSU_Admin_Interface.layout.master')
@push('title','Fsu Dashboard')
@push('css')
     <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
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
    .navdata1 {    border-right: 1px solid #8186b2;

    }
    .navdata1 img{
    width: 100px;
    height: 76px;
    }
  </style>
@endpush

@section('main-content')
       <div class="row">

          <div class="page3 my-5 pt-5">
           <div class="row">
          <div class="col-md-9 m-auto">
            <h1 class="py-3 text-center bgcolor text-white h4">Dashboard</h1>
          </div>
        </div>

          <div class="col-md-12 my-5 p-0">
            <div class="Dashboardcard">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <img src="{{asset('image/background.jpg')}}" class="img-fluid" />

                      <div class="dataslide p-3">
                        <h1>heading</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Delectus nisi enim veritatis, deleniti
                          temporibus quia dolorum, provident doloribus
                          dignissimos minima optio sed consequuntur vel dolor
                          voluptatum corporis. Laboriosam, suscipit inventore!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <img src="{{asset('image/background.jpg')}}" class="img-fluid" />

                      <div class="dataslide p-3">
                        <h1>heading</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Delectus nisi enim veritatis, deleniti
                          temporibus quia dolorum, provident doloribus
                          dignissimos minima optio sed consequuntur vel dolor
                          voluptatum corporis. Laboriosam, suscipit inventore!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <img src="{{asset('image/background.jpg')}}" class="img-fluid" />

                      <div class="dataslide p-3">
                        <h1>heading</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Delectus nisi enim veritatis, deleniti
                          temporibus quia dolorum, provident doloribus
                          dignissimos minima optio sed consequuntur vel dolor
                          voluptatum corporis. Laboriosam, suscipit inventore!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <img src="{{asset('image/background.jpg')}}"  class="img-fluid" />

                      <div class="dataslide p-3">
                        <h1>heading</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Delectus nisi enim veritatis, deleniti
                          temporibus quia dolorum, provident doloribus
                          dignissimos minima optio sed consequuntur vel dolor
                          voluptatum corporis. Laboriosam, suscipit inventore!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <img src="{{asset('image/background.jpg')}}" class="img-fluid" />

                      <div class="dataslide p-3">
                        <h1>heading</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Delectus nisi enim veritatis, deleniti
                          temporibus quia dolorum, provident doloribus
                          dignissimos minima optio sed consequuntur vel dolor
                          voluptatum corporis. Laboriosam, suscipit inventore!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <img src="{{asset('image/background.jpg')}}" class="img-fluid" />

                      <div class="dataslide p-3">
                        <h1>heading</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Delectus nisi enim veritatis, deleniti
                          temporibus quia dolorum, provident doloribus
                          dignissimos minima optio sed consequuntur vel dolor
                          voluptatum corporis. Laboriosam, suscipit inventore!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <img src="{{asset('image/background.jpg')}}" class="img-fluid" />

                      <div class="dataslide p-3">
                        <h1>heading</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Delectus nisi enim veritatis, deleniti
                          temporibus quia dolorum, provident doloribus
                          dignissimos minima optio sed consequuntur vel dolor
                          voluptatum corporis. Laboriosam, suscipit inventore!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <img src="{{asset('image/background.jpg')}}" class="img-fluid" />

                      <div class="dataslide p-3">
                        <h1>heading</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Delectus nisi enim veritatis, deleniti
                          temporibus quia dolorum, provident doloribus
                          dignissimos minima optio sed consequuntur vel dolor
                          voluptatum corporis. Laboriosam, suscipit inventore!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <img src="{{asset('image/background.jpg')}}" class="img-fluid" />

                      <div class="dataslide p-3">
                        <h1>heading</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Delectus nisi enim veritatis, deleniti
                          temporibus quia dolorum, provident doloribus
                          dignissimos minima optio sed consequuntur vel dolor
                          voluptatum corporis. Laboriosam, suscipit inventore!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <img src="{{asset('image/background.jpg')}}" class="img-fluid" />

                      <div class="dataslide p-3">
                        <h1>heading</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Delectus nisi enim veritatis, deleniti
                          temporibus quia dolorum, provident doloribus
                          dignissimos minima optio sed consequuntur vel dolor
                          voluptatum corporis. Laboriosam, suscipit inventore!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <img src="{{asset('image/background.jpg')}}" class="img-fluid" />

                      <div class="dataslide p-3">
                        <h1>heading</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Delectus nisi enim veritatis, deleniti
                          temporibus quia dolorum, provident doloribus
                          dignissimos minima optio sed consequuntur vel dolor
                          voluptatum corporis. Laboriosam, suscipit inventore!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <img src="{{asset('image/background.jpg')}}" class="img-fluid" />

                      <div class="dataslide p-3">
                        <h1>heading</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Delectus nisi enim veritatis, deleniti
                          temporibus quia dolorum, provident doloribus
                          dignissimos minima optio sed consequuntur vel dolor
                          voluptatum corporis. Laboriosam, suscipit inventore!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="dataimage">
                      <img src="{{asset('image/background.jpg')}}" class="img-fluid" />

                      <div class="dataslide p-3">
                        <h1>heading</h1>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Delectus nisi enim veritatis, deleniti
                          temporibus quia dolorum, provident doloribus
                          dignissimos minima optio sed consequuntur vel dolor
                          voluptatum corporis. Laboriosam, suscipit inventore!
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>

                <!-- <div class="maincarddo 
 cardcolor" id="a">
            <div class="dashboardimg ">
              <img src="image/1 (4).jpg" class="img-fluid">
              <div class="data p-3 " >
                <p class=" justify-content-end">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, autem dolore totam sed dignissimos ratione quidem commodi eaque accusamus quod odit molestiae.</p>
                <a class="float-end">
                  <span>
                    <i class="fa-solid fa-arrow-right"></i>
                  </span>
                </a>
              </div>
            </div>  
            </div>
            <div class="maincarddo 
 " id="a">
            <div class="dashboardimg ">
              <img src="image/1(16).jpg" class="img-fluid">
              <div class="data p-3 " >
                <p class=" justify-content-end">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, autem dolore totam sed dignissimos ratione quidem commodi eaque accusamus quod odit molestiae.</p>
                <a class="float-end">
                  <span>
                    <i class="fa-solid fa-arrow-right"></i>
                  </span>
                </a>
              </div>
            </div>  
            </div>
            <div class="maincarddo 
 cardcolor" id="a">
            <div class="dashboardimg ">
              <img src="image/1 (4).jpg" class="img-fluid">
              <div class="data p-3 " >
                <p class=" justify-content-end">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, autem dolore totam sed dignissimos ratione quidem commodi eaque accusamus quod odit molestiae.</p>
                <a class="float-end">
                  <span>
                    <i class="fa-solid fa-arrow-right"></i>
                  </span>
                </a>
              </div>
            </div>  
            </div>
            <div class="maincarddo 
" id="a">
            <div class="dashboardimg ">
              <img src="image/1(16).jpg" class="img-fluid">
              <div class="data p-3 " >
                <p class=" justify-content-end">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, autem dolore totam sed dignissimos ratione quidem commodi eaque accusamus quod odit molestiae.</p>
                <a class="float-end">
                  <span>
                    <i class="fa-solid fa-arrow-right"></i>
                  </span>
                </a>
              </div>
            </div>  
            </div>
            <div class="maincarddo 
 cardcolor" id="a">
            <div class="dashboardimg ">
              <img src="image/1 (4).jpg" class="img-fluid">
              <div class="data p-3 " >
                <p class=" justify-content-end">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, autem dolore totam sed dignissimos ratione quidem commodi eaque accusamus quod odit molestiae.</p>
                <a class="float-end">
                  <span>
                    <i class="fa-solid fa-arrow-right"></i>
                  </span>
                </a>
              </div>
            </div>  
            </div> -->
              </div>
            </div>
          </div>
        </div>
@endsection

@push('script')
     <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
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