

<!-- Row will only show first 2 things regardless if buttons are hidden or not. Need to find a way to show different buttons based on session variable -->


<!DOCTYPE html>
<?php 
	session_start();
?>
<html>

	<head>
	
		<meta charset='utf-8'>
		<neta name="viewport" content = "width=device-width, initial-scale=1">
		<title> Website </title>


		<style>
			@import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
			#afc1 {
				background:url("images/ravens-logo.jpg") no-repeat;
				display:block;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			#afc2 {
				background:url("images/chiefs-logo.jpg") no-repeat;
				display:block;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			#afc3 {
				background:url("images/patriots-logo.jpg") no-repeat;
				display:block;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			#afc4 {
				background:url("images/texans-logo.jpg") no-repeat;
				display:block;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			#afc5 {
				background:url("images/bills-logo.jpg") no-repeat;
				display:block;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			#afc6 {
				background:url("images/titans-logo.jpg") no-repeat;
				display:block;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			#nfc1 {
				background:url("images/49ers-logo.jpg") no-repeat;
				display:block;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			#nfc2 {
				background:url("images/packers-logo.jpg") no-repeat;
				display:block;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			#nfc3 {
				background:url("images/saints-logo.jpg") no-repeat;
				display:block;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			#nfc4 {
				background:url("images/eagles-logo.jpg") no-repeat;
				display:block;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			#nfc5 {
				background:url("images/seahawks-logo.jpg") no-repeat;
				display:block;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			#nfc6 {
				background:url("images/vikings-logo.jpg") no-repeat;
				display:block;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			@media {
	  			.left,
	  			.right {
			    	overflow-x: hidden; 
    				overflow-y: hidden; 
			    	padding: 0;
			    	position: responsive;
			    
		        }
		</style>
	</head>

	<body scroll="no" style="overflow: hidden">
		
		
		<h1>Super Bowl</h1>
		
			<p> 

				<li><a href="index.php">Restart</a></li>
				
			</p>
			<div class = "row">

				<div class="col-lg-6" style="display: none" id="AFC1">
					<input type="button" name = "superbowlwinner" id="afc1"> 
				</div>
				<div class="col-lg-6" style="display: none" id="AFC2">
					<input type="button" name = "superbowlwinner" id="afc2"> 
				</div>
				<div class="col-lg-6" style="display: none" id="AFC3">
					<input type="button" name = "superbowlwinner" id="afc3"> 
				</div>
				<div class="col-lg-6" style="display: none" id="AFC4">
					<input type="button" name = "superbowlwinner" id="afc4"> 
				</div>
				<div class="col-lg-6" style="display: none" id="AFC5">
					<input type="button" name = "superbowlwinner" id="afc5"> 
				</div>
				<div class="col-lg-6" style="display: none" id="AFC6">
					<input type="button" name = "superbowlwinner" id="afc6"> 
				</div>

				<div class="col-lg-6" style="display: none" id="NFC1">
					<input type="button" name = "superbowlwinner" id="nfc1">
				</div>
				<div class="col-lg-6" style="display: none" id="NFC2">
					<input type="button" name = "superbowlwinner" id="nfc2">
				</div>
				<div class="col-lg-6" style="display: none" id="NFC3">
					<input type="button" name = "superbowlwinner" id="nfc3">
				</div>
				<div class="col-lg-6" style="display: none" id="NFC4">
					<input type="button" name = "superbowlwinner" id="nfc4">
				</div>
				<div class="col-lg-6" style="display: none" id="NFC5">
					<input type="button" name = "superbowlwinner" id="nfc5">
				</div>
				<div class="col-lg-6" style="display: none" id="NFC6">
					<input type="button" name = "superbowlwinner" id="nfc6">
				</div>
			</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>

			$(document).ready(function(){
  				$("#afc1").click(function(){
    				
  					var superbowlwinner = 1;
  					var session = 'session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						superbowlwinner 
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'redirect.php';
       					}
        			});
  				});
  				$("#afc2").click(function(){
    				
  					var superbowlwinner  = 2;
  					var session = 'session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						superbowlwinner: superbowlwinner
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'redirect.php';
       					}
        			});
  				});
  				$("#afc3").click(function(){
    				
  					var superbowlwinner = 3;
  					var session = 'session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						superbowlwinner 
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'redirect.php';
       					}
        			});
  				});
  				$("#afc4").click(function(){
    				
  					var superbowlwinner  = 4;
  					var session = 'session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						superbowlwinner: superbowlwinner
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'redirect.php';
       					}
        			});
  				});
  				$("#afc5").click(function(){
    				
  					var superbowlwinner = 5;
  					var session = 'session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						superbowlwinner 
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'redirect.php';
       					}
        			});
  				});
  				$("#afc6").click(function(){
    				
  					var superbowlwinner  = 6;
  					var session = 'session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						superbowlwinner: superbowlwinner
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'redirect.php';
       					}
        			});
  				});
  				$("#nfc1").click(function(){
    				
  					var superbowlwinner = 7;
  					var session = 'session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						superbowlwinner 
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'redirect.php';
       					}
        			});
  				});
  				$("#nfc2").click(function(){
    				
  					var superbowlwinner = 8;
  					var session = 'session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						superbowlwinner: superbowlwinner
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'redirect.php';
       					}
        			});
  				});
  				$("#nfc3").click(function(){
    				
  					var superbowlwinner = 9;
  					var session = 'session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						superbowlwinner 
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'redirect.php';
       					}
        			});
  				});
  				$("#nfc4").click(function(){
    				
  					var superbowlwinner  = 10;
  					var session = 'session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						superbowlwinner: superbowlwinner
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'redirect.php';
       					}
        			});
  				});
  				$("#nfc5").click(function(){
    				
  					var superbowlwinner = 11;
  					var session = 'session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						superbowlwinner 
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'redirect.php';
       					}
        			});
  				});
  				$("#nfc6").click(function(){
    				
  					var superbowlwinner  = 12;
  					var session = 'session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						superbowlwinner: superbowlwinner
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'redirect.php';
       					}
        			});
  				});
			});

		</script>
	
	</body>
</html>

<?php 
	if ( $_SESSION['afcconfwinner'] == '1'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("AFC1").style.display = "block"'; 	
    	echo '</script>';
	} else if ($_SESSION['afcconfwinner'] == '2') {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("AFC2").style.display = "block"'; 	
    	echo '</script>';
	} else if ($_SESSION['afcconfwinner'] == '3') {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("AFC3").style.display = "block"'; 	
    	echo '</script>';
	} else if ($_SESSION['afcconfwinner'] == '4') {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("AFC4").style.display = "block"'; 	
    	echo '</script>';
	} else if ($_SESSION['afcconfwinner'] == '5') {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("AFC5").style.display = "block"'; 	
    	echo '</script>';
	} else if ($_SESSION['afcconfwinner'] == '6') {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("AFC6").style.display = "block"'; 	
    	echo '</script>';
	}


	if ( $_SESSION['nfcconfwinner'] == '1'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("NFC1").style.display = "block"'; 	
    	echo '</script>';
	} else if ($_SESSION['nfcconfwinner'] == '2') {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("NFC2").style.display = "block"'; 	
    	echo '</script>';
	} else if ($_SESSION['nfcconfwinner'] == '3') {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("NFC3").style.display = "block"'; 	
    	echo '</script>';
	} else if ($_SESSION['nfcconfwinner'] == '4') {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("NFC4").style.display = "block"'; 	
    	echo '</script>';
	} else if ($_SESSION['nfcconfwinner'] == '5') {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("NFC5").style.display = "block"'; 	
    	echo '</script>';
	} else if ($_SESSION['nfcconfwinner'] == '6') {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("NFC6").style.display = "block"'; 	
    	echo '</script>';
	}

	

?>


