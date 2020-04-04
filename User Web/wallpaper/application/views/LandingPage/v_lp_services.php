<!-- Services -->
<section class="page-section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">Kami melayani berbagai macam kebutuhan pria masa kini.</h3>
            </div>
        </div>
        <div class="row text-center">
            <?php
                $no=1;
                foreach($services as $srv):
            ?>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="<?php echo $srv->ikon_s?> fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading"><?php echo $srv->nama_s?></h4>
                <p class="text-muted"><?php echo $srv->ket_s?></p>
                <h5>mulai dari Rp <?php echo $srv->harga_s?></h5>
            </div>
            <?php $no++?>
            <?php  endforeach; ?>
        </div>
    </div>
</section>