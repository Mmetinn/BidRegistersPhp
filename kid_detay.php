<?php

$link=@mysqli_connect("localhost","root","") or die ("Sunucuya Bağlanamadık");
$sec=@mysqli_select_db($link,"ksk_isler") or die ("Veritabanı Seçilemedi");
    

$sql = "select * from tbl_isler where ksk_sno = " . $_GET['kid'];

$res=mysqli_query($link,$sql);
//$data = [];
while ($row=mysqli_fetch_array($res)){
	//$data[] = $row;
	echo json_encode($row);
	break;
}

// close res, and connection