<?php
$page = isset($_GET['page']) ? $_GET['page'] : null;

if ($page == 'getProduct') {
    $result = new \stdClass();
    $result->id = 1234;
    $result->name = 'First product name';

    $response = new \stdClass();
    $response->result = $result;
    $response->error = null;
    $response->id = rand(0,10);

    $handle = fopen('requests1.log', 'a');
    fwrite($handle, $page . ' ' . date('Y-m-d H:i:s') . "\n");
    fclose($handle);

} else if ($page == 'getOrder') {
    $result = new \stdClass();
    $result->id = 5678;
    $result->name = 'First order name';

    $response = new \stdClass();
    $response->result = $result;
    $response->error = null;
    $response->id = rand(0,10);

    $handle = fopen('requests2.log', 'a');
    fwrite($handle, $page . ' ' . date('Y-m-d H:i:s') . "\n");
    fclose($handle);

} else {
    echo 'NOTHING!!!';
}



exit(json_encode($response));