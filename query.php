<?php

require 'vendor\autoload.php'; 
use GuzzleHttp\Client;


   $client = new Client();

    $response = $client->request(
        'GET',
        'https://jsonplaceholder.typicode.com/posts',
        [
               'query'=>[
                     'userId' => 1,
                     'userId' => 2
               ]
        ]
    );

      var_dump($response);
      echo $response->getBody();



?>