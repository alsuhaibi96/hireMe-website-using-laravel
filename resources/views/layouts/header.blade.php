<header class="main-header fixed-top mb-5">
    <!-- Nav bar-->
    <nav class="navbar  navbar-expand-lg  navbar-bg  ">
        <div class="container-fluid p-2  ">
            <a class="navbar-brand text-white" href="{{ url('/') }}">Hire me</a>
            <button class="navbar-toggler navbar-dark " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse fw-bold " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0 ">
                    <li class="nav-item mx-3 pt-1 ">
                        <a class="nav-link main-active" aria-current="page" href="{{ url('/') }}">الرئيسية</a>
                    </li>
                    <li class="nav-item mx-3 pt-1">
                        <a class="nav-link navbar-a-color" href="{{ url('jobs') }}">الوظائف</a>
                    </li>
                    <li class="nav-item mx-3 pt-1">
                        <a class="nav-link navbar-a-color" href="{{ url('our_services') }}">خدماتنا</a>
                    </li>
                  

                    
                    <li class="nav-item mx-3 pt-1"><a class="nav-link navbar-a-color" href="{{ url('profile') }}"> الملف
                        الشخصي</a></li>
            <li class="nav-item mx-3 pt-1"><a class="nav-link navbar-a-color" href="{{ url('about_us') }}">من نحن</a></li>

            <li class="nav-item mx-3 pt-1"><a class="nav-link navbar-a-color" href="{{ url('contact_us') }}">تواصل معنا</a></li>
            <div class="  d-lg-none">
                <li class="nav-item mx-3 pt-1">
                    <a class="nav-link navbar-a-color" href="{{ url('register') }}">تسجيل حساب</a>
                </li>
                <li class="nav-item mx-3 pt-1">
                    <a class="nav-link navbar-a-color" href="{{ url('login') }}">الدخول</a>
                </li>
             </div>


            <div class="mx-5 px-5 d-none d-lg-block ">

                <button class="col-5   signup-btn btn-bg-color mx-3 ">
                    <a href="{{ url('register') }}" class="text-decoration-none main-active">    تسجيل حساب</a>
                </button>
                <button class="col-5  signin-btn border-0 btn-bg-color ">
                    <a href="{{ url('login') }}.html" class="text-decoration-none text-white">     الدخول</a>
                </button>
            </div>
                </ul>

            </div>
        </div>
    </nav>
</header>