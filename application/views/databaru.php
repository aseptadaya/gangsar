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
                        Form Produk Baru
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()."main";?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <!-- <li><a href="#">Forms</a></li> -->
                        <li class="active">Form Produk Baru</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="produk-baru">
                                    <!-- general form elements -->
                                    <div class="box box-primary">
                                        <!--
<div class="box-header with-border">
<h3 class="box-title">Form Produk Baru</h3>
</div>
-->
                                        <!-- /.box-header -->
                                        <!-- form start -->
                                        <form method="POST" action="<?php echo base_url()."databaru/insertBarang"?>" name="form-produk-baru" role="form-produk-baru">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label>Nama Produk</label>
                                                    <input name="product_name" class="form-control"  placeholder="Masukan Nama Produk" required data-validation-required-message="Mohon masukan nama produk">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tipe Kualitas</label>
                                                    <input name="product_quality" class="form-control" placeholder="Masukan Kulaitas Produk" required data-validation-required-message="Mohon masukan Kualitas Produk">
                                                </div>
                                                <div class="form-group">
                                                    <label>Ukuran Pak</label>
                                                    <input name="package_size" class="form-control" placeholder="Masukan Ukuran Pak" required data-validation-required-message="Mohon masukan ukuran pak"></input>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ukuran Unit</label>
                                                    <div class="input-group">
                                                        <input name="unit_size" type="number" min="0" class="form-control">
                                                        <span class="input-group-addon">Pcs</span>
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                                <div class="form-group">
                                                    <label>Harga Per Unit</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Rp.</span>
                                                        <input name="price_per_unit" type="number" step="50" class="form-control">
                                                        <span class="input-group-addon">.00</span>
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                            </div>
                                            <!-- /.box-body -->

                                            <div class="box-footer">
                                                <button type="reset" class="btn btn-default pull-left">Reset</button>
                                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>
                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>

            <script type="text/javascript">
                $(function(){
                    $("#tab-wrapper a").click(function(e){
                        e.preventDefault();
                        $(this).tab("show");
                    })
                });
            </script>

            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <?php $this->load->view('component/footer');?>
            </footer>

            <!-- Control Sidebar -->
            <?php $this->load->view('component/control-sidebar');?>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->


        <?php $this->load->view('component/add-ons');?>
        <script>
            $(function () {
                //Initialize Select2 Elements
                $(".select2").select2();

                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();

                //Date range picker
                $('#reservation').daterangepicker();
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
                //Date range as a button
                $('#daterange-btn').daterangepicker(
                    {
                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                        },
                        startDate: moment().subtract(29, 'days'),
                        endDate: moment()
                    },
                    function (start, end) {
                        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                    }
                );

                //Date picker
                $('#datepicker').datepicker({
                    autoclose: true
                });

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass: 'iradio_minimal-blue'
                });
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                });
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });

                //Colorpicker
                $(".my-colorpicker1").colorpicker();
                //color picker with addon
                $(".my-colorpicker2").colorpicker();

                //Timepicker
                $(".timepicker").timepicker({
                    showInputs: false
                });
            });
        </script>

    </body>
</html>
