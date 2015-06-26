<?php
/**
 * Created by PhpStorm.
 * User: rizamasta
 * Date: 6/11/15
 * Time: 5:31 PM
 */

/**
 * Configuration for: Project URL
 * Put your URL here, for local development "127.0.0.1" or "localhost" (plus sub-folder) is fine
 */
define('URL', 'http://localhost/sma-pesisirtengah/client/');
define('URLADMIN','http://localhost/sma-pesisirtengah/sma-pesisir/admin/');
define('Nama_Sekolah', "Sman 1 Pesisir Tengah");
define('pembuat', "Eticla21");
/**
 * Configuration for: Database
 * This is the place where you define your database credentials, database type etc.
 */

$db_host="localhost";
$db_name="db_sekolah_sma";
$db_user="root";
$db_pass="root";
$koneksi=mysql_connect($db_host,$db_user,$db_pass);
if($koneksi){

    //echo "koneksi benar";
}
else{
    echo "gagal koneksi";
}
$db_selected=mysql_select_db($db_name,$koneksi);