<?php

$hostname = "localhost";

$username = "root";

$password = "Slu2023hello01";

$database = "phpExample";

$mySQL = new mysqli($hostname, $username, $password, $database);

function writeRowToDatabase($tableName,$data) {
    global $mySQL;
    
    $name = $data[0];
    $gender = $data[1];
    $age = $data[2];
    $height = $data[3];
    $weight = $data[4];

    $query = "INSERT INTO $tableName (name, gender, age, height, weight) VALUES ('$name', '$gender', '$age', '$height', '$weight');";
    echo $query;
    if ($mySQL->query($query) === TRUE) {
        echo "New record created successfully \n";
      } else {
        echo "Error: " . $query . "<br>" . $mySQL->error;
      }
}

function getRowsFromDatabase($tableName) {
    global $mySQL;

    $query = "SELECT * FROM $tableName;";

    echo "Reading data from database now. \n";

    $result = $mySQL->query($query);
    foreach ($result as $row) {
        var_dump($row);
    }
}

$fileName = readline('Enter the file name you would like to be read? ');

if (($handle = fopen("files/$fileName", "r")) !== FALSE) {
    fgetcsv($handle);
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        writeRowToDatabase("bioStats", $data);
    }
    fclose($handle);
    getRowsFromDatabase("bioStats");
    $mySQL->close();
} else {
    echo "File does not exist";
}