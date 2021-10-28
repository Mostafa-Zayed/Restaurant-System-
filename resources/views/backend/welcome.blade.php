<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="{{asset('backend/assets/plugins/fontawesome/js/all.min.js')}}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('backend/assets/css/portal.css')}}">

</head>

<body class="app">
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Dashboard</h1>
                <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                    <div class="inner">
                        <div class="app-card-body p-3 p-lg-4">
                            <div class="row gx-5 gy-3">
                                <div class="col-4 col-lg-4 text-center">
                                    <h1 class="mb-3 text-center"><i class="fas fa-tasks"></i></h1>
                                    <a class="btn app-btn-primary btn-lg" href="{{route('dashboard.managment')}}"><span> <i class="fas fa-tasks"></i></span> Managment</a>
                                </div>
                                <div class="col-4 col-lg-4 text-center">
                                    <h1 class="mb-3 text-center"><i class="fas fa-cash-register"></i></h1>
                                    <a class="btn app-btn-primary btn-lg" href="cashier"><span> <i class="fas fa-cash-register"></i></span> Cashier</a>
                                </div>
                                <div class="col-4 col-lg-4 text-center">
                                    <h1 class="mb-3 text-center"><i class="far fa-clipboard"></i></h1>
                                    <a class="btn app-btn-primary btn-lg" href="report"><span> <i class="fas fa-tasks"></i></span> Report</a>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    </div>
                    <!--//inner-->
                </div>

                <!--//row-->

            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->
        @include('backend.includes.footer')
        <!--//app-footer-->

    </div>
    <!--//app-wrapper-->


    <!-- Javascript -->
    <script src="{{asset('backend/assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Charts JS -->
    <script src="{{asset('backend/assets/plugins/chart.js/chart.min.js')}}"></script>
    <!-- <script src="{{asset('backend/assets/js/index-charts.js')}}"></script> -->

    <!-- Page Specific JS -->
    <!-- <script src="{{asset('backend/assets/js/app.js')}}"></script> -->

</body>

</html>