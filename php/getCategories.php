<?php

function getCategories(){
    $url = 'http://zutiws.dis.rs/serpod/SerPodM.dll/onl_liskat';
    $data = array('key1' => 'val1', 'key2' => 'val2');
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    if ($response === FALSE) 
    { /* Handle error */ 

    }
    $json_array=json_decode($response,true); 
    
    return $json_array;
    //var_dump($json_array);
}
    
?>