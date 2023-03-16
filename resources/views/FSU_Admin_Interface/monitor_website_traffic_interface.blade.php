@extends('FSU_Admin_Interface.layout.master')
@push('title','Monitor Website traffic')
@push('css')
 <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"/>
@endpush
@section('main-content')
       <div class="page3 my-5 py-5">
          <div class="row m-0">
            <h4 class="text-white text-center py-3 bgcolor">
              Monitor Website Traffic
            </h4>
            <div class="col-md-12 py-5 bgmonitre">
              <div class="row">
                <div class="col-md-4 eye">
                  <div class="monit text-center py-5 bg-white rounded-3 m-4">
                    <i class="fa-solid fa-eye"></i>
                    <h1 class="my-4">1,243</h1>
                    <p>Total Numbers of Visits</p>
                  </div>
                </div>
                <div class="col-md-4 eye">
                  <div class="monit text-center py-5 bg-white rounded-3 m-4">
                    <i class="fa-regular fa-square-check"></i>
                    <h1 class="my-4">343</h1>
                    <p>Number of Unique Visits</p>
                  </div>
                </div>
                <div class="col-md-4 eye">
                  <div class="monit text-center py-5 bg-white rounded-3 m-4">
                    <i class="fa-solid fa-eye"></i>
                    <h1 class="my-4">1,243</h1>
                    <p>Average Visits Duration</p>
                  </div>
                </div>
                <div class="col-md-8 eye">
                  <div class="monit text-center bg-white rounded-3 m-4">
                    <img src="{{asset('image/1.png')}}" class="img-fluid w-100" />
                  </div>
                </div>
                <div class="col-md-4 eye">
                  <div class="monit text-center py-4 bg-white rounded-3 m-4">
                    <img src="{{asset('image/2.png')}}" class="img-fluid w-100" />
                  </div>
                </div>
              </div>
              <button class="btn btn-sm bgcolor text-white mx-4 px-5">
                Print
              </button>
            </div>
          </div>
        </div>
@endsection
@push('script')
    <script>
   
      function showSubMenu(){
          if($('.submenu').css('display') != 'block'){
            $('.submenu').show();
          }else{
            $('.submenu').hide();
          }
      }
    
    </script>
@endpush