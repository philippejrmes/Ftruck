<?php 

function category_getall()
{
    $sql = "SELECT *
        FROM category";

    $result = database_execute($sql);

    return $result;
}
?>