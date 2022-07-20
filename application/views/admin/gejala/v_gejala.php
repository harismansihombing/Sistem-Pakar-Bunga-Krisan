<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-eyedropper"> </i> Data Gejala
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <title>Gejala - Sistem Pakar Krisan</title>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <br>
                        <a href="<?= base_url('admin/Gejala/tambah_gejala') ?>"><button class="btn btn-info"><i class="fa fa-plus"> </i> Tambah Data</button></a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="table-responsive">
                            <br />
                            <table id="example1" class="table table-bordered table-striped riwayat" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Gejala</th>
                                        <th class="text-center">Gambar Gejala</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($data as $isi) { ?>
                                        <tr>
                                            <td class="text-center" style="width:3%;"><?= $no; ?></td>
                                            <td><?= $isi->nama_gejala; ?></td>

                                            <?php if ($isi->gambar) : ?>
                                                <td class="text-center" style="width:20%;">
                                                    <a href="<?= base_url('./aset/gambar/' . $isi->gambar); ?>" width="45px" height="40">
                                                    <img src="<?= base_url('./aset/gambar/' . $isi->gambar); ?>" width="50px" height="45">
                                                </td>
                                            <?php else : ?>
                                                <td class="text-center">
                                                    <?= $this->session->flashdata('alert'); ?>
                                                    <div class="form-group">

                                                        <p>Tidak Upload</p>
                                                    </div>
                                                </td>
                                            <?php endif; ?>

                                            <td class="text-center" style="width:15%;">
                                                <a href="<?= base_url('admin/Gejala/edit_gejala/' . $isi->kode_gejala); ?>"><button class="btn-sm btn-success"><i class="fa fa-edit"></i></button></a>
                                                <a href="<?= base_url('admin/Gejala/hapus_gejala/' . $isi->kode_gejala); ?>" onclick="return confirm('Anda yakin hapus gejala yang dipilih ?');">
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