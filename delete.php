<?php
if( isset($_GET["npsn"])){
    $npsn = $_GET["npsn"];

    $server   = "localhost";
    $user     = "root";
    $password = "";
    $db       = "db_siswa";

    //koneksi
    $connect  = new mysqli($server, $user, $password, $db);

    $sql = "DELETE FROM tabel_siswa WHERE npsn=$npsn";
    $connect->query($sql);
}
header("location: /ujiansemster/index.php");
exit;
?>