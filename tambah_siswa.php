<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Admin - Tabel Siswa</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                

                <!-- Begin Page Content -->
                <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><strong>Tambah Data Siswa</strong></h1>
</div>

<div class="container">
<?php 
        if(isset($_POST["btnSimpan"])){
            include "koneksi.php";

            // Deklarasi Variabel Untuk Menampung Data Inputan
            $nis         = $_POST['nis'];
            $nama        = $_POST['nama'];
            $id_kelas    = $_POST['id_kelas'];
            $alamat      = $_POST['alamat'];
            $tmpt_lahir  = $_POST['tmpt_lahir'];
            $tgl_lahir   = $_POST['tgl_lahir'];
            $gender      = $_POST['gender'];
            $agama       = $_POST['agama'];
            $kd_ortu     = $_POST['kd_ortu'];
            $tgl_daftar  = $_POST['tgl_daftar'];

            // Query Simpan Data
            $sql = "INSERT INTO tb_siswa (nis, nama, id_kelas, alamat, tmpt_lahir, tgl_lahir, gender, agama, kd_ortu, tgl_daftar)
                        VALUES ('$nis', '$nama', '$id_kelas', '$alamat', '$tmpt_lahir', '$tgl_lahir', '$gender', '$agama', '$kd_ortu', '$tgl_daftar')";

            // Eksklusi Perintah SQL dan Cek Koneksi ke Database
            $qrySimpan  = mysqli_query ($konek, $sql);

            // Cek Berhasil Atau Gagal Simpan
            if($qrySimpan){
                echo '<div class="alert alert-success mt-3">Data Berhasil Disimpan</div>';
            } else {
                echo '<div class="alert alert-warning mt-3"><b>Data Gagal Disimpan</></div>';
            }
        }  
        ?>

   <form action="" method="POST">
    
     <div class="row">
         
            <div class="col-md-8 col-xs-12">
                <div class="card">
                    <div class="card-body text-dark">
     
                    <div class="form-group row col-md-12">
                        <label class="col-sm-4 col-form-label"> Nis <font color="red"><strong>*</strong></font>
                        </label>

                        <div class="col-sm-8">
                            <input 
                                type="text" 
                                required 
                                class="form-control" 
                                placeholder="*Hanya boleh bersisi angka"  
                                name="nis"
                                pattern="[0-9]+"
                                title="NIS hanya boleh berisi angka tanpa spasi atau huruf."
                            >
                        </div>
                    </div>


                        <div class="form-group row col-md-12">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Nama<font color="red"><strong>*</strong></font></label>
                            <div class="col-sm-8">
                                <input type="text" required="" class="form-control" placeholder="Nama"   name="nama">
                            </div>
                        </div>


                        <div class="form-group row col-md-12">
                            <label class="col-sm-4 col-form-label"> Id Kelas <font color="red"><strong>*</strong></font>
                            </label>

                            <div class="col-sm-8">
                                <input 
                                    type="text" 
                                    required 
                                    class="form-control" 
                                    placeholder="Hanya boleh berisi angka"  
                                    name="id_kelas"
                                    pattern="[0-9]+"
                                    title="Id Kelas hanya boleh berisi angka tanpa spasi atau huruf."
                                >
                            </div>
                        </div>


                        <div class="form-group row col-md-12">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Alamat<font color="red"><strong>*</strong></font></label>
                            <div class="col-sm-8">
                                <input type="text" required="" class="form-control" placeholder="Alamat" name="alamat">
                            </div>
                        </div>

                        <div class="form-group row col-md-12">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Tempat Lahir<font color="red"><strong>*</strong></font></label>
                            <div class="col-sm-8">
                                <input type="text" required="" class="form-control" placeholder="Tempat Lahir" name="tmpt_lahir">
                            </div>
                        </div>
                        
                        <div class="form-group row col-md-12">
                            <label for="inputPassword" class="col-sm-4 col-form-label">tgl_lahir<font color="red"><strong>*</strong></font></label>
                            <div class="col-sm-8">
                                <input type="date" required="" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir">
                            </div>
                        </div>

                        <div class="form-group row col-md-12">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Gender<font color="red"><strong>*</strong></font></label>
                            <div class="col-sm-8">
                                <select class="form-control" name="gender">
                                    <option value="">-- Pilih Gender --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row col-md-12">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Agama<font color="red"><strong>*</strong></font></label>
                            <div class="col-sm-8">
                                <select class="form-control" name="agama">
                                    <option value="">-- Pilih Agama --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row col-md-12">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Kode Orang Tua<font color="red"><strong>*</strong></font></label>
                            <div class="col-sm-8">
                                <input type="text" required="" class="form-control" placeholder="Kode Orang Tua" name="kd_ortu">
                            </div>
                        </div>

                        <div class="form-group row col-md-12">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Tanggal Daftar<font color="red"><strong>*</strong></font></label>
                            <div class="col-sm-8">
                                <input type="date" required="" class="form-control" placeholder="Tanggal Daftar" name="tgl_daftar">
                            </div>
                        </div>

                        
                        <div class="form-group col-md-12">
                            <input type="submit" name="btnSimpan" class="btn btn-warning" value="Simpan Data"><span class="glyphicon glyphicon-check"></span>
                            
                            <a href="data_siswa.php" class="btn btn-success">Kembali</a>
                        </div>
                      
                
                       
                    </div>
                </div>
            </div>
            <br>
        </div>

   </form>

</div>

</div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php" ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>