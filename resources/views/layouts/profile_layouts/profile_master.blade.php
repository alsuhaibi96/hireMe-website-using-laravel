<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">
  <link rel="stylesheet" href="{{ asset('jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/profile-style.css') }}">


    <title>@yield('title')</title>
</head>
<body class="bg-dark">
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a id="myprofilename" class="nav-link dropdown-toggle bg-white" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" >
                     عبدالرحمن الصهيبي
                    </a>
                    <ul class="dropdown-menu bg-white" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item bg-white text-black" href="{{ url('/') }}">الرئيسية</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Start setting box -->
  
<div class="setting-box" >
  <div class="toggle-setting ">
      <i class="fa fa-gear setting-i "></i>

  </div>
  <div class="setting-container ">
      <div class="option-box bg-black text-white">
          <img src="assets/profile-images/IMG_20210930_030036_034.JPG" alt="" class="img-fluid">
          <h4 class="text-white">عبدالرحمن الصهيبي</h4>
          <hr>
          <ul class="list-menu " >
              <li class="text-center"><a href="{{ url('profile') }}" class="text-white" >لوحة التحكم</a></li>
              <li class="text-center"><a href="{{ url('experiences') }}" class="text-white">الخبرات</a></li>
              <li class="text-center"><a href="{{ url('skills') }}" class="text-white">المهارات</a></li>
              <li class="text-center"><a href="{{ url('qualifications') }}" class="text-white">المؤهلات</a></li>
              <li class="text-center"><a href="{{ url('courses') }}" class="text-white">الدورات</a></li>
          </ul>
      </div>
  </div>
</div>

<!-- end setting box -->
    @yield('content')
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js')  }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dashboard-app.js') }}"></script>
 
</body>
</html>