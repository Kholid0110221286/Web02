<?php
class bMIPasien {
    public $nama;
    public $berat;
    public $tinggi;
    public $umur;
    public $jenis_kelamin;
    public $BMIres;
    public $BMIstatus = '';

    function __construct($nama, $berat, $tinggi, $umur, $jenis_kelamin)
    {
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jenis_kelamin = $jenis_kelamin;
    }

    public function hasilBMI() {
        $this->tinggi = $this->tinggi / 100;
        $this->BMIres = $this->berat / ($this->tinggi * $this->tinggi);
        return $this->BMIres;
    }

    public function statusBMI() {
        if($this->BMIres < 18.5) {
            return $this->BMIstatus = 'Kekurangan berat badan';
        } else if ($this->BMIres >= 18.5 && $this->BMIres <= 24.9) {
            return $this->BMIstatus = 'Normal (ideal)';
        } else if ($this->BMIres >= 25.0 && $this->BMIres <= 29.9) {
            return $this->BMIstatus = 'Kelebihan berat badan';
        } else {
            return $this->BMIstatus = 'Kegemukan (Obesitas)';
        }
    }
}
?>
  <?php
 include_once 'header.php';
 include_once 'sidebar.php';
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

   <div class="content">
     <div class="container-fluid">
        <br>
   
      <br>
  <h4 style="color: blue;">HISTORY BMI PASIEN</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Berat Badan</th>
      <th scope="col">Tinggi Badan</th>
      <th scope="col">Umur</th>
      <th scope="col">Gender</th>
      <th scope="col">BMI</th>
      <th scope="col">Hasil</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Zahra</td>
      <td>40</td>
      <td>150</td>
      <td>15</td>
      <td>Perempuan</td>
      <td>20</td>
      <td>Normal (ideal)</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Fadli</td>
      <td>45</td>
      <td>170</td>
      <td>18</td>
      <td>Laki-Laki</td>
      <td>16</td>
      <td>Kekurangan berat badan</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Maulana</td>
      <td>60</td>
      <td>177</td>
      <td>15</td>
      <td>Laki-Laki</td>
      <td>19</td>
      <td>Normal (ideal)</td>
    </tr>

  </tbody>
</table>

<?php 
        if(isset($_POST['proses'])) {
            $nama = $_POST['nama_lengkap'];
            $berat = $_POST['berat_'];
            $tinggi = $_POST['tinggi_'];
            $umur = $_POST['umur_'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $pasien1 = new BMIPasien($nama, $berat, $tinggi, $umur, $jenis_kelamin);
           
                


            // echo 'Nama : ' . $pasien1->nama ;
            // echo 'Berat Badan : ' . $pasien1->berat . '</br>';
            // echo 'Tinggi Badan : ' . $pasien1->tinggi . '</br>' ;
            // echo 'Umur : ' . $pasien1->umur. '</br>';
            // echo 'Gender : ' . $pasien1->jenis_kelamin . '</br>';
            // echo round($pasien1->hasilBMI()) . '</br>';
            // echo 'Status : ' . $pasien1->statusBMI() . '</br>';
            }
            ?>
<br><hr>

<h1 align='center' style="background-color: green;color: white;">INDEX HASIL</h1>
<table class="table table-hover">
  <thead>
    <tr>
  
      <th scope="col">Nama</th>
      <th scope="col">Berat Badan</th>
      <th scope="col">Tinggi Badan</th>
      <th scope="col">Umur</th>
      <th scope="col">Gender</th>
      <th scope="col">BMI</th>
      <th scope="col">Hasil</th>
    </tr>
  </thead>
  <tbody>
      <td><?= $nama; ?></td>
      <td><?= $berat; ?></td>
      <td><?= $tinggi; ?></td>
      <td><?= $umur; ?></td>
      <td><?= $jenis_kelamin; ?></td>
      <td><?= round($pasien1->hasilBMI()); ?></td>
      <td><?= $pasien1->statusBMI();  ?></td>
  </tbody>
</table>

  </div>
    </div>
    </div>
  </div>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

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














