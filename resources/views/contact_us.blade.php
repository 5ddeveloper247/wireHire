@extends('layout.master')
@push('title', 'Contact')
@push('css')
     <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"   type="text/css"  />
     <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

@endpush

@section('main-content')
      <div class="body">
      <div class="top container-fluid">
        <div class="navbar1">
          <div class="navdata1 p">
         <img src="{{asset('image/logo.png')}}" class="img-fluid">
          </div>
          <div class="navdata2 pt-3">
            <h2>WireHire</h2>
          </div>
          <div class="navdata3 mx-3 mt-3">
            <form class="d-flex">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
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
        <div class="page3 my-5 pt-5">
          <div class="col-md-9 m-auto">
            <div class="py-3 text-center bgcolor text-white h4">Contact Us</div>
          </div>
          <div class="container">
            <div class="row mt-5">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-12 bggrey py-5">
                        <div class="box3 contactus">
                          <span
                            ><i class="fa-brands fa-square-facebook"></i
                          ></span>
                          <span><i class="fa-brands fa-twitter"></i></span>
                          <span
                            ><i class="fa-sharp fa-solid fa-phone"></i
                          ></span>
                          <span
                            ><i class="fa-brands fa-square-youtube"></i
                          ></span>
                        </div>
                      </div>
                      <div class="col-md-12 bggrey mt-3 py-4">
                        <div class="bsdo">
                          <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit.
                          </p>
                        </div>
                      </div>
                      <div class="col-md-12 mt-3 mb-5">
                        Name
                        <input type="text" class="form-control" />
                        Email
                        <input type="text" class="form-control" />
                        Phone Number
                        <input type="text" class="form-control" />
                        <h4>Message</h4>
                        <textarea class="form-control"> </textarea>
                        <button class="btn bgcolor text-white btn-lg mt-3">
                          Submit
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="map">
                      <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14946775.009361725!2d34.39896776306769!3d23.850050061350938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi%20Arabia!5e0!3m2!1sen!2s!4v1674623410909!5m2!1sen!2s"
                        width="100%"
                        height="600"
                        style="border: 0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                      ></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
                  <input  type="text" class="form-control"  placeholder="Search Here"   />
          
                  <span ><i class="fa-sharp fa-solid fa-magnifying-glass search"  ></i>  </span>
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('script')
    <script src="https://kit.fontawesome.com/b98cad50b5.js" crossorigin="anonymous" ></script>
@endpush