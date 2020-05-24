  <body>
      <div class="main-wrapper-first">
          <div class="hero-area relative">
              <header>
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <i class="fa fa-envelope fa-2x"></i>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                  <a class="nav-link ml-2 mr-2" href="<?php echo base_url('home') ?>">Beranda</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link ml-2 mr-2" href="#">Surat Saya</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link ml-2 mr-2" href="<?php echo base_url('form2') ?>">Surat Mitra</a>
                              </li>
                          </ul>
                          <li class="nav-item dropdown list-unstyled border border-primary text primary">
                              <?php
                                if (isset($_SESSION["status"])) {
                                    $nama = $_SESSION['hasil_db'];
                                    foreach ($nama as $u) {
                                        $nama_user = $u->NAMA_MHS;
                                    }
                                ?>
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      User : @<?php echo $nama_user ?>
                                  </a>
                                  <div class="dropdown-menu float-right" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#"><?php echo $nama_user ?></a>
                                      <a class="dropdown-item" href="#">Ubah Akun</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">Keluar</a>
                                  </div>

                              <?php } else { ?>
                                  <a href="#" data-toggle="modal" class="nav-link" aria-haspopup="true" aria-expanded="false" data-target="#modalLogin">Masuk/Daftar</a>
                              <?php } ?>
                          </li>
                      </div>
                  </nav>
              </header>
              <!--Logout Modal-->
              <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar?</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                              </button>
                          </div>
                          <div class="modal-body">Pilih "Keluar" jika ingin mengakhirinya.</div>
                          <div class="modal-footer">
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                              <a class="btn btn-primary" href="<?= base_url('login/logout'); ?>">Keluar</a>
                          </div>
                      </div>
                  </div>
              </div>