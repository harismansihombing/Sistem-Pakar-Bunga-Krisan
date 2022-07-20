<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-history"> </i> Riwayat Diagnosis
        </h1>
    </section>
    <section class="content">
        <div class='content'>
            <div class="row">
                <div class="col-md-10">
                    <h4>Nama : <b><?= $detail->nama; ?></b></h4>
                    <h4>Tanggal : <b><?= date('d-m-Y') ?> </h4></b>
                </div>
                <div class="col-md-2">
                    <a type='button' href=" <?= base_url('admin/riwayat/cetakpdf/' . $detail->id_hasil) ?>"
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

                            $arpenyakit = unserialize($detail->hp); // Konversi data string ke data Json
                            $argejala = unserialize($detail->kode_gejala); // Konversi data string ke data Json

                            $no = 1;
                            $ig = 0;
                            foreach ($argejala as $key => $value) {
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
                            foreach ($argejala as $key => $value) {
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
                            $query = $this->db->where('kode_hp', $detail->kode_hp)->get('hp');
                            foreach ($query->result() as $p) { ?>
                            <h5 class='box-title'>Hasil diagnosis sistem adalah : </h5>
                            <h3 style="color: green;">
                                <b><?= $p->nama_penyakit; ?></b>&nbsp;&nbsp;|&nbsp;&nbsp;<?= $p->kategori; ?>
                            </h3>
                            <h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nilai CF &nbsp;&nbsp;|&nbsp;&nbsp;
                                <b><?= round($detail->cf_hasil, 3); ?></b>
                            </h4>
                            <h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Persentase &nbsp;&nbsp;|&nbsp;&nbsp;
                                <span><b>( <?= round($detail->cf_hasil * 100) ?>% )</b></span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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

                                //$arpenyakit = unserialize($detail->hp); // Konversi data string ke data Json

                                $num = 1;
                                $np1 = 0;
                                foreach ($arpenyakit as $key1 => $value1) {
                                    $np1++;
                                    $idpkt1[$np1] = $key1;
                                    $vlpkt1[$np1] = $value1;

                                    $kemungkinan = $this->db->where('kode_hp', $key1)->get('hp')->row();
                                    if ($num == 1) {
                                    } else {
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $kemungkinan->kode_hp; ?></td>
                                        <td class="text-left"><?= $kemungkinan->nama_penyakit; ?></td>
                                        <td class="text-center"><?= $kemungkinan->kategori; ?></td>
                                        <td class="text-center"><?= $value1; ?></td>
                                        <td class="text-center"><?= round($value1 * 100); ?>%</td>
                                    </tr>
                                    <?php }
                                    $num++;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>