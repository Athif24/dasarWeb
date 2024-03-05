<?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil Tambah      : {$hasilTambah} <br>";
    echo "Hasil Kurang      : {$hasilKurang} <br>";
    echo "Hasil Kali        : {$hasilKali} <br>";
    echo "Hasil Bagi        : {$hasilBagi} <br>";
    echo "Hasil Sisa Bagi   : {$sisaBagi} <br>";
    echo "Hasil Pangkat     : {$pangkat} <br><br>";

    $hasilSama = $a == $b;
    $hasiTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "Hasil Sama                : {$hasilSama} <br>";
    echo "Hasil Tidak Sama          : {$hasiTidakSama} <br>";
    echo "Hasil Lebih Kecil         : {$hasilLebihKecil} <br>";
    echo "Hasil Lebih Besar         : {$hasilLebihBesar} <br>";
    echo "Hasil Lebih Kecil Sama    : {$hasilLebihKecilSama} <br>";
    echo "Hasil Lebih Besar Sama    : {$hasilLebihBesarSama} <br><br>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Hasil And     : {$hasilAnd} <br>";
    echo "Hasil Or      : {$hasilOr} <br>";
    echo "Hasil Not A   : {$hasilNotA} <br>";
    echo "Hasil Not B   : {$hasilNotB} <br><br>";

    $a += $b;
    $a -= $b;
    $a *= $b;
    $a /= $b;
    $a %= $b;

    echo "Hasil Tambah SamaDengan   : ", $a += $b;
    echo "<br>";
    echo "Hasil Kurang SamaDengan   : ", $a -= $b;
    echo "<br>";
    echo "Hasil Kali SamaDengan     : ", $a *= $b;
    echo "<br>";
    echo "Hasil Bagi SamaDengan     : ", $a /= $b;
    echo "<br>";
    echo "Hasil SisaBagi SamaDengan : ", $a %= $b;
    echo "<br><br>";

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "Hasil Identik         : {$hasilIdentik} <br>";
    echo "Hasil Tidak Identik   : {$hasilTidakIdentik} <br><br>";

    $kursiTersedia = 45;
    $kursiTerpakai = 28;

    $kursiKosong = $kursiTersedia - $kursiTerpakai;
    $persentaseKursiKosong = ($kursiKosong/$kursiTersedia) * 100;
    
    echo "Jadi Persentase Kursi Yang Kosong adalah {$persentaseKursiKosong}% <br>";


?>