@extends('FSU_Admin_Interface.layout.master')
@push('title','Archieved Account')
@push('css')
 <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"/>
@endpush
@section('main-content')

    

     <div class="body">

          <div class="page3 my-5 py-5">
            <a href="{{route('fsu_admin_employee_account')}}" class="btn btn-danger mb-2 ms-3" style="background-color: #1d1c47">Employe,s Account</a>
          <div class="row m-0">
            <h4 class="text-white text-center py-3 bgcolor">
              Archieved Accounts
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
                    <th>Activate Employee</th>
                  </thead>

                  <tbody>

                    @foreach ($employes as $employe )

                      @if($employe->employee_status == 1)

                      <tr>
                        <td>{{$employe->name}}</td>
                        <td>
                          @if($employe->position == 2)
                          {{'Fsu Member'}}
                          @elseif($employe->position == 3)
                          {{'Fsu Department Chair'}}
                          @elseif($employe->position == 4)
                          {{'Fsu Department viewer'}}
                        @endif
                        </td>
                        <td>{{$employe->university_id}}</td>
                        <td>{{$employe->Department->department}}</td>
                        <td>{{$employe->college}}</td>
                        <td>View Profile</td>
                        <td class="text-center text-white">
                          <form action="{{route('activate.archieved.account',$employe->id)}}" method="post">
                            @csrf
                            <button type="submit" class="btn bgcolor px-3 text-white">Activate</button>
                          </form>
                          {{-- <a href="{{route('activate.archieved.account',$employe->id)}}" class="btn bgcolor px-3 text-white">Activate</a> --}}
                        </td>
                      </tr>

                    @endif

                    @endforeach
                   

                    <!-- <button class="btn bgcolor text-white my-3">
                      View Archieved Employes
                    </button>
                    <button class="btn bgcolor text-white my-3 mx-3">
                      Add New Employes
                    </button> -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

     </div>
      
    

@endsection

@push('script')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js "></script>
    <script>
      $(document).ready(function () {
        $("#example").DataTable();
      });
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