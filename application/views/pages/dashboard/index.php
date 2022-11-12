<script type="text/javascript">
    $(function() {

        var data_click = <?php echo $click; ?>;
        var data_viewer = <?php echo $viewer; ?>;

        $('#container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Yearly Website Ratio'
            },
            xAxis: {
                categories: ['2016', '2017', '2018', '2019']
            },
            yAxis: {
                title: {
                    text: 'Rate'
                }
            },
            series: [{
                name: 'Click',
                data: data_click
            }, {
                name: 'View',
                data: data_viewer
            }]
        });
    });
</script>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('dashboard') ?>">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard/product') ?>">
                            <span data-feather="shopping-cart" class="align-text-bottom"></span>
                            Data Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard/orders') ?>">
                            <span data-feather="file" class="align-text-bottom"></span>
                            Data Transaksi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard/users') ?>">
                            <span data-feather="users" class="align-text-bottom"></span>
                            Data Pelanggan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard/reports') ?>">
                            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                            Laporan
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Selamat Datang, <span style="color:#CE1212"><?= ucwords($this->session->userdata('name')) ?> !</span></h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar" class="align-text-bottom"></span>
                        This week
                    </button>
                </div>
            </div>


            <!-- <h4 class="mb-4">Pendapatan</h4> -->
            <div id="chartPenjualan" class="table-responsive"></div>
            
            <!-- <div class="container">
                <br />
                <h2 class="text-center"> Highcharts in Codeigniter MYSQL JSON </h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">Dashboard - Code.candilkuya.com</div>
                            <div class="panel-body">
                                <div id="container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <h4 class="mb-4 mt-5">Kepuasan Pembeli</h4>
            <div id="chartKepuasan" class="table-responsive d-flex justify-content-center"></div>

            <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

    </div>
    </main>