<?php
$conn_string = "host=john.db.elephantsql.com " . 
  "port=5432 dbname=bbabwdoj " .
  "user=bbabwdoj " . 
  "password=ymZ9MmRIoXZ_YS8YThBXkn11Zc-e56h5";
$conn = pg_connect($conn_string);

if($conn) {
    echo "Koneksi database berhasil tersambung";
} else {
    echo "Koneksi dengan database GAGAL tersambung";
}
?>