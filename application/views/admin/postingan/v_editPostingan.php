<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <title>Informasi - Sistem Pakar Krisan</title>
        <h1>
            <i class="fa fa-info-circle"> </i> Edit Informasi Hama Penyakit
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
                            <form action="<?php echo base_url('admin/Postingan/update_post/' . $edit->kode_post) ?> " method="POST" enctype="multipart/form-data">
                                <br>
                                <table class='table table-bordered'>


                                    <tr>
                                        <td width=170 class="text-bold">Nama Postingan</td>
                                        <td><input name="nama_post" type="text" class="form-control" size="70" placeholder="Masukkan Nama Postingan..." value="<?= $edit->nama_post ?>" required oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong!')"></td>
                                    </tr>

                                    <tr>
                                        <td width=120 class="text-bold">Detail Post</td>
                                        <?= form_error('det_post', '<small class="text-danger pl-2">', '</small>'); ?>
                                        <td> <textarea id="editor1" class="ckeditor" name="det_post" type="text" placeholder="Masukkan detail post baru..." value="<?= $edit->det_post ?>"><?= $edit->det_post ?>
                                    </textarea></td>
                                    </tr>

                                    <tr>
                                        <?= form_error('srn_post', '<small class="text-danger pl-2">', '</small>'); ?>
                                        <td width=120 class="text-bold">Saran Pengendalian</td>
                                        <td><textarea id='editor2' rows='4' cols='50' class='ckeditor' name='srn_post' type=text placeholder='Masukkan saran post baru...' value="<?= $edit->srn_post ?>" required oninvalid="this.setCustomValidity('Detail Tidak Boleh Kosong!')"><?= $edit->srn_post ?></textarea></td>
                                    </tr>

                                    <tr>
                                        <div class="form=group">
                                            <td width=170> <label for="enum">
                                                    Pilih Kategori
                                                </label>
                                            </td>
                                            <td> <select class="form-control" name="kategori" id="kategori">
                                                    <option value="Hama" <?php if ($edit->kategori == 'Hama') echo 'selected'; ?>>Hama</option>
                                                    <option value="Penyakit" <?php if ($edit->kategori == 'Penyakit') echo 'selected'; ?>>Penyakit</option>
                                                </select>
                                            </td>
                                        </div>
                                    </tr>

                                    <tr>
                                        <td class="text-bold">Gambar</td>
                                        <?= $this->session->flashdata('alert'); ?>
                                        <td><img src="<?= base_url('./aset/gambar/' . $edit->gambar); ?>" width="100px">
                                            <a data-toggle="modal" type="submit" data-target="#editmodalgambar<?= $edit->kode_post ?>" class="btn-sm btn-primary">Ubah</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width=170 class="text-bold">Sumber Referensi</td>
                                        <td>Berikan link referensi yang anda gunakan pada form Referensi. <br>
                                            <input name="link" type="text" class="form-control" size="70" placeholder="Masukkan sumber referensi..." value="<?= $edit->link ?>" required oninvalid="this.setCustomValidity('Referensi Tidak Boleh Kosong!')">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td></td>
                                        <td><input class='btn btn-success' type=submit name=submit value='Simpan'>
                                            <input class='btn btn-danger' type=button name=batal value='Batal' onclick="window.location.href='?module=post'">
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

    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editmodalgambar<?= $edit->kode_post ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-center" style="color: darkcyan;">Edit Gambar</h5>
                </div>
                <form class="form-horizontal" action="<?php echo base_url('admin/Postingan/simpanGambar/' . $edit->kode_post) ?>" method="post" enctype="multipart/form-data" role="form">
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
    function gambar11(val) {
        $("#foto11").attr('src', URL.createObjectURL(event.target.files[0]));
    }
</script>