<main id="main" class="main">

<div class="pagetitle">
    <h1>Ubah Data Pelanggaran</h1>
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard/index">Dashboard</a></li>
             <li class="breadcrumb-item"><a href="masterpelanggaran">Data Pelanggaran</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ubah Data Pelanggaran</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">

        <!-- Reports -->
        <div class="col-12">
          <div class="card">

       <!-- Widgets Start -->
       <div class="container-fluid pt-4 px-4">
                <div class="row g-8">  
                <div class="row">   
                  <?php foreach($pelanggaran as $m) { ?>
                <div class="row">        
                          <h4 class="card-title">Edit Pelanggaran</h4>
                          <br/>
                          <form role="form" action="<?php echo site_url('masterpelanggaran/update/')?>" method="post">
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="id_pelanggaran"  value="<?php echo $m->id_pelanggaran ?>" hidden>
                                    </div> 
                                    <br>
                                    <div class="form-group">
                                          <label for="nama_pelanggaran">Nama Pelanggaran</label>
                                          <input type="text" class="form-control" name="nama_pelanggaran" value="<?php echo $m->nama_pelanggaran ?>" required>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                          <label for="jam_minus">Jam Minus</label>
                                          <input type="text" class="form-control" name="jam_minus" value="<?php echo $m->jam_minus ?>" required>
                                    </div>  
                                    <br>
                                  
                                      <button type="submit" class="btn btn-secondary m-2" data-dismis="modal">Close</button>
                                      &nbsp; &nbsp;
                                      <button type="submit" class="btn btn-primary m-2">Save</button>
                                      </div>
                    </form>
                </div>
            <?php } ?> 
            </div>
            <!-- Widgets End -->
        </div>
        <!-- Content End -->


              </div>
            <!-- Widgets End -->
          </div>
        </div><!-- End Reports -->

</section>

</main><!-- End #main -->