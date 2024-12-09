<div class="row">
    <div class="col-md-12">
        <div class="box box-danger">
            <div class="box-header with-border color-header">
                <h3 class="box-title"><i class="fa fa-th"></i> Data Barang</h3>
                <div class="box-tools pull-right">
                    <a class="btn btn-default btn-sm" href="<?php echo base_url('Produk'); ?>">
                        <span class="fa fa-refresh"></span> Refresh
                    </a>
                    <button type="button" class="btn btn-sm btn-success" id="btnTambah"> 
                        <span class="fa fa-plus"></span> Tambah
                    </butto>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered  table-condensed" id="mydata">
                            <thead>
                                <tr>
                                  <th style='width:30px; text-align:center;'>#No</th>
                                  <th>Nama Barang</th>
                                  <th>Kategori</th>
                                  <th>Satuan</th>
                                  <th scope="width:90px; text-align:right;">Harga Beli</th>
                                  <th scope="width:80px; text-align:right;">Harga Pokok</th>
                                  <th scope="width:80px; text-align:right;">Harga Jual</th>
                                  <th scope="width:120px; text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbl_data">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static"> 
    <div class="modal-dialog" role="document"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i>Data Supplier Barang</h4>
            </div> 
            <form action="" method="post" id="form_add">
                <div class="modal-body">
                    <input type="hidden" id="id_produk" name="1d_produk">
                    <div class="row"> 
                        <div class="col-md-4"> 
                            <div class="form-group">
                                <label for="">Kategori <span class="text-danger">*</span></label>
                                <select name="id_kategori" id="id_kategori" class="form-control"> 
                                    <option value="">- Pilih Kategori -</option>
                                    <?php foreach ($kategori as $row) { 
                                        echo "<option value='$row->id_kategori'>$row->nama_kategori</option>";
                                    }?> 
                                </select> 
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Nama Barang <span class="text-danger">*</span></label>
                                <input type="text" id="nama_produk" name="nama_produk" autocomplete="off" class="form-control input-sm" placeholders="Nama Barang"> 
                            </div> 
                        </div>
                    </div>


                    <div class="row"> 
                        <div class="col-md-6"> 
                            <div class="form-group"> 
                                <label for="">Satuan <span class="text-danger">*</span></label> 
                                <select name="id_satuan" id="id_satuan" class="form-control">
                                    <option value="">- Pilih Satuan -</option> 
                                        <?php foreach ($satuan as $row) { 
                                            echo "<option value='$row->id_satuan'>$row->nana_satuan</option>"; 
                                        } ?> 
                                </select> 
                                <span class="help-block"></span> 
                            </div> 
                        </div> 
                        
                        <div class="col-md-6"> 
                            <div class="form-group"> 
                                <label for="">Barcode</label> 
                                <input type="text" id="barcode" name="barcode" autocomplete="off" class="form-control input-sm" placeholder="Nomor Kontak"> 
                            </div> 
                        </div> 
                    </div>

                    <div class="row"> 
                        <div class="col-md-4"> 
                            <div class="form-group"> 
                                <label for="">Harga Beli <span class="text-danger">*</span></label> 
                                <input type="text" id="harga_beli" name="harga_beli" autocomplete="off" class="form-control input-sm" onkeypress="return isNumber(this, event);" placeholders ="Harga Beli">
                            </div>
                        </div>
                        <div class="col-md-4"> 
                            <div class="form-group"> 
                                <label for="">Harga Pokok <span class="text-danger">*</span></label>
                                <input type="text" id="harga_pokok" name="harga_pokok" autocomplete="off" class="form-control input-sm" onkeypress="return isNumber(this, event);" placeholder="Harga Pokok"> 
                            </div> 
                        </div> 
                        <div class="col-nd-4"> 
                            <div class="form-group"> 
                                <label for="">Harga Jual <span class="text-danger"></span></label> 
                                <input type="text" id="harga_jual" name="harga_jual" autocomplete="off" class="form-control input-sm" onkeypress="return isNumber(this, event);" placeholder="Harga Jual"> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button> 
                <button type="button" class="btn btn-primary" id="btnSimpan" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing ">Simpas Data</button> 
            </div> 
        </div> 
    </div>
</div>

<script src="<?php echo base_url().'assets/js/validate.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
    var btnEdit = false; 
    tampil_data(); 
    
    // Menampilkan data di tabel
    function tampil_data() { 
        $.ajax({ 
            url: '<?php echo base_url(); ?>Produk/tampilkanData', 
            type: "POST", 
            dataType: "json",
            success: function (response) { 
                var i;
                var no = 0;
                var html = "";
                for (i = 0; i < response.length; i++) { 
                    no++; 
                    html = html + '<tr>'
                        + '<td>' + no + '</td>'
                        + '<td>' + response[i].nama_produk + '</td>' 
                        + '<td>' + response[i].nama_kategori + '</td>' 
                        + '<td>' + response[i].nama_satuan + '</td>' 
                        + '<td style="text-align: right;">' + new Intl.NumberFormat('id-ID').format(response[i].harga_beli) + '</td>' 
                        + '<td style="text-align: right;">' + new Intl.NumberFormat('id-ID').format(response[i].harga_pokok) + '</td>' 
                        + '<td style="text-align: right;">' + new Intl.NumberFormat('id-ID').format(response[i].harga_jual) + '</td>' 
                        + '<td><center>' + '<span><button edit-id="' + response[i].id_produk + 
                            '" class="btn btn-success btn-xs btn-edit"><i class="fa fa-edit"></i> Edit</button><button style="margin-left: 5px;" data-id="' + 
                            response[i].id_produk + 
                            '" class="btn btn-danger btn-xs btn_hapus"><i class="fa fa-trash"></i> Hapus</button></span>' + '</center></td>'
                        + '</tr>';
                }

                $("#tbl_data").html(html); 
                $("#mydata").DataTable();
            },
            error: function (xhr, ajaxOptions, thrownError) { 
                alert(xhr.status); 
                alert(thrownError); 
            }
        });
    }
});

</script>