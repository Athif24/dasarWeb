<!-- <?php
// function tampilkanHaloDunia() {
//     echo "Halo dunia! <br>";
//     tampilkanHaloDunia();
// }
// tampilkanHaloDunia();
?> -->

<!-- <?php
// for ($i=1; $i<=25; $i++) {
//     echo "Perulangan ke-{$i} <br>";
// }
?> -->

<!-- <?php
// function tampilkanAngka (int $jumlah, int $indeks = 1) {
//     echo "Perulangan ke-($indeks) <br>";

//     //panggil diri sendiri selama $indeks <= $jumlah
//     if($indeks < $jumlah) {
//         tampilkanAngka($jumlah, $indeks + 1);
//     }
// }
// tampilkanAngka(20);
?> -->

<?php
$menu = [
        [
            "nama" => "Beranda"
        ],
        [
            "nama" => "Berita",
            "subMenu" => [
                [
                    "nama" => "Wisata",
                    "subMenu" => [
                        [
                            "nama" => "Pantai"
                        ],
                        [
                            "nama" => "Gunung"
                        ]
                    ]
                ],
                [
                    "nama" => "Kuliner"
                ],
                [
                    "nama" => "Hiburan"
                ]
            ]
        ],
        [
            "nama" => "Tentang"
        ],
        [
            "nama" => "Kontak"
        ]
    ];

    function tampilkanMenubertingkat(array $menu) {
        echo "<ul>";
        foreach ($menu as $key => $item) {
            echo "<li>{$item['nama']}";
            if (isset($item['subMenu'])) {
                tampilkanMenubertingkat($item['subMenu']);
            }
            echo "</li>";
        }
        echo "</ul>";
    }

    tampilkanMenubertingkat($menu);
?>