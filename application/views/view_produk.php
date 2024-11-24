<div class="row">
    <div class="col-md-12">
        <div class="box box-danger">
            <div class="box-header with-border color-header">
                <h3 class="box-title"><i class="fa fa-th"></i> Data Produk Barang</h3>
                <div class="box-tools pull-right">
                    <a class="btn btn-default btn-sm" href="<?php echo base_url('Produk'); ?>">
                        <span class="fa fa-refresh"></span> Refresh
                    </a>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#form-add"> <span class="fa fa-plus"></span> Tambah</butto>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                  <th style='width:30px'>#</th>
                                  <th style='width:30px'>ID</th>
                                  <th scope="col">Kategori</th>
                                  <th scope="col">Nama Produk</th>
                                  <th scope="col">Satuan</th>
                                  <th scope="col">Harga Beli</th>
                                  <th scope="col">Harga Pokok</th>
                                  <th scope="col">harga Jual</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data->result() as $i => $row){ ?>
                                  <tr>
                                    <td><?= ++$i; ?></td>
                                    <td><?= $row->id_produk; ?></td>
                                    <td><?= $row->nama_kategori; ?></td>
                                    <td><?= $row->nama_produk; ?></td>
                                    <td><?= $row->nama_satuan; ?></td>
                                    <td><?= number_format($row->harga_beli);?></td>
                                    <td><?= number_format($row->harga_pokok);?></td>  
                                    <td><?= number_format($row->harga_jual);?></td>
                                  </tr>
                              <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>