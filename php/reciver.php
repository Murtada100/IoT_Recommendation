<?php

    print_r(json_decode(file_get_contents('php://input'), true));
    $json = json_decode(file_get_contents("php://input"));
    echo ( $json);
 
    // foreach ($json->items as $item) {
//     print_r($item);
// }

