<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <title>Tambah Data - Sistem Pakar Krisan</title>
        <h1>
            <i class="fa fa-bug"> </i> Tambah Data Hama Penyakit
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
                            <form action="<?php echo base_url('admin/HamaPenyakit/tambah_data') ?> " method="POST" enctype="multipart/form-data">
                                <table class='table table-bordered'>

                                    <tr>
                                        <td width=170 class="text-bold">Kode</td>
                                        <td><input name="kode_hp" type="text" class="form-control" value="<?php echo $cekkode; ?>" disabled>
                                        
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width=170 class="text-bold">Nama Penyakit</td>
                                        <td><input name="nama_penyakit" type="text" class="form-control" size="70" placeholder="Masukkan Nama Hama Penyakit..." required oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                                            <?= form_error('nama_penyakit', '<small class="text-danger pl-2">', '</small>');  ?></td>
                                    </tr>

                                    <tr>
                                        <td width=170 class="text-bold">Detail Hama Penyakit</td>
                                        <td> <textarea rows="5" cols="72" class="form-control" name="det_penyakit" type="text" placeholder="Masukkan Detail Hama Penyakit..." required oninvalid="this.setCustomValidity('Detail Tidak Boleh Kosong!')" oninput="setCustomValidity('')"></textarea></td>
                                        <?= form_error('det_penyakit', '<small class="text-danger pl-2">', '</small>');  ?></td>
                                    </tr>

                                    <tr>
                                        <td width=170 class="text-bold">Saran Pengendalian</td>
                                        <td> <textarea rows="5" cols="72" class="form-control" name="srn_penyakit" type="text" placeholder="Masukkan Saran Penanganan Hama Penyakit..." required oninvalid="this.setCustomValidity('Saran Tidak Boleh Kosong!')" oninput="setCustomValidity('')"></textarea></td>
                                        <?= form_error('det_penyakit', '<small class="text-danger pl-2">', '</small>');  ?></td>
                                    </tr>

                                    <tr>
                                        <div class="form=group">
                                            <td width=170> <label for="enum">
                                                    Pilih Kategori
                                                </label>
                                            </td>
                                            <td> <select class="form-control" name="kategori" id="kategori" required oninvalid="this.setCustomValidity('Pilih Kategori!')" oninput="setCustomValidity('')">
                                                    <option value="" class="text-center">-- Pilih Kategori --</option>
                                                    <option value="Hama">Hama</option>
                                                    <option value="Penyakit">Penyakit</option>
                                                </select></td>
                                        </div>
                                    </tr>

                                    <tr>
                                        <div class="form-group">
                                            <td>
                                                <label class="m-0 font-weight-bold text-dark">Foto</label>
                                            </td>
                                            <td>Upload Gambar (Ukuran Maks = 1 MB) :
                                                <input type="file" accept="image/png, .jpeg, .jpg" name="gambar" id="gambar" onchange="gambar1(this.value)" required> <br>
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