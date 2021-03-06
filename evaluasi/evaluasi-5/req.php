<?php

require_once "vendor/autoload.php";

use GuzzleHttp\Client;
if (isset($_POST['login'])) {
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://api.pondokprogrammer.com/api/',
    ]);
    
    $response = $client->request('POST', 'student_login', [
        "form_params" => [
            "email" => $_POST['email'],
            "password" => $_POST['password']
        ]
    ]);
    
    //get status code using $response->getStatusCode();
    
    $data = json_decode($response->getBody());
    // var_dump($data);
    $token = $data->token;

    $header = $client->request('POST', 'class/qr?class_id=117', [
        'headers' => [
            'Authorization' => "bearer $token"
        ]
    ]);
    
    $view = $header->getBody()->getContents();
    print_r($view);
}