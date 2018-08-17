<!DOCTYPE html>
<html>
	<head>
		<title>FoodTruck website - Algemene Informatie</title>
		<!--METADATA-->
		<base href="http://swiido.com/ftruck/">
	    <meta charset="UTF-8">
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	    <!--CSS-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
		<link href="public/css/main.css" rel="stylesheet" type="text/css" />
		<link href="public/css/info.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php
			include_once('nav.php');
		?>

		<main>
			<div id="foodtruckIntroPhoto">
				<h1>Ook opzoek naar een Foodtruck voor op uw feest ?</h1>
			</div>
			<div id="content">
                dit is de main content van account
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
		</script>
	</body>
</html>