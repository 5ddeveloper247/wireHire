@extends('condidate_interfaces.layout.master')
@push('title','job listing interface 1')
@push('css')
    <style>
    /* .appbox:hover {
        position: absolute;
        max-width: 29%;
        height: auto;
        border: 4px solid #1d1c47;
    } */

    .appbox:hover>.text-center {
        display: block !important;
    }
</style>
@endpush
@section('main-content')
       <div class="page3 my-5 pt-5">
        <div class="col-md-9 m-auto">
          <div class="py-3 text-center bgcolor text-white h4">Job Opportunities</div>
          <div class="py-2 mt-4 text-center bgdarkgrey text-white h4">Filter <i
              class="fa-sharp fa-solid fa-filter float-end mx-2 text-black-50"></i></div>
        </div>
        <div class="container">
          <div class="row  mt-5">
            <div class="col-md-12">
              <div class="row text-white gy-4 mb-5">

             
                @foreach ($jobs as $job )
                @if($job->status == 1)
                <div class="col-md-4">
                 
                  <div class="appbox bgdarkgrey p-3">
                 
                    <h3>{{$job->job_title}}</h3>
                    <h6>{{$job->job_location}}</h6>
                    <p>

                      {{$job->job_description}}
                      {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati impedit modi quia odit magni
                      consequuntur repudiandae suscipit. Voluptatem porro eius dolorem voluptates consequuntur cumque
                      illum a ducimus asperiores, impedit quas! --}}
                    </p>

                    <div class="text-center" style="display: none;">
                      <button class="btn bgcolor btn-sm text-white mt-3 px-5 shoot1">Apply</button>
                    </div>
              
                  
                  </div>
                 
                </div>
                @endif
                @endforeach
                
               

              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@push('script')
       <!-- model -->
    <div class="model  pop2 d-none">

      <div class="col-md-5 m-auto bgcolor">

        <div class="text-center py-3">
          <p class="text-white">Your application was sent successfully</p>
          <button class="btn btn-light btn-sm px-3" onclick="bsdo();">ok</button>
        </div>


      </div>
      <!-- </divend model -->
      <script>
        $(".shoot1").click(function () {
          $('.model').removeClass('d-none');
        });

        function bsdo() {
          $('.model').addClass('d-none');
        } 
      </script>

      <script>

        function showSubMenu() {
          if ($('.submenu').css('display') != 'block') {
            $('.submenu').show();
          } else {
            $('.submenu').hide();
          }
        }

      </script>
 
@endpush