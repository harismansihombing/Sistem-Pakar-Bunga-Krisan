<title>Hasil Diagnosis</title>
<h2 class="text-center text-bold" style="font-variant: small-caps;"> <i class="fa fa-bug" style="color: dark;"></i>
    Diagnosis Hama dan Penyakit Krisan <br>
    <h3 class="text-center text-bold" style="font-style: oblique;">(Chrysanthemum)</h3>
</h2>
<div class="container">
    <div class='content'>
        <h2 class='text text-primary'>Hasil Diagnosis </h2>
        <div class="row">
            <div class="col-md-10">
                <h4>Nama : <b><?= $this->session->userdata('nama') ?></b></h4>
                <h4>Tanggal : <b><?= date('d-m-Y') ?> </h4></b>
            </div>
            <div class="col-md-2">
                <a type='button'
                    href=" <?= base_url('user/Diagnosis/cetakpdf/' . $this->session->userdata('no_pengguna')) ?>"
                    class='btn btn-success btn-xs' data-toggle='tooltip' data-placement='top'
                    title='Cetak hasil diagnosa' target="_blank"><i class='fa fa-print'></i> Cetak</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <table class='table table-bordered table-striped diagnosa'>
                    <thead>
                        <tr>
                            <th width=8% class="text-center">No</th>
                            <th width=10% class="text-center">Kode</th>
                            <th class="text-center">Gejala yang dialami (dipilih)</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        $ig = 0;
                        foreach ($gejala as $key) {
                            $query = $this->db->where('kode_gejala', $key)->get('gejala')->row();
                        ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td class="text-center"><?= $key ?></td>
                            <td><?= $query->nama_gejala; ?></td>
                        </tr>
                        <?php $ig++;
                        } ?>
                    </tbody>


                </table>
            </div>
            <div class="col-md-4">
                <table class='table table-bordered table-striped diagnosa'>
                    <thead>
                        <tr>
                            <th class="text-center">Kondisi Terpilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($kondisi as $key => $value) {
                            $query = $this->db->query("SELECT * FROM kondisi where id = $value");
                            $row = $query->result_array();
                            foreach ($row as $k => $v) {
                                echo ' <tr>
                                <td class="text-center">' . $v['kondisi'] . '</td>
                            </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="box box-info box-solid">
                    <div class='box-header with-border'>
                        <h3 class='box-title'>Hasil Diagnosis</h3>
                    </div>
                    <div class='box-body'>
                        <?php
                        $query = $this->db->where('kode_hp', $penyakit_terpilih)->get('hp');
                        foreach ($query->result() as $p) { ?>
                        <h5 class='box-title'>Hasil diagnosis sistem adalah : </h5>
                        <h3 style="color: green;">
                            <b><?= $p->nama_penyakit; ?></b>&nbsp;&nbsp;|&nbsp;&nbsp;<?= $p->kategori; ?>
                        </h3>
                        <h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nilai CF &nbsp;&nbsp;|&nbsp;&nbsp;
                            <b><?= $hasil ?></b>
                        </h4>
                        <h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Persentase &nbsp;&nbsp;|&nbsp;&nbsp;
                            <span><b>( <?= $persentasi ?>% )</b></span>
                        </h4>

                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <!-- <img class="ard-img-top img-bordered-sm" src="<?= base_url() ?>aset/gambar/<?= $p->gambar; ?>" alt="" width="330px"> -->
                <img class="ard-img-top img-bordered-sm" src="<?= base_url() ?>aset/gambar/<?= $p->gambar; ?>"
                    width="100%" height="205">
            </div>
        </div>
        <div class='box box-info box-solid'>
            <div class='box-header with-border'>
                <h3 class='box-title'>Detail Hama Penyakit</h3>
            </div>
            <div class='box-body'>
                <h5>
                    <?= $p->det_penyakit; ?>
                </h5>
            </div>
        </div>
        <div class='box box-warning box-solid'>
            <div class='box-header with-border'>
                <h3 class='box-title'>Saran Pengendalian</h3>
            </div>
            <div class='box-body'>
                <p>
                    <?= $p->srn_penyakit; ?>
                </p>
            </div>
        </div>
        <?php } ?>
        <div class='box box-danger box-solid'>
            <div class='box-header with-border'>
                <h3 class='box-title'>Kemungkinan Hama Penyakit lain:</h3>
            </div>
            <div class='box-body'>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordere mt-5">
                            <thead>
                                <tr>
                                    <th width="130" class="text-center">Kode</th>
                                    <th class="text-center">Nama Hama Penyakit</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Nilai CF</th>
                                    <th class="text-center">Persentase</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            // print_r($strategi_lain);
                            $num = 1;
                            foreach ($penyakit_lain as $key => $value) :
                                $kemungkinan = $this->db->where('kode_hp', $key)->get('hp')->row();
                                if ($num == 1) {
                                } else {
                            ?>

                                <tr>
                                    <td class="text-center"><?= $kemungkinan->kode_hp; ?></td>
                                    <td class="text-left"><?= $kemungkinan->nama_penyakit; ?></td>
                                    <td class="text-center"><?= $kemungkinan->kategori; ?></td>
                                    <td class="text-center"><?= $value; ?></td>
                                    <td class="text-center"><?= round($value * 100); ?>%</td>
                                </tr>

                                <?php }
                                $num++;
                            endforeach; ?>

                            </tbody>
                        </table>
                        <!-- <a href="<?php //echo site_url('user/Diagnosa') 
                                    ?>" type="button" class="btn btn-danger">
                        Diagnosa Lagi
                    </a> -->
                    </div>
                </div>


            </div>
        </div>
        <br><br>