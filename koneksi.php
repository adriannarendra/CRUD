<?php
//-1 koenksi web browser ke mysql
$host='localhost';
// kenapa user=root dan pass= karena bawaan dari xampp
$user='root';
$pass='';
$db='db_siswa';
$conn=mysqli_connect($host,$user,$pass,$db);
// if($conn){
//     echo"koneksi berhasil";
// }

//-2 memilih database
mysqli_select_db($conn,$db);
?>
