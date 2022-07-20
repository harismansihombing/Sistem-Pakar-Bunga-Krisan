<title>Diagnosis</title>
<h2 class="text-center text-bold" style="font-variant: small-caps;"> <i class="fa fa-bug" style="color: dark;"></i> Diagnosis Hama dan Penyakit Krisan <br>
    <h3 class="text-center text-bold" style="font-style: oblique;">(Chrysanthemum)</h3>
</h2>
<div class="container">

    <hr>
    <div class='alert alert-warning alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
        <h4><i class='icon fa fa-exclamation-triangle'></i>Perhatian !</h4>
        Silahkan isi Nama anda pada Form isian nama yang telah disediakan sebelum melakukan Diagnosis !
    </div>
    <br>

    <form action="<?php echo base_url('user/Diagnosis/simpan_nama') ?> " method="POST" enctype="multipart/form-data">
        <div style="padding-left: 30px;" class="text-bold text-center">
        <input type="hidden" name="no_pengguna" value="<?php echo $no_pengguna?>">
            <tr>
                <td>Nama Anda : </td>
                <td> <input name="nama" type="text" class="form-control" size="50" placeholder="Masukkan Nama Anda..." required oninvalid="this.setCustomValidity('Mohon isikan nama anda!')" oninput="setCustomValidity('')">
                    <?= form_error('nama', '<small class="text-danger pl-2">', '</small>');  ?></td>
                <td><input class='btn-sm btn-success text-center' type=submit name=submit value='Selanjutnya'></td>
            </tr>
        </div> 
    </form>
</div>
</section>
<br><br><br><br><br><br><br><br><br><br><br><b><br><b><br></b></b>
