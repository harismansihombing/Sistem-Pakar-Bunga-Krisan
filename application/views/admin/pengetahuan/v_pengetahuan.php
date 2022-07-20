<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-flask"> </i> Basis Pengetahuan
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <title>Basis Pengetahuan - Sistem Pakar Krisan</title>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <br>
                        <a href="<?= base_url('admin/Pengetahuan/tambah_pengetahuan') ?>"><button class="btn btn-info"><i class="fa fa-plus"> </i> Tambah Data</button></a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="table-responsive">
                            <br/>
                            <table id="example1" class="table table-bordered table-striped riwayat" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Penyakit</th>
                                        <th class="text-center">Gejala</th>
                                        <th class="text-center">MB</th>
                                        <th class="text-center">MD</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($data as $isi) { ?>
                                        <tr>
                                            <td class="text-center"><?= $no; ?></td>
                                            <td><?= $isi->nama_penyakit ?></td>
                                            <td><?= $isi->nama_gejala ?></td>
                                            <td class="text-center"><?= $isi->mb; ?></td>
                                            <td class="text-center"><?= $isi->md; ?></td>
                                            <td class="text-center" style="width:15%;">
                                                <a href="<?= base_url('admin/Pengetahuan/edit_data/' . $isi->kode_pengetahuan); ?>"><button class="btn-sm btn-success"><i class="fa fa-edit"></i></button></a>
                                                <a href="<?= base_url('admin/Pengetahuan/hapus_data/' . $isi->kode_pengetahuan); ?>" onclick="return confirm('Anda yakin hapus Basis Pengetahuan ?');">
                                                    <button class="btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>

                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>