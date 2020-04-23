<?php
session_start();
include 'koneksi.php';

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT username, password FROM admin
            WHERE username='$username' AND password='$password'";
    $res = mysqli_query($koneksi, $sql);

    $count = mysqli_affected_rows($koneksi);

    if($count == 1)
    {
        $_SESSION['logged']=true;
        $data_login = mysqli_fetch_assoc($res);
        header("Location: http://localhost/sweet/sweett/index.php");
        exit();
    }
    else
    {
        $_SESSION['logged']=false;
        header("Location: http://localhost/sweet/sweett/index.php");
        exit();
    }
}
?>
