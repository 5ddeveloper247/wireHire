@extends('condidate_interfaces.layout.master')
@push('title','Application status')
@push('css')

@endpush
@section('main-content')
      <div class="page3 my-5 pt-5">
          <div class="col-md-9 m-auto">
            <div class="py-3 text-center bgcolor text-white h4">Application Status</div>
          </div>
          <div class="container">
            <div class="row mt-5">
              <div class="col-md-12">
                <div class="row mb-5">
                  <div class="col-md-4">
                    <div class="appbox bggrey p-3">
                      <h5>Job Title 1</h5> 
                      <p>Application Date: 16/10/2020</p>
                      <h5>STATUS: <span style="font-weight:bold;color:rgb(19, 195, 19);">Approved for Interview</span></h5>
                      <p>Interview Date/Time: 6/11/2022, 10AM</p>
                      <button class="btn bgcolor text-white float-">View Job Details</button>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="appbox bggrey p-3">
                      <h5>Job Title 1</h5>
                      <p>Application Date: 16/10/2020</p>
                      <h5>STATUS: <span style="font-weight:bold;color:rgb(19, 195, 19);">Approved for Interview</span></h5>
                      <p>Interview Date/Time: 6/11/2022, 10AM</p>
                      <button class="btn bgcolor text-white float-">View Job Details</button>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="appbox bggrey p-3">
                      <h5>Job Title 1</h5>
                      <p>Application Date: 16/10/2020</p>
                      <h5>STATUS: <span style="font-weight:bold;color:rgb(19, 195, 19);">Approved for Interview</span></h5>
                      <p>Interview Date/Time: 6/11/2022, 10AM</p>
                      <button class="btn bgcolor text-white float-">View Job Details</button>
                    </div>
                  </div>
                  </div>
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