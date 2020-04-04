<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content mt-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title" data-toggle="modal" data-target="m_tambah_produk">Data Produk</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#m_t_produk">
              <i class="fa fa-plus" mr-1></i>  Tambah Data Produk</button>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Lihat</th>
                    <th>Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  foreach($produk as $prd): ?>
                  <tr>
                    <td width="20px"><?php echo $no++ ?></td>
                    <td width="60px"><?php echo $prd->id_p ?></td>
                    <td width="200px"><?php echo $prd->nama_p ?></td>
                    <td width="200px">Rp <?php echo $prd->harga_p ?> ,00</td>
                    <td width="50px">
                        <?php echo anchor ('produk/lihat_produk/'.$prd->id_p, '<div class="btn btn-success btn-sm m-1"><i class="fa fa-search-plus"></i></div>')?>
                    </td>
                    <td onclick="javascript : return confirm('Yakin menghapus data produk <?php echo $prd->nama_p?> ?')">
                      <?php echo anchor('produk/hapus_produk/'.$prd->id_p, '<div class="btn btn-danger btn-sm m-1"><i class="fa fa-trash"></i></div>')?>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Lihat</th>
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

<!-- modal tambah produk -->
<div class="modal fade" justify-content="center" id="m_t_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php echo form_open_multipart('produk/tambah_produk');?>
              <div class="form-group row">
                <label require class="col-sm-4 col-form-label">Nama Produk</label>
                <div class="col-sm-8">
                  <input type="text" name="nama_p" class="form-control" placeholder="Nama Produk">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Harga</label>
                <div class="col-sm-8">
                  <input require type="text" name="harga_p" class="form-control" placeholder="Harga (Masukkan Hanya Angka)">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Foto</label>
                <div class="col-sm-8">
                  <input require type="file" name="foto_p" class="form-control-file"">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label"></label>
                  <button type="submit" class="btn btn-primary ml-2">Simpan</button>
              </div>
          <?php echo form_close();?>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<!-- modal tambah produk -->

