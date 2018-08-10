<?php
    include_once('private/config/config.php');
    include_once('private/config/Mysql.php');
    
    $database = new Database();
    $database->query('SELECT name, imageName, smallDescription FROM truck ORDER BY id DESC LIMIT 10');
    $rows = $database->resultset();
    
    $database->query('SELECT name, imageName, smallDescription FROM truck ORDER BY RAND() LIMIT 10');
    $rows2 = $database->resultset();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FoodTruck website - Home page</title>
		<!--METADATA-->
		<base href="http://swiido.com/ftruck/">
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

		<footer>
			<div id="social">
				<i class="fa fa-facebook"></i>
				<i class="fa fa-twitter"></i>
				<i class="fa fa-youtube"></i>
			</div>
			<div id="floorNav">
				<a href="#" id="floorNavActive">HOME</a>
				<a href="#">TRUCKS</a>
				<a href="#">INFO</a>
				<a href="#">CONTACT</a>
			</div>
			<p id="infoBlock">
				Pellentesque pulvinar volutpat augue sit amet volutpat. Nulla hendrerit quam vel convallis feugiat. Duis nibh turpis, ultrices ac sapien dapibus, tempus laoreet quam. Aliquam pharetra viverra commodo. Nunc et laoreet felis. Maecenas lectus nibh, hendrerit a nibh vel, lobortis semper sem. Curabitur in lorem fermentum, posuere libero quis, fermentum metus. In hac habitasse platea dictumst. Sed ligula lacus, scelerisque convallis urna sit amet, fermentum porta nibh. Duis sed eros nec sapien vestibulum hendrerit. Curabitur rutrum urna sed purus congue, nec blandit leo vulputate. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc efficitur maximus elit non viverra. In iaculis a neque ut interdum. Sed id neque sagittis, feugiat ex gravida, maximus mi.
			</p>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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