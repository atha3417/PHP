<?php 
// set time zone
date_default_timezone_set('Asia/Jakarta');
// session start
session_start();

include_once 'conn.php';

// Koneksi
$con = mysqli_connect($con['host'], $con['user'], $con['pass'], $con['db']);
if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
}

// fungsi base_url()
function base_url($url = null) {
	$base_url = "http://localhost/atha's-app/inspirasi/rumah-sakit";
	if ($url != null) {
		return $base_url."/".$url;
	} else {
		return $base_url;
	}
}


function indo_date($date) {
	$d = substr($date,8,2);
	$m = substr($date,5,2);
	$y = substr($date,0,4);
	return $d.'/'.$m.'/'.$y;
}

?>