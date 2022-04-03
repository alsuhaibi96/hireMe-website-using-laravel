@extends('layouts.master')


@section ('title','Register')

@section('content') 

       
   
   <!--
        Header
    -->
@include('layouts.header')
  

    <!--Main Content-->
    <main class=" my-5 pt-5">
        <div id="main-wrapper" class="container">
          <div class="row justify-content-center">
              <div class="">
                  <div class="card border-0 ">
                      <div class="card-body p-0">
                          <div class="row no-gutters">
                              <div class="col-lg-6">
                                  <div class="p-5">
                                      <div class="mb-3">
                                          <h3 class="h4 font-weight-bold text-theme">تسجيل حساب</h3>
                                      </div>
      
                                      <h6 class="h5 mb-0 mt-5">مرحباً بك   !</h6>
                                      <p class="text-muted mt-1 mb-3"> شكراً لتواجدك على منصتنا</p>
      
                                      <form>
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">الايميل الالكتروني</label>
                                              <input type="email" class="form-control" id="exampleInputEmail1">
                                          </div>
                                          <div class="form-group ">
                                              <label for="exampleInputPassword1">كلمة السر</label>
                                              <input type='password'  class="form-control" id="exampleInputPassword1">
                                          </div>
                                          <div class="form-group mb-5">
                                            <label for="exampleInputPassword1"> تأكيد كلمة السر</label>
                                            <input type='password'  class="form-control" id="exampleInputRetypePassword">
                                        </div>
                                          <p> امتلك حساب ? <span><a href='login.html'>تسجيل الدخول</a></span></p>
                                          <a href='assets/views/dashbord/index.html' type="submit" class="btn btn-theme">تسجيل حساب</a>
                                      </form>
                                  </div>
                              </div>
      
                              <div class="col-lg-6 d-none d-lg-inline-block">
                                <div class="account-block  rounded-right">
                                    <div class="overlay rounded-right" style="background-image: url('assets/images/signin-login-vectors/pc.svg');
                                    background-size: cover;"></div>
                                 
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
@include('layouts/footer')
@stop