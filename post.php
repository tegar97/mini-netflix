<?php 
include 'database.php';
$name = $_POST['name'];

mysqli_query($koneksi,"INSERT INTO movie VALUES('','$name','tes','10','2019')");


// header("location:add_movie.php")
?>