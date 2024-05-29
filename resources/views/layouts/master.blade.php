<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("/plugins/images/favicon.png") }}">
    <title>Kamus Bahasa Jawa</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset("/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css") }}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{ asset("/plugins/bower_components/toast-master/css/jquery.toast.css") }}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{ asset("../plugins/bower_components/morrisjs/morris.css") }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset("css/animate.css") }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset("css/style.css") }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset("css/colors/blue.css") }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- modify selected row datatable color -->
    <style>
        @media (min-width: 1549px){
            #page-wrapper {
                margin-right: 0;
            }
        }
        @media (max-width: 540px){
            #page-wrapper {
                margin-left: 40px;
            }
        }
        table.dataTable tbody>tr.selected,table.dataTable tbody>tr>.selected {
            background-color: #9dabc7 !important;
            color: white;
            /* background-color: #b0bed9 !important; */
        }
        table.dataTable tbody>tr:hover,table.dataTable tbody>tr>:hover {
            /* background-color: #9dabc7 !important; */
            /* color: white; */
            box-shadow: inset 0 0 0 9999px #e9edf3 !important;
            /* background-color: #b0bed9 !important; */
        }
        .swal2-container {
            transform: scale(1.3);
        }

        label{
            font-weight: 600;
        }

        .progress {
            background-color: rgb(18 21 23 / 13%);
        }

    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--<link href="{{ asset('/datatables/datatables.min.css') }}" rel="stylesheet">
    <script src="{{ asset('/datatables/datatables.js') }}"></script>-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchpanes/1.2.1/css/searchPanes.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/searchpanes/1.2.1/js/dataTables.searchPanes.min.js"></script>
    <link type="text/css" href="https://cdn.datatables.net/rowgroup/1.1.3/css/rowGroup.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/rowgroup/1.1.3/css/rowGroup.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/rowgroup/1.1.3/js/dataTables.rowGroup.min.js"></script>
    <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
    <script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
    
    <script src="{{ asset('/assets/js/globalFunction.js') }}" type="text/javascript"></script>
    <link href="{{ asset('/css/customs.css') }}" rel="stylesheet">

    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-19175540-9', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b><img src="../plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs">APLIKASI KAMUS</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    {{-- <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li> --}}
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li> <a href="index.html" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Halaman Utama <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="index.html">Kamus dan Terjemahan</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Terjemahkan Bahasa</h4>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                @yield('content')
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2024 &copy; Aplikasi Kamus Bahasa Jawa Indonesia </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ asset("/plugins/bower_components/jquery/dist/jquery.min.js") }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset("bootstrap/dist/js/tether.min.js") }}"></script>
    <script src="{{ asset("bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js") }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset("/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js") }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset("js/jquery.slimscroll.js") }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset("js/waves.js") }}"></script>
    <!--Counter js -->
    <script src="{{ asset("/plugins/bower_components/waypoints/lib/jquery.waypoints.js") }}"></script>
    <script src="{{ asset("/plugins/bower_components/counterup/jquery.counterup.min.js") }}"></script>
    <!--Morris JavaScript -->
    <script src="{{ asset("/plugins/bower_components/raphael/raphael-min.js") }}"></script>
    <script src="{{ asset("/plugins/bower_components/morrisjs/morris.js") }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset("js/custom.min.js") }}"></script>
    <script src="{{ asset("js/dashboard1.js") }}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{ asset("/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js") }}"></script>
    <script src="{{ asset("/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js") }}"></script>
    <script src="{{ asset("/plugins/bower_components/toast-master/js/jquery.toast.js") }}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Selamat datang di Aplikasi Kamus dan Terjemahan Bahasa Indonesia - Jawa',
            text: 'Anda bisa melakukan translasi bahasa dan dapat melihat sekumpulan kata dalam bahasa Indonesia dan Jawa',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,

            stack: 6
        })
    });
    </script>
    <!--Style Switcher -->
    <script src="{{ asset("/plugins/bower_components/styleswitcher/jQuery.style.switcher.js") }}"></script>
</body>

</html>
