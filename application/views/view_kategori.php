<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data kategori Produk</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
    <h2 class="text-center mt-3">Menampilkan Data kategori</h2>
    <table border="1" cellspacing = "0" cellpadding = "10" class="table table-striped mt-5">
        <tr>
            <td style="width: 30px">No</td>
            <td style="width: 30px">ID</td>
            <td scope="col">Nama kategori</td>
        </tr>
        
        <?php foreach ($data->result() as $i => $row) : ?>
            <tr>
                <td><?= ++$i; ?></td>
                <td><?= $row->id_kategori ?></td>
                <td><?= $row->nama_kategori ?></td>
            </tr>
        <?php endforeach;?>
    </table>

    <!-- load jquery js file -->
    <script src="https://ajax.googleapis.com.ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <!-- load bootstrap js file -->
      <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>