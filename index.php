<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<?php
  include "head-lp.php";
?>

<body>

  <nav class="navbar navbar-expand-lg shadow fixed-top" style="background-color: #E75959;">
    <div class="container">
      <a class="navbar-brand text-center" href="#">
        <img src="./assets/icon.jpg" style="height: 5rem" alt="Majar">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item mx-2 underliners">
            <a class="nav-link active text-white pb-0" aria-current="page" href="#tentangkami">Tentang Kami</a>
          </li>
          <li class="nav-item mx-2 underliners">
            <a class="nav-link active text-white pb-0" aria-current="page" href="#yangkami">Pelatihan</a>
          </li>
          <li class="nav-item mx-2 underliners">
            <a class="nav-link text-white pb-0" href="#contactus">Kontak</a>
          </li>
          <li class="nav-item mx-2">
            <!-- <a class="nav-link" href="#"><button class="btn btn-outline-light">Masuk</button></a> -->
            <a class=" btn btn-outline-dark btn-light" href="./login.php"><i class="fa-solid fa-user-plus"></i> Masuk</a>
          </li>
          <!-- <li class="nav-item mx-2">
            <a class=" btn btn-outline-dark btn-light" href="#"><i class="fa-solid fa-user-plus"></i> Daftar</a>
          </li> -->
        </ul>

      </div>
    </div>
  </nav>

  <div style="background-color: #FFF4F4; padding-top: 4rem; height: 100vh;">
    <div class="container text-center mt-5" >
      <div class="row p-5 mt-3">
        <div class="col-sm-12 col-lg-7 text-start">
          <h1 class="mt-5">Dengan Majar, </h1>
          <h1>usiamu tak menjadi halangan untuk mengikuti pelatihan dan meraih kemajuan kariermu!</h1>
          <hr>
          <h3 class="d-inline-block ">Ayo Daftar Sekarang</h3>
          <a href="login.php" type="button" class="btn btn-outline-dark btn-light ms-2 mb-2">Daftar</a>
        </div>
        <div class="col-sm-12 col-lg-5 mt-3" data-aos="fade-left" data-aos-duration="1000">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="2000">
                <div class="card">
                  <div class="card-body p-5">
                    <div class="text-center">
                      <img
                        src="https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80"
                        class="rounded-circle border border-dark" alt="..." width="100px" height="100px">
                    </div>
                    <p class="fw-bold">Pak Kasim Sempurna*</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, cumque totam esse beatae sed
                      optio?
                      Magni saepe sed ea maxime. Nobis culpa id itaque delectus nulla, assumenda exercitationem corrupti
                      beatae.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="card">
                  <div class="card-body p-5">
                    <div class="text-center">
                      <img
                        src="https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80"
                        class="rounded-circle border border-dark" alt="..." width="100px" height="100px">
                    </div>
                    <p class="fw-bold">Pak Kasim Sempurna**</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, cumque totam esse beatae sed
                      optio?
                      Magni saepe sed ea maxime. Nobis culpa id itaque delectus nulla, assumenda exercitationem corrupti
                      beatae.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="card">
                  <div class="card-body p-5">
                    <div class="text-center">
                      <img
                        src="https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80"
                        class="rounded-circle border border-dark" alt="..." width="100px" height="100px">
                    </div>
                    <p class="fw-bold">Pak Kasim Sempurna***</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, cumque totam esse beatae sed
                      optio?
                      Magni saepe sed ea maxime. Nobis culpa id itaque delectus nulla, assumenda exercitationem corrupti
                      beatae.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div style="background-color: #FFF4F4;" id="tentangkami">
    <div class="container text-center mb-5" style="border-radius: 270px 220px 80px 90px;
  background-color: white" data-aos="zoom-in-up" data-aos-duration="1000">
      <div class="row p-5">
        <div class="col">
          <h1 class=""><span class="" style="border-bottom: 3px solid #E75959; color: black;">Tentang Kami</span></h1>

        </div>
      </div>
      <div class="row p-5" style="margin-bottom: 100px;">
        <div class="col-lg-8 col-sm-12">
          <h3 class="text-start ">Kami perusahaan jasa yang memberikan kesempatan kepada usia lanjut untuk kembali
            bekerja, sehingga
            mereka dapat memperoleh penghasilan yang lebih baik</h3>

        </div>
        <div class="col-lg-4 col-sm-12 ">
          <img
            src="https://images.unsplash.com/photo-1634152962476-4b8a00e1915c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
            class="rounded mt-4 mt-sm-4" alt="..." width="250px" height="250px">
        </div>

      </div>
    </div>
    <div class="row">
      
    </div>
  </div>


  <div class="container text-center mt-5" id="yangkami">
    <div class="row text-start">
      <h1 class="mb-5"><span class="" style="border-bottom: 3px solid #E75959; color: black;">Keuntungan </span> Yang Kami Berikan</h1>
    </div>
    <div class="row">
      <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-duration="500">
        <div class="card mb-3" style="max-width: 540px; background-color: #F7F7F7; border-radius: 10px;">
          <div class="row g-0" style="min-height: 125px;">
            <div class="col-md-3">
              <i class="fa-solid fa-book fa-3x " style="margin-top: 30%; color: 2A3174;"></i>
            </div>
            <div class="col-md-9">
              <div class="card-body" style="height: 100%;">
                <p class="card-text fw-bold">Mendapat ilmu baru yang akan membuatmu siap menghadapi dunia kerja yang menantimu!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-duration="1500">
        <div class="card mb-3" style="max-width: 540px; background-color: #F7F7F7; border-radius: 10px;">
          <div class="row g-0" style="min-height: 125px;">
            <div class="col-md-3">
              <i class="fa-solid fa-users fa-3x  " style="margin-top: 30%; color: 2A3174;"></i>
            </div>
            <div class="col-md-9">
              <div class="card-body" style="height: 100%;">
                <p class="card-text fw-bold">Nikmati keuntungan memiliki pendampingan penuh saat bekerja untuk meraih kesuksesan!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-duration="3000">
        <div class="card mb-3" style="max-width: 540px; background-color: #F7F7F7; border-radius: 10px;">
          <div class="row g-0" style="min-height: 125px;">
            <div class="col-md-3">
              <i class="fa-solid fa-building-user fa-3x" style="margin-top: 30%; color: 2A3174;"></i>
            </div>
            <div class="col-md-9">
              <div class="card-body" style="height: 100%;">
                <p class="card-text fw-bold">Dapat bekerja langsung dengan perusahaan mitra kami dan raih kesempatan karier yang tak terbatas!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5" data-aos="zoom-in" data-aos-duration="1000">
      <div class="col mx-auto">
        <div class="card text-center rounded-4 shadow ">
          <div class="card-body p-4 ">
            <h2>Daftar sekarang dan <br> bergabunglah dengan kami!</h2>
            <a href="login.php" class="btn btn-outline-dark mt-3 rounded-4" style="min-width: 25%;">Daftar</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container text-start mt-5" id="contactus">
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <div class="row">
          <div class="col">
            <h1><span class="" style="border-bottom: 3px solid #E75959; color: black;">Kontak </span> Kami</h1>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col">
            <i class="fa-solid fa-map-location-dot fa-2x"></i>
            <h3 style="display: inline;">Alamat</h3>
            <p class="ps-5">Jl. Siwalankerto Vii No. 10 RT 03, Dukuh menanggal, Surabaya, Jawa TImur</p>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col">
            <i class="fa-solid fa-phone fa-2x"></i>
            <h3 style="display: inline;">Telepon</h3>
            <p class="ps-5">0812 - 8888 - 0000</p>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col">
            <i class="fa-solid fa-envelope fa-2x"></i>
            <h3 style="display: inline;">Email</h3>
            <p class="ps-5">majar.company@majar.co.id</p>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col">
            <i class="fa-solid fa-share-from-square fa-2x"></i>
            <h3 style="display: inline;">Media Sosial </h3>
            <div class="ps-5">
              <i class="fa-brands fa-instagram fa-1x me-1"></i>
              <i class="fa-brands fa-twitter fa-1x mx-1" ></i>
              <i class="fa-brands fa-facebook fa-1x mx-1"></i>
            </div>
          
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 ">
        <div class="mapouter ">
          <div class="gmap_canvas rounded-4 border border-dark shadow"><iframe
              class="gmap_iframe rounded-4 border border-dark shadow" width="100%" frameborder="0" scrolling="no"
              marginheight="0" marginwidth="0"
              src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=universitas kristen petra&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
              href="https://capcuttemplate.org/">Capcuttemplate.org</a></div>
          <style>
            .mapouter {
              position: relative;
              text-align: right;
              width: 100%;
              height: 400px;
            }

            .gmap_canvas {
              overflow: hidden;
              background: none !important;
              width: 100%;
              height: 400px;
            }

            .gmap_iframe {
              height: 400px !important;
            }
          </style>
        </div>
      </div>
    </div>

  </div>

  <div class="container-fluid text-start mt-5 p-5" style="background-color: #E75959;">
    <div class="row">
      <div class="col">
        <p class="text-white fw-bold"> PT Mari Belajar Jaya</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="text-white">Jl. Siwalankerto Vii No. 10 <br> RT 03, Dukuh menanggal, <br> Surabaya, Jawa TImur</p>
      </div>
    </div>
    <div class="row">
      <!-- <div class="col">
        <i class="fa-brands fa-instagram fa-2x mx-2" style="color:white ;"></i>
        <i class="fa-brands fa-twitter fa-2x mx-2" style="color:white ;"></i>
        <i class="fa-brands fa-facebook fa-2x mx-2" style="color:white ;"></i>
      </div> -->
    </div>
    <div class="row">
      <div class="col">
        <p class="text-white text-center">@grupmangan2023</p>
      </div>
    </div>
  </div>

  <?php 
  if (isset($_GET['stats'])) {
    if ($_GET['stats'] == 0) {
        echo "<script>alert('Berhasil Logout!');</script>";
    } else if ($_GET['stats'] == 1) {
        echo "<script>alert('Input berhasil!');</script>";
    } else if ($_GET['stats'] == 2) {
        echo "<script>alert('Password tidak cocok!');</script>";
    } 
  }
  ?>

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



</body>

</html>