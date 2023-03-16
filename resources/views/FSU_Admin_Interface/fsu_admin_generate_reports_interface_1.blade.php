@extends('FSU_Admin_Interface.layout.master')
@push('title','Generates Reports interface 1')
@push('css')
 
@endpush
@section('main-content')
        <h4 class="text-white text-center py-3 bgcolor">
          Generate Reports
        </h4>
        <div class="page3  py-3">
          <div class="row m-0 py-5">
           <div class="col-md-8 py-5 m-auto border">
            <div class="row">
              <div class="col-md-3">
            <h4>Select KPIs:</h4>
              </div>
              <div class="col-md-3">
                        <h6>
                <input type="checkbox">
                Previous Experience 
                </h6>
                <h6>
                <input type="checkbox">
                Skills
                </h6>
                <h6>
                <input type="checkbox">
                Graduation Year
                </h6>
                <h6>
                <input type="checkbox">
                Education 
                </h6>
                <h6>
                <input type="checkbox">
                Certifactes 
                </h6>
           </div>
              <div class="col-md-3">
            <h4>Select Job Listing:</h4>
              </div>
              <div class="col-md-3">
                <h6>
                <input type="checkbox">
                Previous Experience 
                </h6>
                <h6>
                <input type="checkbox">
                Skills
                </h6>
                <h6>
                <input type="checkbox">
                Graduation Year
                </h6>
                <h6>
                <input type="checkbox">
                Education 
                </h6>
                <h6>
                <input type="checkbox">
                Certifactes 
                </h6>

            </div>
                </div>

                    <a class="text-dark text-decoration-none" href="{{route('fsu_admin_generate_reports2')}}"> <button class="btn bgcolor text-white inline float-end mx-1">Generate Report</button></a>
                        
                    <a class="text-dark text-decoration-none" href="{{route('fsu_dashboard')}}">  <button class="btn btn-outline-secondary inline float-end mx-1">Cancel</button></a>
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