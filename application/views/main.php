<!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('component/head');?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <?php $this->load->view('component/main-header');?>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <?php $this->load->view('component/main-sidebar');?>
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Halaman Utama
                        <small>Gangsar Snack & Food</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()."main";?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="box box-primary">
                                <div class="box-body box-profile">
                                    <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>/dist/img/logo.jpg" alt="User profile picture">

                                    <h3 class="profile-username text-center">Gangsar Snack & Food</h3>

                                    <p class="text-muted text-center">Sejak 1981</p>

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                            <!-- About Me Box -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Kontak Perusahaan</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <strong><a href="https://goo.gl/maps/43ZQyxewLaz"><i class="fa fa-map-marker margin-r-5"></i> Location</a></strong>

                                    <p class="text-muted">Jalan Demuk No. 37 Desa Ngunut, Kecamatan Ngunut, Kabupaten Tulungagung, Jawa Timur</p>

                                    <hr>
                                    <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>

                                    <p class="text-muted">(0355) 395210, 395156</p>

                                    <hr>
                                    <strong><i class="fa fa-fax margin-r-5"></i> Fax</strong>

                                    <p class="text-muted">(0355) 395889</p>

                                    <hr>
                                    <strong><i class="fa fa-envelope margin-r-5"></i> E-Mail</strong>

                                    <p class="text-muted">gs_acc@yahoo.com</p>

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#profile" data-toggle="tab">Profile Perusahaan</a></li>
                                    <li><a href="#visimisi" data-toggle="tab">Visi & Misi</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="active tab-pane" id="profile">
                                        <!-- Post -->
                                        <div class="post">
                                            <h3>Gangsar Snack & Food</h3>
                                            <p>
                                                Perusahaan “GANGSAR” Snack & Food merupakan perusahaan yang bergerak dibidang produksi dan distribusi makanan ringan yang didirikan oleh H. Sutrimo pada tahun 1981 di Jalan Demuk nomor 37 Desa Ngunut, Kecamatan Ngunut Kabupaten Tulungagung propinsi Jawa Timur dengan meluncurkan kacang shanghai dengan merk GANGSAR.
                                            </p>
                                            <hr>
                                            <p>
                                                Pasar distribusi telah mencakup Jawa, Lampung, Kalimantan Timur, Kalimantan Selatan, Kalimantan Tengah, Madura, Bali, Lombok, Sumbawa, Papua, dan akan terus dikembangkan dengan didukung segenap potensi yang dimiliki perusahaan.
                                            </p>
                                            <hr>
                                            <p>
                                                Prestasi yang pernah diperoleh perusahaan yaitu mendapatkan penghargaan sebagai Perusahaan Teladan Se-Kabupaten Tulungagung. Target yang akan dicapai adalah menjadi perusahaan industri makanan ringan dan perusahaan distribusi terpilih, baik dari segi keuntungan, penjualan dan kepuasan pelanggan.
                                            </p>
                                        </div>
                                        <!-- /.post -->
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="visimisi">
                                        <!-- Post -->
                                        <div class="post">
                                            <h3>Visi</h3>
                                            <p><q>Berkembang menjadi salah satu perusahaanterbaik di industri makanan ringan
                                                dan distribusi di Indonesia dalam aspek profitabilitas, penjualan, dan kepuasan
                                                konsumen</q>
                                            </p>
                                            <hr>
                                            <h3>Misi</h3>
                                            <p>
                                                Misi jangka pendek :
                                                
                                                <li>Menjaga dan mempertahankan proses produksi.</li>
                                                <li>Memenuhi target produksi yang telah ditentukan untuk memenuhi
                                                permintaan pasar.</li>
                                                <li>Meningkatkan volume penjualan dengan memperhatikan faktor
                                                keuntungan.</li>
                                                <li>Mempertahankan keberadaannya dalam dunia usaha dan perdagangan.</li>
                                                
                                                Misi jangka panjang :
                                                
                                                <li>Mengadakan perluasan pemasaran tidak hanya di wilayah Jawa saja tetapi
                                                sampai Internasional.</li>
                                                <li>Mencari keuntungan yang maksimal.</li>
                                                <li>Menjadi perusahaan yang maju dan berkembang dalam segala aspek.</li>
                                                <li>Mempertahankan dan meningkatkan mutu produk dengan memperhatikan
                                                ciri khas dari produk.</li>
                                            </p>
                                        </div>
                                        <!-- /.post -->
                                    </div>
                                    <!-- /.tab-pane -->

                                    <div class="tab-pane" id="settings">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="inputName" class="col-sm-2 control-label">Name</label>

                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName" class="col-sm-2 control-label">Name</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <?php $this->load->view('component/footer');?>
            </footer>

            <!-- Control Sidebar -->
            <?php $this->load->view('component/control-sidebar');?>
            <!-- /.control-sidebar -->

        </div>
        <!-- ./wrapper -->
        <?php $this->load->view('component/add-ons.php');?>
    </body>
</html>
