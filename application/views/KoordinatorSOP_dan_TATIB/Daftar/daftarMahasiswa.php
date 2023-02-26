<?php
    $url = file_get_contents('https://api.polytechnic.astra.ac.id:2906/api_dev/efcc359990d14328fda74beb65088ef9660ca17e/SIA/getListMahasiswa?id_konsentrasi=3');
    $dataMahasiswa = json_decode($url, true);
?>

<main id="main" class="main">

<div class="pagetitle">
    <h1>Daftar Mahasiswa</h1>
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Mahasiswa</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
<div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <!-- <h5 class="card-title">Recent Sales <span>| Today</span></h5> -->
                  <!-- <a href="<?php echo site_url('masterpelanggaran/input') ?>" class="btn btn-success float-right"><i class="fa fa-plus right"> </a></i>   -->
                  <br>
                  <table class="table table-striped datatable">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center">No.</th>
                                <th scope="col" style="text-align: center">Nim</th>
                                <th scope="col" style="text-align: center;">Nama</th>
                                <th scope="col" style="text-align: center;">Angkatan</th>
                                <th scope="col" style="text-align: center">Kelas</th>
                                <th scope="col" style="text-align: center">Prodi</th>
                                <th scope="col" style="text-align: center">Email</th>
                                <th scope="col" style="text-align: center">Dosen Wali</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0;$no = 0; ?>
                        <?php foreach ($dataMahasiswa as $dm){
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                          if($dataMahasiswa[$i]['kelas'] == $_POST['dropdown']){ $no++; ?>
                            
                          <tr>
                            <td style="text-align: center"><?php echo $no?></td> 
                            <td style="text-align: center"><?php echo $dm['nim']?></td>
                            <td ><?php echo $dataMahasiswa[$i]['nama']?></td>
                            <td class="text-center"style="text-align: center"><?php echo $dataMahasiswa[$i]['mhs_angkatan']?></td>
                            <td style="text-align: center"><?php echo $dataMahasiswa[$i]['kelas']?></td>
                            <td style="text-align: center"><?php echo $dataMahasiswa[$i]['prodi']?></td>
                            <td style="text-align: center"><?php echo $dataMahasiswa[$i]['email']?></td>
                            <td ><?php echo $dataMahasiswa[$i]['dosen_wali']?></td>  
                          </tr>
    
                        <?php } } else { $no++; ?>
                        
                      <tr>
                        <td style="text-align: center"><?php echo $no?></td>
                        <td style="text-align: center"><?php echo $dataMahasiswa[$i]['nim']?></td>
                        <td ><?php echo $dataMahasiswa[$i]['nama']?></td>
                        <td style="text-align: center"><?php echo $dataMahasiswa[$i]['mhs_angkatan']?></td>
                        <td style="text-align: center"><?php echo $dataMahasiswa[$i]['kelas']?></td>
                        <td style="text-align: center"><?php echo $dataMahasiswa[$i]['prodi']?></td>
                        <td style="text-align: center"><?php echo $dataMahasiswa[$i]['email']?></td>
                        <td ><?php echo $dataMahasiswa[$i]['dosen_wali']?></td>  
                      </tr>
                        <?php } $i++; } ?>
                        
                      </tbody>
                    </table>


                                    <br>
                                  <br>

                </div>
              </div>
            </div><!-- End Recent Sales -->
</section>

</main><!-- End #main -->