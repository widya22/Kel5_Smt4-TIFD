<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" data-toggle="modal" data-target="m_tambah_admin">Data Lengkap Services
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Id Services</label>
                                    <input readonly type="text" class=" col-sm-4 form-control"
                                        value="<?php echo $lihat_services->id_s?>">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <input readonly type="text" class=" col-sm-4 form-control"
                                        value="<?php echo $lihat_services->nama_s?>">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Harga</label>
                                    <input readonly type="text" class=" col-sm-4 form-control"
                                        value="<?php echo $lihat_services->harga_s?>">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <span class="fa-stack fa-2x">
                                        <i class="fas fa-circle fa-stack-2x text-warning"></i>
                                        <i class="<?php echo $lihat_services->ikon_s?> fa-stack-1x fa-inverse"></i>
                                    </span>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <a href="<?php echo base_url('services/index')?>" class="btn btn-danger">Kembali</a>
                                </div>
                            </form>
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