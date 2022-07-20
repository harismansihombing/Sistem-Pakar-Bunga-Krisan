<title>Informasi Hama Penyakit</title>

<h2 class="text-center text-bold" style="font-variant: small-caps;"> <i class="fa fa-bug" style="color: dark;"></i> Informasi Hama dan Penyakit Krisan <br>
    <h3 class="text-center text-bold" style="font-style: oblique;">(Chrysanthemum)</h3>
</h2>

<hr>
<div class="container">
    <div>
        <?php foreach ($data as $a) { ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-aos="fade-right">
                <div class="card text-center">
                    <img class="ard-img-top img-bordered-sm" src="<?= base_url('./aset/gambar/' . $a->gambar); ?>" width="100%" height="200">
                    <div class="card-block">
                        <h4 class="card-title">
                            <h3 class="bg-keterangan"><?= $a->nama_post ?> | <a href="<?= base_url('user/Informasi/' . $a->kategori); ?>" class="link-dark" style="color: #A4F804;"><?= $a->kategori ?></a></h3>
                            <a class="btn bg-green margin" href="#" data-toggle="modal" data-target="#modal<?= $a->kode_post ?>"><i class="fa fa-search" aria-hidden="true"></i> Detail</a>
                            <a class="btn bg-yellow margin" href="#" data-toggle="modal" data-target="#modaltindakan<?= $a->kode_post ?>"><i class="fa fa-flask" aria-hidden="true"></i> Saran</a>
                        </h4>
                    </div>
                </div>
                <br><br>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal<?= $a->kode_post ?>" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header detail-ket bg-green">
                            <button type="button" class="close" data-dismiss="modal" style="opacity: .99;color: #fff;">&times;</button>
                            <h4 class="modal-title text text-ket"> <i class="fa fa-search" aria-hidden="true"></i>Detail Untuk <?= $a->nama_post ?></h4>
                        </div>
                        <div class="modal-body bg-success" style="text-align: justify;text-justify: inter-word;">
                            <p><?= $a->det_post ?></p>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-info" href="<?= $a->link ?>">Referensi</a>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modaltindakan<?= $a->kode_post ?>" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header saran-ket bg-yellow">
                            <button type="button" class="close" data-dismiss="modal" style="opacity: .99;color: #fff;">&times;</button>
                            <h4 class="modal-title text text-ket"><i class="fa fa-flask" aria-hidden="true"></i> Saran Untuk <?= $a->nama_post ?></h4>
                        </div>
                        <div class="modal-body bg-success" style="text-align: justify;text-justify: inter-word;">
                            <p><?= $a->srn_post ?></p>
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
</section>