<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $page }} - {{ config('app.name', 'Patient Care') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Select 2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div class="container-fluid px-0 bg-gray-100">

        <div class="bg-surface-primary border-bottom py-6">
            <div class="container-fluid">
               <div class="mb-npx">
                  <div class="row align-items-center">
                     <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                        <h4 class="ls-tight"><span class="d-inline-block me-3">👋</span>Welcome! {{ Auth::user()->name }}</h4>
                     </div>
                     <div class="col-sm-6 col-12 text-sm-end">
                        <div class="hstack gap-2 justify-content-end"><a href="https://webpixels.io/themes/clever-admin-dashboard-template" class="btn d-inline-flex btn-sm btn-neutral border-base">Learn more </a><a href="https://github.com/webpixels/bootstrap-dashboard-kit" class="btn btn-sm btn-dark"><span class="pe-2"><i class="bi bi-github"></i> </span><span>Download</span></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

        @include('partials.navbar')
        
        <!-- Main content -->
        
           
            <header class="bg-surface-secondary border-top">
                <div class="container-xl">
                    <div class="py-5 border-bottom">
                        <!-- Page heading -->
                        <div>

                            @yield('header')

                        </div>
                    </div>
                </div>
            </header>
            <main class="py-10 bg-surface-primary">
                <!-- Container -->
                <div class="container-xl gap-6">

                   @yield('content')

               </div>
            </main>
        </div>
    </div>



</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.multiple-select').select2();
    });
</script>

@stack('child-scripts')

</html>
