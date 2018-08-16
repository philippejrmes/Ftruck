<?php
    include_once('private/config/config.php');
    include_once('private/config/Mysql.php');
    $truckName = $_GET['page2'];

    $database = new Database();
    $database->query("SELECT name, imageName, smallDescription FROM truck WHERE imageName = '$truckName'");
    $rows = $database->single();
   
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FoodTruck website - More info about the current truck</title>
		<!--METADATA-->
		<base href="<?php echo BASE_URL; ?>">
	    <meta charset="UTF-8">
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	    <!--CSS-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
		<link href="public/css/main.css" rel="stylesheet" type="text/css" />
		<link href="public/css/trucksInfo.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php
			include_once('nav.php');
		?>
		
		<main>
			<div id="truckIntroPhoto" style="background-image:url('public/images/<?php echo $rows['imageName']; ?>.jpg');">
				<h1><?php echo ucfirst($_GET['page2']); ?></h1>
			</div>
			<div id="content">
			    <div id="splitScreenWrapper">
    				<div class="splitScreen">
    				    <div class="topTextBoxBlock">
        				    <h2>FoodTruck <?php echo $rows['name']; ?></h2>
        				    <div class="truckCategoryList">
        				        <a href="#">Pasta</a>
        				        <a href="#">Comfort Food</a>
        				    </div>
        				    <p>
        				        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit non enim et hendrerit. Maecenas commodo nec erat ullamcorper convallis. Donec suscipit non enim et hendrerit. Maecenas commodo nec erat ullamcorper convallis.<br/><br/>
        				        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit non enim et hendrerit. Maecenas commodo nec erat ullamcorper convallis.<br/><br/>
        				        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit non enim et hendrerit. Maecenas commodo nec erat ullamcorper convallis. Donec suscipit non enim et hendrerit. Maecenas commodo nec erat ullamcorper convallis.<br/><br/>
        				    </p>
    				    </div>
    				</div>
    				<div class="splitScreen">
    				    <div class="listBlock">
    				        <h3>Gerechten</h3>
        				    <ul>
        				        <li>Pasta Bolognese</li>
        				        <li>Pasta 4 Kazen</li>
        				        <li>Pasta Pesto</li>
        				    </ul>
    				    </div>
    				    <div class="listBlock">
    				        <h3>Truck Details</h3>
        				    <ul>
        				        <li>Breedte : 400cm</li>
        				        <li>Lengte : 600cm</li>
        				        <li>Hoogte : 300cm</li>
        				        <li>Gewicht : 2800kg</li>
        				    </ul>
    				    </div>
    				</div>
				</div>
				<div id="bookNow">BOEK DEZE FOODTRUCK NU.</div>
				<div id="photSlider">
				    <img src="https://images.pexels.com/photos/730129/pexels-photo-730129.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="some image" />
				    <img src="https://images.pexels.com/photos/5317/food-salad-restaurant-person.jpg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="some image" />
				    <img src="https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="some image" />
				    <img src="https://images.pexels.com/photos/1305063/pexels-photo-1305063.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="some image" />
				    <img src="https://images.pexels.com/photos/1295572/pexels-photo-1295572.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="some image" />
				    <img src="https://images.pexels.com/photos/1301373/pexels-photo-1301373.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="some image" />
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
		</script>
	</body>
</html>