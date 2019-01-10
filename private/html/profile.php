<?php
include_once ('private/config/config.php');
include_once ('private/service/profile_service.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>FoodTruck website - Algemene Informatie</title>
	
	<? include_once ('private/html/head.php'); ?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>

<body>
	<?php
		include_once ('nav.php');
		?>

	<main>
		<div id="foodtruckIntroPhoto">
			<h1>Ook opzoek naar een Foodtruck voor op uw feest ?</h1>
		</div>
		<div id="content">
            HIER KOMT DE PROFILE PAGINA
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