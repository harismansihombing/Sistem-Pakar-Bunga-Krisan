<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <title>Edit Akun - Sistem Pakar Krisan</title>
        <h1>
            <i class="fa fa-user"> </i> Edit Akun
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
                        <?= $this->session->flashdata('message'); ?>
                        <div class="table-responsive">
                            <form action="<?php echo base_url('admin/Admin/update_akun/' . $edit->id_admin) ?> " method="POST" enctype="multipart/form-data">
                                <table class='table table-bordered'>

                                    <tr>
                                        <td width=190 class="text-bold">Nama Lengkap</td>
                                        <td><input name="nama_lengkap" type="text" class="form-control" size="70" placeholder="Masukkan Nama..." value="<?= $edit->nama_lengkap ?>" required oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong!')">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=190 class="text-bold">Username</td>
                                        <td>Username akan digunakan saat LogIn <br>
                                            <input name="username" type="text" class="form-control" size="70" placeholder="Masukkan username..." value="<?= $edit->username ?>" required oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong!')">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=190 class="text-bold">Email</td>
                                        <td><input name="email" type="email" class="form-control" size="70" placeholder="Masukkan Email..." value="<?= $edit->email ?>" required oninvalid="this.setCustomValidity('Email Tidak Boleh Kosong!')">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold">Password</td>
                                        <td><a data-toggle="modal" type="submit" data-target="#edit-data" class="btn-sm btn-primary">Ubah Password</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><input class='btn-sm btn-success' type=submit name=submit value='Update'>
                                            <input class='btn-sm btn-warning' type=button name=batal value='Refresh' onclick=" window.location.href='?module=penyakit'">
                                        </td>
                                    </tr>
                                </table>
                            </form>

                            <!-- <td>
                                <a href="<?= base_url('admin/Admin/hapus_akun/' . $edit->id_admin); ?>" onclick="return confirm('Yakin ingin menghapus akun anda?');">
                                    <button class="btn-sm btn-danger">Hapus Akun</button></a>
                            </td> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
                    <h4 class="modal-title text-center text-bold text-warning">UBAH PASWORD</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url('admin/Admin/ubah_password/' . $edit->id_admin) ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
                        <input type="text" hidden name="id" id="id" value="<?= $edit->id_admin ?>">
                        <div class="form-group">
                            <div class="text-center">
                                <label class="">Password Baru</label>
                            </div>
                            <div class="text-center">
                                <input type="password" class="form-control" name="pabar" placeholder="Masukkan password baru" size="40">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <label class="">Ulang Password</label>
                            </div>
                            <div class="text-center">
                                <input type="password" class="form-control" name="ulpa" placeholder="Masukkan ulang password baru" size="40">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn-sm btn-info" type="submit"> Simpan&nbsp;</button>
                        <button type="button" class="btn-sm btn-warning" data-dismiss="modal"> Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>







</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    function gambar1(val) {
        $("#ayam").attr('src', URL.createObjectURL(event.target.files[0]));
    }
</script>

<script type="text/javascript">
    function gambar11(val) {
        $("#foto11").attr('src', URL.createObjectURL(event.target.files[0]));
    }
</script>