<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <title>Tambah Gejala - Sistem Pakar Krisan</title>
        <h1>
            <i class="fa fa-eyedropper"> </i> Tambah Gejala
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
                        <?= $this->session->flashdata('message'); ?>
                        <div class="table-responsive">
                            <form action="<?php echo base_url('admin/Gejala/simpan_data') ?> " method="POST" enctype="multipart/form-data">
                                <table class='table table-bordered'>

                                    <tr>
                                        <td width=170 class="text-bold">Kode</td>
                                        <td><input name="kode_gejala" type="text" class="form-control" value="<?php echo $cekkodeG; ?>" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width=170 class="text-bold">Nama Gejala</td>
                                        <td><input name="nama_gejala" type="text" class="form-control" size="70" placeholder="Masukkan Nama Gejala..." required oninvalid="this.setCustomValidity('Nama Gejala Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                                            <?= form_error('nama_gejala', '<small class="text-danger pl-2">', '</small>');  ?></td>
                                    </tr>
                                    <tr>
                                        <div class="form-group">
                                            <td>
                                                <label class="m-0 font-weight-bold text-dark">Gambar</label>
                                            </td>
                                            <td>Upload Gambar Gejala (Ukuran Maks = 1 MB) :
                                                <input type="file" accept="image/png, .jpeg, .jpg" name="gambar" id="gambar" onchange="gambar1(this.value)"> <br>
                                                <img src="holder.jpg" id="ayam" name="ayam" width="120px">
                                            </td>
                                        </div>
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
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    function gambar1(val) {
        $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
    }
</script>