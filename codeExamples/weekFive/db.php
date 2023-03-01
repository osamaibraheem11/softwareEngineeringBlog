<?php
$con = mysqli_connect('localhost', 'root', 'Slu2023hello01', 'phpExample');
    if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
	}