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
            <li class="active"><a href="dashboard.php"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="smile.php"><i class='bx bx-user' ></i>SMile</a></li>
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

    <!-- content mulai -->
    <div class="content">
        <nav>
        </nav>
        <main>
            <div class="header">
                <div class="left">
                    <h1>Welcome Back!</h1>
                </div>
            </div>

            <!-- insight -->
            <ul class="insight">
                <li>
                    <img src="images/usr.png" alt="">
                </li>
                <span class="info">
                    <h3>
                        Dra. Lucy Martini, Nst. M.Pd.
                    </h3>
                    <p>281 192 618</p>
                    <h1>Fakultas Bahasa & Seni</h1>
                </span>
            </ul>
        </main>
        <div class="card-body">
            <div class="card-left"></div>
                <div class="card">
                    <h2>Courses enroled</h2>
                    <p>7</p>
                </div>
            <div class="card-left1"></div>
                <div class="card">
                    <h2>Courses Completed</h2>
                    <p>7</p>
                </div>
        </div>
    </div>
    <!-- content selesai -->


    <script src="js/script.js"></script>
</body>
</html>