<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahmi</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
        }
    </style>
</head>

<body>

    <div class="topnav" id="myTopnav">
        <a href="profile.php">Profil</a>
        <a href="#" class="active">Mata Kuliah</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <div class="topnav-right">
            <a href="sign_up.php">Sign Up</a>
            <a href="login.php">Login</a>
        </div>
    </div>

    <div class="container">

        <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="images/img_nature_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img src="images/img_woods_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img src="images/img_5terre_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img src="images/img_mountains_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img src="images/img_lights_wide.jpg" style="width:100%">
        </div>



        <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="images/img_snow_wide.jpg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <div class="row">

            <div class="column">
                <img class="demo cursor" src="images/img_nature_wide.jpg" style="width:100%" onclick="currentSlide(5)"
                    alt="Nature and sunrise">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/img_woods_wide.jpg" style="width:100%" onclick="currentSlide(1)"
                    alt="The Woods">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/img_5terre_wide.jpg" style="width:100%" onclick="currentSlide(2)"
                    alt="Cinque Terre">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/img_mountains_wide.jpg" style="width:100%"
                    onclick="currentSlide(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/img_lights_wide.jpg" style="width:100%" onclick="currentSlide(4)"
                    alt="Northern Lights">
            </div>

            <div class="column">
                <img class="demo cursor" src="images/img_snow_wide.jpg" style="width:100%" onclick="currentSlide(6)"
                    alt="Snowy Mountains">
            </div>
        </div>
    </div>
    <br>

    <center>
        <h2>Daftar File</h2>
    </center>
    <button class="button button-blue" style="width:12%;" id="myBtn"><i class="fa fa-plus" aria-hidden="true"></i>
        Tambah File</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Tambah Daftar File</h2>
            </div>
            <div class="modal-body">
                <form action="insert_file.php" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <label for="email"><b>Nama</b></label>
                        <input type="text" placeholder="Nama File" name="nama_file" id="nama_file" required>

                        <label for="psw"><b>Deskripsi</b></label>
                        <input type="text" placeholder="Deskripsi File" name="deskripsi_file" id="deskripsi_file"
                            required>

                        <label for="psw-repeat"><b>File Gambar</b></label>
                        <input type="file" placeholder="Repeat Password" name="file" id="file">
                        <hr>
                    </div>
                    <button type="submit" name="simpan" class="registerbtn">Insert File</button>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <h3>Modal Footer</h3>
            </div> -->
        </div>

    </div>
    <center>
        <table id="table-daftar-file" class="display nowrap" style="width:100%">
            <thead style="background-color: #8c7eba;">
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Nama File</th>
                    <th>Deskripsi File</th>
                    <th>Download </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'script/koneksi2.php';
                    $sql=$conn->query("select * from file");
                    while($rs=$sql->fetch_object()) {
                ?>
                <tr>
                    <td>
                        <center> <?php echo $rs->id_file.".";?> </center>
                    </td>
                    <td>
                        <center> 
                        <a href=<?php echo "file_gambar/".$rs->direktori_file; ?> target="_blank"><img
                        width="200px" src=" <?php echo "file_gambar/".$rs->direktori_file; ?> "
                        style="cursor:pointer;"> </a> 
                        </center>
                    </td>
                    <td><?php echo $rs->nama_file;?></td>
                    <td><?php echo $rs->deskripsi_file;?></td>
                    <td>
                    <a href=<?php echo "file_gambar/".$rs->direktori_file; ?> download>
                        <button class="button button-green">
                        <i class="fa-solid fa-download"></i> Download File</button>
                    </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </center>
    <br>
    <br>

    <center>
        <h2>Riwayat Studi</h2>
    </center>
    <center>
        <table id="table-mata-kuliah" class="display nowrap" style="width:100%">
            <thead style="background-color: #8c7eba;">
                <tr>
                    <th>No.</th>
                    <th>Semester</th>
                    <th>Kode Mata Kuliah</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align:center;">1.</td>
                    <td>Ganjil 2021</td>
                    <td>CIS61021</td>
                    <td>Pengantar Data Saintis</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td style="text-align:center;">2.</td>
                    <td>Ganjil 2021</td>
                    <td>CIS61011</td>
                    <td>Manajemen Investasi Teknologi Informasi</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td style="text-align:center;">3.</td>
                    <td>Ganjil 2021</td>
                    <td>CIS61012</td>
                    <td>Tata Kelola Teknologi Informasi</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td style="text-align:center;">4.</td>
                    <td>Ganjil 2021</td>
                    <td>COM60051</td>
                    <td>Metodologi Penelitian dan Penulisan Ilmiah</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td style="text-align:center;">5.</td>
                    <td>Ganjil 2021</td>
                    <td>CIS61022</td>
                    <td>Teknik Analisis Kuantitatif dan Kualitatif Sistem Informasi</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td style="text-align:center;">6.</td>
                    <td>Ganjil 2021</td>
                    <td>CIS61023</td>
                    <td>Implementasi dan Evaluasi Sistem Informasi</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td style="text-align:center;">7.</td>
                    <td>Ganjil 2021</td>
                    <td>CSD60005</td>
                    <td>Manajemen Proyek Sistem Informasi</td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>
    </center>
    <br>
    <br>

    <div class="footer">
        <p>© 2022 M.Fahmi Aresha. All Rights Reserved</p>
    </div>

    <script>
        $('#table-mata-kuliah').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel'
            ]
        });

        $('#table-daftar-file').DataTable({ });

        function download(dir_file){
            console.log(dir_file)
            // window.location.href = dir_file;
        }


        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }

        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>


</html>