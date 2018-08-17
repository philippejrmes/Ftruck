<!DOCTYPE html>
<html>
	<head>
		<title>FoodTruck website - Contacteer ons</title>
		<!--METADATA-->
		<base href="<?php echo BASE_URL; ?>">
	    <meta charset="UTF-8">
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	    <!--CSS-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
		<link href="public/css/main.css" rel="stylesheet" type="text/css" />
		<link href="public/css/contact.css" rel="stylesheet" type="text/css" />
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
			    <!--
				<div id="searchBox">
					<div id="searchFieldHolder">
					    <div id="advancedSearchBtn" class="fa fa-plus"></div>
						<input type="text" placeholder="Zoek een foodtruck" />
						<div id="searchBtn" class="fa fa-search"></div>
					</div>
				</div>
				-->
				<div id="pageInfo">
					<h2>Contacteer Ons</h2>
					<p>Heeft u vragen, neem gerust contact met ons op.</p>
				</div>
				<div id="contactWrapper">
					<div class="splitScreen">
						<h3>Lorem ipsum dolor sit amet</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In posuere efficitur ex, eget convallis metus mattis non. Donec pharetra, massa ac consequat tincidunt, felis ex molestie quam, ut tristique tortor justo at metus. Vivamus ornare diam lectus, id sodales sapien mollis at. Ut pretium lacus et ligula pulvinar elementum. </p>
						<form>
							<input type="text" placeholder="Naam" />
							<input type="text" placeholder="Email" />
							<input type="text" placeholder="Tel" />
							<input type="text" placeholder="Bedrijf" />
							<input type="submit" value="VERZENDEN" />
						</form>
					</div>
					<div class="splitScreen">
						<h3>Lorem ipsum dolor sit amet</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In posuere efficitur ex, eget convallis metus mattis non. Donec pharetra, massa ac consequat tincidunt, felis ex molestie quam, ut tristique tortor justo at metus. Vivamus ornare diam lectus, id sodales sapien mollis at. Ut pretium lacus et ligula pulvinar elementum. </p>
						<div class="maps" style="height:290px;width:100%;"></div><!--Remove this inline css-->
					</div>
					
				</div><!--Contact Us-->
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
		
        <script>
          function initMap() {
            var uluru = {lat: 51.328499, lng: 4.820976
};
            var map = new google.maps.Map($('.maps')[0], {
              zoom: 15,
              center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                icon: 'http://www.webbuildrr.com/sites/asrwindowcleaning/public/layout/marker.png'
            });
          }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC12fqK_bRusaUtpMQ4mufXE3BAMBM-8sk&callback=initMap">
        </script>
		
	</body>
</html>