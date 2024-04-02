<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selecedBuah = $_POST['buah'];

        if (isset($_POST['warna'])) {
            $selecedWarna = $_POST['warna'];
        } else {
            $selecedWarna = [];
        }

        $selectedJenisKelamin = $_POST['jenis_kelamin'];
        echo "Anda memilih buah : " .$selecedBuah. "<br>";

        if (!empty($selecedWarna)) {
            echo "Warna favorit Anda : " .implode(", ", $selecedWarna). "<br>";
        } else {
            echo "Anda tidak memilih warna favorit.<br>";
        }

        echo "Jenis kelamin Anda : " .$selectedJenisKelamin;
    }