<header class="main-header sticky-top top-0 ">
    <!-- Nav bar-->
    <nav class="navbar  navbar-expand-lg  navbar-bg  ">
        <div class="container-fluid ">
            <a class="navbar-brand text-white" href="i{{ url('/') }}">Hire me</a>
            <button class="navbar-toggler navbar-dark " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse fw-bold " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item mx-3">
                        <a class="nav-link main-active" aria-current="page" href="{{ url('/') }}">الرئيسية</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link navbar-a-color" href="{{ url('jobs') }}">الوظائف</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link navbar-a-color" href="{{ url('our_services') }}">خدماتنا</a>
                    </li>
                    <li class="nav-item mx-3 dropdown">
                        <a class="nav-link dropdown-toggle navbar-a-color" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            المزيد
                        </a>
                        <ul class="dropdown-menu border-0 navbar-bg " aria-labelledby="navbarDropdown">
                            <li><a class="navbar-a-color nav-link d-lg-none" href="{{ url('login') }}"> تسجيل الدخول</a></li>
                            <li><a class="navbar-a-color nav-link d-lg-none" href="{{ url('register') }}">تسجيل حساب</a></li>
                            <li><a class="navbar-a-color nav-link " href="{{ url('dashboard') }}"> لوحة التحكم
                                    </a></li>

                                    <li><a class="navbar-a-color nav-link " href="{{ url('profile') }}"> الملف
                                        الشخصي</a></li>
                            <li><a class="navbar-a-color nav-link " href="{{ url('about_us') }}">من نحن</a></li>

                            <li><a class="navbar-a-color nav-link " href="{{ url('contact_us') }}">تواصل معنا</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
</header>