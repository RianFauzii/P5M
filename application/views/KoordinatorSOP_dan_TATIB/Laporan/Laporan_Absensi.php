<?php
    $url = file_get_contents('https://api.polytechnic.astra.ac.id:2906/api_dev/efcc359990d14328fda74beb65088ef9660ca17e/SIA/getListMahasiswa?id_konsentrasi=3');
    $dataMahasiswa = json_decode($url, true);
?>

<main id="main" class="main">

<div class="pagetitle">
    <h1>Laporan Absensi</h1>
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Absensi</li>
            <li class="breadcrumb-item active" aria-current="page">Laporan Absensi</li>

        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
<div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <br> 
                  <div class="row"> 
                    <div class="col-1">
                      <form method="get">
                      <select class="form-select" style="display:inline; padding: 0.375rem 1.25rem .375rem .75rem;" name="chooseFilter" id="chooseFilter">
                      <option value="kelas" <?php if (isset($_GET['chooseFilter']) && $_GET['chooseFilter'] == 'kelas') echo 'selected'; ?>>Kelas</option>
                      <option value="nim" <?php if (isset($_GET['chooseFilter']) && $_GET['chooseFilter'] == 'nim') echo 'selected'; ?>>Nim</option>    
                        </select>
                      </form>
                    </div>

                    <script>
                      document.querySelector('#chooseFilter').addEventListener('change', function() {
                        document.querySelector('form').submit();
                      });
                    </script>

                    <div class="col-9">
                    <form action="" method="post" name="pilih" id="pilih">  
                    <?php if (isset($_GET['chooseFilter'])) { ?>
                       
                      <?php if($_GET['chooseFilter'] == 'kelas'){ ?>
                        
                        <select class="form-select" style="width:20%; display:inline;" name="dropdown">
                          <?php
                            $kelas = array();                    
                            $i=0;
                            foreach ($dataMahasiswa as $dm){
                              $i++;
                              array_push($kelas, $dataMahasiswa[$i-1]['kelas']);
                            }
                            sort($kelas);
                            $arrayLength = count($kelas);
                            ?>
                              <?php
                                for ($i = 0; $i < $arrayLength; $i++) {
                                  if($kelas[$i] != $kelas[$i-1]){
                                    echo "<option value='" . $kelas[$i] . "'>" . $kelas[$i] . "</option>";
                                  }
                                }
                              ?>
                        </select>
                      
                      <?php } elseif($_GET['chooseFilter'] == 'nim'){ ?>
                        <input class="form-control" style="width:20%; display:inline;" type="text" id="nim" name="nim">
                      
                      <?php } } else { ?>
                      
                      <select class="form-select" style="width:20%; display:inline;" name="dropdown">
                        <?php
                          $kelas = array();                    
                          $i=0;
                          foreach ($dataMahasiswa as $dm){
                            $i++;
                            array_push($kelas, $dataMahasiswa[$i-1]['kelas']);
                          }
                          sort($kelas);
                          $arrayLength = count($kelas);
                          ?>
                            <?php
                              for ($i = 0; $i < $arrayLength; $i++) {
                                if($kelas[$i] != $kelas[$i-1]){
                                  echo "<option value='" . $kelas[$i] . "'>" . $kelas[$i] . "</option>";
                                }
                              }
                            ?>
                      </select>

                      <?php } ?>
                          &nbsp&nbsp&nbsp&nbsp
                          <label for="birthday">Mulai Tanggal &nbsp:</label>
                          &nbsp
                          <input class="form-control" style="width:20%; display:inline;"class="text-left" type="date" id="tanggal1" name="tanggal1">
                          &nbsp&nbsp&nbsp&nbsp
                          <label for="birthday">Sampai Tanggal &nbsp:</label>
                          &nbsp
                          <input class="form-control" style="width:20%; display:inline;" float: right; type="date" id="tanggal2" name="tanggal2"> 
                          &nbsp
                          <input  type="submit" id="cetak" name="cetak"class="btn btn-primary" value="Pilih"/>
                      </form>
                    </div>


                  <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
                    <div class="col-2">
                        <form action="cetakAbsensi" method="post" name="cetak" id="cetak">  
                          <input type="submit" id="cetak" name="cetak"class="btn btn-primary" value="Cetak"/>  
                          <input type="hidden" id="tanggal1" name="tanggal1" value="<?php echo $_POST['tanggal1'];?>"/>
                          <input type="hidden" id="tanggal2" name="tanggal2" value="<?php echo $_POST['tanggal2'];?>"/>
                          <?php $DDL=(isset($_POST['dropdown']))? $_POST['dropdown'] : ""; ?>
                          <input type="hidden" id="dropdown" name="dropdown" value="<?php echo $DDL;?>"/>   
                        </form><br>
                    </div>
                  </div>
                </div>

                  
                  <?php
                          $tanggal1 = $_POST['tanggal1'];
                          $tanggal2 = date('Y-m-d', strtotime('+1 days', strtotime($_POST['tanggal2'])));
                          $tanggalFT2 = $tanggal2;

                          $date1 = new DateTime($tanggal1);
                          $date2 = new DateTime($tanggal2);
                          $diff = $date2->diff($date1);
                          $jumlahHari = $diff->days;
                    ?>
<div class="container">
                  <table class="table table-bordered datatable">
                      <thead>
                            <tr>
                                <th scope="col" style="text-align: center"  colspan="<?php echo $jumlahHari*2+3?>" ></th>
                            </tr>

                            <tr>
                                <th scope="col" style="text-align: center"  rowspan="3" >No</th>
                                <th scope="col" style="text-align: center"  rowspan="3" >Nim</th>
                                <th scope="col" style="text-align: center"  rowspan="3" >Nama</th>
                            </tr>

                            <tr>
                              <?php  while (strtotime($tanggal1) < strtotime($tanggal2)) { ?>
                                <th scope="col" style="text-align: center" colspan="2"><?php echo $tanggal1?></th>
                              <?php $tanggal1 = date ("Y-m-d", strtotime("+1 days", strtotime($tanggal1)));  } ?>
                            </tr>

                            <tr>
                              <?php for($i=0; $i<$jumlahHari; $i++){?>
                                <th scope="col" style="text-align: center">IN</th>
                                <th scope="col" style="text-align: center">OUT</th>
                              <?php } ?>                            
                            </tr>
                        </thead>
                        <tbody>

                        <?php $i = 0; $no = 0; $bulan = 1; ?>
                        
                        <?php foreach ($dataMahasiswa as $dm){
                          $i++;
                          if(isset($_POST['dropdown'])){
                            if($dataMahasiswa[$i-1]['kelas'] == $_POST['dropdown']){ 
                            $no++;
                        ?>

                        <tr>
                          <td style="text-align: center"><?php echo $no?></td>
                          <td style="text-align: center"><?php echo $dataMahasiswa[$i-1]['nim']?></td>
                          <td><?php echo $dataMahasiswa[$i-1]['nama']?></td>
                          
                          <?php 
                          
                          $tanggalFT1 = $_POST['tanggal1'];

                          while (strtotime($tanggalFT1) < strtotime($tanggal2)) {
                            $waktuBerangkat = 0;
                            $waktuPulang = 0;
                              foreach ($absen as $m) { 
                                $waktu = $m->waktu;
                                $compareAbsen = explode(' ', $waktu);
                                
                                if ($dataMahasiswa[$i-1]['nim'] == $m->nim && !strcmp($compareAbsen[0], $tanggalFT1)){
                                    if($waktuBerangkat == 0 || $waktuPulang == 0 ){
                                      $waktuBerangkat = explode(' ',$waktu);
                                      $waktuPulang = explode(' ',$waktu);
                                    }if($waktu < $waktuBerangkat){
                                        $waktuBerangkat = explode(' ',$waktu);
                                    }elseif($waktu > $waktuPulang){
                                        $waktuPulang = explode(' ',$waktu);
                                    }
                                }
                                // else if ($dataMahasiswa[$i-1]['nim'] == $m->nim && strcmp($compareAbsen[0], $tanggalFT1)){
                                //   $waktuBerangkat = 0;
                                //   $waktuPulang = 0;
                                // }
                              }
                            ?>
                            <?php if($waktuBerangkat==0) { ?>
                            <td style="background-color: red;"></td>
                            <?php } else { ?>
                              <td style="text-align: center"><?php echo $waktuBerangkat[1]?></td>
                            <?php } ?>
                            <?php if($waktuPulang==0) { ?>
                            <td style="background-color: red;"></td>
                            <?php } else { if($waktuBerangkat[1] == $waktuPulang[1]){?>
                              <td style="background-color: red;"></td>
                                    <?php } else { ?>
                                      <td style="text-align: center"><?php echo $waktuPulang[1]?></td>
                            <?php } } ?>

                          <?php $tanggalFT1 = date ("Y-m-d", strtotime("+1 days", strtotime($tanggalFT1))); } ?>  
                          
                        </tr>                        
                        <?php } //tutup if dropdown
                         } // tutup isset dropdown
                         
                         else if(isset($_POST['nim'])){ 
                            
                            
                            if($dataMahasiswa[$i-1]['nim'] == $_POST['nim']){ 
                            $no++;
                        ?>
                        <tr>
                          <td style="text-align: center"><?php echo $no?></td>
                          <td style="text-align: center"><?php echo $dataMahasiswa[$i-1]['nim']?></td>
                          <td><?php echo $dataMahasiswa[$i-1]['nama']?></td>
                          
                          <?php 
                          
                          $tanggalFT1 = $_POST['tanggal1'];

                          while (strtotime($tanggalFT1) < strtotime($tanggal2)) {
                            $waktuBerangkat = 0;
                            $waktuPulang = 0;
                              foreach ($absen as $m) { 
                                $waktu = $m->waktu;
                                $compareAbsen = explode(' ', $waktu);
                                
                                if ($dataMahasiswa[$i-1]['nim'] == $m->nim && !strcmp($compareAbsen[0], $tanggalFT1)){
                                    if($waktuBerangkat == 0 || $waktuPulang == 0 ){
                                      $waktuBerangkat = explode(' ',$waktu);
                                      $waktuPulang = explode(' ',$waktu);
                                    }if($waktu < $waktuBerangkat){
                                        $waktuBerangkat = explode(' ',$waktu);
                                    }elseif($waktu > $waktuPulang){
                                        $waktuPulang = explode(' ',$waktu);
                                    }
                                }
                                // else if ($dataMahasiswa[$i-1]['nim'] == $m->nim && strcmp($compareAbsen[0], $tanggalFT1)){
                                //   $waktuBerangkat = 0;
                                //   $waktuPulang = 0;
                                // }
                              }
                            ?>
                            <?php if($waktuBerangkat==0) { ?>
                            <td style="background-color: red;"></td>
                            <?php } else { ?>
                              <td style="text-align: center"><?php echo $waktuBerangkat[1]?></td>
                            <?php } ?>
                            <?php if($waktuPulang==0) { ?>
                            <td style="background-color: red;"></td>
                            <?php } else { if($waktuBerangkat[1] == $waktuPulang[1]){?>
                              <td style="background-color: red;"></td>
                                    <?php } else { ?>
                                      <td style="text-align: center"><?php echo $waktuPulang[1]?></td>
                            <?php } } ?>

                          <?php $tanggalFT1 = date ("Y-m-d", strtotime("+1 days", strtotime($tanggalFT1))); } ?>  
                          
                        </tr>    
                        <?php } //tutup if nim
                            } //tutup isset nim
                          }//tutup data mahasiswa 


                        } //tutup udh post atau belum
                      
                      ?>

                      </tbody>
                  </table>
                  </div>
                <br>
                <br>
                </div>
              </div>
            </div><!-- End Recent Sales -->
</section>

</main><!-- End #main -->

