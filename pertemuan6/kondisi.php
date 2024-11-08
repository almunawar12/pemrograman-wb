<?php

if (isset($_POST['submit_absolute'])) {
    // satu kondisi
    echo "Kondisi 1\n";
    $a = $_POST['absolute_value'];
    if ($a < 0) {
        $a = $a * -1;
    }
    echo "Nilai mutlak dari $a adalah : " . $a . "\n";

} elseif (isset($_POST['submit_score'])) {
    // dua kondisi
    // echo "\n==========================\n";
    echo "Kondisi 2\n";
    $nilai = $_POST['score'];
    if ($nilai >= 60) {
        echo "Nilai anda : " . $nilai . " Anda Lulus\n";
    } else {
        echo "Nilai anda : " . $nilai . " Anda Tidak Lulus\n";
    }

} elseif (isset($_POST['submit_grade'])) {
    // lebih dari dua kondisi
    // echo "\n==========================\n";
    echo "Kondisi 3\n";
    $nilai = $_POST['grade'];
    if (($nilai >= 0) && ($nilai <= 50)) {
        $index = "E";
    } elseif (($nilai >= 50) && ($nilai < 60)) {
        $index = "D";
    } elseif (($nilai >= 60) && ($nilai < 75)) {
        $index = "C";
    } elseif (($nilai >= 75) && ($nilai < 85)) {
        $index = "B";
    } elseif (($nilai >= 85) && ($nilai <= 100)) {
        $index = "A";
    } else {
        $index = "Nilai Tidak Valid";
    }
    echo "Nilai anda : " . $nilai . " dikonversi menjadi :  " . $index;

} elseif (isset($_POST['submit_number'])) {
    // switch case
    // echo "\n==========================\n";
    echo "\nSwitch Case\n";
    $angka = $_POST['number'];
    switch ($angka) {
        case 0:
            $terbilang = "NOL";
            break;
        case 1:
            $terbilang = "SATU";
            break;
        case 2:
            $terbilang = "DUA";
            break;
        case 3:
            $terbilang = "TIGA";
            break;
        case 4:
            $terbilang = "EMPAT";
            break;
        case 5:
            $terbilang = "LIMA";
            break;
        case 6:
            $terbilang = "ENAM";
            break;
        case 7:
            $terbilang = "TUJUH";
            break;
        case 8:
            $terbilang = "DELAPAN";
            break;
        case 9:
            $terbilang = "SEMBILAN";
            break;
        default:
            $terbilang = "Nilai diluar jangkuan!!";
    }
    printf(
        "Bentuk terbilang dari angka '%d' adalah '%s' ",
        $angka,
        $terbilang
    );
}

?>
