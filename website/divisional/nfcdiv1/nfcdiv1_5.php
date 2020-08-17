<!DOCTYPE html>

<html>

	<head>
	
		<meta charset='utf-8'>
		<neta name="viewport" content = "width=device-width, initial-scale=1">
		<title> Website </title>


		<style>
			@import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');

			div.left input {
				background:url("../../images/49ers-logo.jpg") no-repeat;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			div.right input {
				background:url("../../images/seahawks-logo.jpg") no-repeat;
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
		
		
		<h1>NFC Divisional Round Seed 1 vs Seed 5</h1>
		
			<p> 

				<li><a href="../../index.php">Restart</a></li>
				
			</p>
			<div class = "row">
				<div class="col-lg-6 left">
					<input type="button" name = "nfcdiv1winner" id="afcdiv1-1"> 
					<!-- <button> next page</button> -->

				</div>

				<div class="col-lg-6 right">
					<input type="button" name = "nfcdiv1winner" id="afcdiv1-5">
						<!-- onclick="window.location = 'result.php';"> -->
				</div>

			</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>

			$(document).ready(function(){
  				$("#afcdiv1-1").click(function(){
    				
  					var nfcdiv1winner  = 1;
  					var session = '../../session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						nfcdiv1winner: nfcdiv1winner 
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = '../../redirect.php';
       					}
        			});
  				});
  				$("#afcdiv1-5").click(function(){
    				
  					var nfcdiv1winner  = 5;
  					var session = '../../session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						nfcdiv1winner: nfcdiv1winner 
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = '../../redirect.php';
       					}
        			});
  				});
			});

		</script>
	
	</body>
</html>