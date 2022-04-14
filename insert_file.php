<?php
include 'script/koneksi2.php';
    $sql=$conn->query("insert into file(nama_file, deskripsi_file) 
    values('".$_POST['nama_file']."','".$_POST['deskripsi_file']."') ");
	
	$last_id = mysqli_insert_id($conn); 

    if(isset($_POST['simpan'])){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file_gambar/'.$nama);
					$query = mysqli_query($conn,"UPDATE file SET direktori_file ='$nama' WHERE id_file='$last_id'");
					if($query){
						echo 'FILE BERHASIL DI UPLOAD';
						header("location:mata_kuliah.php");
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}
?>