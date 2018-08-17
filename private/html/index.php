<?php
    include_once('private/config/config.php');
    include_once('private/config/Mysql.php');
    
    $database = new Database();
    $database->query('SELECT name, imageName, smallDescription FROM truck ORDER BY idtruck DESC LIMIT 10');
    $rows = $database->resultset();
    
    $database->query('SELECT name, imageName, smallDescription FROM truck ORDER BY RAND() LIMIT 10');
    $rows2 = $database->resultset();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FoodTruck website - Home page</title>
		<!--METADATA-->
		<base href="<?php echo BASE_URL; ?>">
	    <meta charset="UTF-8">
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	    <!--CSS-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
		<link href="public/css/main.css" rel="stylesheet" type="text/css" />
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
			    <a href="private/html/account.php">account test klik hier</a>
				
			    <?php
			        foreach($rows AS $value)
			        {
			            echo '
    			            <a class="foodTruckBox">
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
			    ?>
				</div>
				<div id="contactUs">
					<div id="contactUsButton">RESERVEER NU EEN TRUCK</div>
				</div>
				<div class="foodTruckContainer">
				    <?php
				    foreach($rows2 AS $value)
			        {
			            echo '
    			            <a class="foodTruckBox">
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
		</script>
	</body>
</html>