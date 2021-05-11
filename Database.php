<?php
if (isset($_POST['submit'])){ 
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$pekerjaan = $_POST['pekerjaan'];

function hitung_umur($tgl_lahir){
	$birthDate = new DateTime($tgl_lahir);
	$today = new DateTime("today");
	if ($birthDate > $today) { 
	    exit("0 tahun 0 bulan 0 hari");
	}
	$y = $today->diff($birthDate)->y;
    return $y." tahun ";
    
}

if ($pekerjaan == "Pengusaha") {
    $gaji = "Rp.5000000";
} elseif ($pekerjaan == "Pengajar") {
    $gaji = "Rp.4000000";
} else {
}

$umur = hitung_umur($tgl_lahir);
echo "
<html>
<head>
</head>
<body>
    <h1>Praktikum 7: PHP Dasar Rahmat Hasibuan</h1>
    <p>nama : $nama</p>
    <p>tanggal lahir: $tgl_lahir </p>
    <p>pekerjaan : $pekerjaan </p>
    <p>umur : $umur </p>
    <p>gaji: $gaji </p>
</body>
</html>
";}
?>