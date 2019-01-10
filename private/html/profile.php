<?php
// include
include_once ('private/config/config.php');
include_once ('private/service/profile_service.php');
include_once ('private/config/debug.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['change-password'])) { //user logging in
		// login();
		console_log("kaka in de change");
    }
    
    elseif (isset($_POST['edit-user'])) { //user registering
        // register();
		console_log("kaka in de edit");
    }
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>FoodTruck website - Algemene Informatie</title>
	
	<?php include_once ('private/html/head.php'); ?>

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

		<h3>Your account</h3>
		<form action="profile/" method="post">
			<div class="field-wrap">
				<label for="new-password">New password</label>
				<input required type="password" id="new-password" name="new-password"/>
			</div>
			<div class="field-wrap">
				<label for="confirm-password">Confirm password</label>
				<input required type="password" id="confirm-password" name="confirm-password" />
			</div>
			<div class="field-wrap">
				<input type="checkbox" id="toggleVisibility" style="height: 20px; width: 20px; background-color: #fff" />
				<label for="toggleVisibility">Password visibility</label>
			</div>
			<button class="button button-block" type="submit" id="change-password" name="change-password">Change password</button>
		</form>

		</br>

		<form action="profile/" method="post">
			<div class="field-wrap">
				<label for="first-name">First name</label>
				<input type="text" id="first-name" name="first-name"/>
			</div>
			<div class="field-wrap">
				<label for="last-name">Last name</label>
				<input type="text" id="last-name" name="last-name"/>				
			</div>
			<button class="button button-block" type="submit" id="edit-user" name="edit-user">Save</button>
		</form>
		</div>
	</main>

	<?php
		include_once ('footer.php');
	?>

	<script>
		$('#toggleVisibility').on('click', function(){
			if($('#new-password').attr("type") == "password"){
				$('#new-password').attr("type", "text"); 
				$('#confirm-password').attr("type", "text"); 
			} else {
				$('#new-password').attr("type", "password"); 
				$('#confirm-password').attr("type", "password"); 
			}
		})
	</script>
</body>
</html>