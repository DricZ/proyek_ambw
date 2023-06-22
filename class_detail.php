<?php
session_start();
?>
<!doctype html>
<html lang="en">

<?php
include "head-lp.php";
?>

<body>
    <style>
        body {
            background-color: #FFF4F4;
        }
    </style>
    <nav class="navbar navbar-expand-lg shadow fixed-top" style="background-color: #E75959;">
        <div class="container">
            <a class="navbar-brand text-center" href="#">
                <img src="./assets/icon.jpg" style="height: 5rem" alt="Majar">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2 underliners">
                        <a class="nav-link active text-white pb-0" aria-current="page" href="#tentangkami">Tentang
                            Kami</a>
                    </li>
                    <li class="nav-item mx-2 underliners">
                        <a class="nav-link active text-white pb-0" aria-current="page" href="#yangkami">Pelatihan</a>
                    </li>
                    <li class="nav-item mx-2 underliners">
                        <a class="nav-link text-white pb-0" href="#contactus">Kontak</a>
                    </li>
                    <li class="nav-item mx-2">
                        <img src="https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80"
                            class="rounded-circle border border-dark" alt="..." width="40px" height="40px">
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 150px; margin-bottom: 20px;">
        <div class="row" style="margin: 50px 0px;">
            <div class="col-6 text-start">
                <h1>Selamat datang, Pak Kasim</h1>
            </div>
            <div class="col-6 text-end">
                <a class=" btn btn-outline-dark btn-light" href="./user_page.php"><i class="fa-solid fa-user-plus"></i>
                    Keluar</a>
            </div>
        </div>
        <div class="row rounded-4 p-3" style="background-color: white;">
            <div class="col-2">
                <img src="https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80"
                    class="rounded-circle border border-dark" alt="..." width="100px" height="100px">
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col">
                        <h3>Public Speaking Bootcamp</h3>
                        <p class="">Oleh Bambang Sulistiyo</p>
                        <p style="display: inline-block;" class="mx-2">No telp:
                            0282734747</p>
                        <p style="display: inline-block;" class="mx-2">
                            Jam: 14.00 - 16.00
                        </p>
                        <p style="display: inline-block;" class="mx-2">Alamat:
                            Jl. APT Zboncak isle No. 7 RT 10</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container text-start" style="background-color: white; margin-bottom: 20px;">
        <div class="row">
            <h3>Materi</h3>
            <hr>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">

                    <h1>Pertemuan 1 - Dasar public speaking</h1>
                    <p class="">Lampiran file</p>
                    <p class="">Lampiran file</p>
                    <p class="">Lampiran file</p>

                </div>
            </div>
        </div>
    </div>
    </div>

    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

<!-- jquery -->
<script src="jquery-3.6.4.min.js"></script>

<!-- fontawesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
    integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- aos -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
    integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    AOS.init();
</script>

<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

<!-- js external -->
<script src="./assets/js/script.js"></script>