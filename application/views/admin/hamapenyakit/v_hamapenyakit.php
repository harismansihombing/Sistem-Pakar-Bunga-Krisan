<!-- Pake dropdown Kategori -->
<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-bug"> </i> Data Hama Penyakit
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <title>Hama Penyakit - Sistem Pakar Krisan</title>
                <div class="box box-primary"> <br>
                    <div class="box-header with-border">
                        <div class="card-header py-3">
                            <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true">
                                <?php if ($title == "Hama") : ?>
                                    Hama
                                <?php elseif ($title == "Penyakit") : ?>
                                    Penyakit
                                <?php else : ?>
                                    Kategori
                                <?php endif; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" role="menu">
                                <a class="dropdown-item btn-sm btn-warning" href="<?= base_url('admin/HamaPenyakit'); ?>">Semua</a>
                                <a class="dropdown-item btn-sm btn-warning" href="<?= base_url('admin/HamaPenyakit/tampil_hama'); ?>">Hama</a>
                                <a class="dropdown-item btn-sm btn-warning" href="<?= base_url('admin/HamaPenyakit/tampil_penyakit'); ?>">Penyakit</a>
                            </div>

                            <a href="<?= base_url('admin/HamaPenyakit/tambah_penyakit') ?>"><button class="btn btn-info"><i class="fa fa-plus"> </i> Tambah Data</button></a>
                        </div>
                    </div>

                    <div class="box-body">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="table-responsive">
                            <br />
                            <table id="example1" class="table table-bordered table-striped riwayat" width="100%">
                                <thead>
                                    <tr><b>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Kategori</th>
                                            <th class="text-center">Detail Penyakit</th>
                                            <th class="text-center">Pengendalian</th>
                                            <th class="text-center">Action</th>
                                        </b>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($data as $a) { ?>
                                        <tr>
                                            <td class="text-center"><?= $no ?></td>
                                            <td><?= $a->nama_penyakit ?></td>
                                            <td class="text-center"><?= $a->kategori ?></td>
                                            <td><?= word_limiter($a->det_penyakit, 30); ?></td>
                                            <td><?= word_limiter($a->srn_penyakit, 30); ?></td>
                                            <td class="text-center" style="width:12%;">
                                                <a href="<?= base_url('admin/HamaPenyakit/edit_penyakit/' . $a->kode_hp); ?>"><button class="btn-sm btn-success"><i class="fa fa-edit"></i></button></a>
                                                <a href="<?= base_url('admin/HamaPenyakit/hapus_penyakit/' . $a->kode_hp); ?>" onclick="return confirm('Anda Hapus Data Yang Dipilih ?');">
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