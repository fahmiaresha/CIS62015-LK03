<?php
require_once("koneksi.php");

$nim = filter_input(INPUT_POST, 'nim', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM `user` WHERE `nim`='$nim' and `password`='$password' ";
$result = $db->query($sql);

$sql2 = "SELECT * FROM user WHERE nim=:nim";
$stmt = $db->prepare($sql2);

// bind parameter ke query
$params = array(
    ":nim" => $nim,
);

$stmt->execute($params);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result->rowCount() > 0){
    session_start();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION["user"] = $user;
        header("Location: ../dashboard.php");
    }
}
else{
    header("Location: ../login.php");
}

?>