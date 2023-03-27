@extends('FSU_Admin_Interface.layout.master')
@push('title','Request Form interface')
@push('css')
 <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"/>
 <style>
.arrowbtn{
  
  padding: 8px 8px;
    border-radius: 50%;
    /* margin-top: 2px; */
    padding-top: 14px;

}
.arrowbtn i{
  

  font-size: 30px;

}
  </style>
@endpush

@section('main-content')
    <div class="body">

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
                  <th>Forward Request</th>
                  <th>Action</th>
                </thead>

                <tbody>
                  <tr>
                    <td>Request ID</td>
                    <td>Job Title 1</td>
                    <td>Position</td>
                    <td>CIS</td>
                    <td>Request Data</td>
                    <td>
                      <a class="shoot3" href="#">Details</a>
                    </td>
                    <td class="text-center">
                      <a   class=" bgcolor text-white arrowbtn"> <i class="fa-solid forword-arrow fa-arrow-right shoot2" ></i></a>
                    </td>
                    <td>
                      <a href="#"></a><i class="fa-solid fa-trash bg-danger p-3 text-white"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Request ID</td>
                    <td>Job Title 1</td>
                    <td>Position</td>
                    <td>CIS</td>
                    <td>Request Data</td>
                    <td>
                      <a class="shoot3" href="#">Details</a>
                    </td>
                    <td class="text-center">
                      <a class=" bgcolor text-white arrowbtn"> <i class="fa-solid forword-arrow fa-arrow-right shoot2" ></i></a>
                    </td>
                    <td>
                      <a href="#"></a><i class="fa-solid fa-trash bg-danger p-3 text-white"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Request ID</td>
                    <td>Job Title 1</td>
                    <td>Position</td>
                    <td>CIS</td>
                    <td>Request Data</td>
                    <td>
                      <a class="shoot3" href="#">Details</a>
                    </td>
                    <td class="text-center">
                      <a class=" bgcolor text-white arrowbtn"> <i class="fa-solid forword-arrow fa-arrow-right shoot2" ></i></a>
                    </td>
                    <td>
                      <a href="#"></a><i class="fa-solid fa-trash bg-danger p-3 text-white"></i></a>
                    </td>

                  </tr>
                  <tr>
                    <td>Request ID</td>
                    <td>Job Title 1</td>
                    <td>Position</td>
                    <td>CIS</td>
                    <td>Request Data</td>
                    <td>
                      <a class="shoot3" href="#">Details</a>
                    </td>
                    <td class="text-center">
                      <a  class=" bgcolor text-white arrowbtn"> <i class="fa-solid forword-arrow fa-arrow-right shoot2" ></i></a>
                    </td>
                    <td>
                      <a href="#"></a><i class="fa-solid fa-trash bg-danger p-3 text-white"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Request ID</td>
                    <td>Job Title 1</td>
                    <td>Position</td>
                    <td>CIS</td>
                    <td>Request Data</td>
                    <td>
                      <a class="shoot3" href="#">Details</a>
                    </td>
                    <td class="text-center">
                      <a class=" bgcolor text-white arrowbtn"> <i class="fa-solid forword-arrow fa-arrow-right shoot2" ></i></a>
                    </td>
                    <td>
                      <a href="#"></a><i class="fa-solid fa-trash bg-danger p-3 text-white"></i></a>
                    </td>
                  </tr>

                  <button class="btn bgcolor text-white my-3 mx-3 float-end shoot1">Add Request Form</button>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="pop1 modal2 model d-none">
        <div class="row p-3">
          <div class="col-md-5 m-auto bg-white popadd">
            <div class="page6box py-3 p-2">
              <span style="font-size: 22px;">Forward Request Form</span>
              <i class="fa-solid bandeka fa-xmark" onclick="bsdo();"></i>
            </div>
            <div class="row p-0 mb-5">
              <div class="col-md-9 m-auto">
                <table class="table border table-responsive">
                  <tbody>
                    <tr>
                      <th class="pt-3">CIS</th>
                      <th>
                        <input type="checkbox" / > Member 1
                        <br />
                        <input type="checkbox" / > Member 2
                      </th>
                    </tr>
      
                    <tr>
                      <th class="pt-3">CYS</th>
                      <th>
                        <input type="checkbox" / > Member 3
                        <br />
                        <input type="checkbox" / > Member 4
                      </th>
                    </tr>
      
                    <tr>
                      <th class="pt-3">AI</th>
                      <th>
                        <input type="checkbox" / > Member 5
                        <br />
                        <input type="checkbox" / > Member 6
                      </th>
                    </tr>
                    <tr>
                      <th class="pt-3">CS</th>
                      <th>
                        <input type="checkbox" / > Member 7
                        <br />
                        <input type="checkbox" / > Member 8
                      </th>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-12">
                <button class="btn bgcolor text-white float-end btn-md">
                  Update
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- model employe detail -->
  <div class="pop1  modal3 model d-none">
    <div class="row p-3">
      <div class="col-md-5 m-auto bg-white popadd">
        <div class="page6box py-3 p-2">
          <span style="font-size: 22px;">update employe Request Forms</span>
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
                  <input class="form-control" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
                </div>
              </div>
              <div class="col-md-6">
                <div class="box border">
                  <input class="form-control" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
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
                  <textarea class="form-control">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Dicta nihil, velit deserunt asperiores vitae temporibus. Modi
                  aliquam eveniet optio voluptatem? Obcaecati perferendis
                  dolores eum, nesciunt laboriosam adipisci ab dicta molestias?
                </textarea>
                </div>
              </div>
              
            </div>
            <button class="btn bgcolor text-white float-end btn-md">
              Save Changes
             </button>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <!-- end model -->
  <!-- model -->
  <div class="pop1 model1 d-none">
    <div class="row p-3">
      <div class="col-md-5 m-auto bg-white popadd">
        <div class="page6box py-3 p-2">
          <span style="font-size: 22px;">Employee Request Forms</span>
          <i class="fa-solid bandeka fa-xmark" onclick="bsdo1();"></i>
        </div>

        <div class="row p-0 ">
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
                  <input class="form-control" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
                </div>
              </div>
              <div class="col-md-6">
                <div class="box border">
                  <input class="form-control" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
                </div>
              </div>
              <div class="col-md-6">
                <div class="box">
                  <h5>Minimum Experience Years</h5>
                  <select class="form-control">
                    <option></option>
                    <option>5</option>
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
                    <option></option>
                    <option>Master</option>
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
                    <option></option>
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
                    <option></option>
                    <oCption>Computer Science</oCption>
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
                  <textarea class="form-control">

                </textarea>
                </div>
              </div>

              <div class="col-md-12 mt-3">
                <button class="btn btn-outline-secondary btn-md float-end mx-1" onclick="bsdo1();">Cancel</button>
                <button class="btn btn-outline-secondary btn-md float-end">Add</button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end model -->

    </div>
@endsection

@push('script')
     <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   <script>
      $('.shoot3').click(function(){
        $(".modal3").removeClass('d-none');
      });
      $(".shoot").click(function () {
        $(".model").removeClass("d-none");
      });
      $(".sees").click(function () {});
      function bsdo() {
        $(".model").addClass("d-none");
      }
  
      $(".shoot1").click(function () {
        $(".model1").removeClass("d-none");
      });
      $(".shoot2").click(function () {
        $(".modal2").removeClass("d-none");
      });
      $(".sees").click(function () {});
      function bsdo1() {
        $(".model1").addClass("d-none");
      }
      $(document).ready(function () {
        $("#example").DataTable();
      });

      function showSubMenu(){
          if($('.submenu').css('display') != 'block'){
            $('.submenu').show();
          }else{
            $('.submenu').hide();
          }
      }
    
    </script>
@endpush