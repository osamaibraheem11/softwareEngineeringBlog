<?php

require 'vendor/autoload.php';

$hostname = "localhost";

$username = "root";

$password = "Slu2023hello01";

$database = "phpExample";

$mySQL = new mysqli($hostname, $username, $password, $database);

function writeRowToDatabase($tableName,$imgUrl) {
    global $mySQL;

    $query = "INSERT INTO $tableName (imgUrl) VALUES ('$imgUrl');";
    if ($mySQL->query($query) === TRUE) {
        echo "New record created successfully \n";
      } else {
        echo "Error: " . $query . "<br>" . $mySQL->error;
      }
}

$client = new GuzzleHttp\Client();

function getImgUrlFromApi() {
    global $client;

    
    $res = $client->request('GET', 'https://dog.ceo/api/breeds/image/random');

    $resBody = json_decode($res->getBody(),true);
    $imgUrl = $resBody['message'];

    return $imgUrl;
}

function main() {

    $numberImages = readline('How many number of images would you like to get? ');

    for ($x = 0; $x <= $numberImages; $x++) {
        $imgUrl = getImgUrlFromApi();

        writeRowToDatabase('dogImgs',$imgUrl);

        echo $imgUrl . ' ';
      } 
}

main();