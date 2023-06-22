<div class="col-2 p-0" style="background-color: #E75959;">
    <div class="row">
        <div class="col-sm-12">
            <img src="./assets/icon.jpg" style="height: 5rem" alt="Majar">
        </div>
        <div class="col-sm-12 sidebar">
            <a class='nav-link p-4 text-white <?php if($_SESSION['page'] == 'Dashboard'){echo "active2";} ?>' href='dashboard.php'><i class="fa-solid fa-house me-2" style="color: white;"></i>Dashboard</a>
        </div>
        <div class="col-sm-12 sidebar">
            <a class='nav-link p-4 text-white <?php if($_SESSION['page'] == 'Siswa'){echo "active2";} ?>' href='siswa.php'><i class="fa-solid fa-user me-2" style="color: white;"></i>Siswa</a>
        </div>
        <div class="col-sm-12 sidebar">
            <a class='nav-link p-4 text-white <?php if($_SESSION['page'] == 'Mentor'){echo "active2";} ?>' href='mentor.php'><i class="fa-solid fa-person-chalkboard me-2"></i>Mentor</a>
        </div>
        <div class="col-sm-12 sidebar">
            <a class='nav-link p-4 text-white <?php if($_SESSION['page'] == 'Kelas'){echo "active2";} ?>' href='kelas.php'><i class="fa-solid fa-school me-2"></i>Kelas</a>
        </div>
        <div class="col-sm-12 sidebar">
            <a class='nav-link p-4 text-white <?php if($_SESSION['page'] == 'Partner'){echo "active2";} ?>' href='partner.php'><i class="fa-solid fa-building me-2"></i>Partner</a>
        </div>
        <div class="col-sm-12 sidebar">
            <a class='nav-link p-4 text-white <?php if($_SESSION['page'] == 'Pembayaran'){echo "active2";} ?>' href='pembayaran.php'><i class="fa-solid fa-money-bill me-2"></i>Pembayaran</a>
        </div>
        <div class="col-sm-12 sidebar">
            <a class='nav-link p-4 text-white' href='phps/logout.php'><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Log Out</a>
        </div>
    </div>
</div>
    


    
    
    