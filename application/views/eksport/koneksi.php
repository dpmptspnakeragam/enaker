<?php
	$host = "localhost";
	$user = "naker_nakeragam";
	$pass = "nakeragam123";
	$port = "5432";
	$dbname = "naker_new";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Koneksi gagal");
?>