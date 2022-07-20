<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <title>Informasi - Sistem Pakar Krisan</title>
        <h1>
            <i class="fa fa-info-circle"> </i> Tambah Informasi Hama Penyakit
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
                            <form action="<?php echo base_url('admin/Postingan/save_post') ?> " method="POST" enctype="multipart/form-data">
                                <br>
                                <table class='table table-bordered'>

                                    <tr> <?= $this->session->flashdata('message'); ?>
                                        <td width=170 class="text-bold">Nama Postingan</td>
                                        <td><input name="nama_post" type="text" class="form-control" size="70" placeholder="Masukkan Nama Hama Penyakit..." required oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                                            <?= form_error('nama_post', '<small class="text-danger pl-2">', '</small>');  ?></td>
                                    </tr>

                                    <tr>
                                        <td width=120 class="text-bold">Detail Post</td>
                                        <td> <textarea id="editor1" class="ckeditor" name="det_post" type="text" placeholder="Masukkan detail post baru..."></textarea>
                                            <?= form_error('det_post', '<small class="text-danger pl-2">', '</small>');  ?></td>
                                    </tr>

                                    <tr>
                                        <td width=120 class="text-bold">Saran Pengendalian</td>
                                        <td><textarea id='editor2' rows='4' cols='50' class='ckeditor' name='srn_post' type=text placeholder='Masukkan saran post baru...'></textarea>
                                            <?= form_error('srn_post', '<small class="text-danger pl-2">', '</small>');  ?></td>
                                    </tr>

                                    <tr>
                                        <div class="form=group">
                                            <td width=170> <label for="enum">
                                                    Pilih Kategori
                                                </label>
                                            </td>
                                            <td> <select class="form-control" name="kategori" id="kategori" required oninvalid="this.setCustomValidity('Pilih Kategori!')" oninput="setCustomValidity('')">
                                                    <option value="" class="text-center">-- Pilih Kategori --</option>
                                                    <option value="Hama" class="text-center">Hama</option>
                                                    <option value="Penyakit" class="text-center">Penyakit</option>
                                                </select></td>
                                        </div>
                                    </tr>

                                    <tr>
                                        <div class="form-group">
                                            <td>
                                                <label class="m-0 font-weight-bold text-dark">Gambar</label>
                                            </td>
                                            <td>Upload Gambar Gejala (Ukuran Maks = 1 MB) :
                                                <input type="file" accept="image/png, .jpeg, .jpg" name="gambar" id="gambar" onchange="gambar1(this.value)" required> <br>
                                                <img src="holder.jpg" id="ayam" name="ayam" width="120px">
                                            </td>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="form-group">
                                            <td width=170 class="text-bold">
                                                <label> Sumber Referensi</label>
                                            </td>
                                            <td>Berikan link referensi yang anda gunakan pada form Referensi. <br>
                                                <input name="link" type="text" class="form-control" size="70" placeholder="Masukkan link referensi..." required oninvalid="this.setCustomValidity('Referensi Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                                                <?= form_error('link', '<small class="text-danger pl-2">', '</small>');  ?>
                                            </td>
                                        </div>
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
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    function gambar1(val) {
        $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
    }
</script>