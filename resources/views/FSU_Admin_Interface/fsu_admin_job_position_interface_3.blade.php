@extends('FSU_Admin_Interface.layout.master')
@push('title','job position interface 3')
@push('css')
<style>
.form-check-input:checked{
  background-color: #00934e;
  border-color: #06ff8b;
}

.loader {
    width: 48px;
    height: 48px;
    border: 5px solid #FFF;
    border-bottom-color: #FF3D00;
    border-radius: 50%;
    display: inline-block;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
    display: none;
    }
</style>

@endpush
@section('main-content')
 
@include('sweetalert::alert')

    <div class="body">
         <div class="page3 my-5 py-5">
          <div class="row m-0">
            <h4 class="text-white text-center py-3 bgcolor">Job Positions</h4>
            <div class="col-md-12">
              <div class="tablebox">
                <table class="table table-responsive border" id="example">
                  <thead>
                    <th>Job ID</th>
                    <th>Job Title</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Author</th>
                    <th>Release Date</th>
                    <th>Status</th>
                  </thead>
                  <tbody>

                    @foreach ($positions as $position )
                        
                    
                    <tr>
                      <td>{{$position->id}}</td>
                 
                      <td>{{$position->job_location}}</td>
                      <td>{{$position->job_position}}</td>
                      <td>{{$position->Department->department}}</td>
                      
                      <td>
                        {{ $position->user->name ?? 'null' }}
                      </td>
                      <td>{{ $position->created_at->format('d/m/Y') }}</td>
                     
                      <td >
                        
                        <form action="{{route('change.status',$position->id)}}" method="post">
                            @csrf
                            <button type="submit"  name="changeStatus"  class="btn {{$position->status == 1 ? 'btn-success' : 'btn-danger' }} ">
                               {{$position->status == 1 ? 'Active' : 'In Active'  }}
                               
                              
                              </button>
                              <span class="loader"></span>
                        </form>
                      </td>
                    </tr>

                    @endforeach
                    {{-- <button class="btn bgcolor text-white my-3 shoot1">Filter <i
                      class="fa-sharp fa-solid fa-filter "></i></button> --}}
                    <button
                      class="btn shoot2 float-end bgcolor text-white my-3 mx-3"
                    >
                      Add
                    </button>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
        </div>

{{-- form for seting job announcment and job criteria --}}
 
<form action="{{route('job_position')}}" method="post">
@csrf

  <div class="pop2Main model setcriteria d-none">
    <div class="row p-3">
      <div class="col-md-5 m-auto bg-white popadd">
        <div class="page6box py-3 p-2">
          <span style="font-size: 22px; font-weight: bold;">Set Criteria</span>
          <i class="fa-solid bandeka fa-xmark" onclick="bsdo1();"></i>
        </div>
        <div class="row p-2 mb-5">

          <div class="col-md-6">
            <p style="font-size: 15px; font-weight: bold;" >Years of Experience</p>
          </div>

          <div class="col-md-6">
            <input class="form-control mb-3" type="number" name="year_of_experience" />
            @error('year_of_experience')
            <div class="text-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="col-md-6">
            <p style="font-size: 15px; font-weight: bold;" >University Ranking</p>
          </div>

          <div class="col-md-6">
            <input class="form-control mb-3" type="number" name="university_ranking" />
            @error('university_ranking')
            <div class="text-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="col-md-6">
            <p style="font-size: 15px; font-weight: bold;">
              Numbers of Certificates
            </p>
          </div>

          <div class="col-md-6">
            <input type="number" class="form-control mb-3" name="number_of_certificate" />
            @error('number_of_certificate')
            <div class="text-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="col-md-6">
            <p style="font-size: 15px; font-weight: bold;">Number of Skills</p>
          </div>
            <div class="col-md-6">
            <input type="number" class="form-control mb-3" name="no_of_skill" />
             @error('no_of_skill')
            <div class="text-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="col-md-6">
            <p style="font-size: 15px; font-weight: bold;" type="text" >Field Experience:</p>
          </div>

          <div class="col-md-6">
            <input class="form-control mb-3" name="field_experience" />
            @error('field_experience')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <a href="#" class="btn btn-outline-secondary btn-md" onclick="bsdo1();">Previous</a>
            <button href="#" type="submit"  class="btn btn-outline-secondary btn-md next" >Submit</>
          </div>
        </div>
      </div>
    </div>
  </div>


    
  <div class="pop1 model1 d-none">
    <div class="row p-3">
      <div class="col-md-5 m-auto bg-white popadd">
        <div class="page6box py-3 p-2">
          <span style="font-size: 22px; font-weight: bold;"
            >Job Announcement</span
          >
          <i class="fa-solid bandeka fa-xmark" onclick="bsdo2();"></i>
        </div>
        <input type="h" name="user_id" value="{{session()->get('user_login')}}" hidden>
        <div class="row p-2 mb-5">
          <div class="col-md-6">
            <p style="font-size: 15px; font-weight: bold;">Job Title:</p>
          </div>

          <div class="col-md-6">
            <input class="form-control mb-3" type="text"   name="job_title" />
            @error('job_title')
                <div class="text-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="col-md-6">
            <p style="font-size: 15px; font-weight: bold;">Job Location:</p>
          </div>

          <div class="col-md-6">
            <input class="form-control mb-3" type="text" name="job_location" />
            @error('job_location')
            <div class="text-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="col-md-6">
            <p style="font-size: 15px; font-weight: bold;">Job Position:</p>
          </div>

          <div class="col-md-6">
            <input class="form-control mb-3" type="text" name="job_position" />
            @error('job_position')
            <div class="text-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="col-md-6">
            <p style="font-size: 15px; font-weight: bold;" >Department:</p>
          </div>

          <div class="col-md-6">
            <select  name="department" class="form-control mb-3">
              <option value='' selected>--select--</option>
              @foreach ($departs as $depart )
              <option value="{{$depart->id}}">{{$depart->department}}</option>
              @endforeach
             
            </select>
            @error('department')
            <div class="text-danger">{{$message}}</div>
           @enderror
          </div>

          <div class="col-md-6">
            <p style="font-size: 15px; font-weight: bold;" >Job Description:</p>
          </div>

          <div class="col-md-6">
            <input class="form-control mb-3" type="text" name="job_description" />
            @error('job_description')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <a href="#" class="btn btn-outline-secondary btn-md" onclick="bsdo2();">Cancel</a>
            <a href="#" class="btn btn-outline-secondary btn-md next">Next</a>
          </div>
        </div>
      </div>
    </form>
    </div>

  </div>



</div>


        

@endsection
@push('script')
     <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>



      $(document).ready(function () {
        $("#example").DataTable();
      });
 
   
 
      $(".shoot1").click(function () {
        $(".model").removeClass("d-none");
      });
      $(".next").click(function () {
        $(".setcriteria").removeClass("d-none");
      });

     
      function bsdo1() {
        $(".model").addClass("d-none");
      }

      $(".shoot2").click(function () {
        $(".model1").removeClass("d-none");
      });
      function bsdo2() {
        $(".model1").addClass("d-none");
      }

      
  
   
      function showSubMenu(){
          if($('.submenu').css('display') != 'block'){
            $('.submenu').show();
          }else{
            $('.submenu').hide();
          }
      }
    
    </script>
@endpush