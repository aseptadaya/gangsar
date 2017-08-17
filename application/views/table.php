<!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('component/head'); ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <?php $this->load->view('component/main-header'); ?>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <?php $this->load->view('component/main-sidebar'); ?>
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Tabel Transaksi
                        <small>Penjualan & Produksi</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()."main";?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <!-- <li><a href="#">Tables</a></li> -->
                        <li class="active">Tabel Transaksi</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-xs-12">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#table-penjualan" data-toggle="tab">Tabel Penjualan</a></li>
                                    <li><a href="#table-produksi" data-toggle="tab">Tabel Produksi</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="active tab-pane" id="table-penjualan">
                                            <div class="box-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Rendering engine</th>
                                                            <th>Browser</th>
                                                            <th>Platform(s)</th>
                                                            <th>Engine version</th>
                                                            <th>CSS grade</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Trident</td>
                                                            <td>Internet
                                                                Explorer 4.0
                                                            </td>
                                                            <td>Win 95+</td>
                                                            <td> 4</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Trident</td>
                                                            <td>Internet
                                                                Explorer 5.0
                                                            </td>
                                                            <td>Win 95+</td>
                                                            <td>5</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Trident</td>
                                                            <td>Internet
                                                                Explorer 5.5
                                                            </td>
                                                            <td>Win 95+</td>
                                                            <td>5.5</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Trident</td>
                                                            <td>Internet
                                                                Explorer 6
                                                            </td>
                                                            <td>Win 98+</td>
                                                            <td>6</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Trident</td>
                                                            <td>Internet Explorer 7</td>
                                                            <td>Win XP SP2+</td>
                                                            <td>7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Trident</td>
                                                            <td>AOL browser (AOL desktop)</td>
                                                            <td>Win XP</td>
                                                            <td>6</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Firefox 1.0</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Firefox 1.5</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Firefox 2.0</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Firefox 3.0</td>
                                                            <td>Win 2k+ / OSX.3+</td>
                                                            <td>1.9</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Camino 1.0</td>
                                                            <td>OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Camino 1.5</td>
                                                            <td>OSX.3+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Netscape 7.2</td>
                                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Netscape Browser 8</td>
                                                            <td>Win 98SE+</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Netscape Navigator 9</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.0</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.1</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.1</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.2</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.2</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.3</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.3</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.4</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.4</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.5</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.5</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.6</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.6</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.7</td>
                                                            <td>Win 98+ / OSX.1+</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.8</td>
                                                            <td>Win 98+ / OSX.1+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Seamonkey 1.1</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Epiphany 2.20</td>
                                                            <td>Gnome</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webkit</td>
                                                            <td>Safari 1.2</td>
                                                            <td>OSX.3</td>
                                                            <td>125.5</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webkit</td>
                                                            <td>Safari 1.3</td>
                                                            <td>OSX.3</td>
                                                            <td>312.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webkit</td>
                                                            <td>Safari 2.0</td>
                                                            <td>OSX.4+</td>
                                                            <td>419.3</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webkit</td>
                                                            <td>Safari 3.0</td>
                                                            <td>OSX.4+</td>
                                                            <td>522.1</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webkit</td>
                                                            <td>OmniWeb 5.5</td>
                                                            <td>OSX.4+</td>
                                                            <td>420</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webkit</td>
                                                            <td>iPod Touch / iPhone</td>
                                                            <td>iPod</td>
                                                            <td>420.1</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webkit</td>
                                                            <td>S60</td>
                                                            <td>S60</td>
                                                            <td>413</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera 7.0</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera 7.5</td>
                                                            <td>Win 95+ / OSX.2+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera 8.0</td>
                                                            <td>Win 95+ / OSX.2+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera 8.5</td>
                                                            <td>Win 95+ / OSX.2+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera 9.0</td>
                                                            <td>Win 95+ / OSX.3+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera 9.2</td>
                                                            <td>Win 88+ / OSX.3+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera 9.5</td>
                                                            <td>Win 88+ / OSX.3+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera for Wii</td>
                                                            <td>Wii</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Nokia N800</td>
                                                            <td>N800</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Nintendo DS browser</td>
                                                            <td>Nintendo DS</td>
                                                            <td>8.5</td>
                                                            <td>C/A<sup>1</sup></td>
                                                        </tr>
                                                        <tr>
                                                            <td>KHTML</td>
                                                            <td>Konqureror 3.1</td>
                                                            <td>KDE 3.1</td>
                                                            <td>3.1</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr>
                                                            <td>KHTML</td>
                                                            <td>Konqureror 3.3</td>
                                                            <td>KDE 3.3</td>
                                                            <td>3.3</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>KHTML</td>
                                                            <td>Konqureror 3.5</td>
                                                            <td>KDE 3.5</td>
                                                            <td>3.5</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tasman</td>
                                                            <td>Internet Explorer 4.5</td>
                                                            <td>Mac OS 8-9</td>
                                                            <td>-</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tasman</td>
                                                            <td>Internet Explorer 5.1</td>
                                                            <td>Mac OS 7.6-9</td>
                                                            <td>1</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tasman</td>
                                                            <td>Internet Explorer 5.2</td>
                                                            <td>Mac OS 8-X</td>
                                                            <td>1</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Misc</td>
                                                            <td>NetFront 3.1</td>
                                                            <td>Embedded devices</td>
                                                            <td>-</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Misc</td>
                                                            <td>NetFront 3.4</td>
                                                            <td>Embedded devices</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Misc</td>
                                                            <td>Dillo 0.8</td>
                                                            <td>Embedded devices</td>
                                                            <td>-</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Misc</td>
                                                            <td>Links</td>
                                                            <td>Text only</td>
                                                            <td>-</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Misc</td>
                                                            <td>Lynx</td>
                                                            <td>Text only</td>
                                                            <td>-</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Misc</td>
                                                            <td>IE Mobile</td>
                                                            <td>Windows Mobile 6</td>
                                                            <td>-</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Misc</td>
                                                            <td>PSP browser</td>
                                                            <td>PSP</td>
                                                            <td>-</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Other browsers</td>
                                                            <td>All others</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>U</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Rendering engine</th>
                                                            <th>Browser</th>
                                                            <th>Platform(s)</th>
                                                            <th>Engine version</th>
                                                            <th>CSS grade</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->

                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="table-produksi">
                                        <!-- The timeline -->
                                        <div class="box-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Rendering engine</th>
                                                            <th>Browser</th>
                                                            <th>Platform(s)</th>
                                                            <th>Engine version</th>
                                                            <th>CSS grade</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Trident</td>
                                                            <td>Internet
                                                                Explorer 4.0
                                                            </td>
                                                            <td>Win 95+</td>
                                                            <td> 4</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Trident</td>
                                                            <td>Internet
                                                                Explorer 5.0
                                                            </td>
                                                            <td>Win 95+</td>
                                                            <td>5</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Trident</td>
                                                            <td>Internet
                                                                Explorer 5.5
                                                            </td>
                                                            <td>Win 95+</td>
                                                            <td>5.5</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Trident</td>
                                                            <td>Internet
                                                                Explorer 6
                                                            </td>
                                                            <td>Win 98+</td>
                                                            <td>6</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Trident</td>
                                                            <td>Internet Explorer 7</td>
                                                            <td>Win XP SP2+</td>
                                                            <td>7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Trident</td>
                                                            <td>AOL browser (AOL desktop)</td>
                                                            <td>Win XP</td>
                                                            <td>6</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Firefox 1.0</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Firefox 1.5</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Firefox 2.0</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Firefox 3.0</td>
                                                            <td>Win 2k+ / OSX.3+</td>
                                                            <td>1.9</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Camino 1.0</td>
                                                            <td>OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Camino 1.5</td>
                                                            <td>OSX.3+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Netscape 7.2</td>
                                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Netscape Browser 8</td>
                                                            <td>Win 98SE+</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Netscape Navigator 9</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.0</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.1</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.1</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.2</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.2</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.3</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.3</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.4</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.4</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.5</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.5</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.6</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.6</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.7</td>
                                                            <td>Win 98+ / OSX.1+</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.8</td>
                                                            <td>Win 98+ / OSX.1+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Seamonkey 1.1</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gecko</td>
                                                            <td>Epiphany 2.20</td>
                                                            <td>Gnome</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webkit</td>
                                                            <td>Safari 1.2</td>
                                                            <td>OSX.3</td>
                                                            <td>125.5</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webkit</td>
                                                            <td>Safari 1.3</td>
                                                            <td>OSX.3</td>
                                                            <td>312.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webkit</td>
                                                            <td>Safari 2.0</td>
                                                            <td>OSX.4+</td>
                                                            <td>419.3</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webkit</td>
                                                            <td>Safari 3.0</td>
                                                            <td>OSX.4+</td>
                                                            <td>522.1</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webkit</td>
                                                            <td>OmniWeb 5.5</td>
                                                            <td>OSX.4+</td>
                                                            <td>420</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webkit</td>
                                                            <td>iPod Touch / iPhone</td>
                                                            <td>iPod</td>
                                                            <td>420.1</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webkit</td>
                                                            <td>S60</td>
                                                            <td>S60</td>
                                                            <td>413</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera 7.0</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera 7.5</td>
                                                            <td>Win 95+ / OSX.2+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera 8.0</td>
                                                            <td>Win 95+ / OSX.2+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera 8.5</td>
                                                            <td>Win 95+ / OSX.2+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera 9.0</td>
                                                            <td>Win 95+ / OSX.3+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera 9.2</td>
                                                            <td>Win 88+ / OSX.3+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera 9.5</td>
                                                            <td>Win 88+ / OSX.3+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Opera for Wii</td>
                                                            <td>Wii</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Nokia N800</td>
                                                            <td>N800</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presto</td>
                                                            <td>Nintendo DS browser</td>
                                                            <td>Nintendo DS</td>
                                                            <td>8.5</td>
                                                            <td>C/A<sup>1</sup></td>
                                                        </tr>
                                                        <tr>
                                                            <td>KHTML</td>
                                                            <td>Konqureror 3.1</td>
                                                            <td>KDE 3.1</td>
                                                            <td>3.1</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr>
                                                            <td>KHTML</td>
                                                            <td>Konqureror 3.3</td>
                                                            <td>KDE 3.3</td>
                                                            <td>3.3</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>KHTML</td>
                                                            <td>Konqureror 3.5</td>
                                                            <td>KDE 3.5</td>
                                                            <td>3.5</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tasman</td>
                                                            <td>Internet Explorer 4.5</td>
                                                            <td>Mac OS 8-9</td>
                                                            <td>-</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tasman</td>
                                                            <td>Internet Explorer 5.1</td>
                                                            <td>Mac OS 7.6-9</td>
                                                            <td>1</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tasman</td>
                                                            <td>Internet Explorer 5.2</td>
                                                            <td>Mac OS 8-X</td>
                                                            <td>1</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Misc</td>
                                                            <td>NetFront 3.1</td>
                                                            <td>Embedded devices</td>
                                                            <td>-</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Misc</td>
                                                            <td>NetFront 3.4</td>
                                                            <td>Embedded devices</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Misc</td>
                                                            <td>Dillo 0.8</td>
                                                            <td>Embedded devices</td>
                                                            <td>-</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Misc</td>
                                                            <td>Links</td>
                                                            <td>Text only</td>
                                                            <td>-</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Misc</td>
                                                            <td>Lynx</td>
                                                            <td>Text only</td>
                                                            <td>-</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Misc</td>
                                                            <td>IE Mobile</td>
                                                            <td>Windows Mobile 6</td>
                                                            <td>-</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Misc</td>
                                                            <td>PSP browser</td>
                                                            <td>PSP</td>
                                                            <td>-</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Other browsers</td>
                                                            <td>All others</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>U</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Rendering engine</th>
                                                            <th>Browser</th>
                                                            <th>Platform(s)</th>
                                                            <th>Engine version</th>
                                                            <th>CSS grade</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <?php $this->load->view('component/footer'); ?>
            </footer>

            <!-- Control Sidebar -->
            <?php $this->load->view('component/control-sidebar'); ?>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <?php $this->load->view('component/add-ons')?>

        <!-- DataTables -->
        <script src="<?php echo base_url();?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- page script -->
        <script>
            $(function () {
                $('#example1').DataTable()
                $('#example2').DataTable({
                    'paging'      : true,
                    'lengthChange': false,
                    'searching'   : false,
                    'ordering'    : true,
                    'info'        : true,
                    'autoWidth'   : false
                })
            })
        </script>

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
