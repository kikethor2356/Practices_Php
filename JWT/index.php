<?php

require 'vendor/autoload.php'; // Asegúrate de tener el archivo autoload.php de firebase/php-jwt

use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

$sec_key = '85ldofi';
$payload = array( 
    'isd' => 'localhost',
    'aud' => 'localhost',
    'username' => 'kike',
    'password' => 'kike'
);

$encode = JWT::encode($payload, $sec_key, 'HS256');

$header = apache_request_headers();
//var_dump($header);



if($header['Authorization']){
    $header =$header['Authorization'];
    $decode = JWT::decode($header, new Key($sec_key, 'HS256'));
}

echo $decode->username;

//$decode = JWT::decode($encode, new Key($sec_key, 'HS256'));
//print_r($decode);
print_r($encode);

?>