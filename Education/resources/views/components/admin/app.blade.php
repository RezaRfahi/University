<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پنل</title>

{{--    <x-livewire-alert::scripts />--}}
{{--    <x-livewire-alert::flash />--}}



    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{asset('font-awesome/css/font-awesome.min.css') }}>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href={{asset('css/adminlte.min.css') }}>
    <!-- iCheck -->
    <link rel="stylesheet" href={{asset('iCheck/flat/blue.css')}}>
    <!-- Morris chart -->
    <link rel="stylesheet" href={{asset('morris/morris.css')}}>
    <!-- jvectormap -->
    <link rel="stylesheet" href={{ asset('jvectormap/jquery-jvectormap-1.2.2.css') }}>
    <!-- Date Picker -->
    <link rel="stylesheet" href={{asset('datepicker/datepicker3.css') }}>
    <!-- Daterange picker -->
    <link rel="stylesheet" href={{asset('daterangepicker/daterangepicker-bs3.css')}}>
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href={{asset('bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- bootstrap rtl -->
    <link rel="stylesheet" href={{asset('css/bootstrap-rtl.min.css')}}>
    <!-- template rtl version -->
    <link rel="stylesheet" href={{asset('css/custom-style.css')}}>
    <!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="{{asset('fullcalendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('fullcalendar/fullcalendar.print.css')}}" media="print">


    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

{{--    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>--}}
    @livewireStyles

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
   ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        th, td {
            text-align: center;
        }
        .profile-img {
            height: 30px;
            width: 30px;
            border-radius: 50%;
        }
        input::placeholder {
            text-align: center;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

    <!-- Navbar -->
    <x-admin.navbar />
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <x-admin.sidebar />




    <!-- Content Wrapper. Contains page content -->
    <section class="content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="content-header">
                    <div class="container-fluid">

                        <!-- Show Alert Section -->
                        <div>
                            @if (session()->has('alert.message'))
                                <div class="alert alert-{{ session('alert.type') }} alert-dismissible fade show" role="alert">
                                    {{ session('alert.message') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                        </div>

                        <div class="row mb-2">
                            <div class="col-sm-6">
                                {{ $title }}
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </section>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->



</div>
<!-- ./wrapper -->


@livewireScripts

<!-- jQuery -->
<script src={{asset('bootstrap/js/bootstrap.bundle.min.js')}}></script>

<!-- OPTIONAL SCRIPTS -->
<script src={{asset('js/demo.js')}}></script>

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src={{asset('sparkline/jquery.sparkline.min.js')}}></script>
<!-- jVectorMap -->
<script src={{asset('jvectormap/jquery-jvectormap-1.2.2.min.js')}}></script>
<script src={{asset('jvectormap/jquery-jvectormap-world-mill-en.js')}}></script>
<!-- SlimScroll 1.3.0 -->
<script src={{asset('slimScroll/jquery.slimscroll.min.js')}}></script>
<!-- ChartJS 1.0.2 -->
<script src={{asset('chartjs-old/Chart.min.js')}}></script>

<!-- PAGE SCRIPTS -->
<script src={{asset('js/pages/dashboard2.js')}}></script>

<script src={{asset('jquery/jquery.min.js')}}></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{asset('bootstrap/js/bootstrap.bundle.min.js')}}></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src={{asset('morris/morris.min.js')}}></script>
<!-- Sparkline -->
<script src={{asset('sparkline/jquery.sparkline.min.js')}}></script>
<!-- jvectormap -->
<script src={{asset('jvectormap/jquery-jvectormap-1.2.2.min.js')}}></script>
<script src={{asset('jvectormap/jquery-jvectormap-world-mill-en.js')}}></script>
<!-- jQuery Knob Chart -->
<script src={{asset('knob/jquery.knob.js')}}></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src={{asset('daterangepicker/daterangepicker.js')}}></script>
<!-- datepicker -->
<script src={{asset('datepicker/bootstrap-datepicker.js')}}></script>
<!-- Bootstrap WYSIHTML5 -->
<script src={{asset('bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}></script>
<!-- Slimscroll -->
<script src={{asset('slimScroll/jquery.slimscroll.min.js')}}></script>
<!-- FastClick -->
<script src={{asset('fastclick/fastclick.js')}}></script>
<!-- AdminLTE App -->
<script src={{asset('js/adminlte.js')}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{asset('js/pages/dashboard.js')}}></script>
<!-- AdminLTE for demo purposes -->
<script src={{asset('js/demo.js')}}></script>

<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/b48c8d7cef.js" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.tailwindcss.com"></script>

</body>
</html>
