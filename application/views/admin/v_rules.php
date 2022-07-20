<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-sliders"> </i> Rules Hama Penyakit
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <title>Rules - Sistem Pakar Krisan</title>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <br>
                        <div class="card-header py-3">
                            <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true">
                                <?php if ($title == "Hama") : ?>
                                    Hama
                                <?php elseif ($title == "Penyakit") : ?>
                                    Penyakit
                                <?php else : ?>
                                    Semua
                                <?php endif; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" role="menu">
                                <a class="dropdown-item btn-sm btn-warning" href="<?= base_url('admin/Rules'); ?>">Semua</a>
                                <a class="dropdown-item btn-sm btn-warning" href="<?= base_url('admin/Rules/tampil_hama'); ?>">Hama</a>
                                <a class="dropdown-item btn-sm btn-warning" href="<?= base_url('admin/Rules/tampil_penyakit'); ?>">Penyakit</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="table-responsive">
                            <br />
                            <table id="example1" class="table table-bordered table-striped riwayat" width="">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Hama Penyakit</th>
                                        <th class="text-center">Kategori</th>
                                        <th class="text-center">Rules</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($data as $isi) { ?>
                                        <tr>
                                            <td class="text-center" style="width:5%;"><?= $no; ?></td>
                                            <td><?= $isi->nama_penyakit ?></td>
                                            <td class="text-center" style="width:15%;"><?= $isi->kategori ?></td>
                                            <td class="text-center" style="width:15%;">
                                                <a class="btn bg-green margin" href="" data-toggle="modal" data-target="#modal<?= $isi->kode_hp ?>"><i class="fa fa-sliders" aria-hidden="true"></i> Rules</a>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>

                                </tbody>
                            </table>

                            <?php
                            foreach ($data as $a) { ?>
                                <!-- Modal -->
                                <div class="modal fade" id="modal<?= $a->kode_hp ?>" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header detail-ket bg-green">
                                                <button type="button" class="close" data-dismiss="modal" style="opacity: .99;color: #fff;">&times;</button>
                                                <h4 class="modal-title text text-ket"> <i class="fa fa-sliders" aria-hidden="true"> </i> Rules Untuk <?= $a->nama_penyakit ?></h4>
                                            </div>

                                            <div class="modal-body bg-success" style="text-align: justify;text-justify: inter-word;">

                                                <h4 class="text-bold">IF gejala</h4>
                                                <?php $bg = $this->db->query("SELECT basis_pengetahuan. * , gejala.nama_gejala FROM `basis_pengetahuan` JOIN hp on basis_pengetahuan.kode_hp=hp.kode_hp JOIN gejala
                                                ON basis_pengetahuan.kode_gejala=gejala.kode_gejala WHERE basis_pengetahuan.kode_hp = '$a->kode_hp'")->result();
                                                foreach ($bg as $k) {
                                                    echo $k->nama_gejala . '<br>&nbsp;&nbsp;&nbsp;&nbsp;<b>AND</b><br>';
                                                }
                                                ?>
                                                <h4 class="text-bold">Then Penyakit</h4>
                                                <h4 class="text-bold">&nbsp;&nbsp;&nbsp;&nbsp;<?= $a->nama_penyakit ?></h4>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>





    </section>
</div>