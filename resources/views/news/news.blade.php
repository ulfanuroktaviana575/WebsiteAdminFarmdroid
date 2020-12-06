@extends('master')

@section('title', 'Halaman Kelola Berita')

@section('style')

@endsection

@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Halo, Ini Adalah Pengaturan List Berita</h2>

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
                                        <button type="button" class="btn btn-tambah btn-block btn-warning" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus-circle"></i> Tambah Daftar Berita</button>
                                        <!-- end button -->
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                                            <thead class="thead-dark">
                                                <tr role="row">
                                                    <th aria-controls="example2" colspan="1">No</th>
                                                    <th aria-controls="example2" colspan="1">Judul Berita</th>
                                                    <th aria-controls="example2" colspan="1">Kategori</th>
                                                    <th aria-controls="example2" colspan="1">Update Terakhir</th>
                                                    <th aria-controls="example2" class="text-center" colspan="1">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row">
                                                    <td>1</td>
                                                    <td>
                                                        <p>Ketersediaan Lahan Menjadi Tantangan</p>
                                                    </td>
                                                    <td>
                                                        <p>Permasalahan Pertanian</p>
                                                    </td>
                                                    <td>1 September 2020</td>
                                                    <td class="text-center">
                                                        <a href="#" type="button" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#modalview">Lihat</a>
                                                        <a href="/edit" class=" btn btn-warning btn-sm">Edit</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr role="row">
                                                    <td>2</td>
                                                    <td>
                                                        <p>Anomali Lonjakan Harga Beras</p>
                                                    </td>
                                                    <td>
                                                        <p>Permasalahan Pertanian</p>
                                                    </td>
                                                    <td>2 September 2020</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm">Lihat</a>
                                                        <a href="#" class=" btn btn-warning btn-sm">Edit</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr role="row">
                                                    <td>3</td>
                                                    <td>
                                                        <p>Mengenal Teknologi Pertanian</p>
                                                    </td>
                                                    <td>
                                                        <p>Teknologi Pertanian Pertanian</p>
                                                    </td>
                                                    <td>2 September 2020</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm">Lihat</a>
                                                        <a href="#" class=" btn btn-warning btn-sm">Edit</a>
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
                            <img src="{{asset('admin/dist/img/news.jpg')}}" alt="">
                            <p class="text-justify">
                                REPUBLIKA.CO.ID, JAKARTA – Pembukaan Asian Agriculture and Food Forum (ASAFF) 2020 berlangsung di Istana Negara, Jakarta, Kamis (12/3), oleh Presiden Joko Widodo. Pada kesempatan tersebut, Ketua Umum HKTI, Moeldoko, mengatakan bahwa salah satu tantangan besar pertanian saat ini adalah menyangkut masalah ketersediaan lahan.

                                Menurut Moeldoko, secara makro sektor pertanian adalah penyumbang GDP (Gross Domestic Product) terbesar di kawasan Asia dan menjadi bagian strategis dalam memenuhi kebutuhan pangan Asia. “Namun, seiring dengan perkembangan industri dan perubahan iklim, lahan pertanian di kawasan Asia terus menyusut,” ujarnya dalam rilis yang diterima Republika.co.id.

                                Rural Development and Food Security Forum 2019 yang digelar Asian Development Bank (ADB) di Manila, Filipina, Oktober 2019, mengungkapkan lahan pertanian menyusut hingga 44 persen. Kondisi ini mengancam produksi pangan Asia.

                            </p>

                            <p class="text-justify">
                                Padahal ADB menyebut sebanyak 822 juta orang di muka bumi masih berada dalam kondisi tidak aman pangan. Dari jumlah tersebut, sebanyak 517 juta orang (62,89%) berada di kawasan Asia dan Pasifik. Oleh karena itu ADB telah menetapkan pertanian dan ketahanan pangan menjadi salah satu dari tujuh prioritas operasionalnya hingga 2030 seiring dengan 17 tujuan SDGs (Sustainable Development Goals).

                                Mengutip data BPS, Moeldoko menyebutkan bahwa di Indonesia sendiri penyusutan lahan terjadi secara signifikan setiap tahunnya. Menurutnya, hampir 120 ribu hektar lahan berubah fungsi setiap tahunnya.

                                “Khusus Indonesia, selain penyusutan lahan kita memiliki lima persoalan pertanian lainnya,” kata Moedolo.

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- akhir modal view -->

            <!-- modal tambah berita -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Modal -->
                    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Tambah Data Berita</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Judul Berita</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Judul Berita">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Image Berita</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        <div class="form-group form-inline">

                                            <div class="dropdown mr-5">
                                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Kategori
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#">Permasalahan Pertanian</a>
                                                    <a class="dropdown-item" href="#">Perkembangan Teknologi Pertanian</a>
                                                    <a class="dropdown-item" href="#">Pemerintahan</a>
                                                    <a class="dropdown-item" href="#">Permasalahan Hama</a>
                                                    <a class="dropdown-item" href="#">Umum</a>
                                                </div>
                                            </div>


                                            <div class="dropdown">
                                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Tanggal
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#">Januari</a>
                                                    <a class="dropdown-item" href="#">Februari</a>
                                                    <a class="dropdown-item" href="#">Maret</a>
                                                    <a class="dropdown-item" href="#">April</a>
                                                    <a class="dropdown-item" href="#">Mei</a>
                                                    <a class="dropdown-item" href="#">Juni</a>
                                                    <a class="dropdown-item" href="#">Juli</a>
                                                    <a class="dropdown-item" href="#">Agustus</a>
                                                    <a class="dropdown-item" href="#">September</a>
                                                    <a class="dropdown-item" href="#">Oktober</a>
                                                    <a class="dropdown-item" href="#">November</a>
                                                    <a class="dropdown-item" href="#">Desember</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Penulis</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Penulis">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Sumber Berita</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Sumber Berita Berita">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi Berita</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="masukan Deskripsi berita"></textarea>
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