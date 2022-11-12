<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.104.2">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Lovebook - <?= $title ?></title>

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/LogoLovebook.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/LogoLovebook.png" rel="apple-touch-icon">

    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/fusioncharts.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/themes/fusioncharts.theme.fusion.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>  

    <script type="text/javascript">
        FusionCharts.ready(function() {
            var visitChart = new FusionCharts({
                type: 'line',
                renderAt: 'chartPenjualan',
                width: '1350',
                height: '625',
                dataFormat: 'jsonurl',
                dataSource: '<?= base_url() ?>uploads/penjualan/penjualan.json'
            });

            visitChart.render();
        });
    </script>
    <script type="text/javascript">
        FusionCharts.ready(function() {
            var cSatScoreChart = new FusionCharts({
                type: 'angulargauge',
                renderAt: 'chartKepuasan',
                width: '600',
                height: '375',
                dataFormat: 'jsonurl',
                dataSource: '<?= base_url() ?>uploads/penjualan/kepuasan.json'
            }).render();
        });
    </script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/dashboard/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="<?=base_url()?>">
            <h5>Lovebook</h5><span></span>
        </a>
        
        <!-- <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        
        <!-- <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"> -->
        <div class="navbar">
            <a class="bi bi-house nav-link" style="color:white" href="<?=base_url('home')?>"> Home</a>
            <div class="nav-item text-nowrap">
                <a class="bi bi-box-arrow-right nav-link px-3 me-3 ms-3" style="color:white" href="<?= base_url('/logout') ?>"> Sign out</a>
            </div>
        </div>
    </header>

    <!-- <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?=base_url('dashboard')?>">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('dashboard/product')?>">
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                Data Produk
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('dashboard/orders')?>">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Data Transaksi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('dashboard/users')?>">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Data Pelanggan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('dashboard/reports')?>">
                                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                Laporan
                            </a>
                        </li>
                    </ul>
                </div>
            </nav> -->