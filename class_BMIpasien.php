<?php
 include_once 'header.php';
 include_once 'sidebar.php';
 ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color: blue;"><strong>BMI Calculator</strong></h1>
            <p>Gunakan kalkulator ini untuk memeriksa Indeks Massa Tubuh (IMT) dan mengecek apakah berat badan Anda ideal atau tidak.</p>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="class_BMIpasien.php">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 style="color: blue;" class="card-title">FORM PENGISIAN BODY MASS INDEX (BMI)</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
   

   <div class="content">
     <div class="container-fluid">
     <div class='container'>
                <form class='form-horizontal p-5' action="halamanBMI.php" method="POST">
                    <!-------->
                    <div class="form-group row ">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name='nama_lengkap' placeholder="nama">
                        </div>
                    </div>
                    <!----> 
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Berat Badan</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPassword3" name='berat_' placeholder="berat">
                        </div>
                    </div>
                    <!----> 
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPassword3" name='tinggi_' placeholder="tinggi">
                        </div>
                    </div>
                    <!----->
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPassword3" name='umur_' placeholder="umur">
                        </div>
                    </div>
                    <!---->
                    <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" checked>
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                        <label class="form-check-label" for="laki-laki">
                            Laki-Laki 
                        </label>
                        </div>
                        
                    </div>
                    </div>
                    <br>
                    <!---->
                    <div class="text-center">
                <input class="btn" type="submit" style="color:white; background-color:blue;" value="Submit" name="proses"/>
            </div>

                </form>

    </div>

 </div>
 </div>
  </div>

    <!-- /.content-header -->

    <!-- Main content -->
   
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div> -->
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>





    
    
