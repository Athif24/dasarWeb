<!-- <?php //Fungsi tidak dengan parameter
// function perkenalan() {
//     echo "Assalamu'alaikum, ";
//     echo "Perkenalkan, nama saya Muhammad 'Athif Attaqy <br/>";
//     echo "Senang berkenalan dengan Anda <br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan();
?> -->

<!-- <?php //Fungsi dengan parameter
// //membuat fungsi
// function perkenalan($nama, $salam) {
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda <br/>";
// }

// //memenggil fungsi yang sudah dibuat
// perkenalan("'Athif", "Hallo");
//     echo "<hr>";
// $saya="Muhammad 'Athif A";
// $ucapanSalam="Selamat pagi";

// //memanggil lagi
// perkenalan($saya, $ucapanSalam);
?> -->

<!-- <?php //Fungsi dengan parameter dengan nilai default
// //membuat fungsi
// function perkenalan($nama, $salam="Assalamu'alaikum") {
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda <br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan("'Athif", "Hallo");
//     echo "<hr>";
// $saya="Muhammad 'Athif A";
// $ucapanSalam="Selamat Pagi";

// //memanggil lagi tanpa mengisi parameter salam
// perkenalan($saya);
?> -->

<!-- <?php //Fungsi yang mengambil nilai
// //membuat fungsi
// function hitungUmur($thn_lahir, $thn_sekarang) {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }
// echo "Umur saya adalah ".hitungUmur(2003, 2024) ." tahun"
?> -->

<!-- <?php //Memanggil fungsi di dalam fungsi
// //membuat fungsi
// function hitungUmur($thn_lahir, $thn_sekarang) {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }
// function perkenalan($nama, $salam="Assalamu'alaikum") {
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
    
//     //memanggil fungsi lain
//     echo "Saya berusia ". hitungUmur(2003, 2024) ." tahun<br/>";
//     echo "Senang berkenalan dengan Anda <br/>";
// }

// //memanggil fungsi perkenalan
//     perkenalan("Muhammad 'Athif A");
?> -->