<main id="main" class="main">

<div class="pagetitle">
  <br>
  <h1>Tambah Pelanggaran</h1>
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="pelanggaran">Data Pelanggaran</a></li>
      <li class="breadcrumb-item active">Tambah Pelanggaran</li>
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
                          <div id="flash" data-flash="<?=$this->session->flashdata('pesan_success'); ?>"></div> 
                            <?php
                                if ($this->session->flashdata('pesan_error')) {
                                    echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>';
                                    echo $this->session->flashdata('pesan_error');
                                    echo '</div>';
                                }
                            ?>
                          <form role="form" action="<?php echo site_url('masterpelanggaran/tambah/')?>" method="post">
                                    <div class="form-group">
                                          <label for="nama_pelanggaran">Nama Pelanggaran<span style="color: red">*</span></label>
                                          <input type="text" class="form-control" name="nama_pelanggaran">
                                          <?= form_error('nama_pelanggaran', '<small class="text-danger pl-3">', '</small>')?>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                          <label for="jam_minus">Jam Minus<span style="color: red">*</span></label>
                                          <input type="text" class="form-control" name="jam_minus">
                                          <?= form_error('jam_minus', '<small class="text-danger pl-3">', '</small>')?>
                                    </div>  
                                    <br>

                                    <button type="reset" onClick="myFunction()" class="btn btn-secondary" data-dismiss="modal" >Kembali</button>
                                        <script>
                                            function myFunction() {
                                                window.location.href="<?php echo site_url('masterpelanggaran') ?>";
                                            }
                                        </script>
                                      &nbsp; &nbsp;
                                      <button type="submit" class="btn btn-primary m-2">Simpan</button>
                                      
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