<?php 

function region_getall()
{
    $sql = "SELECT * FROM region";

    $result = database_execute($sql);

    return $result;
}

function region_getallpaged($take, $skip) {
    $sql = "SELECT * FROM region ORDER BY name LIMIT " . $skip . ", " . $take;

    $result = database_execute($sql);

    return $result;
}
?>