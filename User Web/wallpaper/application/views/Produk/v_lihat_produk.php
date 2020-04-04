<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" data-toggle="modal" data-target="m_tambah_admin">Data Lengkap
                                Produk
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Id Produk</label>
                                    <input readonly type="text" class=" col-sm-4 form-control"
                                        value="<?php echo $lihat_produk->id_p?>">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Produk</label>
                                    <input readonly type="text" class=" col-sm-4 form-control"
                                        value="<?php echo $lihat_produk->nama_p?>">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Harga Produk</label>
                                    <input readonly type="text" class=" col-sm-4 form-control"
                                        value="<?php echo $lihat_produk->harga_p?>">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Foto Produk</label>
                                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $lihat_produk->foto_p;?>" alt="" width="300px">
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <a href="<?php echo base_url('produk/index')?>" class="btn btn-danger">Kembali</a>
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