<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#m_t_admin">
                            <i class="fa fa-plus" mr-1></i>  Tambah Data Admin</button>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Admin</th>
                                        <th>Username</th>
                                        <th>Lihat</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    foreach($admin as $adm): ?>
                                    <tr>
                                        <td width="20px"><?php echo $no++ ?></td>
                                        <td width="60px"><?php echo $adm->id_a ?></td>
                                        <td width="200px"><?php echo $adm->username_a ?></td>
                                        <td width="50px">
                                            <?php echo anchor ('admin/lihat_admin/'.$adm->id_a, '<div class="btn btn-success btn-sm m-1"><i class="fa fa-search-plus"></i></div>')?>                                            
                                        </td>
                                        <td width="50px">
                                            <?php echo anchor ('admin/edit_admin/'.$adm->id_a, '<div class="btn btn-warning btn-sm m-1"><i class="fa fa-edit"></i></div>')?>                                            
                                        </td>
                                        <td onclick="javascript : return confirm('Yakin menghapus data <?php echo $adm->username_a?> ?')" width="50px">
                                            <?php echo anchor ('admin/hapus_admin/'.$adm->id_a, '<div class="btn btn-danger btn-sm m-1"><i class="fa fa-trash"></i></div>')?>    
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Admin</th>
                                        <th>Username</th>
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

    <!-- modal tambah admin -->
    <div class="modal fade" justify-content="center" id="m_t_admin" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukkan Data admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url().'admin/tambah_admin'?>">
                        <div class="form-group row">
                            <label require class="col-sm-4 col-form-label">Username</label>
                            <div class="col-sm-8">
                                <input type="text" name="username_a" class="form-control" placeholder="Masukkan Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input require type="text" name="password_a" class="form-control"
                                    placeholder="Masukkan Password">
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
    <!-- modal tambah admin -->