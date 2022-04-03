@extends('layouts.master')


@section('title', 'Home')

<!--
The main header
-->
<div class="container-fluid ">

    <div class="row">
        <div class="main-content col-md-6 ">
         
@include('layouts.header1')
            <!--
                Main content
            -->
@section('content')
            
            <section>
                <div class="content-container text-white ps-3 pt-lg-5  ">
                    <h1 class="pt-5 ">
                        افضل مكان لايجاد وظيفتك <h1 class="future-bg mt-3  ">المستقبلية</h1>
                    </h1>
                    <p class=" ps-md-3 mt-3 paragraph fw-light">
                        معنا عبر المنصة نساعدك على ايجاد الوظيفة المناسبة <br>لبناء عالم افضل.
                    </p>
                    <div class="row ps-3 mt-5">
                       
                        <a href="jobs.html" class="text-decoration-none col-4  ">  
                            <button class="  searchJobbtn btn-bg-color ">
                                ابحث عن وظيفة
                            </button>
                        </a>  
                       
                    <a href="jobs.html" class="col-4 mt-3 ms-5  ms-lg-0"> 
                        <button class="readmore-btn border-0 btn-bg-color ">
                            اقرأ اكثر <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                            </svg>
                        </button>
                    </a>

                    </div>
                    <!--
                        Our Partners
                    -->
                    <br>
                    <div class="our-partners  ps-3 pt-5 our-partners-color " id="partners">


                        <span class="">3000 مؤسسة واكثر</span>
                        <div class="our-partners-container col-12 row mt-3  ">
                           <div class="col-lg-6  row">
                            <h3 class="col-6 ">Meta</h3>
                            <h3 class="col-6  ">Google</h3>
                           </div>
                              
                         <div class="col-lg-6 row   ">
                            <h3 class="col-6  ">Linkd in</h3>
                            <h3 class=" col-6 ">Salck</h3>
                         </div>
                     
                        </div>
                    </div>
                </div>

            </section>
        </div>


        <!-- Main Content-->




        <!-- Login and Sign in with images section-->
        <div class=" col-6   images-container   position-relative  people-img-container " style="background-image: url('assets/images/image.png');">
           
               <div class="col-7  d-none  d-sm-none  d-lg-block ">
            <div class="row   justify-content-end col-12">
                <button class="col-5  m-2 signup-btn btn-bg-color  ">
                    <a href="{{ url('register') }} " class="text-decoration-none main-active">    تسجيل حساب</a>
                </button>
                <button class="col-5 m-2 signin-btn border-0 btn-bg-color ">
                    <a href="{{ url('login') }}" class="text-decoration-none text-white">     الدخول</a>
                </button>
            </div>
        </div>
   
</div>


    </div>


</div>
<!--The main content of the main page-->
<main>


    <!--
Partners , Corporations , Jobs Seekers analysis
-->

    <section>
        <div class="container-fluid  partners-bg">
            <div class="row  col-12   text-white">
                <div class="partners-container p-3  col-md-4   text-center ">
                    <p class="fs-1 fw-bold" dir="ltr"> 1,9<span class="main-active">K+</span></p>
                    <p class="">وظائف مؤسسية</p>
                </div>

                <div class="partners-container p-3 col-md-4     text-center ">
                    <p class="fs-1 fw-bold" dir="ltr">2,67<span class="main-active">K+</span></p>
                    <p>باحثون عن وظائف</p>
                </div>
                <div class="partners-container p-3 col-md-4  text-center ">
                    <p class="fs-1 fw-bold" dir="ltr"> 3,5<span class="main-active">K+</span></p>
                    <p>مؤسسة شريكة</p>
                </div>
            </div>
        </div>
    </section>


    <!--
        Our features 
    -->

    <section>
        <div class="pt-5">
            <div class="m-auto col-lg-5 pt-5  " style="   text-align-last: center;">
                <h1 class="p-3" >
                    اكثر سهولة لايجاد وظيفة <br class="d-none d-sm-none d-md-block"> على منصتنا 
                </h1>
<p class="p-3 text-muted">
الخدمات المميزة التالية التي نوفرها على منصتنا لنساعد في الحصول على وظيفة في عدة شركات
</p>
            </div>



            <div class="row  col-9 m-auto   text-white " style="text-align-last: center;">
                <div class="partners-container p-3  col-md-4   text-center ">
                    <img src="assets/images/fig11.png" alt="Support Image" class="sr">
                    <h4 class="features-text-color"> دعم متواصل</h4>
                    <p class="mt-2 text-black text-muted">نقوم بالرد على جميع اسئلتكم <br>اي وقت كانت</p>
                  
                </div>

                <div class="partners-container p-3 col-md-4 text-center   ">
                    <img src="assets/images/fig33.png" alt="Vacancies Iamge" class="src">
                <h4 class="features-text-color"> العديد من المؤسسات</h4>
                <p class="mt-2 text-black text-muted">نقوم بالرد على جميع اسئلتكم <br>اي وقت كانت</p>
                </div>
                <div class="partners-container p-3 col-md-4  text-center ">
<img src="assets/images/fig2.png" alt="Easy image" class="src">

                <h4 class="features-text-color">
                    سهولة التقديم
                </h4>
                <p class="mt-2 text-black text-muted">نقوم بالرد على جميع اسئلتكم <br>اي وقت كانت</p>
                
                </div>
            </div>
        </div>
    </section>



    <!--
        Looking for a job
    -->
    <section>

<div class="pt-5 mb-5 ">
<div class="m-auto col-lg-6  pt-5">
<h1 class="text-center">
هل تبحث عن وظيفة الآن ؟
</h1>
<p class="pt-4 text-center">
قم بكتابة اسم الوظيفة , الشركة او الفئة

</p>
<div class="col-12 row">

<!-- <input type="search" id="search" class="form-control col-10" aria-describedby="search" >
-->
<div class="search-container mb-3 m-auto position-relative">
<i  class="fa fa-briefcase p-2 fa-fa-bg rounded-circle top-px position-absolute" style="font-size: 30px;"></i><input type="text" class="top-right-px position-absolute mx-lg-2  text-center " placeholder="الفئة">
<i id="place-icon" class=" fa fa-map-marker p-2 px-3 fa-fa-bg rounded-circle position-absolute top-px " ></i><input type="search" class="mx-lg-2 text-center "id="place-inp" placeholder="المكان" >
<i class="position-absolute   text-white fa fa-search  fa-fa-bg search-bg search-btn-bg ps-3" style="font-size: 25px;"><span class="ps-2 search-cap" >بحث</span></i>
</div>



</div>

</div>
</div>

    </section>

    <div class="d-flex justify-content-around m-auto col-8 flex-lg-row flex-column">
        <img src="assets/images/ads/big-lots.PNG" class="img-fluid" alt="" width="100">
        <img src="assets/images/ads/cocacola.PNG"  class="img-fluid" alt="" width="100">
        <img src="assets/images/ads/emarates.PNG"  class="img-fluid" alt="" width="100">
        <img src="assets/images/ads/lukoil.PNG"  class="img-fluid" alt="" width="100">
       
    </div>
</main>

<!--
Footer section
-->
@include('layouts.footer')

@stop