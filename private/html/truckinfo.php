<?php
	include_once ('private/config/config.php');
    include_once ('private/service/truckinfo_service.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FoodTruck website - More info about the current truck</title>

		<? include_once ('private/html/head.php'); ?>

		<link href="public/css/trucksInfo.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php
			include_once ('nav.php');
		?>
		
		<main>
			<?php $truck = getTruckInfo(); ?>
			<div id="truckIntroPhoto" style="background-image:url('public/images/<?php echo $truck['imageName']; ?>');">
				<h1><?php echo ucfirst($truck['name']); ?></h1>
			</div>
			<div id="content">
			    <div id="splitScreenWrapper">
    				<div class="splitScreen">
    				    <div class="topTextBoxBlock">
        				    <h2>FoodTruck <?php echo $truck['name']; ?></h2>
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

		<?php
			include_once ('footer.php');
		?>
		
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