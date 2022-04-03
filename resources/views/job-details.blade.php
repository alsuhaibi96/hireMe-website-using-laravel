@extends('layouts.master');
   <!--
        Header
    -->
  @section ('title','Job Details')
@include('layouts.header');

@section('content')

   <!--
        Header
    -->
 
<!--
    Job Details Main Content
-->
<main class="pt-5">
    <!--
        job details
    -->
<section>
  <div class="row col-12 px-5 m-auto   ">
  
        
        <div class="card container-fluid m-auto col-lg-8 col-sm-12  mt-5 mb-lg-5 mb-sm-1 ">
            <div class="card-body pb-2 ">
         
              

                  <!--More job details-->  
                  <div class="job-details-container ">
                <div class="job-title-container ">
<a href="job_details.html" class="text-decoration-none text-black">
    
<h5>مهندس برمجيات</h5>

</a>

                  
    
   </div>
   <hr class="w-100">

   <div class="pb-3">
    <p class="text-muted">تم النشر قبل ساعة واحدة</p>
    <h6>
     <i class="fa fa-map-marker text-color"></i> اي مكان في العالم 
    </h6>
    </div>
   <hr class="w-100">
   <p style="font-weight: 500;">قم بتحميل الملفات المرفقة التي  تبين متطلبات الوظيفة  - الخبراء فقط مطلوبين للتقديم</p>
   <hr class="w-100">

<div class="d-flex flex-row container pt-3 justify-content-around ">
<p>
   
  <div>
    <i class="fa fa-bookmark "></i>
    <span style="font-weight: 700;"> 500$</span>
    <p class="text-muted">راتب شهري</p>
  </div>
</p>

<p>
  <div>
    <i class="fa fa-user me-2"></i>

    <span style="font-weight: 700;">خبير</span>
    <p class="text-muted">اذا كنت اكثر خبرة تحصل على راتب اكثر</p>
  </div>
</p>
</div>
<hr class="w-100">


   <h5>
ملحقات المتطلبات
</h5>
<div class="d-flex flex-row  container ">
<i class="fa fa-paperclip mt-1"></i><a style="font-weight: 600;" class="ms-3 text-color" href="#">requiremnts.doc (100KB)</a>
</div>

    
</div>            




   

            </div>
    </div>
<div class="col-lg-4 col-sm-12  mt-lg-5 mb-5 ">
    <div class="card col-11 col-sm-12" style="height: 500px;">

    
    <div class="card-body">
        
    </div>
</div>
    </div>
</div>
</section>
</main>


    <!--
Footer section
-->
@include('layouts.footer')
@stop