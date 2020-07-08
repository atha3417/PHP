<?php 

// $mahasiswa = [
// 	[
// 		"nama" => "Muhammad Atha Tsaqif",
// 		"nrp" => "123123123",
// 		"email" => "Atha.3417@gmail.com"
// 	],
// 	[
// 		"nama" => "Fayza Azmina Fachira",
// 		"nrp" => "321321321",
// 		"email" => "fayzazzra@gmail.com"
// 	]
// ];


$dbh = new PDO('mysql:host=localhost;dbname=php_dasar', 'root', '');

$db = $dbh->prepare("SELECT * FROM mahasiswa");
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;