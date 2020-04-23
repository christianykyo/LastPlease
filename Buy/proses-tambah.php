<?php

include 'koneksi.php';

if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $flavor = $_POST['flavor'];
  $size = $_POST['size'];
  $total = $_POST['total'];
  

  $hrg_tot = $flavor * $total;

  $sql = "INSERT INTO buy (name, flavor, size, total, hrg_tot)
            VALUES ('$name', '$flavor', '$size', '$total', '$hrg_tot')";

$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1)
{
   header("Location: http://localhost/sweet/table/index.php");
}
else
{
   header("Location: index.php");
}
}
?>