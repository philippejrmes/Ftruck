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