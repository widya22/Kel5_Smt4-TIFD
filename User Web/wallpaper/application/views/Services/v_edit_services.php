<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" data-toggle="modal" data-target="m_tambah_admin">Data Services</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                            foreach($services as $srv) {
                            ?>
                            <form action="<?php echo base_url().'services/update_services';?>" method="post">
                                <div class="form-group row">
                                    <input type="hidden" name="id_s" value="<?php echo $srv->id_s?>">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <input require type="text" name="nama_s" class=" col-sm-4 form-control"
                                        value="<?php echo $srv->nama_s?>">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keterangan</label>
                                    <input require type="text" name="ket_s" class=" col-sm-4 form-control"
                                    value="<?php echo $srv->ket_s?>">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Harga</label>
                                    <input require type="text" name="harga_s" class=" col-sm-4 form-control"
                                    value="<?php echo $srv->harga_s?>">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Ikon</label>
                                    <input require type="text" name="ikon_s" class=" col-sm-4 form-control"
                                    value="<?php echo $srv->ikon_s?>">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <button type="submit" class="btn btn-primary my-1">Simpan</button>
                                    <a href="<?php echo base_url('services/index')?>" class="btn btn-danger m-1">Batal</a>
                                </div>
                            </form>
                            <?php }?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.row -->