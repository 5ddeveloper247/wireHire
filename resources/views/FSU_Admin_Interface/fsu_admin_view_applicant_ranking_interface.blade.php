@extends('FSU_Admin_Interface.layout.master')
@push('title','view applicant ranking interface')
@push('css')

    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css" />

 <style>
  .ankar i {
    color: greenyellow;
    font-size: 28px;
    font-weight: bold;
  }
</style>
@endpush
@section('main-content')
    <div class="body">
          <div class="page3 my-5 py-5">
        <div class="row m-0">
          <h4 class="text-white text-center py-3 bgcolor">
            Applicant Ranking
          </h4>

          <div class="col-md-12">
            <div class="tablebox">
              <button class="my-2 float-end btn bgcolor text-white">
                <i class="fa-solid fa-arrows-rotate"></i>
                Refresh
              </button>
              <table class="table table-responsive border" id="example">
                <thead>
                  <th>Rank</th>
                  <th>Candidate Name</th>
                  <th>Degree</th>
                  <th>University</th>
                  <th>Application Date</th>
                  <th>View Profile</th>
                </thead>

                <tbody>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="{{route('fsu_admin_condidate_profile')}}">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="{{route('fsu_admin_condidate_profile')}}">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="{{route('fsu_admin_condidate_profile')}}">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="{{route('fsu_admin_condidate_profile')}}">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="{{route('fsu_admin_condidate_profile')}}">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>
                  <tr>
                    <td>First List 1</td>
                    <td>Department User</td>
                    <td>123456789120</td>
                    <td>CIS</td>
                    <td>CCSIT</td>
                    <td> <a class="text-decoration-none" href="FSU Admin Candidate Profile interface 2.html">View
                        Profile</a></td>
                   
                  </tr>

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
     <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $("#example").DataTable();
    });
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