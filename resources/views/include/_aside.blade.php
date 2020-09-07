<aside class="main-sidebar sidebar-dark-green elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('admin/dist/img/Logo PNG Ijo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Farmdroid</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/dist/img/user.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Ulfah Nur Oktaviana</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/daftarPenyakit" class="nav-link">
                        <i class="nav-icon fa fa-database"></i>
                        <p>
                            Kelola Daftar Penyakit
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/news" class="nav-link">
                        <i class="nav-icon fa fa-file"></i>
                        <p>
                            Kelola News
                        </p>
                    </a>
                </li>

                <!-- chatbot -->
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            Kelola Chatbot
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/penyakitpertanian" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penyakit Pertanian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/informasiUmum" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kebijakan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/kebijakan" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Informasi Pupuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/bantuanPertanian" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bantuan Pertanian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/isuPertanian" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Isu-isu Pertanian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pengaduan" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Keluh Kesah</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/keluhKesah" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Daftar Keluh Kesah
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/account" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            My Account
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>