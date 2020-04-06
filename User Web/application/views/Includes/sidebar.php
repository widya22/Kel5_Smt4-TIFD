<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
          alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $this->session->userdata("username_a"); ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="http://localhost/wallpaper/admin/" class="nav-link">
            <i class="fas fa-table nav-icon"></i>
            <p>Admin</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="http://localhost/wallpaper/services/" class="nav-link">
            <i class="fas fa-table nav-icon"></i>
            <p>Services</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="http://localhost/wallpaper/produk/" class="nav-link">
            <i class="fas fa-table nav-icon"></i>
            <p>Produk</p>
          </a>
        </li>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
</div>