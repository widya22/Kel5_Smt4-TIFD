<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Services</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#m_t_services">
                            <i class="fa fa-plus" mr-1></i>  Tambah Data services</button>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Services</th>
                                        <th>Nama</th>
                                        <th>Keterangan</th>
                                        <th>Harga</th>
                                        <th>Ikon</th>
                                        <th>Lihat</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    foreach($services as $srv): ?>
                                    <tr>
                                        <td width="20px"><?php echo $no++ ?></td>
                                        <td width="60px"><?php echo $srv->id_s ?></td>
                                        <td width="100px"><?php echo $srv->nama_s?></td>
                                        <td width="300px"><?php echo $srv->ket_s ?></td>
                                        <td width="80px"><?php echo $srv->harga_s ?></td>
                                        <td width="50px">
                                            <span class="fa-stack fa-2x">
                                                <i class="fas fa-circle fa-stack-2x text-warning"></i>
                                                <i class="<?php echo $srv->ikon_s?> fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </td>
                                        <td width="50px">
                                            <?php echo anchor ('services/lihat_services/'.$srv->id_s, '<div class="btn btn-success btn-sm m-1"><i class="fa fa-search-plus"></i></div>')?>
                                        </td>
                                        <td width="50px">
                                            <?php echo anchor ('services/edit_services/'.$srv->id_s, '<div class="btn btn-warning btn-sm m-1"><i class="fa fa-edit"></i></div>')?>
                                        </td>
                                        <td onclick="javascript : return confirm('Yakin menghapus data <?php echo $srv->nama_s?> ?')"
                                            width="50px">
                                            <?php echo anchor ('services/hapus_services/'.$srv->id_s, '<div class="btn btn-danger btn-sm m-1"><i class="fa fa-trash"></i></div>')?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Services</th>
                                        <th>Nama</th>
                                        <th>Keterangan</th>
                                        <th>Harga</th>
                                        <th>Ikon</th>
                                        <th>Lihat</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- modal tambah services -->
    <div class="modal fade" justify-content="center" id="m_t_services" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukkan Data services</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="<?php echo base_url().'services/tambah_services'?>">
                        <div class="form-group row">
                            <label require class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama_s" class="form-control"
                                    placeholder="Masukkan Nama Produk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Keterangan</label>
                            <div class="col-sm-8">
                                <input require type="text" name="ket_s" class="form-control"
                                    placeholder="Masukkan Keterangan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label require class="col-sm-4 col-form-label">Harga</label>
                            <div class="col-sm-8">
                                <input type="text" name="harga_s" class="form-control"
                                    placeholder="Masukkan Hanya Angka">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label require class="col-sm-4 col-form-label">Ikon</label>
                            <div class="col-sm-8">
                                <input type="text" name="ikon_s" class="form-control"
                                    placeholder="Masukkan kode ikon dari get.bootstrap">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"></label>
                            <button type="submit" class="btn btn-primary ml-2">Simpan</button>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!-- modal tambah services -->