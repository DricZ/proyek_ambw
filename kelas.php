<?php
include('phps/connect.php');
include('phps/check_integrity.php');

$_SESSION['page'] = "Kelas";
?>



<!doctype html>
<html lang="en">

<?php include "head.php"; ?>


<body>
    <!-- <style>
        .text-white {
            color: white;
        }

        .test:hover {
            background-color: red;
        } -->
    <!-- </style> -->
    <div class="container-fluid text-center p-0" >
        <div class="row" style="min-height: 100vh;">
            <?php include './sidebar.php'; ?>

            <div class="col-sm-10 text-start p-5" style="background-color: #FFF4F4;">
                <h2>Kelas</h2>
                <p class="mb-4">Hi, <?php echo $_SESSION["full_name"]; ?></p>
                
                <hr>
                <table id="example" class="table">
                    <thead>
                        <th data-sortable="true">Nama</th>
                        <th data-sortable="true">Kelas</th>
                        <th data-sortable="true">Status</th>
                        <th data-sortable="true">Tanggal Buka</th>
                        <th data-sortable="true">Tanggal Tutup</th>
                        <th data-sortable="true">Harga /periode</th>
                        <th data-sortable="true">Kuota</th>
                        <th data-sortable="true">Jumlah Siswa</th>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT c.id, c.name, (CASE WHEN NOW() < c.tanggal_buka THEN 'Belum Buka' WHEN (NOW() >= c.tanggal_buka AND NOW() <= c.tanggal_berakhir) THEN 'Sedang Berlangsung' WHEN Date(NOW()) > c.tanggal_berakhir THEN 'Sudah Selesai' END) AS status, c.tanggal_buka, c.tanggal_berakhir, c.harga, c.kelas, c.kuota
                            FROM course c
                            LEFT JOIN user_course uc ON uc.course_id = c.id";

                            $result = $conn->prepare($sql);
                            $result->execute();
                            
                            foreach($result as $row){
                                $sql2 = "SELECT COUNT(uc.id) AS total_siswa
                                FROM user_course uc
                                WHERE uc.course_id = :course_id";

                                $result2 = $conn->prepare($sql2);
                                $result2->execute(["course_id" => $row['id']]);
                                $result2 = $result2 -> fetchAll()
                        ?>
                        <tr class="hoverablerow">
                            <form>
                                <td><?php echo $row['name'] ?><input type="hidden" name="name" value="<?php echo $row['name'] ?>"></td>
                                <td><?php echo $row['status'] ?><input type="hidden" name="status" value="<?php echo $row['status'] ?>"></td>
                                <td><?php echo $row['tanggal_buka'] ?><input type="hidden" name="tanggal_buka" value="<?php echo $row['tanggal_buka'] ?>"></td>
                                <td><?php echo $row['tanggal_berakhir'] ?><input type="hidden" name="tanggal_berakhir" value="<?php echo $row['tanggal_berakhir'] ?>"></td>
                                <td><?php echo $row['harga'] ?><input type="hidden" name="harga" value="<?php echo $row['harga'] ?>"></td>
                                <td><?php echo $row['kelas'] ?><input type="hidden" name="kelas" value="<?php echo $row['kelas'] ?>"></td>
                                <td><?php echo $row['kuota'] ?><input type="hidden" name="kuota" value="<?php echo $row['kuota'] ?>"></td>
                                <td><?php echo $result2[0]['total_siswa'] ?><input type="hidden" name="total_siswa" value="<?php echo $result2[0]['total_siswa'] ?>"></td>
                                <!-- <td><a href="editsis.php" style="text-decoration:none; color: black">EDIT</a></td> -->
                            </form>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- aos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- js data tabel -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        AOS.init();

        $(document).ready(function() {
            table = $('#example').DataTable();
        });
    </script>


    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

    <!-- js external -->
    <script src="./assets/js/script.js"></script>

    




</body>

</html>