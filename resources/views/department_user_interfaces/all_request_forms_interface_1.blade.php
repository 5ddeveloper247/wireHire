@extends('department_user_interfaces.layout.master')
@push('title', 'Request Forms')
@push('css')
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"/>
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endpush

@section('main-content')



@include('sweetalert::alert')

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div id="success_message">

        </div>
      </div>
    </div>
  </div>

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
                 
                  <th>Request Data</th>
                  <th>View Details</th>
                  <th>Forward Request</th>
                  <th>Action</th>
                </thead>

                <tbody>
                  
                @foreach ($empRequests as $empRequest )
                <tr>
                  <td>{{$empRequest->id}}</td>
                  <td>{{$empRequest->job_title}}</td>
                  <td>{{$empRequest->position}}</td>
              
                  <td>{{$empRequest->request_date}}</td>
                  <td>
                 
                    <button  value="{{$empRequest->id}}"  id="detailbtn" class="shoot3 " >Details</a>
                  </td>
                  <td class="text-center">
                    <a href="#" style="text-decoration:none" class=" btn btn-sm bgcolor text-white arrowbtn shoot2">Send </a>

                  </td>
                 
                  <td>
                    <a value=""  href="{{route('delete.request',$empRequest->id)}}"><i class="fa-solid fa-trash bg-danger p-3 text-white"></i></a>
                  </td>
                </tr>
                @endforeach
        
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
                        <input type="checkbox" /> Member 6
                      </th>
                    </tr>
                    <tr>
                      <th class="pt-3">CS</th>
                      <th>
                        <input type="checkbox" /> Member 7
                        <br />
                        <input type="checkbox" /> Member 8
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
      {{-- update the employe request --}}
        
          <div class="pop1  modal3 model d-none">
            <form >
              @csrf

              {{-- <div id="error_message"></div> --}}

            <input type="text" id="req_id" class="form-control">
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
                          <input class="form-control" id="jobtitle" value=""name="jobtitle">

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="box border">
                          <input class="form-control" id="position" name="jobposition" value="">
                        
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="box" >
                          <h5>Minimum Experience Years</h5>
                          <select class="form-control" id="experience" name="experience" value="">
                            <option selected>--select experience --</option>
                            <option>4</option>
                            <option>3</option>
                            <option>2</option>
                            <option>1</option>
                          </select>
                       
                        </div>
                      </div>
                      {{-- <div class="col-md-6">
                        <div class="box">
                          <h5>Minimum Degree</h5>
                          <select class="form-control"  id="degre" name="min_degre" value="">
                            <option selected>Master</option>
                            <option>4</option>
                            <option>3</option>
                            <option>2</option>
                            <option>1</option>
                          </select>
                        
                        </div>
                      </div> --}}
                      <div class="col-md-6">
                        <div class="box">
                          <h5>Number of Employees</h5>
                          <select class="form-control" id="employe" name="no_employe" value="">
                            <option selected>2</option>
                            <option>4</option>
                            <option>3</option>
                            <option>2</option>
                            <option>1</option>
                          </select>
                        
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="box">
                          <h5>Major</h5>
                          <select class="form-control" id="major" name="major" value="">
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
                          <textarea class="form-control" id="description" name="description" name="">
                          
                        </textarea>
                      
                        </div>
                      </div>
                      
                    </div>
                    <button type="submit" id="update" class="btn bgcolor text-white float-end btn-md">
                      Save Changes
                     </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          </div> 
       

  <!-- end model -->
  <!-- model -->
{{-- insert the employe request  --}}

    <div class="pop1 model1 d-none">
      <form id="myform">
    
      <div class="row p-3">
        <div class="col-md-5 m-auto bg-white popadd">
          <div class="page6box py-3 p-2">
            <span style="font-size: 22px;">Employee Request Forms</span>
            <i class="fa-solid bandeka fa-xmark" onclick="bsdo1();"></i>
          </div>
          
          <div id="error_message">
            <ul>

            </ul>
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
                    <input class="form-control jobtitle"  name="jobtitle" >
                   
                  </div>
               
                </div>
                <div class="col-md-6">
                  <div class="box border">
                    <input class="form-control jobposition"  name="jobposition" >
                   
                  </div>
                 
                </div>
                <div class="col-md-6">
                  <div class="box">
                    <h5>Minimum Experience Years</h5>
                    <select class="form-control experience" name="experience">
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
                    <h5>Number of Employees</h5>
                    <select class="form-control no_employe" name="no_employe">
                      <option></option>
                      <option>4</option>
                      <option>3</option>
                      <option>2</option>
                      <option>1</option>
                    </select>
                  
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="box">
                    <h5>Major</h5>
                    <select class="form-control major" name="major">
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
                    <textarea class="form-control description" name="description">
  
                  </textarea>
               
                  </div>
                </div>
  
                <div class="col-md-12 mt-3">
                  <a href="#" class="btn btn-outline-secondary btn-md float-end mx-1" onclick="bsdo1();">Cancel</a>
                  <button type="button"  class="btn btn-outline-secondary btn-md float-end add">Add</button>
                </div>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>

 
  <!-- end model -->

    </div>
@endsection

@push('script')

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>

    $(document).ready(function(){

        $.ajaxSetup({
              headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

      // get the specific employe request ...
      $(document).on('click','#detailbtn',function(e){
          e.preventDefault();

          var req_id = $(this).val();
         
          $.ajax({
             type: "GET",
             url:"single/request/" + req_id,
             success:function(response){

             if(response.status == 404){
                $('#error_message').html('');
                $('#error_message'),addClass('alert alert-danger');
                $('#error_message').text(response.message);
               
             }else{

               $('#req_id').val(response.eRequest.id);
               $('#jobtitle').val(response.eRequest.job_title);
               $('#position').val(response.eRequest.position);
               $('#experience').val(response.eRequest.min_experience);
              
               $('#employe').val(response.eRequest.no_of_employe);
               $('#major').val(response.eRequest.major);
               $('#description').val(response.eRequest.description);
              

             }
          }
          });
        
      });

      // update the employe reqeust . ...  . 
     
      // insert the employe request ...

      $(document).on('click','.add',function(e){
        e.preventDefault();
          var data = {
            'jobtitle'    : $('.jobtitle').val(),
            'jobposition' : $('.jobposition').val(),
            'experience'  : $('.experience').val(),
            
            'no_employe'  : $('.no_employe').val(),
            'major'       : $('.major').val(),
            'description' : $('.description').val()
          }

      
        
       
        $.ajax({
          type : "POST",
          url : '{{ route("submit.request.form") }}',
          data : data,
          dataType : "json",

          success:function(response){   
            console.log(response);
            if(response.status != 200 || response.done != true){

               $('#error_message').html('');
               $('#error_message').addClass('alert alert-danger');
               $.each(response.errors,function(key,err_val){
                $('#error_message').append('<li>'+err_val+'</li>');
              })
            } else{

               toastr.success(response.message);      
                $('.model1').addClass('d-none');
                $('.jobtitle').val(''),
                $('.jobposition').val(''),
                $('.experience').val(''),          
                $('.no_employe').val(''),
                $('.major').val(''),
                $('.description').val('')

              }
            }
        });
      
      });


    });

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
   </script>

@endpush

