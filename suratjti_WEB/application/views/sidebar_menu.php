<link rel="shortcut icon" href="<?php echo base_url('assets/img/fav_admin.png') ?>">


 <?php $active = "active" ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url('assets/img/admin_logo.png');?>" alt="logo jti" class="brand-image img-circle elevation-3"
          style="opacity: .8">
      <span class="brand-text font-weight-light">Surat JTI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a class="d-block text-light"><?php echo $_SESSION["nama"]; ?></a>
            <a class="d-block text-light">Admin Prodi : <?= $_SESSION['prodi'] ?></a>
            <a class="d-block text-light">HP : <?= $_SESSION['no_hp'] ?></a>
            <a href="<?php echo base_url('crud/edit_admin/'.$_SESSION["id"]) ?>" 
                  class="mt-2 mr-1 btn btn-secondary text-light">Edit</a>
            <a data-toggle="modal" data-target="#logoutModal"
                    class="mt-2 ml-1 btn btn-danger text-light">Logout</a>
            
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
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
            <form action="<?php echo base_url('admin/searching'); ?>" method="post" enctype="multipart/form-data"
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" name ="search" id="search" class="form-control bg-light border-0 small" 
              placeholder="Cari berdasarkan NIM" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form></p>
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
                <a href="<?php echo base_url('admin');?>"  class="nav-link
                    <?php if($this->uri->segment(2) == ''){echo $active;} ?>  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/jnSrt');?>" class="nav-link
                    <?php if($this->uri->segment(2) == 'jnSrt'){echo $active;} ?>  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/dtMhs');?>"" class="nav-link
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
                <a href="<?php echo base_url('admin/dtSrtPd');?>" class="nav-link 
                    <?php if($this->uri->segment(2) == 'dtSrtPd' or isset($detail_pending)){echo $active;} ?>  ">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Menunggu Persetujuan</p>
                </a>
              </li>
              <?php $c= "active"; ?>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/dtSrtProsesMK');?>" class="nav-link 
                    <?php if(
                          $this->uri->segment(2) == 'dtSrtProsesMK' or
                          $this->uri->segment(2) == 'dtSrtProsesPKL' or
                          $this->uri->segment(2) == 'dtSrtProsesOBS' or
                          $this->uri->segment(2) == 'dtSrtProsesTA' or
                          isset($detail_proses) 
                          
                          ){echo $active;} ?>  ">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Sedang DiProses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/dtSrtDapatDiambil');?>" class="nav-link
                    <?php if($this->uri->segment(2) == 'dtSrtDapatDiambil' or isset($detail_ambil)){echo $active;} ?>  ">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Dapat Diambil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/dtSrtTlk');?>" class="nav-link
                    <?php if($this->uri->segment(2) == 'dtSrtTlk' or isset($detail_tolak)){echo $active;} ?>  ">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Surat Ditolak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/dtSrtSls');?>" class="nav-link
                    <?php if($this->uri->segment(2) == 'dtSrtSls' or isset($detail_selesai)){echo $active;} ?>  ">
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