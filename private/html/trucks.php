<?php
include_once ('private/config/config.php');
include_once ('private/service/trucks_service.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FoodTruck website - Vind een FoodTruck</title>
		
		<?php include_once ('private/html/head.php'); ?>
		
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
			include_once ('nav.php');
		?>

		<main>
			<div id="foodtruckIntroPhoto">
				<h1>Ook opzoek naar een Foodtruck voor op uw feest ?</h1>
			</div>
			<div id="content">
				<div id="searchBox">
					<div id="searchFieldHolder">
					    <div id="advancedSearchBtn" class="fa fa-plus"></div>
						<input type="text" placeholder="Zoek een foodtruck" />
						<div id="searchBtn" class="fa fa-search"></div>
					</div>
				</div>
				<div id="topContainerItems" class="foodTruckContainer">
			    <?php
			        foreach(getTrucksLimited(10) AS $value)
			        {
			            echo '
    			            <a href="trucks/'.$value["idtruck"].'/" class="foodTruckBox">
        						<div class="foodTruckBoxInfo">
        							<div class="foodTruckBoxInfoBlock">
        								<h2>'.$value["name"].'</h2>
        								<p>'.$value['smalldescription'].'</p>
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
    			            <a href="trucks/'.$value["idtruck"].'/" class="foodTruckBox">
        						<div class="foodTruckBoxInfo">
        							<div class="foodTruckBoxInfoBlock">
        								<h2>'.$value["name"].'</h2>
        								<p>'.$value['smalldescription'].'</p>
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
			include_once ('footer.php');
		?>

		<script>
			$('body').on('mouseover', '.foodTruckBox', function(){
				$(this).find('.foodTruckBoxInfo').css('display', 'block');
			});
			$('body').on('mouseout', '.foodTruckBox', function(){
				$(this).find('.foodTruckBoxInfo').css('display', 'none');
			});

			$('#navBurger').on('click', function(){
				console.log('ok');
				if($('#dropdownMenu').hasClass('dropdownMenuActive'))
				{
					console.log('ok2');
					$('#dropdownMenu').removeClass('dropdownMenuActive');
				} else {
					$('#dropdownMenu').addClass('dropdownMenuActive');
				}
			});
			
			$('#advancedSearchBtn').on('click', function(){
			    $('#advancedSearchBoxWrapper').css('display', 'block');
			});
			
			$('#searchFieldHolder > input').on('keyup', function(){
			    var searchTerm = $('#searchFieldHolder > input').val();
        	  	$.ajax({
                    type: 'POST',
            		url: 'private/scripts/searchTruck.php',
            		data: { searchTerm: searchTerm }
                }).done(function(data){
                    console.log(data);
                    $('#topContainerItems').empty();
                    $('#topContainerItems').append(data);
                }).fail(function(){
                    alert("Ajax failed to fetch data");
                }); 
			});
			/*
			$('#searchBtn').on('click', function(){
			    var searchTerm = $('#searchFieldHolder > input').val();
        	  	$.ajax({
                    type: 'POST',
            		url: 'private/scripts/searchTruck.php',
            		data: { searchTerm: searchTerm }
                }).done(function(data){
                    console.log(data);
                    $('#topContainerItems').empty();
                    $('#topContainerItems').append(data);
                }).fail(function(){
                    alert("Ajax failed to fetch data");
                }); 
			});
            */
		</script>
	</body>
</html>