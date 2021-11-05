<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_file/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


   
  </head>
  <body class="app sidebar-mini">

          <!-- Navbar-->
    @include('partials.__header')
    <!-- Sidebar menu-->
    @include('partials.__aside')


  
 
    <main class="app-content">
    
      @yield('content')
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{asset('admin_file/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('admin_file/js/popper.min.js')}}"></script>
    <script src="{{asset('admin_file/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_file/js/main.js')}}"></script>
    <script src="{{asset('admin_file/js/ckeditor/ckeditor.js')}}"></script>

 <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $( 'textarea.ckeditor' ).ckeditor(); 

</script>


@stack('script-code')

  </body>
</html>