<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $prodi=$_POST['prodi'];
 $fakultas=$_POST['fakultas'];
 $angkatan=$_POST['angkatan'];
 $q=mysqli_query($con,"INSERT INTO `mahasiswa` (`nim`,`nama`,`prodi`,`fakultas`,`angkatan`) VALUES ('$nim','$nama','$prodi','$fakultas','$angkatan')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
