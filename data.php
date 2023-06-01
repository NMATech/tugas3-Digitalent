<?php

// Link json ke php
$data = file_get_contents("data(1).json");
$data = json_decode($data);

// pembuatan function untuk echo
function printHarga($a, $b, $c, $d)
{
    echo "Anda menggunakan maskapai $a memilih pemberangkatan dari $b ke tujuan $c";
    echo "<br>Total harga yang harus dibayar adalah $d Rupiah.";
}

// input nama maskapai
$maskapai = $_POST['maskapai'];

// input asal pemberangkatan
$asal = $_POST['asal'];

// input tujuan pemberangkatan
$tujuan = $_POST['tujuan'];

// input harga tiket
$hargaTiket = $_POST['hargaTiket'];

// perulangan untuk menghitung nilai total harga
if ($maskapai == $data[0][0] & $asal == $data[0][1] & $tujuan == $data[0][2] & $hargaTiket == $data[0][3]) {
    printHarga($data[0][0], $data[0][1], $data[0][2], $data[0][5]);
} else if ($maskapai == $data[1][0] & $asal == $data[1][1] & $tujuan == $data[1][2] & $hargaTiket == $data[1][3]) {
    printHarga($data[1][0], $data[1][1], $data[1][2], $data[1][5]);
} else if ($maskapai == $data[2][0] & $asal == $data[2][1] & $tujuan == $data[2][2] & $hargaTiket == $data[2][3]) {
    printHarga($data[2][0], $data[2][1], $data[2][2], $data[2][5]);
} else if ($maskapai == $data[3][0] & $asal == $data[3][1] & $tujuan == $data[3][2] & $hargaTiket == $data[3][3]) {
    printHarga($data[3][0], $data[3][1], $data[3][2], $data[3][5]);
} else if ($maskapai == $data[4][0] & $asal == $data[4][1] & $tujuan == $data[4][2] & $hargaTiket == $data[4][3]) {
    printHarga($data[4][0], $data[4][1], $data[4][2], $data[4][5]);
} else if ($maskapai == $data[5][0] & $asal == $data[5][1] & $tujuan == $data[5][2] & $hargaTiket == $data[5][3]) {
    printHarga($data[5][0], $data[5][1], $data[5][2], $data[5][5]);
} else if ($maskapai == $data[6][0] & $asal == $data[6][1] & $tujuan == $data[6][2] & $hargaTiket == $data[6][3]) {
    printHarga($data[6][0], $data[6][1], $data[6][2], $data[6][5]);
} else {
    echo "Pilihan yang anda inputkan tidak tersedia";
}

?>