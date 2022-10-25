<?php
    $db_host = 'localhost'; //name server
    $db_user = 'root'; //user server
    $db_pass = ''; //password server
    $db_name = 'produk'; //name database
    //simpan koneksi ke database ke variable $conn
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
    }
?>