<?php
$conn = mysqli_connect("localhost", "root", "", "db_tancak_panti");
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>