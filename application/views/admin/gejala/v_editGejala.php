<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <title>Edit Gejala - Sistem Pakar Krisan</title>
        <h1>
            <i class="fa fa-eyedropper"> </i> Edit Data Gejala
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <form action="<?php echo base_url('admin/Gejala/update_data/' . $edit->kode_gejala) ?> " method="POST" enctype="multipart/form-data">
                                <table class='table table-bordered'>

                                    <tr>
                                        <td width=190 class="text-bold">Nama Gejala</td>
                                        <td><input name="nama_gejala" type="text" class="form-control" size="70" placeholder="Masukkan Nama Hama Gejala..." value="<?= $edit->nama_gejala ?>" required oninvalid="this.setCustomValidity('Nama Gejala Tidak Boleh Kosong!')">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-bold">Gambar Gejala</td>
                                        <?= $this->session->flashdata('message'); ?>
                                        <td><img src="<?= base_url('./aset/gambar/' . $edit->gambar); ?>" width="100px" >
                                            <a data-toggle="modal" type="submit" data-target="#editmodalgambar<?= $edit->kode_gejala ?>" class="btn-sm btn-primary">Ubah</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><input class='btn-sm btn-success' type=submit name=submit value='Simpan'>
                                            <input class='btn-sm btn-danger' type=button name=batal value='Batal' onclick=" window.location.href='?module=penyakit'">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editmodalgambar<?= $edit->kode_gejala ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-center" style="color: darkcyan;">Edit Gambar</h5>
                </div>
                <form class="form-horizontal" action="<?php echo base_url('admin/Gejala/simpanGambar/' . $edit->kode_gejala) ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-lg-10">
                                <label class="col-lg-5 col-sm-5 control-label">Foto Lama</label>
                                <img src="<?= base_url('./aset/gambar/' . $edit->gambar); ?>" id="gambar" width="100px">
                            </div>
                            <br>
                            <input type="file" id="gambar" name="gambar" accept="image/png, .jpeg, .jpg" onchange="gambar11(this.value)">
                            <div class="col-lg-10">
                                <br>
                                <label class="col-lg-5 col-sm-5 control-label">Foto Baru</label>
                                <img src="holder.jpg" id="foto11" width="100px">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn-sm btn-info" type="submit"> Simpan&nbsp;</button>
                        <button type="button" class="btn-sm btn-warning" data-dismiss="modal"> Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    function gambar1(val) {
        $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
    }
</script>

<script type="text/javascript">
    function gambar11(val) {
        $("#foto11").attr('src', URL.createObjectURL(event.target.files[0]));
    }
</script>