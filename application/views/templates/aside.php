<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/img//<?=$img?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$full_name?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?=$username?></a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="ngsearch" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGATION</li>
        <li>
          <a href="home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Master Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="mst_user"><i class="fa fa-circle-o"></i>Master User</a></li> -->
            <li><a href="mst_product"><i class="fa fa-circle-o"></i>Master Barang</a></li>
            <li><a href="mst_supplier"><i class="fa fa-circle-o"></i>Master Supplier</a></li>
            <li><a href="mst_customer"><i class="fa fa-circle-o"></i>Master Pelanggan</a></li>
            <li><a href="mst_kategori"><i class="fa fa-circle-o"></i>Master Kategori</a></li>
            <li><a href="mst_unit"><i class="fa fa-circle-o"></i>Master Satuan</a></li>
            <!-- <li><a href="mst_user"><i class="fa fa-circle-o"></i>Master Currency</a></li> -->
            <!-- <li><a href="mst_user"><i class="fa fa-circle-o"></i>Master A</a></li> -->
            <!-- <hr></hr> -->
            <li><a href="mst_user"><i class="fa fa-circle-o"></i>Master User</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>HRD</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="general"><i class="fa fa-circle-o"></i> Master Employee</a></li>
            <li><a href="general"><i class="fa fa-circle-o"></i> Absensi</a></li>
            <li><a href="general"><i class="fa fa-circle-o"></i> Payroll</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Pembelian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="simple"><i class="fa fa-circle-o"></i> Regist part Supplier</a></li>
            <li><a href="purchase_order"><i class="fa fa-circle-o"></i> Purchase Order</a></li>
            <li><a href="data"><i class="fa fa-circle-o"></i> Historical PO</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Penjualan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="general"><i class="fa fa-circle-o"></i> Regist Part Customer</a></li>
            <li><a href="general"><i class="fa fa-circle-o"></i> Sales Order</a></li>
            <li><a href="general"><i class="fa fa-circle-o"></i> Historical SO</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <!-- <span class="pull-right-container">
              <small class="label pull-right bg-green">Hot</small>
            </span> -->
          </a>
          <ul class="treeview-menu">
            <li><a href="general"><i class="fa fa-circle-o"></i> Receiving</a></li>
            <li><a href="general"><i class="fa fa-circle-o"></i> Delivery Order</a></li>
            <li><a href="general"><i class="fa fa-circle-o"></i> Inventory</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>FRM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="chartjs"><i class="fa fa-circle-o"></i> Purchase Invoicing</a></li>
            <li><a href="inline"><i class="fa fa-circle-o"></i> Purchase Invoicing Tax</a></li>
            <li><a href="morris"><i class="fa fa-circle-o"></i> Sales Invoicing</a></li>
            <li><a href="flot"><i class="fa fa-circle-o"></i> Sales Invoicing Tax</a></li>
            <li><a href="flot"><i class="fa fa-circle-o"></i> Laba Rugi</a></li>
            <li><a href="flot"><i class="fa fa-circle-o"></i> Utang Piutang</a></li>
          </ul>
        </li>
        <li>
          <a href="calendar">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="mailbox">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="administrator"><i class="fa fa-gear"></i> <span>Administrator</span></a></li>
        <li><a href="logout"><i class="fa fa-power-off text-red"></i> <span>Logout</span></a></li>
        <!-- <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>