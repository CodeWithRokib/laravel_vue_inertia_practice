<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite('resources/js/app.js')
    @inertiaHead

       <!-- Include external CSS -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

       

  <link rel="stylesheet" href="{{asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/vendor/boxicons/css/boxicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/vendor/quill/quill.snow.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/vendor/quill/quill.bubble.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/vendor/remixicon/remixicon.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/vendor/simple-datatables/style.css')}}">
    <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">

       <!-- Include external JS -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

       
  <script src="{{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/quill/quill.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
  <script src="{{asset('backend/assets/js/main.js')}}"></script>
 
</head>
<body class="font-sans antialiased">
    @inertia
</body>
</html>
