
<!DOCTYPE html>
<html lang="en">
<?php
include "fly_db/koneksi.php";  
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $created_date = date('Y-m-d H:i:s');
  $sql = "INSERT INTO list_undangan (nama, nohp,pengirim,status,created_date) VALUES ('$_POST[nama]', '$_POST[nohp]','$_POST[pengirim]', '1', '$created_date')";
  if (mysqli_query($koneksi, $sql)) {
        // echo "Data berhasil ditambahkan.";
    $url = "http://".$_SERVER['HTTP_HOST'].str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
    echo "<meta http-equiv='refresh' content='0'>";
    // header("Location: ".$url."");
// header("Location: ".$_SERVER['PHP_SELF']."#rsvp");
// exit;

  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Undangan</title>
  <link href="img/logo64.ico" rel="shortcut icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="assets/smile.gif" alt="SMILE - JAGUT" height="150" width="150">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user-circle"></i>
              <span class="d-none d-md-inline">Neis</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <li class="user-header bg-gray">
                <i class="fas fa-user-circle fa-3x"></i>
                <p>
                 Neis 
                 <!-- <small>Neis</small> -->
               </p>
             </li>
             <li class="user-footer bg-gray">
              <a href="#" class="btn btn-danger btn-block float-right">Sign out</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="img/logonewlahkok.png" alt="LAHKOK Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">List Undangan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <font color="white">Neis</font>

        </div>
      </div>

      <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
          </div> -->

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                 <li class="nav-item">
                  <a href="<#" class="nav-link active">
                    <i class="fas fa-tachometer-alt nav-icon"></i>
                    <p>Dashboard</p>
                  </a>
                </li>


              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

          <style>
            div.static {
              position: -webkit-sticky;
              position: fixed;
              left: 0;
              bottom: 0;
              width: 100%;
              color: white;
              padding: 5px;
            }
          </style>
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">

                <!-- /.card -->

                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Tambah Data</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <form action="" method="POST">
                      <div class="row">
                        <div class="col-sm-3">
                          <label>Nama Undangan </label>
                          <input type="text" name="nama" class="form-control" placeholder="isi nama yang d undang dsni" required value="<? if ($_POST) {
                            echo $_POST['nama'];
                          } ?>">
                        </div>
                        <div class="col-sm-3">
                          <label>No WhatsApp </label>
                          <input type="number" name="nohp" class="form-control" required value="<? if ($_POST) {
                            echo $_POST['nohp'];
                          }else{echo '62';} ?>">
                        </div>
                        <div class="col-sm-3">
                          <label>No WhatsApp Pengirim </label>
                          <select class="form-control select2" name="pengirim" style="width: 100%;">
                            <option value="">Pilih No</option>
                            <option value="6281211091524" <? if ($_POST) { if ($_POST['pengirim'] == 6281211091524) { echo 'selected'; } } ?>>Raka</option>
                                            <option value="6281316229252" <? if ($_POST) {
                                              if ($_POST['pengirim'] == 6281316229252) {
                                                echo 'selected';
                                              }
                                            } ?>>Ibu</option>
                                            <option value="6285780441755" <? if ($_POST) {
                                              if ($_POST['pengirim'] == 6285780441755) {
                                                echo 'selected';
                                              }
                                            } ?>>Ayah</option>
                                          </select>
                                        </div>

                                        <div class="col-sm-3">
                                          <label for="">&nbsp;</label><br>
                                          <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
                                        </div>

                                      </div>
                                    </form>
                                    <br>


                                    <hr class="bg-black">
                                    <div class="col-sm-12 table-responsive"><label for="">List Undangan</label>
                                      <table class="table table-bordered table-striped hem" data-excel-title="List Undangan" data-excel-filename="List Undangan">
                                        <thead align="center" class="thead-dark">
                                          <tr>
                                            <th>No</th>
                                            <th>Nama <br></th>
                                            <th>No HP</th>
                                            <th>Pengirim</th>
                                            <th>Aksi</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                         $no ='';
                                         $sql = "SELECT * FROM list_undangan order by status asc";
                                         $result = mysqli_query($koneksi, $sql);
                                         if (mysqli_num_rows($result) > 0) {
                                          while ($row = mysqli_fetch_assoc($result)) { 
                                            $no++;
                                            ?>
                                            <tr>
                                              <td><?=$no?></td>
                                              <td><?=$row['nama']?></td>
                                              <td><?=$row['nohp']?></td>
                                              <td><?php if ($row['pengirim'] == '6281211091524') { echo'Raka';}elseif($row['pengirim'] == '6281316229252'){echo'Ibu';}else{echo'Ayah';}?></td>           
                                              <td> <?php if($row['status']==1){ ?>
                                                <button class="btn btn-success saveButton" data-id="<?php echo $row['id_number']; ?>" data-nohp="<?php echo $row['nohp']; ?>" data-pengirim="<?php echo $row['pengirim']; ?>" data-nama="<?php echo $row['nama']; ?>"><i class="fas fa-paper-plane"></i> Kirim WhatsApp</button>
                                            <?php }else{ ?>
                                              <button class="btn btn-danger"><i class="fas fa-check"></i> Sudah Kirim WhatsApp</button>
                                            <?php } ?>
                                          </td>          
                                        </tr>
                                        <?php  
                                      }     

                                    } else {
                                      echo "";
                                    }
                                    ?>                    
                                  </tbody>
                                </table>
                                                                      
                              </div>

                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                  </div>
                  <!-- /.content-wrapper -->

                  <!-- Control Sidebar -->
                  <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here -->
                  </aside>
                  <!-- /.control-sidebar -->

                  <!-- Main Footer -->
                  <footer class="main-footer">
                    <div class="float-right d-none d-sm-block">
                      <b>Version</b>1.0
                    </div>
                    <strong>Copyright &copy; 2023 </strong>  FYVLY.
                  </footer>
                </div>
                <!-- ./wrapper -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                  $(document).ready(function() {
                    $('.saveButton').click(function() {
                      var id = $(this).data('id');
                      var pengirim = $(this).data('pengirim');
                      var nohp = $(this).data('nohp');
                      var nama = $(this).data('nama');
                      var status = '9';
                      var button = $(this);

        // Menonaktifkan tombol
                      button.prop('disabled', true);

                      $.ajax({
                        url: 'lempar.php',
                        type: 'POST',
                        data: {
                          id: id,
                          pengirim: pengirim,
                          nohp: nohp,
                          nama: nama,
                          status: status
                        },

                        beforeSend: function() {
                // Menampilkan tampilan loading
                         $('.preloader').show();
                       },
                       success: function(response) {
              // alert(response);
                        var data = JSON.parse(response);

                        if (data.status) {
                          Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: data.msg
                          }).then(function() {
                        // Refresh halaman setelah menampilkan pesan sukses
                            window.location.reload();
                          });
                        } else {
                          Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: data.msg
                          });
                        }
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                        Swal.fire({
                          icon: 'error',
                          title: 'Error',
                          text: errorThrown
                        });
                      },
                      complete: function() {
                // Menghilangkan tampilan loading setelah Ajax selesai
                        $('.preloader').hide();
                        button.prop('disabled', false);
                      }
                    });
                    });
                  });
                </script>
                <!-- REQUIRED SCRIPTS -->
                <!-- jQuery -->
                <script src="assets/plugins/jquery/jquery.min.js"></script>
                <!-- Bootstrap -->
                <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
                <script src="assets/plugins/toastr/toastr.min.js"></script>
                <script src="assets/plugins/select2/js/select2.full.min.js"></script>
                <!-- overlayScrollbars -->
                <script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
                <!-- DataTables  & Plugins -->
                <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
                <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                <script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
                <script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                <script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
                <script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
                <script src="assets/plugins/jszip/jszip.min.js"></script>
                <script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
                <script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
                <script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
                <script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
                <script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
                <!-- AdminLTE App -->
                <script src="assets/dist/js/adminlte.js"></script>

                <!-- PAGE PLUGINS -->
                <!-- jQuery Mapael -->
                <script src="assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
                <script src="assets/plugins/raphael/raphael.min.js"></script>
                <script src="assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
                <script src="assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
                <!-- ChartJS -->
                <script src="assets/plugins/chart.js/Chart.min.js"></script>

                <!-- AdminLTE for demo purposes -->
                <script src="assets/dist/js/demo.js"></script>
                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                <script src="assets/dist/js/pages/dashboard2.js"></script>
                <script>
                  $(function() {
                    $(".kiway").DataTable({
                      "responsive": true,
                      "lengthChange": false,
                      "autoWidth": false,
                      dom: 'Bfrtip',
                      "iDisplayLength": 300,
                      "buttons": ["excel"]
                    }).buttons().container().appendTo('#example1_wrapper .col-sm-6:eq(0)');

                    $('#igdpelayanan').DataTable({
                      "paging": true,
                      "lengthChange": false,
                      "searching": true,
                      "ordering": true,
                      "info": true,
                      "autoWidth": false,
                      "responsive": true,
                      fixedHeader: {
                        header: true
                      },
                      dom: 'Bfrtip',
                      buttons: [

                      {
                        extend: 'excel',
                        footer: true,
                        text: 'Excel',
                        title: 'Pelayanan IGD',
                        exportOptions: {
                          columns: ':visible'
                        },
                        filename: 'Pelayanan IGD',
                      },
                      ]
                    });

                    $('#detailrtl').DataTable({
                      "paging": true,
                      "lengthChange": false,
                      "searching": true,
                      "ordering": true,
                      "info": true,
                      "autoWidth": false,
                      "responsive": true,
                      fixedHeader: {
                        header: true
                      },
                      dom: 'Bfrtip',
                      buttons: [

                      {
                        extend: 'excel',
                        footer: true,
                        title: 'Detail RTL Rawat Inap',
                        text: 'Excel',
                        exportOptions: {
                          columns: ':visible'
                        },
                        filename: 'Detail RTL Rawat Inap',
                      },
                      ]
                    });
                    $('#pelayananri').DataTable({
                      "paging": true,
                      "lengthChange": false,
                      "searching": true,
                      "ordering": true,
                      "info": true,
                      "autoWidth": false,
                      "responsive": true,
                      fixedHeader: {
                        header: true
                      },
                      dom: 'Bfrtip',
                      buttons: [

                      {
                        extend: 'excel',
                        footer: true,
                        title: 'Pelayanan Rawat Inap',
                        text: 'Excel',
                        exportOptions: {
                          columns: ':visible'
                        },
                        filename: 'Pelayanan Rawat Inap',
                      },
                      ]
                    });
                    $('#rtlmasuk').DataTable({
                      "paging": true,
                      "lengthChange": false,
                      "searching": true,
                      "ordering": true,
                      "info": true,
                      "autoWidth": false,
                      "responsive": true,
                      fixedHeader: {
                        header: true
                      },
                      dom: 'Bfrtip',
                      buttons: [

                      {
                        extend: 'excel',
                        footer: true,
                        title: 'RTL Masuk',
                        text: 'Excel',
                        exportOptions: {
                          columns: ':visible'
                        },
                        filename: 'RTL Masuk',
                      },
                      ]
                    });
                    $('.hem').DataTable({
                      "paging": true,
                      "lengthChange": false,
                      "searching": true,
                      "ordering": true,
                      "info": true,
                      "autoWidth": false,
                      "responsive": true,
                      "iDisplayLength": 350,
                      fixedHeader: {
                        header: true
                      },
                      dom: 'Bfrtip',
                      buttons: [

                      {
                        extend: 'excel',
                        footer: true,
                        title: function(thead, data, start, end, display) {
                          return $('.hem:visible').data('excel-title');
                        },
                        text: 'Excel',
                        exportOptions: {
                          columns: ':visible'
                        },
                        filename: function(){
                          var d = new Date();
                          var n = d.getTime();
                          return $('.hem:visible').data('excel-filename');
                        },
                      },
                      ]
                    });
                    $('#monitoringri').DataTable({
                      "paging": true,
                      "lengthChange": false,
                      "searching": true,
                      "ordering": true,
                      "info": true,
                      "iDisplayLength": 50,
                      "autoWidth": false,
                      "responsive": true,
                      fixedHeader: {
                        header: true
                      },
                      dom: 'Bfrtip',
                      buttons: [

                      {
                        extend: 'excel',
                        footer: true,
                        tittle: 'Monitoring Pasien Rawat Inap',
                        text: 'Excel',
                        exportOptions: {
                          columns: ':visible'
                        },
                        filename: 'Monitoring Pasien Rawat Inap',
                      },
                      ]
                    });


                  });
                </script>
                <script>
  $(function() {
    $('.select2').select2()

  });
</script>

               
              </body>

              </html>