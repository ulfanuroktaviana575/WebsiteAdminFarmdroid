@extends('master')

@section('title', 'Halaman Kelola Informasi Pupuk')

@section('style')

@endsection

@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>EDITING CHATBOT <br> Informasi Pupuk</h2>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class=" text-center">DIALOG</h3>
                        </div>
                        <div class="card-body">


                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-sm btn-tambah-chatbot btn-block btn-warning" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-plus-circle"></i> Tambah Dialog</button>
                            </div>

                            <!-- modal tambah dialog -->
                            <!-- Modal -->
                            <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Dialog</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Judul Dialog">
                                                        <label for="exampleInputEmail1">Title Dialog</label>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label for="">Keyword Intent</label>
                                                        </div>
                                                        <!-- /.input group -->
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <button type="submit" class="btn btn-sm btn-primary ml-1 mr-1">Tambah</button>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Respon Assistent</label>
                                                        <div class="input-group">
                                                            <!-- Example single danger button -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Text
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Text</a>
                                                                    <a class="dropdown-item" href="#">Image</a>
                                                                    <a class="dropdown-item" href="#">Video</a>
                                                                    <div class="dropdown-divider"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="3" placeholder="Masukan Dialog"></textarea>
                                                    </div>

                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- akhir modal tambah dialog -->

                            <!-- bot -->
                            <div class="form-group">
                                <label>Percakapan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-android"></i></span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <button type="submit" class="btn btn-sm btn-danger ml-1 mr-1"><i class="fas fa-trash-alt"></i></button>
                                    <button type="submit" class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></button>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- user -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <button type="submit" class="btn btn-sm btn-danger ml-1 mr-1"><i class="fas fa-trash-alt"></i></button>
                                    <button type="submit" class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></button>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <!-- bot -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-android"></i></span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <button type="submit" class="btn btn-sm btn-danger ml-1 mr-1"><i class="fas fa-trash-alt"></i></button>
                                    <button type="submit" class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></button>
                                </div>

                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- user -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <button type="submit" class="btn btn-sm btn-danger ml-1 mr-1"><i class="fas fa-trash-alt"></i></button>
                                    <button type="submit" class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></button>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <div class="card">
                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-right">
                                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="noted">
                                <h2>Keterangan:</h2>
                                <p><i class="fab fa-android"></i> = Robot</p>
                                <p><i class="fas fa-user-alt"></i> = User</p>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <section class="content">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Intent</h3>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-sm"><i class="fas fa-download"></i></button>
                                <button type="submit" class="btn btn-sm"><i class="fas fa-upload"></i></button>
                                <button type="submit" class="btn btn-sm"><i class="fas fa-trash-alt"></i></button>
                                <button type="button" class="btn btn-sm btn-tambah-chatbot btn-warning" data-toggle="modal" data-target="#exampleModal2">
                                    <i class="fa fa-plus-circle"></i> Tambah Intent</button>
                            </div>

                            <!-- modal tambah Intent -->
                            <!-- Modal -->
                            <div class="modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Intent</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Intent Name</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Intent">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Description 'Optional'</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Berikan Deskripsi ('Opsional')">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Contoh Jawaban User</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan contoh kemungkinan jawaban">
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Tambah Contoh</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- akhir modal tambah Intent -->


                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;">
                                    <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                        <table class="jsgrid-table">
                                            <tr class="jsgrid-header-row">
                                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Intent</th>
                                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Description</th>
                                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Modified</th>
                                                <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Example</th>

                                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 100px;">Aksi</th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="jsgrid-grid-body">
                                        <table class="jsgrid-table">
                                            <tbody>
                                                <tr class="jsgrid-row">
                                                    <td class="jsgrid-cell" style="width: 150px;">#kabupaten</td>
                                                    <td class="jsgrid-cell" style="width: 150px;"></td>
                                                    <td class="jsgrid-cell" style="width: 150px;">1 september 2020</td>
                                                    <td class="jsgrid-cell" style="width: 150px;">2</td>
                                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                </tr>
                                                <tr class="jsgrid-row">
                                                    <td class="jsgrid-cell" style="width: 150px;">#provinsi</td>
                                                    <td class="jsgrid-cell" style="width: 150px;"></td>
                                                    <td class="jsgrid-cell" style="width: 150px;">1 september 2020</td>
                                                    <td class="jsgrid-cell" style="width: 150px;">2</td>
                                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                </tr>
                                                <tr class="jsgrid-row">
                                                    <td class="jsgrid-cell" style="width: 150px;">#pilihan</td>
                                                    <td class="jsgrid-cell" style="width: 150px;"></td>
                                                    <td class="jsgrid-cell" style="width: 150px;">1 september 2020</td>
                                                    <td class="jsgrid-cell" style="width: 150px;">2</td>
                                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="jsgrid-pager-container">
                                        <div class="jsgrid-pager">Pages: <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">First</a></span> <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">Prev</a></span> <span class="jsgrid-pager-page jsgrid-pager-current-page">1</span><span class="jsgrid-pager-page"><a href="javascript:void(0);">2</a></span><span class="jsgrid-pager-page"><a href="javascript:void(0);">3</a></span><span class="jsgrid-pager-page"><a href="javascript:void(0);">4</a></span><span class="jsgrid-pager-page"><a href="javascript:void(0);">5</a></span> <span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Next</a></span> <span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Last</a></span> &nbsp;&nbsp; 1 of 5 </div>
                                    </div>
                                    <div class="jsgrid-load-shader" style="display: none; position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1000;"></div>
                                    <div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
                                </div>
                            </div>

                            <!-- /.card-body -->
                        </div>
                </div>
                <!-- /.card -->
                </section>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
</div>

@endsection