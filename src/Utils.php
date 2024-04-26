<?php
namespace App;

use Exception;

class Utils {
    public static function  getMyUrl ($path) 
    {
        $url = 'http://localhost:8001/api/' . $path;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        $data = json_decode($response, true);
        // dd($data);
        return $data;
    }


    public static function makeRequest ($token, $path, $method, $data=null)
    {
        $headers = "Content-Type: application/ld+json\r\n".
           "x-api-token: $token";

        $options = array(
            'http' => array(
                'method' => $method,
                'header' => $headers,
                'content' => $data
            )
        );

        $context = stream_context_create($options);
        // dd($context);
        try{
            $response = file_get_contents($path, false, $context);
                        // dd($response);

            return $response;

        } catch (Exception $e) {
            // dd($e);
            $httpStatus = $http_response_header[0];
            return $httpStatus;
            ;
        }


    }
}


