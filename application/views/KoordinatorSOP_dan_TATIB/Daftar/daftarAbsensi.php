<main id="main" class="main">

<div class="pagetitle">
    <h1>Import Absensi</h1>
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Absensi</li>
            <li class="breadcrumb-item active" aria-current="page">Import Absensi</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <br> 

                  <div class="row">
                    <div class="col-7">
                      <form action="" method="post" name="pilih" id="pilih">  
                      <label for="tanggal1">Mulai Tanggal &nbsp:</label>
                      &nbsp
                      <input class="form-control" style="width:20%; display:inline;" type="date" id="tanggal1" name="tanggal1">
                      <?= form_error('tanggal1', '<small class="text-danger pl-3">', '</small>')?>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      <label for="tanggal2">Sampai Tanggal &nbsp:</label>
                      &nbsp
                      <input class="form-control" style="width:20%; display:inline;" float: right; type="date" id="tanggal2" name="tanggal2">
                      <?= form_error('tanggal2', '<small class="text-danger pl-3">', '</small>')?> 
                      &nbsp&nbsp&nbsp
                      <input  type="submit" id="cetak" name="cetak"class="btn btn-primary" value="Pilih"/>
                    </form>
                    </div>

                    <div class="col-4">
                      <form role="form" action="<?php echo site_url('absensi/import')?>" method="post">  
                      <?php foreach ($absen as $m) { 
                          $lastImport = $m->waktu;
                          break;
                        }
                        echo 'Terakhir Import : '. $lastImport; 
                        ?>  
                        &nbsp&nbsp
                      <button type="submit" class="btn btn-primary">Import</button>
                    </form>
                    </div>
                  


                  <?php
                    // process GET request
                  if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
                  <?php
                          $tanggal1 = $_POST['tanggal1'];
                          $tanggal2 = date('Y-m-d', strtotime('+1 days', strtotime($_POST['tanggal2'])));
                          $tanggalFT2 = $tanggal2;

                          $date1 = new DateTime($tanggal1);
                          $date2 = new DateTime($tanggal2);
                          $diff = $date2->diff($date1);
                          $jumlahHari = $diff->days;
                    ?>

                    <div class="col-1">
                      <form action="<?php echo site_url('absensi/cetakDaftarAbsensi')?>" method="post" name="cetak" id="cetak">  
                        <input type="submit" id="cetak" name="cetak" class="btn btn-primary" value="Cetak"/>
                        <?php $tanggal1=(isset($_POST['tanggal1']))? $_POST['tanggal1'] : ""; ?>
                        <?php $tanggal2=(isset($_POST['tanggal2']))? $_POST['tanggal2'] : ""; ?>   
                        <input type="hidden" id="tanggal1" name="tanggal1" value="<?php echo $tanggal1;?>"/>
                        <input type="hidden" id="tanggal2" name="tanggal2" value="<?php echo $tanggal2;?>"/>
                      </form><br>
                    </div>
                  </div>
                  <table class="table table-striped datatable">
                                        <thead>
                                            <tr >
                                                <th class="text-center" scope="col">No.</th>
                                                <th class="text-center" scope="col">Nim</th>
                                                <th class="text-center" scope="col">Waktu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $tanggal2 = date('Y-m-d', strtotime('+1 days', strtotime($_POST['tanggal2']))); $i = 0; ?>

                                            <?php 
                                           
                                            foreach ($absen as $m) { 
                                              
                                              if(strtotime($m->waktu) > strtotime($tanggal1) && strtotime($m->waktu) < strtotime($tanggal2)){

                                              ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <?php $i++; ?>
                                                        <?php echo $i ?>
                                                    </td>
                                                    <td class="text-center"><?php echo $m->nim?></td>
                                                    <td class="text-center"><?php echo $m->waktu?></td>
                                                </tr>
                                            <?php 
                                          }} }?>
                                        </tbody>
                    </table>


                                    <br>
                                  <br>

                </div>

              </div>
</section>



<script>
  // var counter = document.getElementById('counter').value
  // console.log(nim)
  // console.log(counter)
  // var value = [];
  // for(var i=1;i<counter;i++){
  //   var nim = document.getElementById('nim'+i)
  //   var data = nim.value
  //   value.push(data)
  // }
  // console.log(value)


//   submit()

  
//   function submit(data){
//   $.ajax({
//   type: "POST",
//   url: 'http://localhost:8080/present/PRG5NiceAdmin/absensi/submit',
//   data: {nim : value},
//   complete : function(){
//         console.log("[JQUERY AJAX COMPLETE]");
//     },
//     success : function(data){
//         console.log(data);
//     }, 
//     error : function () {
//         console.log("fail");
//     }
// });
//   }
</script>

</main><!-- End #main -->