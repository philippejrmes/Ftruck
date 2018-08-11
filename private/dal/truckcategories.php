<?php 

function truckcategories_gettruckcategories($truckid)
{
    $sql = "SELECT c.name as category, t.name as truckname
        FROM truckcategories as tc
        INNER JOIN truck as t ON t.idtruck = tc.truckid
        INNER JOIN category as c ON c.idcategory = tc.categoryid
        WHERE t.idtruck = " . $truckid;

    $result = database_execute($sql);

    return $result;
}
?>