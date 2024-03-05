<?php
    $nilaiNumerik = 92;
    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai huruf : A";
    } elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
        echo "Nilai huruf : B";
    } elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
        echo "Nilai huruf : C";
    } elseif ($nilaiNumerik < 70) {
        echo "Nilai huruf : D";
    } 
    echo "<br><br>";

    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;
    while ($jarakSaatIni < $jarakTarget) {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }
    echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer. <br><br>";

    $jumlahLahan = 10;
    $tanamanPerlahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;
    for ($i = 1; $i <= $jumlahLahan; $i++) {
        $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
    }
    echo "Jumlah buah yang akan dipanen adalah $jumlahBuah. <br><br>";

    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;
    foreach ($skorUjian as $skor) {
        $totalSkor += $skor;
    }
    echo "Total skor ujian adalah $totalSkor. <br><br>";

    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
    foreach ($nilaiSiswa as $nilai) {
        if ($nilai < 60) {
            echo "Nilai : $nilai (Tidak Lulus). <br>";
        } 
        echo "Nilai : $nilai (Lulus). <br>";
    } echo "<br>";

    $nilaisiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    $totalNilai = 0;
    $rataRataNilai = 0;
    for ($i = 0; $i < 10; $i++) {
        if ($nilaisiswa[$i] < 92 && $nilaisiswa[$i] > 70) {
            $totalNilai += $nilaisiswa[$i];
        }
    } $rataRataNilai = $totalNilai / 8;
    echo "Nilai Totalnya adalah $totalNilai. <br>";
    echo "Nilai Rata-Ratanya adalah $rataRataNilai. <br><br>";

    $produkBayar = 120000;
    $diskon = 0.8;
    if ($produkBayar >= 100000) {
        $produkBayar *= $diskon;
    }
    echo "Total Harga yang harus dibayar oleh pelanggan adalah $produkBayar. <br><br>";

    $point = 580;
    $hadiahTambahan = ($point > 500) ? "Ya" : "Tidak";
    echo "Total skor pemain adalah $point. <br>";
    echo "Hadiah tambahan $hadiahTambahan. <br><br>";