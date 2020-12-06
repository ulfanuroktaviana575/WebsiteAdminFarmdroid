@extends('master')

@section('title', 'Halaman Kelola Hak Akses')

@section('style')

@endsection

@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Halo, Ini Adalah Pengaturan Hak Akses User</h2>
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
                                        <button type="button" class="btn btn-tambah btn-block btn-warning" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus-circle"></i> Tambah User</button>
                                        <!-- end button -->
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                                            <thead class="thead-dark">
                                                <tr role="row">
                                                    <th aria-controls="example2" colspan="1">No</th>
                                                    <th aria-controls="example2" colspan="1">Nama Username</th>
                                                    <th aria-controls="example2" colspan="1">Hak Akses</th>
                                                    <th aria-controls="example2" class="text-center" colspan="1">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row">
                                                    <td>1</td>
                                                    <td>
                                                        <p>ulfanuroktaviana575</p>
                                                    </td>
                                                    <td>Pakar</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#modalview">Lihat</a>
                                                        <a href="#" class=" btn btn-warning btn-sm" data-toggle="modal" data-target="#modalviewEdit">Edit</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr role="row">
                                                    <td>2</td>
                                                    <td>
                                                        <p>naufaldiizad123</p>
                                                    </td>
                                                    <td>Admin dan Pakar</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#modalviewAdminDanPakar">Lihat</a>
                                                        <a href="/edit" class=" btn btn-warning btn-sm">Edit</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                <tr role="row">
                                                    <td>3</td>
                                                    <td>
                                                        <p>rickyhendrawan</p>
                                                    </td>
                                                    <td>Petani</td>
                                                    <td class="text-center">
                                                        <a href="#" class=" btn btn-success btn-sm" data-toggle="modal" data-target="#modalviewPetani">Lihat</a>
                                                        <a href="/edit" class=" btn btn-warning btn-sm">Edit</a>
                                                        <a href="# " class=" btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- modal view pakar -->
                                <!-- Modal -->
                                <div class="modal" id="modalview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                        <div class="modal-content ">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Biodata Pengguna</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="div justify-content-center text-center">
                                                    <h2>Berikut Detail Pengguna</h2>
                                                    <img src="{{asset('admin/dist/img/user.png')}}" alt="">
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="ulfanuroktaviana575@webmail.umm.ac.id">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="ulfanuroktaviana575">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Hak Akses</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="Pakar">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="Desa Balesono RT.002, RW.002, kec. Ngunut, Kab.Tulungagung">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="Pegawai Penyuluhan Kabupaten Tulungagung">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir modal view pakar -->

                                <!-- modal view admin dan pakar -->
                                <!-- Modal -->
                                <div class="modal" id="modalviewAdminDanPakar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                        <div class="modal-content ">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Biodata Pengguna</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="div justify-content-center text-center">
                                                    <h2>Berikut Detail Pengguna</h2>
                                                    <img src="{{asset('admin/dist/img/admin.jpg')}}" alt="">
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="naufaldiizad@gmail.com">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="naufaldiizad123">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Hak Akses</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="admin dan pakar">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="Desa Wetan RT.002, RW.002, Kab.Tulungagung">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="Kepala Kantor Balai Penyuluhan Kabupaten Tulungagung">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- akhir modal view admin dan pakar -->


                                <!-- modal view Petani -->
                                <!-- Modal -->
                                <div class="modal" id="modalviewPetani" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                        <div class="modal-content ">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Biodata Pengguna</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="div justify-content-center text-center">
                                                    <h2>Berikut Detail Pengguna</h2>
                                                    <img src="{{asset('admin/dist/img/user.jpg')}}" alt="">
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="rickyhendrawan@gmail.com">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="rickyhendrawan">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Hak Akses</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="Petani">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="Desa Kacangan RT.002, RW.002, Kab.Tulungagung">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="Ketua Kelompok Tani Olah Rogo desa Kacangan">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- akhir modal view Petani -->

                                <!-- modal view Edit -->
                                <!-- Modal -->
                                <div class="modal" id="modalviewEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                        <div class="modal-content ">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Editing</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="div justify-content-center">
                                                    <h2>Detail Biodata pengguna</h2>
                                                    <img src="{{asset('admin/dist/img/user.png')}}" alt="">

                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="ulfanuroktaviana575@webmail.umm.ac.id">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">File input</label>
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                                </div>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="">Upload</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="ulfanuroktaviana575">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Hak Akses</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="Pakar">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="Desa Balesono RT.002, RW.002, kec. Ngunut, Kab.Tulungagung">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="Pegawai Penyuluhan Kabupaten Tulungagung">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Edit</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- akhir modal view Petani -->

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
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Tambah Pengguna</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nama Pengguna</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Pengguna">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Username</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Image Pengguna</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Email</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Password</label>
                                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1"></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Username">
                                        </div>

                                        <div class="form-group">
                                            <label>Hak Akses</label>
                                            <select class="form-control">
                                                <option>Admin dan Pakar</option>
                                                <option>Pakar</option>
                                                <option>Petani</option>

                                            </select>
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