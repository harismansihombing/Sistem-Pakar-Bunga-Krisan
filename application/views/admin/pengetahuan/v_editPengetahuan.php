<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <title>Edit Data - Sistem Pakar Krisan</title>
        <h1>
            <i class="fa fa-flask"> </i> Edit Basis Pengetahuan
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

                            <div class='alert alert-success alert-dismissible'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                <h4><i class='icon fa fa-exclamation-triangle'></i>Petunjuk Pengisian Pakar !</h4>
                                Silahkan pilih gejala yang sesuai dengan penyakit yang ada, dan berikan <b>nilai kepastian (MB & MB)</b> dengan cakupan sebagai berikut:<br><br>
                                <b>1.0</b> (Pasti Ya)&nbsp;&nbsp;|&nbsp;&nbsp;<b>0.8</b> (Hampir Pasti)&nbsp;&nbsp;|<br>
                                <b>0.6</b> (Kemungkinan Besar)&nbsp;&nbsp;|&nbsp;&nbsp;<b>0.4</b> (Mungkin)&nbsp;&nbsp;|<br>
                                <b>0.2</b> (Hampir Mungkin)&nbsp;&nbsp;|&nbsp;&nbsp;<b>0.0</b> (Tidak Tahu atau Tidak Yakin)&nbsp;&nbsp;|<br><br>
                                <b>CF(Pakar) = MB – MD</b><br>
                                MB : Ukuran kenaikan kepercayaan (measure of increased belief) MD : Ukuran kenaikan ketidakpercayaan (measure of increased disbelief) <br> <br>
                                <b>Contoh:</b><br>
                                Jika kepercayaan <b>(MB)</b> anda terhadap gejala Mencret keputih-putihan untuk penyakit Berak Kapur adalah <b>0.8 (Hampir Pasti)</b><br>
                                Dan ketidakpercayaan <b>(MD)</b> anda terhadap gejala Mencret keputih-putihan untuk penyakit Berak Kapur adalah <b>0.2 (Hampir Mungkin)</b><br><br>
                                <b>Maka:</b> CF(Pakar) = MB – MD (0.8 - 0.2) = <b>0.6</b> <br>
                                Dimana nilai kepastian anda terhadap gejala Mencret keputih-putihan untuk penyakit Berak Kapur adalah <b>0.6 (Kemungkinan Besar)</b>
                            </div>

                            <form action="<?php echo base_url('admin/Pengetahuan/update_pengetahuan/' . $edit->kode_pengetahuan) ?> " method="POST" enctype="multipart/form-data">
                                <br><br>
                                <table class='table table-bordered'>
                                    <!-- <tr>
                                        <td>Penyakit</td>
                                        <td><select class='form-control' name='kode_hp' id='kode_hp' required oninvalid="this.setCustomValidity('Pilih Penyakit!')" oninput="setCustomValidity('')">
                                                <option value="<?= $edit->kode_hp ?>" class="text-center">- <?= $edit->nama_penyakit ?> -</option>
                                                <?php foreach ($penyakit as $k) : ?>
                                                    <option value="<?= $k->kode_hp ?>"><?= $k->nama_penyakit ?></option>
                                                <?php endforeach; ?>
                                            </select></td>
                                    </tr> -->
                                    <tr>
                                        <td>Penyakit</td>
                                        <td><select class='form-control' name='kode_hp' id='kode_hp' required oninvalid="this.setCustomValidity('Pilih Penyakit!')" oninput="setCustomValidity('')">
                                                <option value="<?= $edit->kode_hp ?>" class="text-center">- <?= $edit->nama_penyakit ?> -</option>
                                                <?php foreach ($penyakit as $k) : ?>
                                                    <option value="<?= $k->kode_hp ?>"><?= $k->nama_penyakit ?></option>
                                                <?php endforeach; ?>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td>Gejala</td>
                                        <td><select class='form-control' name='kode_gejala' id='kode_gejala' required oninvalid="this.setCustomValidity('Pilih Gejala!')" oninput="setCustomValidity('')">
                                                <option value="<?= $edit->kode_gejala ?>" class="text-center">- <?= $edit->nama_gejala ?> -</option>
                                                <?php foreach ($gejala as $k) : ?>
                                                    <option value="<?= $k->kode_gejala ?>"><?= $k->nama_gejala ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>MB</td>
                                        <td><input autocomplete='off' placeholder='Masukkan Nilai MB' value="<?= $edit->mb ?>" type=text class='form-control' name='mb' size=15 required oninvalid="this.setCustomValidity('Nilai MB tidak boleh kosong!')" oninput="setCustomValidity('')"></td>
                                    </tr>
                                    <tr>
                                        <td>MD</td>
                                        <td><input autocomplete='off' placeholder='Masukkan Nilai MD' value="<?= $edit->md ?>" type=text class='form-control' name='md' size=15 required oninvalid=" this.setCustomValidity('Nama MD tidak Boleh kosong!')" oninput="setCustomValidity('')"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><input class='btn btn-success' type=submit name=submit value='Simpan'>
                                            <input class='btn btn-danger' type=button name=batal value='Batal' onclick="window.location.href='?module=pengetahuan'">
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