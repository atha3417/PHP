<?php 
$conn = mysqli_connect('localhost', 'root', '', 'latihan_contact-form');
function base_url($url = null) {
	$base_url = "http://muhtasaq.dev/atha's-app/latihan/contact-form/";
	if ($url != null) {
		return $base_url."/".$url;
	} else {
		return $base_url;
	}
}
?>