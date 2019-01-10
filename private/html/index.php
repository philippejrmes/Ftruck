<?php
	include_once ('private/config/config.php');
	// dependency services
	include_once ('private/service/index_service.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FoodTruck website - Home page</title>

		<?php include_once('private/html/head.php'); ?>

		<!-- custom page css -->
		<link href="public/css/trucks.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	    <div id="advancedSearchBoxWrapper">
	        <div id="advancedSearchBoxPlacer">
	            <div id="selectionMenuPlacer">
    	            <div class="dropdownHolder">
    	                <div class="dropdownHeader">Kies een Locatie</div>
    	            </div>
    	            <div class="dropdownHolder">
    	                <div class="dropdownHeader">Kies een Categorie</div>
    	            </div>
    	            <div class="dropdownHolder">
    	                <div class="dropdownHeader">Soort Evenement</div>
    	            </div>
	            </div>
	        </div>
	    </div>
		<?php
			include_once('nav.php');
		?>

		<main>
			<div id="foodtruckIntroPhoto">
				<h1>Ook opzoek naar een Foodtruck voor op uw feest ?</h1>
			</div>
			<div id="content">
			    <!--
				<div id="searchBox">
					<div id="searchFieldHolder">
					    <div id="advancedSearchBtn" class="fa fa-plus"></div>
						<input type="text" placeholder="Zoek een foodtruck" />
						<div id="searchBtn" class="fa fa-search"></div>
					</div>
				</div>
				-->
				<div class="foodTruckContainer">
			    <?php
			        foreach(getTrucksLimited(10) AS $value)
			        {
			            echo '
    			            <a class="foodTruckBox">
        						<div class="foodTruckBoxInfo">
        							<div class="foodTruckBoxInfoBlock">
        								<h2>'.$value["name"].'</h2>
        								<p>'.$value['smallDescription'].'</p>
        							</div>
        						</div>
    						    <img src="public/images/'.$value['imageName'].'" />
    					    </a>
					    ';
			        }
			    ?>
				</div>
				<div id="contactUs">
					<div id="contactUsButton">RESERVEER NU EEN TRUCK</div>
				</div>
				<div class="foodTruckContainer">
				    <?php
				    foreach(getRandomTrucks() AS $value)
			        {
			            echo '
    			            <a class="foodTruckBox">
        						<div class="foodTruckBoxInfo">
        							<div class="foodTruckBoxInfoBlock">
        								<h2>'.$value["name"].'</h2>
        								<p>'.$value['smallDescription'].'</p>
        							</div>
        						</div>
    						    <img src="public/images/'.$value['imageName'].'" />
    					    </a>
					    ';
			        }
			        ?>
				</div>
			</div>
		</main>

		<?php
			include_once('footer.php');
		?>

		<script>
			$('.foodTruckBox').on('mouseover', function(){
				$(this).find('.foodTruckBoxInfo').css('display', 'block');
			});
			$('.foodTruckBox').on('mouseout', function(){
				$(this).find('.foodTruckBoxInfo').css('display', 'none');
			});
			
			$('#advancedSearchBtn').on('click', function(){
			    $('#advancedSearchBoxWrapper').css('display', 'block');
			});
		</script>
	</body>
</html>