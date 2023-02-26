  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Manajemen Informatika<strong>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
     <a href="https://www.polytechnic.astra.ac.id//">Politeknik Astra</a>
    </div>
  </footer><!-- End Footer -->




  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/apexcharts/apexcharts.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/chart.js/chart.umd.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/echarts/echarts.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/quill/quill.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/simple-datatables/simple-datatables.js');?>"></script>
<!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.2/b-2.3.4/b-html5-2.3.4/b-print-2.3.4/datatables.min.js"></script> -->
  <script src="<?php echo base_url('assets/vendor/tinymce/tinymce.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js');?>"></script>
  <script src="<?php echo base_url('assets/js/sweetalert2.min.js'); ?>"></script>
   <script src="<?= base_url('assets/js/sweetalert2.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/sweetalert2.min.js'); ?>"></script>
  <script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    
    $('#myTable').DataTable();
    $(document).ready(function () {
      serverSide: true,
      lengthMenu: [[25, 100, -1], [25, 100, "All"]],
      pageLength: 25,
      buttons: [
          {
              extend: 'excel',
              text: '<span class="fa fa-file-excel-o"></span> Excel Export',
              exportOptions: {
                  modifier: {
                      search: 'applied',
                      order: 'applied'
                  }
              }
          }
      ],

    });
  </script>

    <script>
        var flash = $('#flash').data('flash');
        if(flash) {
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: 'Data berhasil ' + flash
            })
        }
    </script>

   
    <script>
        $(document).on('click', '#tombol-hapus', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');

            Swal.fire({
                title: 'Apakah anda yakin ?',
                text: "Data akan dihapus !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus Data!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                  
                }
            })
        })
    </script> 

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js');?>"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  
</script>
</body>

</html>