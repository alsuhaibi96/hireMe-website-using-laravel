@extends('layouts.master');
   <!--
        Header
    -->
  @section ('title','Our Services')

@section('content')
      <!--
        Header
    -->
    @include('layouts.header');



    <main class="pt-5 mt-3">
        <div class="container my-3">
            <h3 class="text-center">خدماتنا</h3>
            <div class="row g-2 pt-3">
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="mt-3"> <i class="bi bi-map" style="font-size:2rem ; color:cornflowerblue"></i>
                            <h3 class="mt-2 text-truncate"> توسع عالميا</h3> <span
                                class="text justify-content mt-3">قمنا بحلول العام 2022<br>
         من الوصول لاغلب دول العالم
                                <br>
                       نقوم بايجاد وظائف عالمياً
                            </span>


                            <div class="d-block mt-3"> 
                                <button class=" btn btn-danger btn-sm btn-block">
                                  اقرأ اكثر</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="mt-3"> <i class="bi bi-book" style="font-size:2rem ; color:crimson"></i>
                            <h3 class="mt-3 text-truncate">وظائف تثري معرفتك</h3> <span
                                class="text justify-content mt-3">
                               لسنا مثل بقية منصات التوظيف
                                <br>
                              نقوم بتنقية افضل الوظائف لك
                                <br>
                            وبافضل المعايير
                            </span>
                            <div class="d-block mt-3"> 
                                <button class=" btn btn-primary btn-sm btn-block">
                                اقرأ اكثر
                                </button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="mt-3"> <i class="bi bi-laptop" style="font-size:2rem ; color:rgb(220, 20, 153)"></i>
                            <h3 class="mt-2 text-truncate"> توسع عالميا</h3> <span
                            class="text justify-content mt-3">قمنا بحلول العام 2022<br>
     من الوصول لاغلب دول العالم
                            <br>
                   نقوم بايجاد وظائف عالمياً
                        </span>

                            <div class="d-block mt-3"> 
                                <button class=" btn btn-secondary btn-sm btn-block">
                      اقرأ اكثر</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="mt-3"> <i class="bi bi-bag" style="font-size:2rem ; color:rgb(20, 157, 220)"></i>
                            <h3 class="mt-2 text-truncate"> توسع عالميا</h3> <span
                            class="text justify-content mt-3">قمنا بحلول العام 2022<br>
     من الوصول لاغلب دول العالم
                            <br>
                   نقوم بايجاد وظائف عالمياً
                        </span>

                            <div class="d-block mt-3"> 
                                <button class=" btn btn-success btn-sm btn-block">
                                   اقرأ اكثر</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="mt-3"> <i class="bi bi-phone" style="font-size:2rem ; color:crimson"></i>
                            <h3 class="mt-2 text-truncate"> توسع عالميا</h3> <span
                            class="text justify-content mt-3">قمنا بحلول العام 2022<br>
     من الوصول لاغلب دول العالم
                            <br>
                   نقوم بايجاد وظائف عالمياً
                        </span>

                            <div class="d-block mt-3"> 
                                <button class=" btn btn-warning btn-sm btn-block">
                                  اقرأ اكثر</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="mt-3"> <i class="bi bi-pen" style="font-size:2rem ; color:rgb(20, 220, 97)"></i>
                            <h3 class="mt-2 text-truncate"> توسع عالميا</h3> <span
                            class="text justify-content mt-3">قمنا بحلول العام 2022<br>
     من الوصول لاغلب دول العالم
                            <br>
                   نقوم بايجاد وظائف عالمياً
                        </span>

                            <div class="d-block mt-3"> 
                                <button class=" btn btn-danger btn-sm btn-block">
                                  اقرأ اكثر</button> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
  
    <!--
Footer section
-->
@include('layouts.footer')
@stop