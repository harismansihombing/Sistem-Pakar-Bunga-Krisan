<title>Diagnosis</title>
<h2 class="text-center text-bold" style="font-variant: small-caps;"> <i class="fa fa-bug" style="color: dark;"></i> Diagnosis Hama dan Penyakit Krisan <br>
    <h3 class="text-center text-bold" style="font-style: oblique;">(Chrysanthemum)</h3>
</h2>
<div class="container">

    <hr>
    <div class='alert alert-info alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
        <h4><i class='icon fa fa-exclamation-triangle'></i>Perhatian !</h4>
        1. Silahkan memilih gejala sesuai dengan kondisi Tanaman anda. <br>
        2. Pilih kondisi dari gejala yang anda Pilih. <br>
        3. jika sudah tekan, tombol proses (<i class='fa fa-search-plus'></i>) di bawah untuk melihat hasil Diagnosis.
    </div>

    <form action="<?php echo base_url('user/Diagnosis/hasil') ?> " method="POST" enctype="multipart/form-data">
        <div style="padding-left: 30px;" class="text-bold text-center">
            <tr>
                <td>Nama Pengguna: </td>
                <td>
                    <input name="" type="text" disabled class="form-control" size="70" value="<?php echo $this->session->userdata('nama') ?>">
                </td>

            </tr>
        </div> <br>
        <?= $this->session->flashdata('message'); ?>
        <table class='table table-bordered table-striped konsultasi'>
            <thead>
                <tr>
                    <th class="text-center">
                        <h4 class="text-bold">No</h4>
                    </th>
                    <th class="text-center">
                        <h4 class="text-bold">Kode</h4>
                    </th>
                    <th class="text-center">
                        <h4 class="text-bold">Gejala</h4>
                    </th>
                    <th class="text-center">
                        <h4 class="text-bold">Gambar</h4>
                    </th>
                    <th class="text-center" width='20%'>
                        <h4 class="text-bold">Pilih Kondisi</h4>
                    </th>
                </tr>
            </thead>

            <tbody class='pilihkondisi'>
                <?php $no = 1;
                foreach ($data as $isi) { ?>
                    <tr>
                        <td class="text-center">
                            <h4><?= $no; ?></h4>
                        </td>
                        <td class="text-center">
                            <h4> <?= $isi->kode_gejala; ?></h4>
                        </td>
                        <td>
                            <h4><?= $isi->nama_gejala; ?></h4>
                        </td>

                        <?php if ($isi->gambar) : ?>
                            <td class="text-center">
                                <a href="<?= base_url('./aset/gambar/' . $isi->gambar); ?>" width="45px" height="40">
                                    <img src="<?= base_url('./aset/gambar/' . $isi->gambar); ?>" width="45px" height="40"></a>
                            </td>

                        <?php else : ?>
                            <td class="text-center">
                                <?= $this->session->flashdata('alert'); ?>
                                <div class="form-group">
                                    Tidak Upload
                                </div>
                            </td>
                        <?php endif; ?>

                        <td class="form-group text-center">
                            <input type="text" class="hidden" name="kd_gejala[]" value="<?= $isi->kode_gejala; ?>">

                            <select class="form-control text-center" name="kondisi[]" id="">
                                <option value="">Pilih Kondisi</option>
                                <option value="<?= $isi->kode_gejala . '_' . 1; ?>" class="text-boldx">Sangat Yakin</option>
                                <option value="<?= $isi->kode_gejala . '_' . 2; ?>" class="text-boldx">Yakin</option>
                                <option value="<?= $isi->kode_gejala . '_' . 3; ?>" class="text-boldx">Cukup Yakin</option>
                                <option value="<?= $isi->kode_gejala . '_' . 4; ?>" class="text-boldx">Sedikit Yakin</option>
                                <option value="<?= $isi->kode_gejala . '_' . 5; ?>" class="text-boldx">Tidak Tahu</option>

                            </select>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
        <input class='float' type=submit data-toggle='tooltip' data-placement='top' title='Klik disini untuk melihat hasil diagnosa' name=submit value='&#xf00e;' style='font-family:Arial, FontAwesome'>
    </form>
</div>
</section>

<br><br>