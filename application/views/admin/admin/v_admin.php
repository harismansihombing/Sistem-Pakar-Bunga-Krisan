<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-user"></i> Admin
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <title>Admin - Sistem Pakar Krisan</title>
          <div class="box-header with-border">
            <br>
            <a href="<?= base_url('admin/Admin/tambah_admin') ?>"><button class="btn btn-info"><i class="fa fa-plus"> </i> Tambah Admin</button></a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
              <br />
              <table id="example1" class="table table-bordered table-striped table" width="100%">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Email</th>
                    <!-- <th class="text-center">Aksi</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($admin as $isi) { ?>
                    <tr>
                      <td class="text-center"><?= $no; ?></td>
                      <td class="text-center"><?= $isi->username; ?></td>
                      <td class="text-center"><?= $isi->nama_lengkap; ?></td>
                      <td class="text-center"><?= $isi->email; ?></td>
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