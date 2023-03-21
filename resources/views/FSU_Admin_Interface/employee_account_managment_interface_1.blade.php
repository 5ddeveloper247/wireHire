@extends('FSU_Admin_Interface.layout.master')
@push('title','view employe account')
@push('css')
    
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"/>   
   
@endpush

@section('main-content')

@include('sweetalert::alert')


    <div class="body">
        <div class="page3 my-5 py-5">
          <div class="row m-0">
            <h4 class="text-white text-center py-3 bgcolor">
              Employe Acccount Management
            </h4>
            <div class="col-md-12">
              <div class="tablebox">
                <table class="table table-responsive border" id="example">
                  <thead>
                    <th>Employe Name</th>
                    <th>Position</th>
                    <th>University ID</th>
                    <th>Department</th>
                    <th>College</th>
                    <th>More Information</th>
                    <th>Archive</th>
                    <th>Delete</th>
                 
                  </thead>

                  <tbody>
                    @foreach ($employees as $employee )

                    {{-- checking for archieved accounts --}}

                    @if($employee->employee_status == 0)
                    <tr>
                      <td>{{$employee->name}}</td>
                      <td>
                      
                        @if($employee->position == 2)
                            {{'Fsu Member'}}
                        @elseif($employee->position == 3)
                          {{'Fsu Department Chair'}}
                        @elseif($employee->position == 4)
                          {{'Fsu Department viewer'}}
                        @endif

                        
                      </td>
                      
                      <td>{{$employee->university_id}}</td>
                      <td>{{$employee->Department->department}}</td>
                      <td>{{$employee->college}}</td>
                      <td><a class="text-decoration-none" href="{{route('fsu_view_employe_view',$employee->id)}}">View Profile</a></td>
                      <td class="text-center text-white">
                        <form action="{{route('change.archieved.status',$employee->id)}}" method="post">
                          @csrf
                          <button type="submit"  name="changeStatus"  class="btn {{$employee->employee_status == 1 ? 'btn-success' : 'btn-danger' }} ">
                             {{$employee->employee_status == 1 ? 'Active' : 'In Active'  }}
                             
                            
                            </button>
                            <span class="loader"></span>
                         </form>
                      </td>
                      <td class="text-center text-white">
                        <a href="{{route('delete.employe.record',$employee->id)}}" style="text-decoration:none ; color : white"><i class="fa-solid fa-trash bg-danger p-3"></i></a>
                        
                      </td>
                    </tr>
                    @endif
                    @endforeach
                    <a class="text-white text-decoration-none" href="{{route('fsu_admin_archieved_accounts')}}"><button class="btn bgcolor text-white my-3">
                      View Archieved Employes
                    </button></a>
                    <button class="btn bgcolor text-white my-3 mx-3 shoot1">
                      Add New Employes
                    </button>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>

        <!-- mmodel  and form  -->

        <form action="{{route('fsuadmin.add_employe')}}" method="post">
          @csrf

          
  <div class="pop1 d-none">
      <div class="row">
        <div class="col-md-10 m-auto bg-white mt-2">
    <div class="row p-2 mb-5">
      <div class="row m-0">
        <h4 class="text-white text-center py-3 bgcolor"> Employe Acccount Management   <i class="fa-solid bandeka   fa-xmark " onclick="bsdo();"></i></h4>
        <div class="col-md-12 m-auto my-4">
          <div class="row">
            <div class="col-md-2">
              Employee Name
            </div>
            <div class="col-md-10 my-">
              <input class="form-control mb-2" name="name">
              @error('name')
                  <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="col-md-2">
              Employee Position
            </div>
            <div class="col-md-10 my-">
              <select name="position" class="form-control mb-2 selectdo">
                <option value='' selected>--Select--</option>
                <option value="2">Fsu Member</option>
                <option value="3">Deprtment Chair</option>
                <option value="4">Deprtment Viewer</option>

                {{-- <option>Fsu viewer</option>
                <option>4rth</option> --}}
                </select>
                @error('position')
                <div class="text-danger">{{$message}}</div>
               @enderror
            </div>

            <div class="col-md-2">
             Gender
            </div>
            <div class="col-md-10 my-">
              <select class="form-control mb-2 selectdo" name="gender">
                <option selected>--Select--</option>
                <option value="female">Female</option>
                <option value="male">Male</option>
              
                </select>

                @error('gender')
                <div class="text-danger">{{$message}}</div>
               @enderror
            </div>
            <div class="col-md-2">
              National ID
            </div>
            <div class="col-md-10 my-">
              <input class="form-control mb-2" type="number" name="national_id">
              @error('national_id')
              <div class="text-danger">{{$message}}</div>
              @enderror
            </div>

            <div class="col-md-2">
              University ID
            </div>
            <div class="col-md-10 my-">
              <input class="form-control mb-2" type="number" name="university_id">
              @error('university_id')
              <div class="text-danger">{{$message}}</div>
             @enderror
            </div>
            <div class="col-md-2">
              Email Address
            </div>
            <div class="col-md-10 my-">
              <input class="form-control mb-2" name="email_address">
              @error('email')
              <div class="text-danger">{{$message}}</div>
          @enderror
            </div>
            <div class="col-md-2">
             Department
            </div>
            <div class="col-md-10 my-">
              <select class="form-control mb-2 selectdo" name="department">
                <option value='' selected>--Select--</option>
                @foreach ($departs as $depart )
                <option value="{{$depart->id}}">{{$depart->department}}</option>
                @endforeach

                </select>
                @error('department')
                <div class="text-danger">{{$message}}</div>
            @enderror
            </div>
            <div class="col-md-2">
             College
            </div>
            <div class="col-md-10 my-">
              <input class="form-control mb-2" name="college">
              @error('college')
              <div class="text-danger">{{$message}}</div>
          @enderror
            </div>
            <div class="col-md-2">
             Telephone Number
            </div>
            <div class="col-md-10 my-">
              <input class="form-control mb-2" name="tel_number">
              @error('tel_number')
              <div class="text-danger">{{$message}}</div>
          @enderror
            </div>
            <div class="col-md-2">
             Address
            </div>
            <div class="col-md-10 my-">
              <input class="form-control mb-2" name="address">
              @error('address')
              <div class="text-danger">{{$message}}</div>
          @enderror
              
            <button class="btn btn-outline-secondary float-end mx-2" onclick="bsdo();">Cancel</button>
            <button class="btn btn-outline-secondary float-end">Save</button>
            </div>
          </div>
        </div>
        </div>
    
    </div>
    
        </div>
      </div>
    </div>
  </form>
    <!-- end model -->
@endsection

@push('script')
       <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
         <script src="https://kit.fontawesome.com/b98cad50b5.js" crossorigin="anonymous" ></script>
   
    <script>
      $(document).ready(function () {
        $("#example").DataTable();
      });
    </script>
    <script>
      $(".shoot1").click(function () {
        $(".pop1").removeClass("d-none");
      });
 
      function bsdo() {
        $(".pop1").addClass("d-none");
      }

    </script>
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