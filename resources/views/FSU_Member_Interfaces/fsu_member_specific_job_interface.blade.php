@extends('FSU_Member_Interfaces.layout.master')
@push('title','member specific job')
@push('css')
     <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"  rel="stylesheet"   />
@endpush

@section('main-content')
     <div class="page3 my-5 py-5">
          <div class="row m-0">
            <h4 class="text-white text-center py-3 bgcolor">Specific Job</h4>
            <div class="col-md-9 m-auto">
              <div class="row">
                <div class="col-md-12">
                  <button
                    class="btn float-end bgcolor text-white my-3 mx-3 px-3"
                  >
                    create new Advertisement
                  </button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="specbox m-2 bggrey p-4">
                    <h5>Announcement:</h5>

                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Architecto, reprehenderit delectus nisi, dicta deserunt
                      consequatur repudiandae error, itaque laborum optio
                      doloremque quaerat atque beatae recusandae. Sed, voluptas
                      corrupti. Qui, hic!
                    </p>
                    <button class="btn btn-outline-secondary px-5">Edit</button>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="specbox m-2 p-4 bggrey">
                    <h5>Criteria:</h5>

                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Architecto, reprehenderit delectus nisi, dicta deserunt
                      consequatur repudiandae error, itaque laborum optio
                      doloremque quaerat atque beatae recusandae. Sed, voluptas
                      corrupti. Qui, hic!
                    </p>

                    <button class="btn btn-outline-secondary px-5">Edit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-11 m-auto">
              <div class="row gy-4 my-5">
                <div class="col-md-4">
                  <div class="btnbox mx-5">
                    <a href="{{route('fsu_member_interview_1')}}" class="btn bgcolor text-white">ShortList</a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="btnbox mx-5">
                    <a href="{{route('fsu_member_applicant_ranking')}}" class="btn bgcolor text-white">
                      Applicant Ranking
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="btnbox mx-5">
                    <a href="{{route('fsu_member_calendar')}}" class="btn bgcolor text-white">
                      View member calendar
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-11 m-auto">
              <div class="tablebox table-responsive">
                <table class="table border" id="example">
                  <thead>
                    <th>Rank</th>
                    <th>Candidate Name</th>
                    <th>Degree</th>
                    <th>University</th>
                    <th>Application Date</th>
                    <th>View Profile</th>
                    <th>Set Interview Data/Times</th>
                    <th>Remove From list</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                       <a class="text-decoration-none"  href="{{route('fsu_member_profile_interface1')}}"> View Profile</a>
                      </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="{{route('fsu_member_profile_interface1')}}"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="{{route('fsu_member_profile_interface1')}}"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="{{route('fsu_member_profile_interface1')}}"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Candidate Name</td>
                      <td>Degree</td>
                      <td>University</td>
                      <td>Date</td>
                      <td style="font-weight: bold;">
                        <a class="text-decoration-none"  href="FSU Member Candidate Profile Interface 1.html"> View Profile</a>
                       </td>
                      <td>11:00Pm</td>
                      <td class="text-center">
                        <i class="fa-solid fa-trash"></i>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <button
                  class="btn float-end bgcolor my-3 mx-3"
                  style="background-color: rgb(15, 241, 15);"
                >
                  Candidate Approval
                </button>
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

@endpush