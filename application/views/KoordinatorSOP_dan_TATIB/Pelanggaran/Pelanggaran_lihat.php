<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Pelanggaran</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Pelanggaran</li>
      <li class="breadcrumb-item active">Data Pelanggaran</li>
    </ol> 
  </nav>
</div><!-- End Page Title -->

<section class="section">
<div class="col-12">
              <div class="card recent-sales overflow-auto">
            
                <div class="card-body">
                
                  <br> 

                  <!-- <h5 class="card-title">Recent Sales <span>| Today</span></h5> -->
                  <a href="<?php echo site_url('masterpelanggaran/input') ?>" class="btn btn-primary float-right"><i style="font-style: inherit; "class="bi bi-plus">&nbsp;Tambah Pelanggaran</a></i>
                    

                  <br><br>
                 <div id="flash" data-flash="<?= $this->session->flashdata('pesan_success'); ?>"></div>
                      <?php
                      if ($this->session->flashdata('pesan_error')) {
                          echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>';
                          echo $this->session->flashdata('pesan_error');
                          echo '</div>';
                      }
                      ?>

                  <table class="table table-striped datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Nama Pelanggaran</th>
                                                <th scope="col">Jam Minus</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0; ?>
                                            <?php foreach ($pelanggaran as $m) { ?>
                                                <tr>
                                                    <td>
                                                        <?php $i++; ?>
                                                        <?php echo $i ?>
                                                    </td>
                                                    <td><?php echo $m->nama_pelanggaran ?></td>
                                                    <td><?php echo $m->jam_minus ?> jam</td>
                                                    <td> 
                                                        <a href="<?php echo site_url('masterpelanggaran/view_ubah/'.$m->id_pelanggaran); ?>" class="btn" style="color: #0275d8"><i class="fa fa-edit"></a></i>
                                                        
                                                        <a href="<?php echo site_url('masterpelanggaran/hapus/'.$m->id_pelanggaran) ?>" id="tombol-hapus" id="tombol-hapus"class="btn" style="color: #0275d8"><i class="fa fa-trash" ></i></a>
                                                    </td>
                                                </tr>
                                            <?php 
                                          } ?>
                                        </tbody>
                    </table>


                                    <br>
                                  <br>

                </div>

              </div>
            </div><!-- End Recent Sales -->
</section>

</main><!-- End #main -->