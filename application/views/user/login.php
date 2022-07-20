<title>LogIn</title>

    <head>
        <meta charset="UTF-8">
        <title>Login Admin</title>
        <link rel="stylesheet" href="<?php echo base_url('aset/login/css/style.css') ?>">
    </head>

    <body>
        <div class="krisan">
            <div class="hand"></div>
            <div class="hand hand-r"></div>
            <div class="arms">
                <div class="arm"></div>
                <div class="arm arm-r"></div>
            </div>
        </div>

        <div class="formku">
            <div class="info">
                <h4><i class="fa fa-user"></i> Login Admin</h4><br>
            </div>
            <?= $this->session->flashdata('message'); ?>
            <form class="admin" method="post" action="<?= base_url('Auth/login') ?>">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" required oninvalid="this.setCustomValidity('Isi Username!')" oninput="setCustomValidity('')">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password" required oninvalid="this.setCustomValidity('Isi Password!')" oninput="setCustomValidity('')">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn-sm btn-primary" id="submitku">
                    Login
                </button>
            </form>
        </div>

