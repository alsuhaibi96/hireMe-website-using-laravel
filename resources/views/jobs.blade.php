@extends('layouts.master');
   <!--
        Header
    -->
  @section ('title','Jobs')
@include('layouts.header');

@section('content')
    <main class="col-12 py-5">
        <!--Welcome section-->
        <section class="m-auto col-lg-6 col-md-10 col-sm-12 mt-4">
            <div class="container-fluid  ">
                <div class="card p-lg-4 fw-bold  ">
                    <div class="card-body position-relative">
                        <img class=" img-fluid position-absolute end-0 top-0" width="150px" height="100px"
                            src="assets/images/Layer 122.png">
                        <h3 class="card-title">الخميس , 3 فبراير</h3>
                        <h3 class="card-title mt-3">
                            مساء الخير , <br>عبدالرحمن احمد
                        </h3>
                    </div>
                </div>

            </div>
        </section>
        <!--
    Search job section
-->
        <section class="mt-4 m-auto col-lg-6 col-md-10 col-sm-12 ">

            <div class="container-fluid  ">
                <form class=" ">
                    <div class="position-relative">
                        <input id="search-key" type="search" class="form-control" list="datalistOptions" id="exampleDataList"
                            placeholder="ابحث عن وظيفة">

                        <i class="position-absolute search-btn-job  text-white fa fa-search  fa-fa-bg search-bg  ps-3"
                            style="font-size: 20px;"></i>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <p class="fw-bold me-2"> بحث سابق : </p> <span class="fw-bolder text-color "> UI UX ,
                            Develompemt </span>
                    </div>
            </div>

            </form>
        </section>


        <!--
    Jobs you may like
-->
        <section>
            <div class="container-fluid col-lg-6 col-md-10 col-sm-12 m-auto mt-5 mb-5">
                <div class="card">
                    <div class="card-body ms-lg-2 pb-2 ">
                        <h3 class="card-title">
                            وظائف قد تعجبك
                        </h3>
                        <div class="">
                            <ul>
                                <li class="d-flex flex-row mt-4 li-jobs  ">
                                    <a href="#" class="me-5 text-black text-decoration-none " style="font-weight: 700;">
                                        حسب مهاراتي</a>
                                    <a href="#" class="me-5 ms-lg-5 text-black text-decoration-none"
                                        style="font-weight: 700;">الاخيرة </a>
                                    <a href="#" class="me-5 ms-lg-5 text-black text-decoration-none"
                                        style="font-weight: 700;"> المحفوظة</a>
                                </li>
                            </ul>
                            <hr class="w-100">
                            <p class="py-1 " style="font-weight: 600;">تصفح الوظائف التي تتوافق مع خبرتك ومهاراتك</p>
                            <hr class="w-100">
                        </div>

                          <!--More job details-->  
                          <div class="job-details-container search-job">
                        <div class="job-title-container mt-5 d-flex flex-row justify-content-between">
<a href="{{ url('job_details') }}" class="text-decoration-none text-black">
    <h5>مهندس برمجيات</h5>

</a>
                            <div class="d-flex flex-row">
                                <a href="">
                                    <img src="assets/images/Layer 22221.png" alt="" class="src">

                                </a>

                                <a>
                                    <img src="assets/images/Layer 2222.png" alt="" class="src">

                                </a>
                            </div>
            
           </div>
           <div class="pb-3">
            <p class="text-muted">عن بعد - محترف - سعر العمل محدد - 500$ - قبل ساعة</p>
            <h6>القيام على اكمال تطبيق فيه بعض النواقص 
            <br>
            <p class="text-muted mt-1">عدد المتقدمين: اقل من 5 </p>
            
            </h6>
            </div>
            
            <hr class="w-100">
</div>            

         
        <!--More job details-->  
        <div class="job-details-container search-job ">
            <div class="job-title-container mt-5 d-flex flex-row justify-content-between">
<a href="job_details.html" class="text-decoration-none text-black">
<h5>مطور مواقع الويب</h5>

</a>
                <div class="d-flex flex-row">
                    <a href="">
                        <img src="assets/images/Layer 22221.png" alt="" class="src">

                    </a>

                    <a>
                        <img src="assets/images/Layer 2222.png" alt="" class="src">

                    </a>
                </div>

</div>
<div class="pb-3">
<p class="text-muted">في مقر الشركة - محترف - سعر العمل محدد - 500$ شهريا - قبل ساعة</p>
<h6>مطور ويب فرونت وباك اند
<br>
<p class="text-muted mt-1">عدد المتقدمين: اقل من 10 </p>

</h6>
</div>

<hr class="w-100">
</div>            


  <!--More job details-->  
  <div class="job-details-container search-job ">
    <div class="job-title-container mt-5 d-flex flex-row justify-content-between">
<a href="job_details.html" class="text-decoration-none text-black">
<h5>
مهندس برمجيات
</h5>

</a>
        <div class="d-flex flex-row">
            <a href="">
                <img src="assets/images/Layer 22221.png" alt="" class="src">

            </a>

            <a>
                <img src="assets/images/Layer 2222.png" alt="" class="src">

            </a>
        </div>

</div>
<div class="pb-3">
<p class="text-muted">في مقر الشركة - محترف - سعر العمل محدد - 500$ شهريا - قبل ساعة</p>
<h6>مطور ويب فرونت وباك اند
<br>
<p class="text-muted mt-1">عدد المتقدمين: اقل من 10 </p>

</h6>
</div>

<hr class="w-100">
</div>     


  <!--More job details-->  
  <div class="job-details-container search-job ">
    <div class="job-title-container mt-5 d-flex flex-row justify-content-between">
<a href="job_details.html" class="text-decoration-none text-black">
    <h5>
مبرمج تطبيقات الهاتف
    </h5>

</a>
        <div class="d-flex flex-row">
            <a href="">
                <img src="assets/images/Layer 22221.png" alt="" class="src">

            </a>

            <a>
                <img src="assets/images/Layer 2222.png" alt="" class="src">

            </a>
        </div>

</div>
<div class="pb-3">
<p class="text-muted">في مقر الشركة - محترف - سعر العمل محدد - 500$ شهريا - قبل ساعة</p>
<h6>مطور ويب فرونت وباك اند
<br>
<p class="text-muted mt-1">عدد المتقدمين: اقل من 10 </p>

</h6>
</div>

<hr class="w-100">
</div>     
  <!--More job details-->  
  <div class="job-details-container search-job ">
    <div class="job-title-container mt-5 d-flex flex-row justify-content-between">
<a href="job_details.html" class="text-decoration-none text-black">
<h5>مطور مواقع الويب</h5>

</a>
        <div class="d-flex flex-row">
            <a href="">
                <img src="assets/images/Layer 22221.png" alt="" class="src">

            </a>

            <a>
                <img src="assets/images/Layer 2222.png" alt="" class="src">

            </a>
        </div>

</div>
<div class="pb-3">
<p class="text-muted">في مقر الشركة - محترف - سعر العمل محدد - 500$ شهريا - قبل ساعة</p>
<h6>مطور ويب فرونت وباك اند
<br>
<p class="text-muted mt-1">عدد المتقدمين: اقل من 10 </p>

</h6>
</div>

<hr class="w-100">
</div>     
  <!--More job details-->  
  <div class="job-details-container search-job ">
    <div class="job-title-container mt-5 d-flex flex-row justify-content-between">
<a href="job_details.html" class="text-decoration-none text-black">
<h5>مطور مواقع الويب</h5>

</a>
        <div class="d-flex flex-row">
            <a href="">
                <img src="assets/images/Layer 22221.png" alt="" class="src">

            </a>

            <a>
                <img src="assets/images/Layer 2222.png" alt="" class="src">

            </a>
        </div>

</div>
<div class="pb-3">
<p class="text-muted">في مقر الشركة - محترف - سعر العمل محدد - 500$ شهريا - قبل ساعة</p>
<h6>مطور ويب فرونت وباك اند
<br>
<p class="text-muted mt-1">عدد المتقدمين: اقل من 10 </p>

</h6>
</div>

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