<?php
    include_once('../config/config.php');
    include_once('../config/Mysql.php');
    
    
    $searchTerm = $_POST['searchTerm'];
    
    $database = new Database();
    $database->query("SELECT name, imageName, smallDescription FROM truck WHERE name LIKE '%$searchTerm%' ORDER BY id DESC LIMIT 10");
    $rows = $database->resultset();

	foreach($rows AS $value)
	{
		echo '
            <a href="trucks/'.$value["imageName"].'/" class="foodTruckBox">
        		<div class="foodTruckBoxInfo">
        			<div class="foodTruckBoxInfoBlock">
        				<h2>'.$value["name"].'</h2>
        				<p>'.$value['smallDescription'].'</p>
        			</div>
        		</div>
    			<img src="public/images/'.$value['imageName'].'.jpg" />
    		</a>
		';
	}