@extends('layouts.master')


@section ('title','login')

@section('content') 

@include('layouts.header')
    <!--Main Content-->
    <main class="py-4 my-5">
        <div id="main-wrapper" class="container">
          <div class="row justify-content-center">
              <div class="">
                  <div class="card border-0 ">
                      <div class="card-body p-0">
                          <div class="row no-gutters">
                              <div class="col-lg-6">
                                  <div class="p-5">
                                      <div class="mb-5">
                                          <h3 class="h4 font-weight-bold text-theme">تسجيل الدخول</h3>
                                      </div>
      
                                      <h6 class="h5 mb-0">مرحباً بك من جديد !</h6>
                                      <p class="text-muted mt-2 mb-5"> شكراً لتواجدك على منصتنا</p>
      
                                      <form>
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">الايميل الالكتروني</label>
                                              <input type="email" class="form-control" id="exampleInputEmail1">
                                          </div>
                                          <div class="form-group mb-5">
                                              <label for="exampleInputPassword1">كلمة السر</label>
                                              <input type='password'  class="form-control" id="exampleInputPassword1">
                                          </div>
                                          <p>لا امتلك حساب ? <span><a href='signin.html'>تسجيل حساب</a></span></p>
                                          <a href='assets/views/dashbord/index.html' type="submit" class="btn btn-theme">الدخول</a>
                                      </form>
                                  </div>
                              </div>
      
                              <div class="col-lg-6 d-none d-lg-inline-block">
                                <div class="account-block  rounded-right">
                                    <div class="overlay rounded-right" style=" background-image: url('assets/images/signin-login-vectors/pc.svg');
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

@include('layouts.footer')
          <!--
Footer section
-->

@stop
