<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo base_url();?>dist/img/logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <?php
            $user=$this->ion_auth->user()->row()->username;
            echo "<p><strong>".$user."</p></strong>";
            ?>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <?php
        if ($this->ion_auth->is_admin())
        {echo "
          <li class='treeview'>
          <a href='".base_url()."table'>
            <i class='fa fa-table'></i> <span>Laporan Transaksi</span>
            </a>
        </li>";

         echo "
          <li class='treeview'>
          <a href='".base_url()."chart'>
            <i class='fa fa-line-chart'></i> <span>Chart</span>
            </a>
        </li>";

         echo "
          <li class='treeview'>
          <a href='".base_url()."prediction'>
            <i class='fa fa-calculator'></i> <span>Prediction Computation</span>
            </a>
        </li>";

         echo "
          <li class='treeview'>
          <a href='".base_url()."register'>
            <i class='fa fa-user'></i> <span>Register Admin Baru</span>
            </a>
        </li>";

         echo "
          <li class='treeview'>
          <a href='".base_url()."databaru'>
            <i class='fa fa-barcode'></i> <span>Register Produk Baru</span>
            </a>
        </li>";


        }
        else {
            echo "
          <li class='treeview'>
          <a href='".base_url()."table'>
            <i class='fa fa-table'></i> <span>Laporan Transaksi</span>
            </a>
        </li>";

            echo "
          <li class='treeview'>
          <a href='#'>
          <i class='fa fa-edit'></i> <span>Form Transaksi</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a>
          <ul class='treeview-menu'>
            <li><a href='".base_url()."transaksi/penjualan'><i class='fa fa-circle-o'></i> Penjualan</a></li>
            <li><a href='".base_url()."transaksi/produksi'><i class='fa fa-circle-o'></i> Produksi</a></li>
        </ul>
        </li>";

        }?>
    </ul>
</section>
<!-- /.sidebar -->