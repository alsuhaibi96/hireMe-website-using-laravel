<!-- Stored in resources/views/layouts/master.blade.php -->
 
<html dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('assets/css/bootstrap.rtl.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    
        <title> @yield('title')</title>
    </head>
    <body >

 
       
            @yield('content')
           
        <script type="text/javascript" src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    </body>
</html>