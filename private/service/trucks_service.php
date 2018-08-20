<?php
include_once ('private/config/Mysql.php');

function getTrucksLimited($take)
{
    $database = new Database();
    $database->query('SELECT * FROM truck ORDER BY idtruck DESC LIMIT 10');
    $rows = $database->resultset();
    return $rows;
}

function getRandomTrucks()
{
    $database = new Database();
    $database->query('SELECT * FROM truck ORDER BY RAND() LIMIT 10');
    $rows = $database->resultset();
    return $rows;
}
?>