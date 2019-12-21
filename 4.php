<?php
function sort_array($arr) {
    $rows = count($arr);
    for ($row = 0; $row < $rows; $row++) {
        sort($arr[$row]);
    }
    return json_encode($arr);
}

$array = array(
    array('d','c','e','b','a'),
    array('k','i','j'),
    array('o','z','u','x')
);

echo sort_array($array);