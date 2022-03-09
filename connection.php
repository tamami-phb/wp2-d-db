<?php
$conn_string = "host=172.17.0.2 port=5432 dbname=wp2_d user=postgres password=secret";
$conn = pg_connect($conn_string);

if($conn) {
    echo "Koneksi database berhasil tersambung";
} else {
    echo "Koneksi dengan database GAGAL tersambung";
}
?>