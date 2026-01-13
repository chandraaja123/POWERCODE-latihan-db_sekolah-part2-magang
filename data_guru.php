<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Admin - Tabel Guru</title>

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

                <!-- Panggil Topbar -->
                <?php include "topbar.php" ?>
                <!-- Topbar Selesai -->   

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Guru</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> 
                                <a href="tambah_guru.php"
                                class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
                                
                                <a href="excel_guru.php"
                                class="btn btn-sm btn-warning"><i class="fas fa-print"></i> Excel</a>

                                <a href="excel_guru.php"
                                class="btn btn-sm btn-danger"><i class="fas fa-file-pdf"></i> pdf</a>
                            </h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td>NIP</td>
                                        <td>Nama Guru</td>
                                        <td>Alamat</td>
                                        <td>Tempat Kelahiran</td>
                                        <td>Gender</td>
                                        <td>Agama</td>
                                        <td>No Telepon</td>
                                        <td>Pendidikan</td>
                                        <td>Status</td>
                                        <td>Aksi</td>
                                    </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        // Panggil Koneksi
                                        include "koneksi.php";

                                        $sql     ="select * from tb_guru";
                                        $hasil   = mysqli_query($konek, $sql);
                                        $no      = 1;

                                        // Untuk Menampilkan Data Secara Berulang Sesuai Data Yang Ada di Database
                                        while($data=mysqli_fetch_array($hasil)){
                                        ?>
                                        <tr>
                                        <td> <?php echo $no++ ?> </td>
                                            <td> <?php echo $data['nip'] ?> </td>
                                            <td> <?php echo $data['nama'] ?> </td>
                                            <td> <?php echo $data['alamat'] ?> </td>
                                            <td> <?php echo $data['tmpt_lahir'] ?> </td>
                                            <td> <?php echo $data['gender'] ?> </td>
                                            <td> <?php echo $data['agama'] ?> </td>
                                            <td> <?php echo $data['telp'] ?> </td>
                                            <td> <?php echo $data['pendidikan'] ?> </td>
                                            <td> <?php echo $data['status'] ?> </td>
                                            <td class="text-center">
                                                <div>
                                                  <form onsubmit="return confirm('Hapus Data Guru ?');"
                                                        action="hapus_guru.php?id_guru=<?php echo $data ['id_guru'] ?>" method="POST">
                                                        
                                                        <a href="edit_guru.php?id_guru=<?php echo $data ['id_guru'] ?>"
                                                            class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

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