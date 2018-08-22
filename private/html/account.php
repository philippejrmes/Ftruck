<?php
include_once ('private/config/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
    }
    
    elseif (isset($_POST['register'])) { //user registering
        require 'private/service/register_service.php';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>FoodTruck website - Algemene Informatie</title>
	<!--METADATA-->
	<base href="<?php echo BASE_URL; ?>">
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<!--CSS-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
	<link href="public/css/main.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<style>
		*,
		*:before,
		*:after {
			box-sizing: border-box;
		}

		html {
			overflow-y: scroll;
		}

		body {
			background: #ffffff;
			/* #c1bdba */
			font-family: 'Titillium Web', sans-serif;
		}

		a {
			text-decoration: none;
			color: #1ab188;
			-webkit-transition: .5s ease;
			transition: .5s ease;
		}

		a:hover {
			color: #179b77;
		}

		.form {
			background: rgba(19, 35, 47, 0.9);
			padding: 40px;
			max-width: 600px;
			margin: 40px auto;
			border-radius: 4px;
			box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
		}

		.tab-group {
			list-style: none;
			padding: 0;
			margin: 0 0 40px 0;
		}

		.tab-group:after {
			content: "";
			display: table;
			clear: both;
		}

		.tab-group li a {
			display: block;
			text-decoration: none;
			padding: 15px;
			background: rgba(160, 179, 176, 0.25);
			color: #a0b3b0;
			font-size: 20px;
			float: left;
			width: 50%;
			text-align: center;
			cursor: pointer;
			-webkit-transition: .5s ease;
			transition: .5s ease;
		}

		.tab-group li a:hover {
			background: #179b77;
			color: #ffffff;
		}

		.tab-group .active a {
			background: #1ab188;
			color: #ffffff;
		}

		.tab-content>div:last-child {
			display: none;
		}

		h1 {
			text-align: center;
			color: #ffffff;
			font-weight: 300;
			margin: 0 0 40px;
		}

		h2 {
			text-align: center;
			color: #1ab188;
			font-weight: 1000;
			margin: 0;
		}

		span {
			color: #1ab188;
			font-weight: bold;
		}

		p {
			text-align: center;
			color: #ffffff;
			margin: 0px 0px 50px 0px;
		}

		div.info {
			color: pink;
			display: box;
			text-align: center;
			padding: 5px;
			margin-top: -20px;
			margin-bottom: 15px;
			border: 1px solid red;
			background: #66131c;
		}

		label {
			position: absolute;
			-webkit-transform: translateY(6px);
			transform: translateY(6px);
			left: 13px;
			color: rgba(255, 255, 255, 0.5);
			-webkit-transition: all 0.25s ease;
			transition: all 0.25s ease;
			-webkit-backface-visibility: hidden;
			pointer-events: none;
			font-size: 22px;
		}

		label .req {
			margin: 2px;
			color: #1ab188;
		}

		label.active {
			-webkit-transform: translateY(50px);
			transform: translateY(50px);
			left: 2px;
			font-size: 14px;
		}

		label.active .req {
			opacity: 0;
		}

		label.highlight {
			color: #ffffff;
		}

		input,
		textarea {
			font-size: 22px;
			display: block;
			width: 100%;
			height: 100%;
			padding: 5px 10px;
			background: none;
			background-image: none;
			border: 1px solid #a0b3b0;
			color: #ffffff;
			border-radius: 0;
			-webkit-transition: border-color .25s ease, box-shadow .25s ease;
			transition: border-color .25s ease, box-shadow .25s ease;
		}

		input:focus,
		textarea:focus {
			outline: 0;
			border-color: #1ab188;
		}

		textarea {
			border: 2px solid #a0b3b0;
			resize: vertical;
		}

		.field-wrap {
			position: relative;
			margin-bottom: 40px;
		}

		.top-row:after {
			content: "";
			display: table;
			clear: both;
		}

		.top-row>div {
			float: left;
			width: 48%;
			margin-right: 4%;
		}

		.top-row>div:last-child {
			margin: 0;
		}

		.button {
			border: 0;
			outline: none;
			border-radius: 0;
			padding: 15px 0;
			font-size: 2rem;
			font-weight: 600;
			text-transform: uppercase;
			letter-spacing: .1em;
			background: #1ab188;
			color: #ffffff;
			-webkit-transition: all 0.5s ease;
			transition: all 0.5s ease;
			-webkit-appearance: none;
		}

		.button:hover,
		.button:focus {
			background: #179b77;
		}

		.button-block {
			display: block;
			width: 100%;
		}

		.forgot {
			margin-top: -20px;
			text-align: right;
		}
	</style>
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
			<div class="form">

				<ul class="tab-group">
					<li class="tab"><a href="#signup">Sign Up</a></li>
					<li class="tab active"><a href="#login">Log In</a></li>
				</ul>

				<div class="tab-content">

					<div id="login">
						<h1>Welcome Back!</h1>

						<form action="index.php" method="post" autocomplete="off">

							<div class="field-wrap">
								<label>Email Address<span class="req">*</span></label>
								<input type="email" required autocomplete="off" name="email" />
							</div>

							<div class="field-wrap">
								<label>Password<span class="req">*</span></label>
								<input type="password" required autocomplete="off" name="password" />
							</div>

							<p class="forgot"><a href="forgot.php">Forgot Password?</a></p>

							<button class="button button-block" name="login" />Log In</button>

						</form>

					</div>

					<div id="signup">
						<h1>Sign Up for Free</h1>

						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">

							<div class="top-row">
								<div class="field-wrap">
									<label>First Name<span class="req">*</span></label>
									<input type="text" required autocomplete="off" name='firstname' />
								</div>

								<div class="field-wrap">
									<label>Last Name<span class="req">*</span></label>
									<input type="text" required autocomplete="off" name='lastname' />
								</div>
							</div>

							<div class="field-wrap">
								<label>Email Address<span class="req">*</span></label>
								<input type="email" required autocomplete="off" name='email' />
							</div>

							<div class="field-wrap">
								<label>Set A Password<span class="req">*</span></label>
								<input type="password" required autocomplete="off" name='password' />
							</div>

							<button type="submit" class="button button-block" name="register" />Register</button>

						</form>
					</div>

				</div>
				<!-- tab-content -->

				<?php
					if(isset($_SESSION) && isset($_SESSION['message'])) {
					echo "<p>".$_SESSION['message']."</p>";
					}
				?>

				<?php
					if(isset($_SESSION) && isset($_SESSION['logged_in'])){
						echo "<p>is logged in</p>";
					}
				?>
			</div>
			<!-- /form -->
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

			$('.tab a').on('click', function (e) {
  
  				e.preventDefault();
  
  				$(this).parent().addClass('active');
  				$(this).parent().siblings().removeClass('active');
  
  				target = $(this).attr('href');

  				$('.tab-content > div').not(target).hide();
  
  				$(target).fadeIn(600);
  
			});

			$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
				var $this = $(this),
    			label = $this.prev('label');

				  if (e.type === 'keyup') {
						if ($this.val() === '') {
			          label.removeClass('active highlight');
			        } else {
			          label.addClass('active highlight');
			        }
			    } else if (e.type === 'blur') {
			    	if( $this.val() === '' ) {
			    		label.removeClass('active highlight'); 
						} else {
					    label.removeClass('highlight');   
						}   
			    } else if (e.type === 'focus') {

			      if( $this.val() === '' ) {
			    		label.removeClass('highlight'); 
						} 
			      else if( $this.val() !== '' ) {
					    label.addClass('highlight');
						}
			    }

			});
		</script>
	</body>
</html>