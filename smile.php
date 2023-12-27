<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- sidebar  mulai -->
    <div class="sidebar">
        <a href="#" class="logo" id="logo">
            <img src="images/Logo UNJ.png" alt="">
            <div class="logo-name"><span>UNIVERSITAS</span><br><span>NEGERI</span><br><span>JAKARTA</span></div>
        </a>
        <ul class="side-menu">
            <li><a href="dashboard.php"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li class="active"><a href="smile.php"><i class='bx bx-user' ></i>SMile</a></li>
            <li><a href="jurusan.php"><i class='bx bxs-graduation'></i>Pilih Jurusan</a></li>
            <li><a href="materi.php"><i class='bx bx-upload' ></i>Upload Materi</a></li>
            <li><a href="#"><i class='bx bxs-cog'></i>Setting</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="func/logout.php" class="logout">
                    <i class='bx bx-log-out-circle' ></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <!-- sidebar  selesai -->

    <!-- navbar mulai -->
    <div class="content">
        <?php include 'components/navbar.php' ?>
        <div class="group-fakultas">
            <div class="judul">
                <h3>SMile</h3>
            </div>
            <div class="fakultas">
                <button class="btn-fakultas">fakultas Bahasa & Seni</button>
                <button class="btn-fakultas">fakultas Bahasa & Seni</button>
                <button class="btn-fakultas">fakultas Bahasa & Seni</button>
                <button class="btn-fakultas">fakultas Bahasa & Seni</button>
                <button class="btn-fakultas">fakultas Bahasa & Seni</button>
                <button class="btn-fakultas">fakultas Bahasa & Seni</button>
                <button class="btn-fakultas">fakultas Bahasa & Seni</button>
                <button class="btn-fakultas">fakultas Bahasa & Seni</button>
                <button class="btn-fakultas">fakultas Bahasa & Seni</button>
            </div>
        </div>
    </div>
    <!-- navbar selesai -->


    <script src="js/script.js"></script>
</body>
</html>