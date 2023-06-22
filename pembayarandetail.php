<?php
// require "head.php";
session_start();
?>



<!doctype html>
<html lang="en">


<!-- css datatable -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
</link>
<link href="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js" rel="stylesheet ">

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
                        <h2>Detail Pembayaran</h2>
                    </div>
                    <div class="col-md-6 text-end align-self-center">
                        <a class=" btn btn-outline-dark btn-light" href="./login.php"><i class="fa-solid fa-user-plus"></i> Kembali</a>

                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-4 mt-3">
                        <img src="https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80" alt="" width="50" height="50" class="rounded-circle">
                    </div> -->

                </div>
                <div class="row">

                    <form class="row g-3 needs-validation" novalidate>

                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label">Id Pembayaran</label>
                            <input type="text" class="form-control" id="validationCustom01" value="" required>
                            <!-- <div class="valid-feedback">
                                Looks good!
                            </div> -->
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom02" class="form-label">Harga/Periode</label>
                            <input type="number" class="form-control" id="validationCustom02" value="" required>
                            <!-- <div class="valid-feedback">
                                Looks good!
                            </div> -->
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label">Nama Mentor</label>
                            <input type="text" class="form-control" id="validationCustom01" value="" required>
                            <!-- <div class="valid-feedback">
                                Looks good!
                            </div> -->
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label">Metode Pembayaran</label>
                            <input type="text" class="form-control" id="validationCustom01" value="" required>
                            <!-- <div class="valid-feedback">
                                Looks good!
                            </div> -->
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="validationCustom01" value="" required>
                            <!-- <div class="valid-feedback">
                                Looks good!
                            </div> -->
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label">Total</label>
                            <input type="number" class="form-control" id="validationCustom01" value="" required>
                            <!-- <div class="valid-feedback">
                                Looks good!
                            </div> -->
                        </div>

                    </form>
                </div>
                <!-- <div class="row">
                    <p>data table list siswa</p>
                </div>
                <div class="row">
                    <p>data table list materi</p>
                </div> -->
                <!-- <div class="row">
                    <div class="col-4 mt-3">
                        <h4>lampiran 1</h4>
                        <img src="https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80" alt="" width="150" height="150" class="rounded-4">
                    </div>

                </div> -->

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