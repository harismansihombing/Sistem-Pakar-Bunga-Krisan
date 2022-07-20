<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <title>Tambah Admin - Sistem Pakar Krisan</title>
        <h1>
            <i class="fa fa-user-plus"></i> Tambah Admin
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
                        <div class="table-responsive">
                            <form action="<?php echo base_url('admin/Admin/proses_tambah') ?> " method="POST" enctype="multipart/form-data">
                                <br>
                                <table class='table table-bordered'>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td><input name="nama_lengkap" type="text" class="form-control" size="70" placeholder="Masukkan Nama..." required oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                                            <?= form_error('nama_lengkap', '<small class="text-danger pl-2">', '</small>');  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td><input name="username" id="username" type="text" class="form-control" size="70" placeholder="Masukkan Username..." required oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                                            <?= form_error('username', '<small class="text-danger pl-2">', '</small>');  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td><input name="password" id="password" type="password" class="form-control" size="70" placeholder="Masukkan Password..." required oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
                                            <?= form_error('password', '<small class="text-danger pl-2">', '</small>');  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><input name="email" id="email" type="email" class="form-control" size="70" placeholder="Masukkan Email..." required oninvalid="this.setCustomValidity('Email Tidak Boleh Kosong & Harus Sesuai Format')" oninput="setCustomValidity('')">
                                            <?= form_error('Email', '<small class="text-danger pl-2">', '</small>');  ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input class='btn btn-success' type=submit name=submit value='Simpan'>
                                            <input class='btn btn-danger' type=button name=batal value='Batal' onclick="window.location.href='?module=admin'">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>