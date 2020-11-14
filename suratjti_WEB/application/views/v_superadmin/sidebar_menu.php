<link rel="shortcut icon" href="<?php echo base_url('assets/img/fav_super_admin.png') ?>">


 <?php $active = "active" ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url('assets/img/super_admin_logo.png');?>" alt="logo jti" class="brand-image img-circle elevation-3"
          style="opacity: .8">
      <span class="brand-text font-weight-light">Surat JTI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 text-center">
        <div class="info">
            <h3 class="d-block text-light border pl-3 pr-3 pt-2 pb-2">SUPER ADMIN</h3>
            <h5 class="d-block text-light"><?php echo $_SESSION["nama"]; ?></h5>

            <a href="<?php echo base_url('superadmin/edit_superadmin/'.$_SESSION["id"]) ?>" 
                  class="mt-2 mr-1 text-light btn btn-primary" ><i class="fa fa-edit" ></i>
            </a>

            <a href="" 
                    data-target="#logoutModal" data-toggle="modal" class="mt-2 ml-1 btn btn-danger text-light">
                    <i class="fa fa-sign-out-alt"></i>
            </a>
            
        </div>
      </div>

<!-- alert -->
    <?php 
    if (isset($_SESSION['ubah_sukses'])){   //alert gagal tambah data
      ?>
      <div class="alert alert-info alert-dismissible fade show" role="alert">
       Admin Berhasil Diubah
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
      <?php }
        unset($_SESSION['ubah_sukses']);
        ?>
<!-- alert -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <!-- <form action="<?php echo base_url('admin/searching'); ?>" method="post" enctype="multipart/form-data" -->
            <!-- class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"> -->

            <!-- untuk mencari data berdasarkan NIM -->
            <!-- <div class="input-group">
              <input type="text" name ="search" id="search" class="form-control bg-light border-0 small" 
              placeholder="Cari berdasarkan NIM" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div> -->
              <!-- untuk mencari data berdasarkan NIM -->
          <!-- </form> -->

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">              
              <li class="nav-item">
                <a href="<?php echo base_url('superadmin');?>"  class="nav-link
                    <?php if($this->uri->segment(2) == ''){echo $active;} ?>  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php echo base_url('superadmin/jnSrt');?>" class="nav-link
                    <?php if($this->uri->segment(2) == 'jnSrt'){echo $active;} ?>  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Surat</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url('superadmin/dtMhs');?>"" class="nav-link
                    <?php if($this->uri->segment(2) == 'dtMhs'){echo $active;} ?>  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Pengajuan Surat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('superadmin/dtSrtPd');?>" class="nav-link 
                    <?php if($this->uri->segment(2) == 'dtSrtPd' or isset($menunggu)){echo $active;} ?>  ">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Menunggu Persetujuan</p>
                </a>
              </li>
              <?php $c= "active"; ?>
              <li class="nav-item">
                <a href="<?php echo base_url('superadmin/dtSrtProses');?>" class="nav-link 
                    <?php if($this->uri->segment(2) == 'dtSrtProses' or isset($proses)){echo $active;} ?>  ">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Sedang DiProses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('superadmin/dtSrtDapatDiambil');?>" class="nav-link
                    <?php if($this->uri->segment(2) == 'dtSrtDapatDiambil' or isset($ambil)){echo $active;} ?>  ">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Dapat Diambil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('superadmin/dtSrtTlk');?>" class="nav-link
                    <?php if($this->uri->segment(2) == 'dtSrtTlk' or isset($tolak)){echo $active;} ?>  ">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Surat Ditolak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('superadmin/dtSrtSls');?>" class="nav-link
                    <?php if($this->uri->segment(2) == 'dtSrtSls' or isset($selesai)){echo $active;} ?>  ">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Surat Selesai</p>
                </a>
              </li>
              </ul>
            </ul>
          </li>
          
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <!-- modal alert logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" arialabelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Ingin Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
              </div>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a id="btn-reset" class="btn btn-danger" href="<?php echo base_url('login0/logout') ?>">Keluar</a>
              </div>
            </div>
          </div>
        </div>
        <!-- modal alert logout -->