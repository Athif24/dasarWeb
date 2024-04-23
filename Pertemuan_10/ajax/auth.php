<?php
    //Membuat Token Keamanan Ajax Request (Csrf Token)
    session_start();
    if (empty($_SESSION['crsf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
?>