<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-history"> </i> Riwayat Diagnosis
        </h1>
    </section>
    <section class="content">

        <div class='row'>
            <div class='col-md-12'>
                <table id="example1" class='table table-bordered table-striped riwayat' cellpadding='0' cellspacing='0'>
                    <thead>
                        <tr>
                            <th width="8%" class="text-center">No</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Pengguna</th>
                            <th class="text-center">Nama Hama Penyakit</th>
                            <th class="text-center">Nilai CF</th>
                            <th width="11%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $isi) { ?>
                            <tr>
                                <td class="text-center"><?= $no; ?></td>
                                <td class="text-center"><?= $isi->tanggal; ?></td>
                                <td class="text-center"><?= $isi->nama; ?></td>
                                <td><?= $isi->nama_penyakit ?></td>
                                <td class="text-center">
                                    <span class="label label-default label-xs">
                                        <?= $isi->cf_hasil; ?>
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a type='button' class='btn btn-default btn-xs' href="<?= base_url('admin/Riwayat/detail/' . $isi->id_hasil); ?>"><i class='fa fa-eye' aria-hidden='true'></i> Detail </a> &nbsp;
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>