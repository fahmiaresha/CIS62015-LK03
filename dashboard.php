<?php require_once("script/auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahmi - LK02</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="profile.php">Profil</a>
        <a href="mata_kuliah.php">Mata Kuliah</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <div class="topnav-right">
            <a href="script/logout.php" class="active">Logout</a>
        </div>
    </div>

        <div class="container modal-content animate">
            <h1>Halaman Dashboard</h1>
            <p>This is your detailed account information.</p>
            <div class="imgcontainer">
                <img src="images/img_avatar.png" alt="Avatar" class="avatar">
            </div>
            
            <label for="Nama Lengkap"><b>Nama Lengkap</b></label>
            <input type="text" placeholder="Masukkan Nama Lengkap" name="nama_lengkap" id="Nama Lengkap" value="<?php echo $_SESSION["user"]["nama_lengkap"] ?>">

            <label for="Nim"><b>NIM</b></label>
            <input type="text"  name="nim" id="nim" readonly value="<?php echo $_SESSION["user"]["nim"] ?>">

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Masukkan Email" name="email" id="email" value="<?php echo $_SESSION["user"]["email"] ?>">

            <label for="psw"><b>Prodi</b></label>
            <input type="text" placeholder="Masukkan Prodi" name="prodi" id="prodi" value="<?php echo $_SESSION["user"]["prodi"] ?>">

            <label for="psw"><b>Jurusan</b></label>
            <input type="text" placeholder="Masukkan Jurusan" name="jurusan" id="jurusan" value="<?php echo $_SESSION["user"]["jurusan"] ?>">
            
            <hr>
        </div>


    <div class="footer">
        <p>© 2022 M.Fahmi Aresha. All Rights Reserved</p>
    </div>
</body>


</html>