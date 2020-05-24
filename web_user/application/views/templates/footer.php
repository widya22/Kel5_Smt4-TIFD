  <!-- Start Footer Widget Area -->
  <section class="footer-area pt-60 pb-60">
      <div class="container">
          <div class="row d-flex justify-content-center">
              <ul class="footer-menu">
                  <li>
                      <a href="<?= base_url('home') ?>">Beranda</a>
                  </li>
                  <li>
                      <a href="elements.html">Author</a>
                  </li>
              </ul>
          </div>
          <footer>
              <div class="footer-social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-behance"></i></a>
              </div>
              <div class="footer-content">
                  <div class="text-center">
                      Copyright © 2020
                  </div>
              </div>
          </footer>
  </section>
  <!-- End Footer Widget Area -->
  </div>
  <script src="<?php echo base_url('assets/js/vendor/jquery-2.2.4.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.ajaxchimp.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.nice-select.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/js/waypoints.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.counterup.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

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
  </body>

  </html>