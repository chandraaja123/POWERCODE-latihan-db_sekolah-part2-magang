<?php     

    // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");      
    // membuat nama file ekspor "data-anggota.xls"
    header("Content-Disposition: attachment; filename=Lapguru_Excel.xls");  


?>
<html>

<head> 
  <title>Laporan Data Guru</title>
  <style>
    .table {
      border-collapse:collapse;
      table-layout:fixed;width: 630px;
    }
    .table th {
      padding: 5px;
    }
    .table td {
      word-wrap:break-word;
      width: 20%;
      padding: 5px;
    }
  </style>
</head>
<body>

    <?php 
      // Load file koneksi.php
      include "koneksi.php";
    
      $sql   ="SELECT * FROM tb_guru ORDER BY id_guru DESC";
      

    ?>
  <h4 style="margin-bottom: 5px;" align="center">Laporan Data Guru</h4>


  <table class="table" border="1" width="100%" style="margin-top: 10px;">
        <strong><tr>
          <td>No.</td>
                <td>NIP</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Tempat Lahir</td>
                <td>gender</td>
                <td>Agama</td>
                <td>Telpon</td>
                <td>Pendidikan</td>
                <td>Status</td>
        </tr></strong>

    <?php
      $hasil = mysqli_query($konek, $sql); 

      $no=1; 
      while($data = mysqli_fetch_array($hasil)){ 

        echo "<tr>";
        echo "<td align='center'>".$no++."</td>";
        echo "<td>".$data['nip']."</td>"; 
        echo "<td>".$data['nama']."</td>"; 
        echo "<td>".$data['alamat']."</td>"; 
        echo "<td>".$data['tmp_lahir']."</td>"; 
        echo "<td>".$data['gender']."</td>"; 
        echo "<td>".$data['agama']."</td>"; 
        echo "<td>".$data['telp']."</td>"; 
        echo "<td>".$data['pendidikan']."</td>"; 
        echo "<td>".$data['status']."</td>"; 
        echo "</tr>";         

      }
      
    ?>
  </table>
</body>
</html>