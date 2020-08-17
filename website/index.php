
<!DOCTYPE html>
<style>
	body, html {
	  height: 100%;
	}
	.background {
	  	background-image: url("images/home.jpg");
	  	filter: blur(5px);
  		-webkit-filter: blur(5px);

	  	/* Full height */
	  	height: 100%;

	  	/* Center and scale the image nicely */
	  	background-position: center;
	  	background-repeat: no-repeat;
	 	background-size: cover;
	}
	.text {
	  background-color: rgb(0,0,0);
	  background-color: rgba(0,0,0, 0.4);
	  color: white;
	  font-size: 20px;
	  font-weight: bold;
	  border: 3px solid #f1f1f1;
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  z-index: 2;
	  width: 80%;
	  padding: 20px;
	  text-align: center;
	}
</style>
<html>
	
	<head>
		<meta charset='utf-8'>
		<meta name="viewport" content = "width=device-width, initial-scale=1">
		<title> Home </title>
	</head>

	<body>
		<div class="background"></div>

		<div class="text">
			<h1>NFL Playoff Bracket Builder 2019-2020</h1>

			
			<a style= "color:white; " href="wildcard/afcwc3_6.php">Start Your Bracket</a>
		</div>
	</body>
</html>
<?php
	session_start();
	session_destroy();
?>
