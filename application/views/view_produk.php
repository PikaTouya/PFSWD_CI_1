<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Master Data Produk</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"
rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <h1><center>Data Produk</center></h1>
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
        <?php
          foreach ($data->result() as $i => $row)
            {
              ?>
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
              <?php
            }?>
        </tbody>
      </table>
    </div>
    <!-- load jquery js file -->
  <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- load bootstrap js file -->
  <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>