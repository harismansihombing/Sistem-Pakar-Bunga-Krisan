      <div class="content-wrapper" style="min-height: 310px;">

        <!-- Main content -->
        <section class="content">
          <div class="box">
            <div class="box-body">
              <title>Dashboard - Sistem Pakar Krisan</title>

              <div class='row'>
                <div class='col-lg-3 col-xs-6'>
                  <!-- small box -->
                  <div class='small-box bg-red'>
                    <div class='inner'>
                      <h3> <?php echo $gejala->total ?></h3>
                      <p><a href="<?= base_url('admin/Gejala') ?>" class="card-link" style="color: #fff;">Total Gejala</a></p>
                    </div>
                    <div class='icon'>
                      <i class='fa fa-exclamation-triangle'></i>

                    </div>
                  </div>
                </div>


                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3> <?php echo $hama->total ?></h3>
                      <p><a href="<?= base_url('admin/HamaPenyakit/tampil_hama') ?>" class="card-link" style="color: #fff;">Total Hama</a></p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bug"></i>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3><?php echo $penyakit->total ?></h3>
                      <p><a href="<?= base_url('admin/HamaPenyakit/tampil_penyakit') ?>" class="card-link" style="color: #fff;">Total Penyakit</a></p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-thermometer"></i>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-blue">
                    <div class="inner">
                      <h3><?php echo $pengetahuan->total ?></h3>
                      <p><a href="<?= base_url('admin/Pengetahuan') ?>" class="card-link" style="color: #fff;">Basis Pengetahuan</a></p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-erlenmeyer-flask"></i>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
              </div>
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="<?= base_url('aset/banner/banner1.jpg') ?>" alt="First slide">
                    <div class="carousel-caption">
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?= base_url('aset/banner/banner2.jpg') ?>" alt="Second slide">
                    <div class="carousel-caption">
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?= base_url('aset/banner/banner3.jpg') ?>" alt="Second slide">
                    <div class="carousel-caption">
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="<?= base_url('#carousel-example-generic') ?>" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="<?= base_url('#carousel-example-generic') ?>" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeIn;">
                  <div class="single-service">
                    <img src="<?= base_url('aset/banner/riwayat.jpg') ?>" width="70px">
                    <h2>Riwayat</h2>
                    <p>Aplikasi sistem pakar ini dapat menampung setiap hasil Giagnosis yang dilakukan, guna menjadi data terkait Hama dan Penyakit yang menyerang.</p>
                  </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeIn;">
                  <div class="single-service">

                    <img src="<?= base_url('aset/banner/admin2.png') ?>" width="70px">

                    <h2>Pakar</h2>
                    <p>Sistem Pakar ini menggunakan Metode Forward Cahining dan Certainty factor dalam perhitungan diagnosanya, dan bobot yang digunakan didapat dari Pakar pada bidang nya, sehingga akurasi terhadap diagnosis dapat lebih akurat dan terpercaya.</p>
                  </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 900ms; animation-name: fadeIn;">
                  <div class="single-service">
                    <img src="<?= base_url('aset/banner/icon1.png') ?>" alt="">
                    <h2>Sahabat Petani</h2>
                    <p>Terdapat saran penanganan pada setiap hasil diagnosis, sehingga dapat menjadi acuan petani dalam merespon Hama dan Penyakit yang menyerang.</p>
                  </div>
                </div>
              </div>
              <br><br>
              <div class='row'>
                <div class='col-md-8'>
                  <!-- <table class='table table-bordered table-striped riwayat' cellpadding='0' cellspacing='0'>
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Penyakit</th>
                        <th nowrap>Nilai CF</th>
                        <th width='21%' class='text-center'>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      foreach ($riwayat as $isi) { ?>
                        <tr class='" . $warna . "'>
                          <td><?= $no; ?></td>
                          <td><?= $isi->tanggal; ?></td>
                          <td><?= $isi->penyakit; ?></td>
                          <td><span class='label label-default'><?= $isi->hasil_nilai; ?></span></td>
                          <td align=center>
                            <a type='button' class='btn btn-default btn-xs' target='_blank' href=riwayat-detail/$r[id_hasil]><i class='fa fa-eye' aria-hidden='true'></i> Detail </a> &nbsp;
                          </td>
                        </tr>
                      <?php $no++;
                      } ?>
                    </tbody>
                  </table> -->
                </div>
                <div>
                </div>
              </div>
            </div>
        </section>
      </div>