		<nav>
			<div id="nav" class="innerNav">
				<a href="" <?php if(!isset($_GET['page'])){ echo 'id="active"'; } ?>>HOME</a>
				<a href="trucks/" <?php if(isset($_GET['page']) && $_GET['page'] == 'trucks'){ echo 'id="active"'; } ?>>TRUCKS</a>
				<a href="" id="logo"><img src="http://madlenedesign.com/theme/foodtruck/wp-content/uploads/2017/01/logo.png" /></a>
				<a href="info/" <?php if(isset($_GET['page']) && $_GET['page'] == 'info'){ echo 'id="active"'; } ?>>INFO</a>
				<a href="contact/" <?php if(isset($_GET['page']) && $_GET['page'] == 'contact'){ echo 'id="active"'; } ?>>CONTACT</a>
				<?php
					if(isset($_SESSION) && isset($_SESSION['logged_in'])){
						echo '<a href="profile/" id="profile">ACCOUNT</a>';
					} else {
						echo '<a href="account/" id="account">ACCOUNT</a>';
					}
				?>
			</div>
			<div id="navMobile" class="innerNav">
				<div id="navMobileTop">
					<img src="http://madlenedesign.com/theme/foodtruck/wp-content/uploads/2017/01/logo.png" />
					<a href="javascript:void(0);" id="navBurger">&#9776;</a>
				</div>
				<div id="dropdownMenu">
					<a href="" <?php if(!isset($_GET['page'])){ echo 'id="active"'; } ?>>HOME</a>
					<a href="trucks/" <?php if(isset($_GET['page']) && $_GET['page'] == 'trucks'){ echo 'id="active"'; } ?>>TRUCKS</a>
					<a href="info/" <?php if(isset($_GET['page']) && $_GET['page'] == 'info'){ echo 'id="active"'; } ?>>INFO</a>
					<a href="contact/" <?php if(isset($_GET['page']) && $_GET['page'] == 'contact'){ echo 'id="active"'; } ?>>CONTACT</a>
				</div>
			</div>
		</nav>