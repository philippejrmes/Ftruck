<!DOCTYPE html>
<html>
<head>
<title>Getting Started With PHP</title>
<?php
// includes this page needs
include 'dal/database.php';
include 'dal/category.php';
include 'dal/region.php';
include 'dal/truckcategories.php';
?>
</head>
<body>
<h1>Attempt for region</h1>
<p>get all unsorted not paged</p>
<?php
$result = region_getall();
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["idregion"] . " - Name: " . $row["name"] . "<br>";
    }
}
else {
    echo "0 results";
}
?>

<p>get all sorted and paged</p>
<?php
$result = region_getallpaged(1, 1);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["idregion"] . " - Name: " . $row["name"] . "<br>";
    }
}
else {
    echo "0 results";
}
?>

<p>get all categories of a truck</p>
<?php
$result = truckcategories_gettruckcategories(1);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "category: " . $row["category"] . " - truck: " . $row["truckname"] . "<br>";
    }
}
else {
    echo "0 results";
}
?>

<p>get all categories</p>
<?php
$result = category_getall();
if ($result != null && $result->num_rows > 0) {
    $array = $result->fetch_all();

    for($i = 0; $i<count($array); $i++){
        echo $array[$i][1];
        if ($i == count($array)-1){
            echo "<br>";
        } else {
            echo " ~~ ";
        }
    }
}
else {
    echo "0 results";
}
?>
</body>
</html>