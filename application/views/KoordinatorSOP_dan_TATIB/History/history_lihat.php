<main id="main" class="main">

<div class="pagetitle">
<br>
  <h1>History P5M</h1>
  <br> 
  <!-- <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav> -->
</div><!-- End Page Title -->

<section class="section">

<div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <br> 
                <!-- <form role="form" action="<?php echo site_url('P5M/tambah/')?>" method="post">   -->
                <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Hari dan Tanggal</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>

                                            <?php 
                                            
                                            $tgl_sebelumnya = "";
                                            
                                            foreach ($p5m as $h) {
                                              
                                              if($h->tgl_transaksi != $tgl_sebelumnya){
                                              ?>

                                                <tr>
                                                    <td class="text-center">
                                                        <?php $i++; ?>
                                                        <?php echo $i ?>
                                                    </td>
                                                    <td class="text-center"><?php echo $h->tgl_transaksi?></td>
                                                    <td class="text-center"> 
                                                        <form action="<?php echo site_url('p5m/lihat_p5m/');?>" method="post" name="cetak" id="cetak"> 
                                                          <button class="btn btn-info fa fa-list" type="submit">
                                                          </button>
                                                        <input type="hidden" id="tanggalTransaksi" name="tanggalTransaksi" value="<?php echo $h->tgl_transaksi;?>"/>
                                                        <input type="hidden" id="kelasHistory" name="kelasHistory" value="<?php echo $h->kelas;?>"/>
                                                      </form><br>

                                                    </td>
                                                </tr>


                                            <?php
                                            $tgl_sebelumnya = $h->tgl_transaksi; 
                                            }
                                          } ?>
                                        </tbody>
                                        
                                    </table>
                                    <br>
                                    <!-- <button type="submit" class="btn btn-primary m-2">Simpan</button>   -->
                  <br>
                  <!-- </form> -->
<br>

</div>

</div>
</div><!-- End Recent Sales -->


</section>

</main><!-- End #main -->