<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ALDIRISKY Blog | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- feather icon js --}}
    {{-- <script src="https://unpkg.com/feather-icons"></script> --}}
    {{-- <script src="feather.min.js"></script> --}}
    
    <!-- Custom styles for this template -->
    <link href="/CSS/dashboard.css" rel="stylesheet">
    
    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    
    
    <style>
      /* .trix-button--icon-attach{
        display: none;
      } */
       trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
      }
    </style>
  </head>
  <body>
    
    @include('dashboard.layouts.header')

    <div class="container-fluid">
  <div class="row">
@include('dashboard.layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('container')
    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

{{-- <script src="/JS/featherr.min.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script> --}}
{{-- <script src="/JS/dashboard.js"></script> --}}
{{-- js chart --}}
<script src="/JS/chart.js"></script>
  </body>
</html>
