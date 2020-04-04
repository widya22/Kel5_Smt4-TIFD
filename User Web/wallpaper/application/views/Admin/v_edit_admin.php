<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" data-toggle="modal" data-target="m_tambah_admin">Data Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                            foreach($admin as $adm) {
                            ?>
                            <form action="<?php echo base_url().'admin/update_admin';?>" method="post">
                                <div class="form-group row">
                                    <input type="hidden" name="id_a" value="<?php echo $adm->id_a?>">
                                    <label class="col-sm-2 col-form-label">Username:</label>
                                    <input require type="text" name="username_a" class=" col-sm-4 form-control" value="<?php echo $adm->username_a?>">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Password:</label>
                                    <input require type="text" name="password_a" class=" col-sm-4 form-control" value="<?php echo $adm->password_a?>">
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label"></label>
                                    <button type="submit" class="btn btn-primary my-1">Simpan</button>
                                    <a href="<?php echo base_url('admin/index')?>" class="btn btn-danger m-1">Batal</a>
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




