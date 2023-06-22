<?php
require "phps/connect.php";
require "phps/check_integrity.php";

$_SESSION['page'] = "Dashboard";

$totalSiswa = "SELECT COUNT(nik) FROM ACCOUNT WHERE ID_ROLE = 2";
$totalSiswa = $conn->prepare($totalSiswa);
$totalSiswa->execute();

$totalSiswa = $totalSiswa->fetchColumn();
// echo "Total Siswa: " . $totalSiswa;

$totalMentor = "SELECT COUNT(nik) FROM ACCOUNT WHERE ID_ROLE = 3";
$totalMentor = $conn->prepare($totalMentor);
$totalMentor->execute();

$totalMentor = $totalMentor->fetchColumn();
// echo "Total Mentor: " . $totalMentor;

$totalKelas = "SELECT COUNT(id) FROM COURSE";
$totalKelas = $conn->prepare($totalKelas);
$totalKelas->execute();

$totalKelas = $totalKelas->fetchColumn();
// echo "Total Kelas: " . $totalKelas;

$totalPendapatan = "SELECT sum(total) FROM pembayaran";
$totalPendapatan = $conn->prepare($totalPendapatan);
$totalPendapatan->execute();

$totalPendapatan = $totalPendapatan->fetchColumn();
// echo "Total Pendapatan: " . $totalPendapatan;
?>



<!doctype html>
<html lang="en">

<?php include "head.php"; ?>

<body>
    <style>
        .text-white {
            color: white;
        }

        .test:hover {
            background-color: red;
        }
    </style>
    <div class="container-fluid text-center p-0">
        <div class="row">
            <?php include './sidebar.php'; ?>
            <div class="col-10 text-start p-5" style="background-color: #FFF4F4;">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Dashboard</h2>
                        <p style="color: grey;">Hi, <?php echo $_SESSION["full_name"] ?></p>
                    </div>
                    <div class="col-md-6 text-end align-self-center">
                        <img src="https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80" alt="" class="img-fluid rounded-circle" width="40" height="40" >
                        <p style="display: inline-block; vertical-align: middle; margin-left: 10px;"><?php echo $_SESSION["full_name"] ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="fa-solid fa-user" style="height: 100%; color: white"></i>
                                    </div>
                                    <div class="col-sm-2">
                                        <i class="fa-regular fa-circle-up" style="color: green"></i>
                                        <p style="font-size:8px; color: green">1.2%</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <center>
                                            <p class="card-text m-0" style="font-weight:900; font-size: 28px; color: white"> <?php echo $totalSiswa ?></p>
                                            <p class="m-0" style="font-size: 14px; color: white">Siswa</p>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="fa-solid fa-person-chalkboard" style="height: 100%; color: white"></i>
                                    </div>
                                    <div class="col-sm-2">
                                        <i class="fa-regular fa-circle-up" style="color: green"></i>
                                        <p style="font-size:8px; color: green">1.2%</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <center>
                                            <p class="card-text m-0" style="font-weight:900; font-size: 28px; color: white"> <?php echo $totalMentor ?></p>
                                            <p class="m-0" style="font-size: 14px; color: white">Mentor</p>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="fa-solid fa-school" style="height: 100%; color: white"></i>
                                    </div>
                                    <div class="col-sm-2">
                                        <i class="fa-regular fa-circle-up" style="color: green"></i>
                                        <p style="font-size:8px; color: green">1.2%</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <center>
                                            <p class="card-text m-0" style="font-weight:900; font-size: 28px; color: white"> <?php echo $totalKelas ?></p>
                                            <p class="m-0" style="font-size: 14px; color: white">Kelas</p>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="fa-solid fa-money-bill" style="height: 100%; color: white"></i>
                                    </div>
                                    <div class="col-sm-2">
                                        <i class="fa-regular fa-circle-up" style="color: green"></i>
                                        <p style="font-size:8px; color: green">1.2%</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <center>
                                            <p class="card-text m-0" style="font-weight:900; font-size: 28px; color: white"> <?php echo $totalPendapatan ?></p>
                                            <p class="m-0" style="font-size: 14px; color: white">Pendapatan</p>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="pt-3" style="color: #4C4C4C; opacity: 60%">Perbandingan dengan bulan lalu</p>

                <h2>Pendaftaran Terbaru</h2>
                <p>Menampilkan detaik pendaftaran terbaru</p>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example">
                            <thead>
                                <th data-sortable="true">Nama</th>
                                <th data-sortable="true">Status</th>
                                <th data-sortable="true">Tanggal Pendaftaran</th>
                                <th data-sortable="true">No Telepon</th>
                                <th data-sortable="true">Course Yang Diambil</th>
                                <th data-sortable="true">Status Course</th>
                            </thead>
                            <tbody>
                                <tr class="hoverablerow">
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>Edinburgh</td>
                                    <td>Edinburgh</td>
                                    <td>Edinburgh</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- aos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

    <!-- js external -->
    <script src="./assets/js/script.js"></script>

    <!-- js data tabel -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>


    <script>
        AOS.init();

        $(document).ready(function() {
            table = $('#example').DataTable();
        });
    </script>


   



</body>

</html>