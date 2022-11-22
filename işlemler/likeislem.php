<?php
require 'config.php';

$kullanici_id = $_SESSION['login'];
$kullanici = DB::getRow("SELECT * FROM uyeler WHERE id=?",array( $kullanici_id ));

$pid = $_GET['p_id'];

    
    $sql = "SELECT * FROM begeni WHERE p_id=$pid AND isim=$kullanici->uye_adi";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
            $durum = $row['durum'];
            
            }}

  
    
    if ($durum == null)
    {
	$sql = "INSERT INTO begeni (isim, p_id)
			VALUES ('$kullanici->uye_adi', '$pid')";

	$result = mysqli_query($conn, $sql);

    if ($result) {
		header("location:post?id=$pid&likeislem=1");
		exit();
    }
    }
   if ($durum == 1)
   {
    
    $sql = "UPDATE begeni SET durum=0  WHERE p_id=$pid AND isim=$kullanici->uye_adi";
    $result = mysqli_query($conn, $sql);

    if ($result) {
		header("location:post?id=$pid&likeislem=1");
		exit();
    }
   }
   if($durum == 0)
   {
    $sql = "UPDATE begeni SET durum=1  WHERE p_id=$pid AND isim=$kullanici->uye_adi";
    $result = mysqli_query($conn, $sql);

    if ($result) {
		header("location:post?id=$pid&likeislemi=1");
		exit();
    }
   }
	
