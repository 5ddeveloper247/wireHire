@extends('FSU_Member_Interfaces.layout.master')
@push('title','member recieved request interface 2')
@push('css')
 <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"  rel="stylesheet" />
     
    
@endpush

@section('main-content')
      <div class="page3 my-5 py-5">
          <div class="row m-0">
            <h4 class="text-white text-center py-3 bgcolor">Request Forms</h4>
            <div class="col-md-12">
              <div class="tablebox table-responsive m-5">
                <table class="table border" id="example">
                  <thead>
                    <th>Request ID</th>
                    <th>Job Title</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Request Data</th>
                    <th>View Details</th>
                   
                  </thead>

                  <tbody>
                    <tr>
                      <td>Request ID</td>
                      <td>Job Title 1</td>
                      <td>Position</td>
                      <td>CIS</td>
                      <td>Request Data</td>
                       <td class="shoot1"><a class="text-decoration-none" href="Javascript:coid(0)">Details</a></td>
                    </tr>
                    <tr>
                      <td>Request ID</td>
                      <td>Job Title 1</td>
                      <td>Position</td>
                      <td>CIS</td>
                      <td>Request Data</td>
                     <td class="shoot1"><a class="text-decoration-none" href="Javascript:coid(0)">Details</a></td>
                    </tr>
                    <tr>
                      <td>Request ID</td>
                      <td>Job Title 1</td>
                      <td>Position</td>
                      <td>CIS</td>
                      <td>Request Data</td>
                     <td class="shoot1"><a class="text-decoration-none" href="Javascript:coid(0)">Details</a></td>
                    </tr>
                    <tr>
                      <td>Request ID</td>
                      <td>Job Title 1</td>
                      <td>Position</td>
                      <td>CIS</td>
                      <td>Request Data</td>
                    <td class="shoot1"><a class="text-decoration-none" href="Javascript:coid(0)">Details</a></td>
                    </tr>
                    <tr>
                      <td>Request ID</td>
                      <td>Job Title 1</td>
                      <td>Position</td>
                      <td>CIS</td>
                      <td>Request Data</td>
                     <td class="shoot1"><a class="text-decoration-none" href="Javascript:coid(0)">Details</a></td>
                    </tr>
                    <!-- <button class="btn bgcolor text-white my-3">View Archieved Employes</button>
              <button class="btn bgcolor text-white my-3 mx-3">Add New Employes</button> -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

  {{-- model for details  --}}

    <div class="pop1 d-none">
  <div class="row p-3">
    <div class="col-md-5 m-auto bg-white popadd">
      <div class="page6box py-3 p-2">
        <span style="font-size: 22px;">Employee Request Forms</span>
        <i class="fa-solid bandeka fa-xmark" onclick="bsdo();"></i>
      </div>

      <div class="row p-0 mb-5">
        <div class="col-md-9 m-auto"></div>
        <div class="col-md-12">
          <div class="row p-2">
            <div class="col-md-6">
              <h5>Job Title</h5>
            </div>
            <div class="col-md-6">
              <h5>Job Position</h5>
            </div>
            <div class="col-md-6">
              <div class="box border">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box border">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box">
                <h5>Minimum Experience Years</h5>
                <select class="form-control">
                  <option selected>5</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box">
                <h5>Minimum Degree</h5>
                <select class="form-control">
                  <option selected>Master</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box">
                <h5>Number of Employees</h5>
                <select class="form-control">
                  <option selected>2</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box">
                <h5>Major</h5>
                <select class="form-control">
                  <oCption selected>Computer Science</oCption>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select>
              </div>
            </div>
            <h5>Description</h5>

            <div class="col-md-12">
              <div class="box">
                <p class="form-control">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Dicta nihil, velit deserunt asperiores vitae temporibus. Modi
                  aliquam eveniet optio voluptatem? Obcaecati perferendis
                  dolores eum, nesciunt laboriosam adipisci ab dicta molestias?
                </p>
              </div>
            </div>
          </div>
          <button type="submit" style="background-color : #1d1c47; color:white;" class="btn btn-lg  float-end">Create New Job Advertisement</button>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@push('script')
  <script>

    function showSubMenu() {
      if ($('.submenu').css('display') != 'block') {
        $('.submenu').show();
      } else {
        $('.submenu').hide();
      }
    }

  </script>
 <script>
    $(".shoot1").click(function () {
      $(".pop1").removeClass("d-none");
    });
    $(".sees").click(function () { });
    function bsdo() {
      $(".pop1").addClass("d-none");
    }
  </script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#example").DataTable();
      });
    </script>
@endpush