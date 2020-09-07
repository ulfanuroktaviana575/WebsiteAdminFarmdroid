@extends('master')

@section('title', 'Halaman Kelola Daftar Penyakit')

@section('style')

@endsection

@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Halo, Ini Adalah Pengaturan List Daftar Penyakit</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">

                                    <div class="col-lg-8 col-md-6">
                                        <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <!-- button triger modal -->
                                        <button type="button" class="btn btn-tambah btn-block btn-warning" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus-circle"></i> Tambah Daftar Penyakit</button>
                                        <!-- end button -->
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                                            <thead class="thead-dark">
                                                <tr role="row">
                                                    <th aria-controls="example2" colspan="1">No</th>
                                                    <th aria-controls="example2" colspan="1">Nama Penyakit</th>
                                                    <th aria-controls="example2" colspan="1">Update Terakhir</th>
                                                    <th aria-controls="example2" class="text-center" colspan="1">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row">
                                                    <td>1</td>
                                                    <td>
                                                        <p>Hawar</p>
                                                    </td>
                                                    <td>1 September 2020</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#modalview">Lihat</a>
                                                        <a href="/edit" class=" btn btn-warning btn-sm">Edit</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr role="row">
                                                    <td>2</td>
                                                    <td>
                                                        <p>Bercak Daun</p>
                                                    </td>
                                                    <td>2 September 2020</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#modalview">Lihat</a>
                                                        <a href="/edit" class=" btn btn-warning btn-sm">Edit</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr role="row">
                                                    <td>3</td>
                                                    <td>
                                                        <p>Tungro</p>
                                                    </td>
                                                    <td>2 September 2020</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#modalview">Lihat</a>
                                                        <a href="/edit" class=" btn btn-warning btn-sm">Edit</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr role="row">
                                                    <td>4</td>
                                                    <td>
                                                        <p>Busuk Batang</p>
                                                    </td>
                                                    <td>2 September 2020</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#modalview">Lihat</a>
                                                        <a href="/edit" class=" btn btn-warning btn-sm">Edit</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- modal view -->
                                <!-- Modal -->
                                <div class="modal" id="modalview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content ">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Penyakit Hawar</h2>
                                                <img src="{{asset('admin/dist/img/padi.jpg')}}" alt="">
                                                <p class="text-justify">
                                                    Salah satu penyakit yang sering menyerang padi adalah Penyakit Hawar Daun Bakteri (HDB). Penyakit tersebut termasuk ke dalam patogen yang menginfeksi tanaman pada semua fase pertumbuhan tanaman padi, mulai dari masa pertumbuhan hingga menjelang masa panen.
                                                </p>

                                                <p class="text-justify">
                                                    Penyakit tersebut sangat merugikan petani karena dapat menurunkan hasil panen secara drastis. Bahkan, menurut data Direktorat Perlindungan Tanaman, petani padi Indonesia mengalami kerugian lebih dari 50% hasil pertanian padi karena lebih dari 37 ribu hektar padi terserang penyakit tersebut.
                                                </p>
                                                <p class="text-justify">
                                                    Pada umumnya, penyakit HDB menyerang pada saat musim hujan atau kondisi musim kemarau yang basah (kelembaban tinggi) dan kondisi tanah yang banyak mengandung kandungan zat Nitrogen yang biasanya digunakan sebagai pupuk tanaman dalam kadar tertentu. Karena pada kondisi tersebut, bakteri Xanthomonas campestris pv oryzae (nama bakteri penyebab penyakit HDB) dapat berkembangbiak dengan baik.

                                                    Cara penyakit HDB menginfeksi tanaman adalah dengan masuk melalui luka daun atau lubang alami berupa stomata dan merusak klorofil daun. Akibat dari rusaknya klorofil tersebut adalah menurunnya kemampuan tanaman dalam berfotosintetis yang berdampak pada matinya tanaman dan pengisian gabah menjadi tidak sempurna.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                                <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->


            <div class="row">
                <div class="col-lg-12">
                    <!-- Modal -->
                    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Tambah Data Penyakit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nama Penyakit</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Penyakit">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Image Penyakit</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi Penyakit</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="masukan Deskripsi penyakit"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Penyebab Penyakit</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="masukan penyebab penyakit"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Penanganan Penyakit</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan cara penanganan penyakit"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Tambahkan Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- akhir content modal -->

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

@endsection