<?php
include('phps/connect.php');
include('phps/check_integrity.php');

$_SESSION['page'] = "Mentor";
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
    <div class="container-fluid text-center p-0" >
        <div class="row" style="min-height: 100vh;">
            <?php include './sidebar.php'; ?>
            <div class="col-10 text-start p-5" style="background-color: #FFF4F4;">
                <h2>Mentor</h2>
                <p class="mb-4">Hi, <?php echo $_SESSION["full_name"]; ?></p>
                <hr>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <th data-sortable="true">Nama</th>
                        <th data-sortable="true">Status</th>
                        <th data-sortable="true">Tanggal Pendaftaran</th>
                        <th data-sortable="true">No Telepon</th>
                        <th data-sortable="true">Course Yang Diambil</th>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT a.full_name, r.name, a.tanggal_pendaftaran, a.no_wa, CONCAT(c.name, ' ', c.kelas) AS nama_kelas
                            FROM `account` a
                            LEFT JOIN role r ON r.id = a.id_role
                            LEFT JOIN mentor_course uc ON uc.mentor_id = a.nik
                            LEFT JOIN course c ON c.id = uc.course_id
                            WHERE r.id = 2";

                            $result = $conn->prepare($sql);
                            $result->execute();
                            
                            foreach($result as $row){
                        ?>
                        <tr class="hoverablerow">
                            <td><?php echo $row['full_name'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['tanggal_pendaftaran'] ?></td>
                            <td><?php echo $row['no_wa'] ?></td>
                            <td><?php echo $row['nama_kelas'] ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
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

    <!-- js data tabel -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>




</body>

</html>