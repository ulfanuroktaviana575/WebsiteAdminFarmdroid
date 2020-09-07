@extends('master')

@section('title', 'Halaman Kelola Keluh Kesah')

@section('style')

@endsection

@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>List Daftar Keluh Kesah</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">

                                    <div class="col-lg-12 col-md-6">
                                        <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
                                    </div>
                                    <!-- <div class="col-lg-4 col-md-6"> -->
                                    <!-- button triger modal -->
                                    <!-- <button type="button" class="btn btn-tambah btn-block btn-warning" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus-circle"></i> Tambah Daftar Penyakit</button> -->
                                    <!-- end button -->
                                    <!-- </div> -->
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                                            <thead class="thead-dark">
                                                <tr role="row">
                                                    <th aria-controls="example2" colspan="1">No</th>
                                                    <th aria-controls="example2" colspan="1">Nama Pengirim</th>
                                                    <th aria-controls="example2" colspan="1">Judul Keluhan</th>
                                                    <th aria-controls="example2" class="text-center" colspan="1">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row">
                                                    <td>1</td>
                                                    <td>
                                                        <p>Teguh Hariyadi</p>
                                                    </td>
                                                    <td>Alur Pemberian Bantuan yang Kacau</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Lihat</a>
                                                        <a href="#" class=" btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal1">Tanggapi</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr role="row">
                                                    <td>2</td>
                                                    <td>
                                                        <p>Mu'asir</p>
                                                    </td>
                                                    <td>Permainan pasar gelap distribusi pupuk</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Lihat</a>
                                                        <a href="#" class=" btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal1">Tanggapi</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr role="row">
                                                    <td>3</td>
                                                    <td>
                                                        <p>Mulyono</p>
                                                    </td>
                                                    <td>kualitas pupuk yang tidak sesuai dengan komposisi yang tertera</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Lihat</a>
                                                        <a href="#" class=" btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal1">Tanggapi</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr role="row">
                                                    <td>4</td>
                                                    <td>
                                                        <p>Bambang Setiawan</p>
                                                    </td>
                                                    <td>Perlunya Lumbung padi disetiap daerah</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Lihat</a>
                                                        <a href="#" class=" btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal1">Tanggapi</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr role="row">
                                                    <td>5</td>
                                                    <td>
                                                        <p>Sugeng Bahari</p>
                                                    </td>
                                                    <td>Bibit bersubsidi yang kurang berkualitas</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Lihat</a>
                                                        <a href="#" class=" btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal1">Tanggapi</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr role="row">
                                                    <td>6</td>
                                                    <td>
                                                        <p>Joko Anundiyo</p>
                                                    </td>
                                                    <td>Pemberian informasi yang masih sedikit</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Lihat</a>
                                                        <a href="#" class=" btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal1">Tanggapi</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr role="row">
                                                    <td>7</td>
                                                    <td>
                                                        <p>Galih Ginanjar</p>
                                                    </td>
                                                    <td>Kurangnya kepahaman petani mengenai efek pupuk kimia</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Lihat</a>
                                                        <a href="#" class=" btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal1">Tanggapi</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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

            <!-- modal lihat keluh kesah -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Modal -->
                    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Tampilan Keluhan Pengguna</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nama Pengirim</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Penyakit" value="Teguh Hariyadi">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Judul Keluhan</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Penyakit" value="Alur Pemberian Bantuan yang kacau">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nama Kelompok Tani</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Penyakit" value="Kelompok Tani Olah Rogo">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Alamat</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Penyakit" value="Desa Selorejo rt.002, rw.002, Kec. Ngunut, Kab.Tulungagung">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nomor Tlp/Wa</label>
                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Penyakit" value="085732516862">
                                        </div>
                                        <!-- tanggal -->
                                        <div class="form-group">
                                            <div class="dropdown">
                                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Tanggal Masuk
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi Keluhan</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="masukan Deskripsi penyakit">alur pemberian bantuan yang kacau membuat beberapa petani menadi bingung dalam pengaksesannya . bahkan tidak jarang ada yang kekurangan informasi mengenai hal ini. mohon untuk pihak pemerintahan untuk memperbaiki sistem informasi sehingga lebih mampu merambah ke semuanya. karna dari pengalaman yang saya miliki pemberian informasi hanya lewat chat personal ke ke ketua kelompok tani. menurut saya itu tidak efektif</textarea>
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- akhir content modal -->
            <!-- akhir modal lihat keluh kesah -->

            <!-- modal tanggapi keluh kesah -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Modal -->
                    <div class="modal" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Tanggapan Keluh Kesah</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Tanggapan</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Terimakasih Untuk masukkan anda. akan segera kami perbaiki kinerja kami">Terimakasih Untuk masukkan anda. akan segera kami perbaiki kinerja kami</textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- akhir content modal -->

            <!-- akhir tanggapan keluh kesah -->

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

@endsection