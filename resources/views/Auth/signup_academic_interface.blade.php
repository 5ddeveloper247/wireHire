@extends('layout.master')
@push('title', 'Academic')
@push('css')
<style>
  .cursor-pointer{
    cursor:pointer;
  }
  
</style>
@endpush

@section('main-content')

{{-- sweet alert --}}

  @include('sweetalert::alert')



<form action="{{ route('academic_info') }}" method="post" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="candidate_id" value="{{ session()->get('candidate_login') }}">
  <div class="page3 my-5 pt-5">
    <div class="col-md-9 m-auto">
      <div class="py-3 text-center bgcolor text-white h4">Academic Information</div>
    </div>
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <div class="text-center pt-3" style="height:900px;;
               background-color: #1d1c47;">
                <img src="{{asset('image/logo.png')}}" class="img-fluid" style="    max-width: 100%;
                height: 35%;">
              </div>
            </div>
            <div class="col-md-8 bggrey pt-4">
              <div class="row m-0 gy-5 pb-5">
                <div class="col-md-6 p-1 dainputda">
                 
                  Academic Degree
                  <input type="text" name="academic_degre" class="form-control" placeholder="Master Degree">
                  @error('academic_degre')
                  <div class="text-danger">{{$message}}</div>
                  @enderror

                  Major
                  <input name="major" type="text" class="form-control" placeholder="computer science">
                  @error('major')
                  <div class="text-danger">{{$message}}</div>
                  @enderror

                  Year of Graduation
                  <input  name="year_of_graduate" type="date" class="form-control" placeholder="2015">
                  @error('year_of_graduate')
                  <div class="text-danger">{{$message}}</div>
                  @enderror

                  University Name
                  <input name="uni_name" type="text" class="form-control" placeholder="British University">
                  @error('uni_name')
                  <div class="text-danger">{{$message}}</div>
                  @enderror

                </div>
                <div class="col-md-6 p-1 dainputda">
                  University Rank
                  <input name="uni_rank" type="number" class="form-control" placeholder="567">
                  @error('uni_rank')
                  <div class="text-danger">{{$message}}</div>
                 @enderror  

                  University location
                  <input name="uni_location" type="text" class="form-control" placeholder="London,United kingdom">
                  @error('uni_location')
                  <div class="text-danger">{{$message}}</div>
                  @enderror

                  Cumulative GPA
                  <input name="cumulative_gpa" type="number" class="form-control" placeholder="4.5">
                  @error('cumulative_gpa')
                  <div class="text-danger">{{$message}}</div>
                  @enderror

                  GPA out of
                  <input name="gpa_out_of" type="number" class="form-control" placeholder="5">
                  @error('gpa_out_of')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-6 resume gcolor mt-3 text-white py-3 cursor-pointer">
                  <div class="resumebox p-3 bgcolor">
                    <p>
                      Resume

                    </p>
                    <i class="fa-solid fa-file-pdf"></i>
                    <span>
                      <label for="CandidateResume" id="khan">
                        chose CandidateResume
                      </label>
                      
                    </span>
                    <input type="file" name="resume" id="CandidateResume" accept=".pdf" onchange="changefile(this)" hidden>
                    @error('resume')
                    <div class="text-danger">{{$message}}</div>
                   @enderror
                  </div>
                </div>

                <div class="col-md-6 resume  mt-3 text-white py-3 cursor-pointer">
                  <div class="resumebox p-3 bgcolor">
                    <p>
                      Transcript
                    </p>
                    <i class="fa-solid fa-file-pdf"></i>
                    <span>
                    <label for="UniversityTranscript" id="transcript">
                      Chose UniversityTranscript
                    </label>
                    </span>
                    <input type="file" name="transcript" accept=".pdf"  id="UniversityTranscript" onchange="changefile(this)" hidden>
                    @error('transcript')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    
                  </div>
                </div>
                <div class="col-md-6 resume  mt-3 text-white pt-3 cursor-pointer">
                  <div class="resumebox p-3 bgcolor">
                    <p>
                      Certificates
                    </p>
                    <i class="fa-solid fa-file-pdf"></i>
                    
                    <span>
                      <label for="CandidateCertificates" >
                        chose CandidateCertificates
                      </label>
                      
                    </span>
                    <input type="file" name="certificate"  accept=".pdf" id="CandidateCertificates" onchange="changefile(this)" hidden>
                    @error('certificate')
                    <div class="text-danger">{{$message}}</div>
                   @enderror

                  </div>
                </div>
                <div class="col-md-6 resume  mt-3 text-white pt-3 cursor-pointer">
                  <div class="resumebox p-3 bgcolor">
                    <p>
                      Teaching Prefernces
                    </p>
                    <i class="fa-solid fa-file-pdf"></i>
                    <span>
                      <label for="TeachingPrefernces">
                        chose TeachingPrefernces
                      </label>
                      
                    </span>
                    <input type="file" name="teaching_prep" accept=".pdf"  hidden id="TeachingPrefernces" onchange="changefile(this)">
                    @error('teaching_prep')
                    <div class="text-danger">{{$message}}</div>
                   @enderror
                  </div>
                </div>

                <div class="col-md-4 float-end">
                  <a class="text-white text-decoration-none" href="#"><button
                    class="bgcolor text-white py-2 w-100 float-end">Create Account</button></a>
                 </div>
                  {{-- <a class="text-white text-decoration-none" href="{{route('condidate_dashboard')}}"><button
                      class="bgcolor text-white py-2 w-100 float-end">Create Account</button></a>
                </div> --}}
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</form>

@endsection


@push('script')
<script>

  function changefile(el) {
      $(el).siblings('span').find('label').text($(el)[0].files[0].name);
   };

</script>

@endpush