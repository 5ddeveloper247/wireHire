@extends('FSU_Member_Interfaces.layout.master')
@push('title','Member Generates reports2')
@push('css')
@endpush


@section('main-content')
<h4 class="text-white text-center py-3 bgcolor">
     Generate Reports
   </h4>
   <div class="page3 ">

     <div class="row m-0 py-5">
      <div class="col-md-12 bgmonitre  m-auto ">
      <div class="col-md-4 py-5 m-auto ">
       <h4 class="text-white text-center py-3 bgcolor">
         Generate New Report (Date)
       </h4>
       </div>
       <div class="row gy-4 mb-5 p-4">
         <div class="col-md-4">
           <div class="genebox bg-white p-4 rounded-3">
             <h5>Graph 1</h5>
             <p>
               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis possimus excepturi dolor modi architecto repudiandae fuga, odio aut dicta. Temporibus suscipit praesentium iusto officia facere rerum ad soluta quidem unde?
             </p>
           </div>
         </div>
         <div class="col-md-4">
           <div class="genebox bg-white p-4 rounded-3">
             <h5>Graph 1</h5>
             <p>
               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis possimus excepturi dolor modi architecto repudiandae fuga, odio aut dicta. Temporibus suscipit praesentium iusto officia facere rerum ad soluta quidem unde?
             </p>
           </div>
         </div>
         <div class="col-md-4">
           <div class="genebox bg-white p-4 rounded-3">
             <h5>Graph 1</h5>
             <p>
               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis possimus excepturi dolor modi architecto repudiandae fuga, odio aut dicta. Temporibus suscipit praesentium iusto officia facere rerum ad soluta quidem unde?
             </p>
           </div>
         </div>
         <div class="col-md-4">
           <div class="genebox bg-white p-4 rounded-3">
             <h5>Graph 1</h5>
           <img src="{{asset('image/1.png')}}" class="img-fluid">
           </div>
         </div>
         <div class="col-md-4">
           <div class="genebox text-center bg-white p-4 rounded-3">
             <h5>Graph 1</h5>
             <img src="{{asset('image/2.png')}}" class="img-fluid">

           </div>
         </div>
         <div class="col-md-4">
           <div class="genebox  bg-white p-4 rounded-3">
             <h5>Graph 1</h5>
             <img src="{{asset('image/1.png')}}" class="img-fluid">
        
           </div>
           <button class="btn bgcolor mt-3 text-white inline float-end mx">Download Report</button>
           <button class="btn mt-3 bgcolor text-white inline float-end mx-2">Print Report</button>
         </div>
  
       </div>
   
       </div>
       </div>
     
  
     </div>

@endsection

@push('script')
@endpush