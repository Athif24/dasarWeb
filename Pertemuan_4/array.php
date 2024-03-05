<?php
    $nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
    $nilaiLulus = [];
    foreach ($nilaiSiswa as $nilai) {
        if ($nilai >= 70) {
            array_push($nilaiLulus, $nilai);
        }
    }
    echo "Total skor ujian adalah ". implode(', ',$nilaiLulus). ". <br><br>";

    $daftarKaryawan = [
        ['Alice', 7],
        ['Bob', 3],
        ['Charlie', 9],
        ['David', 5],
        ['Eva', 6],
    ];
    $karyawanPengalamanLimaTahun =[];
    foreach ($daftarKaryawan as $karyawan) {
        if ($karyawan[1] >= 5) {
            $karyawanPengalamanLimaTahun[] = $karyawan[0];
        }
    }
    echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun adalah ". implode(', ',$karyawanPengalamanLimaTahun). "<br><br>";

    $daftarNilai = [
        'Matematika' => [
            ['Alice', 85],
            ['Bob', 92],
            ['Charlie', 78],
        ],
        'Fisika' => [
            ['Alice', 90],
            ['Bob', 88],
            ['Charlie', 75],
        ],
        'Kimia' => [
            ['Alice', 90],
            ['Bob', 80],
            ['Charlie', 85],
        ],
    ];
    $mataKuliah = 'Fisika';
    echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah : <br>";
    foreach ($daftarNilai[$mataKuliah] as $nilai) {
        echo "Nama : {$nilai[0]}, Nilai : {$nilai[1]} <br>";
    }
    echo "<br>";

    $nilaiSiswa = [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ];
    $totalNilai = 0;
    $rataRataNilai = 0;

    foreach ($nilaiSiswa as $nilai) {
        $totalNilai += $nilai[1];
    }
    $rataRataNilai = $totalNilai / count($nilaiSiswa);
    echo "Nilai rata-rata kelas adalah $rataRataNilai. <br>";
    
    for ($i = 0; $i < 5; $i++) {
        if ($nilaiSiswa[$i][1] > $rataRataNilai) {
            echo "Nama : {$nilaiSiswa[$i][0]}, Nilai : {$nilaiSiswa[$i][1]} <br>";
        }
    }
    ?>