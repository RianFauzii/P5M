<?php
    $url = file_get_contents('https://api.polytechnic.astra.ac.id:2906/api_dev/efcc359990d14328fda74beb65088ef9660ca17e/SIA/getListMahasiswa?id_konsentrasi=3');
    $dataMahasiswa = json_decode($url, true);
?>

<main id="main" class="main">

<div class="pagetitle">
    <h1>Pertemuan 5 Menit</h1>
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard/index">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Absensi</li>
             <li class="breadcrumb-item active"aria-current="page">P5M</li>
           
        </ol>
    </nav>
</div>

<section class="section">

<div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <br>
                  <form action="" method="post" name="pilih" id="pilih">  
                        <label for="birthday">Kelas &nbsp:</label>
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
                            &nbsp&nbsp
                          <input type="submit" id="cetak" name="cetak"class="btn btn-primary" value="Pilih"/>
                  </form>
                <form role="form" action="<?php echo site_url('P5M/tambah/')?>" method="post">  
                <table class="table table-bordered border datatable">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">NIM</th>
                                                <th class="text-center">Nama Mahasiswa</th>
                                                
                                                <?php 
                                                $count=0;
                                                foreach ($pelanggaran as $m) {
                                                    $count++;    
                                                    ?>
                                                    
                                                    <th class="text-center"><?php echo $m->nama_pelanggaran ?></th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>


                                          <?php $i = 0; $no= 0;?><br>
                                              <?php foreach ($dataMahasiswa as $dm) { 
                                                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                    if($dm['kelas'] == $_POST['dropdown']){ $no++; ?>
                                                  
                                                  <tr>
                                                      <td class="text-center">
                                                          <?php $i++; ?>
                                                          <?php echo $i ?>
                                                      </td>
                                                      <td class="text-center"><?php echo $dm['nim']?></td>
                                                      <td ><?php echo $dm['nama']?></td>
                                                    
                                                    <?php foreach ($pelanggaran as $m) { ?>  
                                                    <td class="text-center">  <input type="checkbox" id="<?php echo 'CB_'.$dm['nim'].'_'.$m->id_pelanggaran ?>" 
                                                    name="<?php echo 'CB_'.$dm['nim'].'_'.$m->id_pelanggaran ?>" value="<?php echo $m->jam_minus?>"></td>
                                                    <?php  } ?>
                                                  </tr>

                                                  <?php } }  else { $no++; ?>
                                                    <tr>
                                                      <td class="text-center">
                                                          <?php $i++; ?>
                                                          <?php echo $i ?>
                                                      </td>
                                                      <td class="text-center"><?php echo $dm['nim']?></td>
                                                      <td ><?php echo $dm['nama']?></td>
                                                      <?php  
                                                    foreach ($pelanggaran as $m) { ?>  
                                                    <td class="text-center">  <input type="checkbox" id="<?php echo 'CB_'.$dm['nim'].'_'.$m->id_pelanggaran ?>" 
                                                    name="<?php echo 'CB_'.$dm['nim'].'_'.$m->id_pelanggaran ?>" value="<?php echo $m->jam_minus?>"></td>
                                                    <?php  } ?>
                                                  </tr>

                                              <?php }}  ?>

                                        </tbody>
                                        
                                    </table>

                                    <br>
                                    <button type="submit" class="btn btn-primary m-2">Simpan</button>  
                  <br>
                  </form>
<br>

</div>

</div>
</div><!-- End Recent Sales -->


</section>

</main><!-- End #main -->