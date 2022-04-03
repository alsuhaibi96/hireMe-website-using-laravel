<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/bootstrap.rtl.css">

<link rel="stylesheet" href="assets/css/about-us-style.css">
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <!--
        Header
    -->
    @include('layouts.header')

<div class="about-section" style="padding-top: 100px">
  <h1>Hire me</h1>
  <p>الافضل حول العالم</p>
  <p>توفير وظائف حول العالم وبشكل مستمر </p>
</div>

<h2 style="text-align:center">اعضاء المنصة</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/images/abdu.jpg" class="img-fluid img-thumbnail" alt="Jane" style="width:100%">
      <div class="container">
        <h2>عبدالرحمن الصهيبي</h2>
        <p class="title">المؤسس والداعم</p>
        <p>خريج كلية الحاسوب جامعة ذمار</p>
        <p>alsuhaibiabdulrahmangmail.com</p>
        <p><button class="btn-theme button">اتصل</button></p>
      </div>
    </div>
  </div>

  <div class="column py-5">
    <div class="card py-2">
      <img src="assets/images/163931986_273372594284169_696132237991860918_n.jpg" class="img-fluid img-thumbnail" alt="Jane" style="width:100%">
      <div class="container">
        <h2> حمزه الحجي</h2>
        <p class="title">المؤسس والداعم</p>
        <p>خريج كلية الحاسوب جامعة صنعاء</p>
        <p>example.com</p>
        <p><button class="btn-theme button">اتصل</button></p>
      </div>
    </div>
  </div>
  <div class="column py-4 ">
    <div class="card pt-5">
      <img src="assets/images/nstatt_170418_1624_0052.0.0.jpg" height="300px" class=" " alt="Jane" style="width:100%;height: 365px;">
      <div class="container pt-5">
        <h2> مارك رزوكر بيرغ</h2>
        <p class="title">المؤسس والداعم</p>
        <p>خريج كلية الحاسوب جامعة هارفرد</p>
        <p>mark.com</p>
        <p><button class="btn-theme button">اتصل</button></p>
      </div>
    </div>
  </div>
</div>

    <!--
Footer section
-->
@include('layouts.footer');