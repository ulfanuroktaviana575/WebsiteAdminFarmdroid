@extends('master')

@section('title', 'Halaman Dashboard')

@section('style')

@endsection

@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <br>
                <br>
                <br>
                <div class="col-lg-6 text-center">
                    <h3>Selamat Datang Admin FARMDROID</h3>
                </div>
            </div>

            <!-- 3 panel informasi -->
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-user"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">USER</span>
                            <span class="info-box-number">
                                820
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-graduation-cap"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">PAKAR</span>
                            <span class="info-box-number">30</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-database"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">PENYAKIT</span>
                            <span class="info-box-number">14.000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-list-ol"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">KELUH-KESAH</span>
                            <span class="info-box-number">200</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Jumlah Pengguna Aplikasi Farmdroid</h3>
                                <a href="javascript:void(0);">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">820</span>
                                    <span>Visitors Over Time</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                        <i class="fas fa-arrow-up"></i> 12.5%
                                    </span>
                                    <span class="text-muted">sejak bulan lalu</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <canvas id="visitors-chart" height="300" width="1075" class="chartjs-render-monitor" style="display: block; height: 200px; width: 717px;"></canvas>
                            </div>

                            <div class="d-flex flex-row justify-content-end">
                                <span class="mr-2">
                                    <i class="fas fa-square text-primary"></i> This year
                                </span>

                                <span>
                                    <i class="fas fa-square text-gray"></i> Last year
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

@endsection