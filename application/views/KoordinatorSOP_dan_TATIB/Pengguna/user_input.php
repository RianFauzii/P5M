<?php
  
  $url = file_get_contents('https://api.polytechnic.astra.ac.id:2906/api_dev/efcc359990d14328fda74beb65088ef9660ca17e/SIA/getListMahasiswa?id_konsentrasi=3');
  $dataMahasiswa = json_decode($url, true);

  $curl = curl_init();
  
  $url = "https://api.polytechnic.astra.ac.id:2906/api_dev/efcc359990d14328fda74beb65088ef9660ca17e/SIA/getListKaryawan";

  $ch = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.polytechnic.astra.ac.id:2906/api_dev/AccessToken/Get",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query(array(
        "username" => '0320210041',
        "password" => '',
        "grant_type" => "password"
    ))
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  $data = json_decode($response, true);
  
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Authorization: Bearer " . $data['access_token']
  ));

  $response = curl_exec($ch);
  $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

  if ($http_code != 200) {
      echo "Failed to retrieve data. Response code: " . $http_code;
      exit;
  }

  $data = json_decode($response, true);

  curl_close($ch);
?>


<main id="main" class="main">

<div class="pagetitle">
  <br>
  <h1>Tambah Pengguna</h1>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
      <li class="breadcrumb-item active">Data Pengguna</li>
    </ol>
</div><!-- End Page Title -->

<section class="section dashboard">

        <!-- Reports -->
        <div class="col-12">
          <div class="card">

       <!-- Widgets Start -->
       <div class="container-fluid pt-4 px-4">
                          <div class="row g-8">        
                          <br/>
                          <form role="form" action="<?php echo site_url('masterpengguna/tambah/')?>" method="post">
                          <div class="form-group">
                            <label for="nama_pengguna">Nama Pengguna</label>
                            <select name="nama_pengguna" class="form-select" style="width:100%" required>
                              <option value="null">-- Pilih Nama Pengguna --</option>
                          <?php
                            $kelas = array();                    
                            
                            $i=0;
                            foreach ($data as $d){
                              $i++;
                              if($data[$i-1]['struktur'] == 'Unit Pelayanan Teknis Informatika'){
                              array_push($kelas, $data[$i-1]['nama']);
                              }

                            }
                            sort($kelas);
                            $arrayLength = count($kelas);
                            ?>
                              <?php
                               
                                for ($i = 0; $i < $arrayLength; $i++) {
                                  if($kelas[$i] != $kelas[$i-1]  ){
                                    echo "<option value='" . $kelas[$i] . "'>" . $kelas[$i] . "</option>";
                                  }
                                }
                              ?>
                        </select>
                      </div>
                          <br>
                                      </div>

                                    <div class="form-group">
                                          <label for="role">Role</label>
                                            <select name="role" class="form-select" style="width:100%" required>
                                          <option value="null">-- Pilih Role --</option>
                                <option value="KOORDINATOR SOP dan TATIB">KOORDINATOR SOP dan TATIB</option>
                                <option value="KOORDINATOR TINGKAT">KOORDINATOR TINGKAT</option>
                                    </div>
                                  </select>
                                    <br>


                                    <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select name="kelas" class="form-select" style="width:100%" required>
                              <option value="null">-- Pilih Kelas --</option>
                          <?php
                            $kelas = array();                    
                            $semuaKelas = 'Semua kelas';
                            $i=0;
                            foreach ($dataMahasiswa as $dm){
                              $i++;
                              array_push($kelas, $dataMahasiswa[$i-1]['kelas']);
                            }
                            sort($kelas);
                            $arrayLength = count($kelas);
                            ?>
                              <?php
                               echo "<option value='" . $semuaKelas . "'>" . $semuaKelas . "</option>";
                                for ($i = 0; $i < $arrayLength; $i++) {
                                  if($kelas[$i] != $kelas[$i-1]){
                                    echo "<option value='" . $kelas[$i] . "'>" . $kelas[$i] . "</option>";
                                  }
                                }
                              ?>
                        </select>
                      </div>
                                    <br>

                                      <button type="reset" class="btn btn-secondary m-2" data-dismis="modal" onclick="history.go(-1);">Kembali</button>
                                      &nbsp; &nbsp;
                                      <button type="submit" class="btn btn-primary m-2">Tambah</button>
                                      </div>

                          </form>
                      </div>
                  </div>
                  <!-- Widgets End -->
              </div>
            <!-- Widgets End -->
            
          </div>
        </div><!-- End Reports -->

</section>

</main><!-- End #main -->