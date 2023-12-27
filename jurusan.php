<?php
include 'components/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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
            <li><a href="smile.php"><i class='bx bx-user' ></i>SMile</a></li>
            <li class="active"><a href="jurusan.php"><i class='bx bxs-graduation'></i>Pilih Jurusan</a></li>
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
    <div class="content-step">
        <nav>
        </nav>
        <main>
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">

                        <li role="presentation" class="active">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                <span class="round-tab">
                                    <i class="fa">1</i>
                                </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                <span class="round-tab">
                                <i class="fa">2</i>
                                </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                <span class="round-tab">
                                <i class="fa">3</i>
                                </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-ok"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <form method="post">
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="step1">
                            <h3>Pilih Fakultas</h3>                        
                            <div class="form-group">
                                <select class="form-control" id="fakultasDropdown" name="fakultas">
                                    <option value="" disabled selected>--Select Fakultas--</option>
                                    <option value="fakultas Bahasa Seni">Fakultas Bahasa dan Seni</option>
                                    <option value="fakultas Ekonomi">Fakultas Ekonomi</option>
                                    <option value="fakultas Ilmu Olahraga">Fakultas Ilmu dan Olahraga</option>
                                    <option value="fakultas Ilmu Pendidikan">Fakultas Ilmu Pendidikan</option>
                                    <option value="fakultas Ilmu Sosial">Fakultas Ilmu Sosial</option>
                                    <option value="fakultas Matematika">Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
                                    <option value="fakultas Pendidikan Psikologi">Fakultas Pendidikan Psikologi</option>
                                    <option value="fakultas Teknik">Fakultas Teknik</option>
                                    <option value="pascasarjana">Pascasarjana</option>
                                    <option value="program Profesi Guru">Program Profesi Guru</option>
                                    <option value="rpl">Rekayasa Perangkat Lunak (RPL)</option>
                                </select>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                            </ul>
                        </div>

                        <div class="tab-pane" role="tabpanel" id="step2">
                            <h3>Pilih Prodi</h3>
                            <div class="form-group">
                                <select class="form-control" id="prodiDropdown" name="prodi">
                                    <option value="" disabled selected>--Pilih Program Studi--</option>
                                    <option value="S1 Pendidikan Bahasa Arab">S1 Pendidikan Bahasa Arab</option>
                                    <option value="S1 Pendidikan Bahasa dan Sastra Indonesia">S1 Pendidikan Bahasa dan Sastra Indonesia</option>
                                    <option value="S1 Pendidikan Bahasa Inggris">S1 Pendidikan Bahasa Inggris</option>
                                    <option value="S1 Pendidikan Bahasa Jepang">S1 Pendidikan Bahasa Jepang</option>
                                    <option value="S1 Pendidikan Bahasa Jerman">S1 Pendidikan Bahasa Jerman</option>
                                    <option value="S1 Pendidikan Bahasa Mandarin">S1 Pendidikan Bahasa Mandarin</option>
                                    <option value="S1 Pendidikan Bahasa Perancis">S1 Pendidikan Bahasa Perancis</option>
                                    <option value="S1 Pendidikan Musik">S1 Pendidikan Musik</option>
                                    <option value="S1 Pendidikan Seni Rupa">S1 Pendidikan Seni Rupa</option>
                                    <option value="S1 Pendidikan Tari">S1 Pendidikan Tari</option>
                                    <option value="S1 Sastra Indonesia">S1 Sastra Indonesia</option>
                                    <option value="S1 Sastra Inggris">S1 Sastra Inggris</option>
                                    <option value="S2 Magister Pendidikan Bahasa Inggris">S2 Magister Pendidikan Bahasa Inggris</option>
                                </select>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                            </ul>
                        </div>

                        <div class="tab-pane" role="tabpanel" id="step3">
                            <h3>Pilih Mata Kuliah</h3>
                            <div class="form-group">
                                <select class="form-control" id="matkulDropdown" name="matkul">
                                    <option value="" disabled selected>--Pilih Mata Kuliah--</option>
                                    <option value="Interpretive Listening">Interpretive Listening</option>
                                    <option value="ICT Language Learning and Presentation">ICT Language Learning and Presentation</option>
                                    <option value="Psikologi Pendidikan">Psikologi Pendidikan</option>
                                    <option value="Advanced Listening">Advanced Listening</option>
                                    <option value="Paragraph Writing">Paragraph Writing</option>
                                    <option value="Speaking for Formal Setting">Speaking for Formal Setting</option>
                                    <option value="Critical Reading">Critical Reading</option>
                                    <option value="Essay Writing">Essay Writing</option>
                                    <option value="Sociolinguistics">Sociolinguistics</option>
                                    <option value="Teaching English to Young Learners">Teaching English to Young Learners</option>
                                    <option value="English Phonetics and Phonology">English Phonetics and Phonology</option>
                                    <option value="Business English">Business English</option>
                                    <option value="Principles of Language Learning">Principles of Language Learning</option>
                                    <option value="Basic Poetry">Basic Poetry</option>
                                    <option value="Language Learning Assessment">Language Learning Assessment</option>
                                    <option value="English Morphology and Syntax">English Morphology and Syntax</option>
                                    <option value="Education Management">Education Management</option>
                                    <option value="Semantics and Pragmatics">Semantics and Pragmatics</option>
                                    <option value="English Curriculum and Instructional Plan">English Curriculum and Instructional Plan</option>
                                    <option value="Micro Teaching">Micro Teaching</option>
                                    <option value="Instructional Material and Development">Instructional Material and Development</option>
                                </select>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="complete">
                            <h3>Complete</h3>
                            <p>Your selection:</p>
                            <div id="result"></div>
                            <a href="jurusan.php" class="btn-ok">Ok</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </main>
    </div>
    <!-- navbar selesai -->


    <script src="js/script.js"></script>
    <script>
        function displaySelectedChoices() {
            var selectedFakultas = $('#fakultasDropdown').val();
            var selectedProdi = $('#prodiDropdown').val();
            var selectedMatkul = $('#matkulDropdown').val();

            var tableHtml = '<table class="table table-bordered">';
            tableHtml += '<tr><td><strong>Fakultas</strong></td><td>' + (selectedFakultas !== '' ? selectedFakultas : 'null') + '</td></tr>';
            tableHtml += '<tr><td><strong>Program Studi</strong></td><td>' + (selectedProdi !== '' ? selectedProdi : 'null') + '</td></tr>';
            tableHtml += '<tr><td><strong>Mata Kuliah</strong></td><td>' + (selectedMatkul !== '' ? selectedMatkul : 'null') + '</td></tr>';
            tableHtml += '</table>';

            $('#result').html(tableHtml);
        }



        function nextTab() {
            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            $active.next().find('a[data-toggle="tab"]').click();

            displaySelectedChoices();
        }

        function prevTab() {
            var $active = $('.wizard .nav-tabs li.active');
            $active.prev().find('a[data-toggle="tab"]').click();
        }

        // Document ready
        $(document).ready(function () {
            $('.nav-tabs > li a[title]').tooltip();

            // Wizard
            $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
                var $target = $(e.target);
                if ($target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function () {
                nextTab();
            });

            $(".prev-step").click(function () {
                prevTab();
            });

            $(".next-step").on('shown.bs.tab', function (e) {
                if ($(e.target).attr('href') === '#complete') {
                    displaySelectedChoices();
                }
            });

            // displaySelectedChoices();
        });

    </script>
</body>
</html>



