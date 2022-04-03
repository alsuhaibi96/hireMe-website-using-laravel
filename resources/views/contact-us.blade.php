@extends('layouts.master');
   <!--
        Header
    -->
  @section ('title','Contact us')
@include('layouts.header');

@section('content')

    <!--Main Content-->
    <main class=" my-5 py-5">
        <div id="main-wrapper" class="container">
          <div class="row justify-content-center">
              <div class="">
                  <div class="card border-0 ">
                      <div class="card-body p-0">
                          <div class="row no-gutters">
                              <div class="col-lg-6">
                                  <div class="p-5">
                                      <div class="mb-5">
                                          <h3 class="h4 font-weight-bold text-theme">تواصل معنا </h3>
                                      </div>
      
                                      <h6 class="h5 mb-0">مرحباً بك   !</h6>
                                      <p class="text-muted mt-2 mb-5">   سعداء للغاية لتواصلك معنا </p>
      
                                      <form>
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">الايميل الالكتروني</label>
                                              <input type="email" class="form-control" id="exampleInputEmail1">
                                          </div>
                                          <div class="form-group mt-3">
                                            <label for="exampleInputEmail1"> محتوى الرسالة</label>
                                            <textarea class="form-control " id="message" cols="" rows="3"></textarea>
                                        </div>
                                         <button type="submit" class="mt-2 btn btn-theme">ارسال</button>
                                      </form>
                                  </div>
                              </div>
      
                              <div class="col-lg-6 d-none d-lg-inline-block">
                                <div class="account-block  rounded-right">
                                    <div class="overlay rounded-right" style="     background-image: url('assets/images/signin-login-vectors/60843.jpg');
                                    background-size: cover;
                                    background-repeat: no-repeat;"></div>
                                 
                                </div>
                              </div>
                          </div>
      
                      </div>
                      <!-- end card-body -->
                  </div>
                  <!-- end card -->
      
      
                  <!-- end row -->
      
              </div>
              <!-- end col -->
          </div>
          <!-- Row -->
      </div>
      </main>

          <!--
Footer section
-->
@include('layouts.footer');
@stop