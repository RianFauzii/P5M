<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Pengguna</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
      <li class="breadcrumb-item active">Data Pengguna</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
<div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <br> 
               
                  <!-- <h5 class="card-title">Recent Sales <span>| Today</span></h5> -->
                  <a href="<?php echo site_url('masterpengguna/input') ?>" class="btn btn-primary float-right"><i style="font-style: inherit; "class="bi bi-plus">&nbsp;Tambah Pengguna</a></i>
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
                  <table class="table table-striped datatable datatable">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col">No.</th>
                                                <th class="text-center" scope="col">Nama Pengguna</th>
                                                <th class="text-center" scope="col">Role</th>
                                                <th class="text-center" scope="col">Kelas</th>
                                                <th class="text-center" >Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=0; ?>
                                            <?php foreach($pengguna as $u) {?>
                                                <tr>
                                                    <td class="text-center">
                                                         <?php $i++; ?>
                                                         <?php echo $i ?>
                                                    </td>
                                                    <td><?php echo $u->nama_pengguna ?></td>
                                     
                                                    <td><?php echo $u->role ?></td>
                                                    <td><?php echo $u->kelas ?></td>
                                                    <td class="text-center"> 
                                                        <a href="<?php echo site_url('masterpengguna/view_ubah/'.$u->id_pengguna); ?>"class="btn" style="color: #0275d8"><i class="fa fa-edit"></a></i>
                                                        <a href="<?php echo site_url('masterpengguna/hapus/'.$u->id_pengguna); ?>" id="tombol-hapus" class="btn" style="color: #0275d8"><i class="fa fa-trash"></a></i>
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
</main>
