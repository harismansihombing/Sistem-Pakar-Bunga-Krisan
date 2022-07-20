<title>Diagnosis</title>
<h2 class="text-center text-bold" style="font-variant: small-caps;"> <i class="fa fa-bug" style="color: dark;"></i> Diagnosis Hama dan Penyakit Krisan <br>
    <h3 class="text-center text-bold" style="font-style: oblique;">(Chrysanthemum)</h3>
</h2>
<div class="container">

    <hr>
    <div class='alert alert-info alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
        <h4><i class='icon fa fa-exclamation-triangle'></i>Cek Ruless!</h4>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php
                $data_hasil = array();

                foreach ($data_rules as $k => $v) {
                    array_push($data_hasil, $v);
                }

                $gejala_terpilih = [
                    "1" => $data_hasil[0]['kode_gejala'],
                    "2" => $data_hasil[1]['kode_gejala'],
                    "3" => $data_hasil[2]['kode_gejala'],
                    "4" => $data_hasil[3]['kode_gejala'],
                    "5" => $data_hasil[4]['kode_gejala'],
                ];
               
               echo $gejala_terpilih[1];

               if ($gejala_terpilih[1] == "G003" or $gejala_terpilih[1] == "G018" or $gejala_terpilih[1] == "G022" or $gejala_terpilih[1] == "G024") {
                   echo "kode penyakit P001";
                   
                }elseif ($gejala_terpilih[1] == "G001" or $gejala_terpilih[1] == "G002" or $gejala_terpilih[1] == "G003" or $gejala_terpilih[1] == "G017") {
                    echo "kode penyakit P002";
                }elseif ($gejala_terpilih[1] == "G007" or $gejala_terpilih[1] == "G011" or $gejala_terpilih[1] == "G021" or $gejala_terpilih[1] == "G026" or $gejala_terpilih[1] == "G032") {
                     echo "kode penyakit P003";
                }elseif ($gejala_terpilih[1] == "G016" or $gejala_terpilih[1] == "G019" or $gejala_terpilih[1] == "G028" or $gejala_terpilih[1] == "G031" or $gejala_terpilih[1] == "G034") {
                     echo "kode penyakit P004";
                }elseif ($gejala_terpilih[1] == "G010" or $gejala_terpilih[1] == "G012" or $gejala_terpilih[1] == "G014") {
                     echo "kode penyakit P005";
                }elseif ($gejala_terpilih[1] == "G010" or $gejala_terpilih[1] == "G013" or $gejala_terpilih[1] == "G015") {
                     echo "kode penyakit P006";
                }elseif ($gejala_terpilih[1] == "G001" or $gejala_terpilih[1] == "G002" or $gejala_terpilih[1] == "G031" or $gejala_terpilih[1] == "G033" or $gejala_terpilih[1] == "G034") {
                     echo "kode penyakit P007";
                }elseif ($gejala_terpilih[1] == "G002" or $gejala_terpilih[1] == "G008" or $gejala_terpilih[1] == "G010") {
                     echo "kode penyakit P008";
                }elseif ($gejala_terpilih[1] == "G002" or $gejala_terpilih[1] == "G004" or $gejala_terpilih[1] == "G009") {
                     echo "kode penyakit P009";
                }elseif ($gejala_terpilih[1] == "G002" or $gejala_terpilih[1] == "G004" or $gejala_terpilih[1] == "G020") {
                     echo "kode penyakit P010";
                }elseif ($gejala_terpilih[1] == "G005" or $gejala_terpilih[1] == "G023" or $gejala_terpilih[1] == "G025" or $gejala_terpilih[1] == "G027" or $gejala_terpilih[1] == "G032") {
                     echo "kode penyakit P011";
                }elseif ($gejala_terpilih[1] == "G006" or $gejala_terpilih[1] == "G030" or $gejala_terpilih[1] == "G033" or $gejala_terpilih[1] == "G035") {
                     echo "kode penyakit P012";
                }elseif ($gejala_terpilih[1] == "G001" or $gejala_terpilih[1] == "G005" or $gejala_terpilih[1] == "G010" or $gejala_terpilih[1] == "G029") {
                     echo "kode penyakit P013";
                }elseif ($gejala_terpilih[1] == "G001" or $gejala_terpilih[1] == "G002" or $gejala_terpilih[1] == "G010" or $gejala_terpilih[1] == "G019") {
                     echo "kode penyakit P014";
                }
              
            ?>
        </div>
    </div>

</div>