<!DOCTYPE html>

<html>

	<head>
	
		<meta charset='utf-8'>
		<neta name="viewport" content = "width=device-width, initial-scale=1">
		<title> Website </title>


		<style>
			@import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');

			div.left input {
				background:url("../../images/titans-logo.jpg") no-repeat;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			div.right input {
				background:url("../../images/texans-logo.jpg") no-repeat;
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
		
		
		<h1>AFC Conference Round Seed 6 vs Seed 4</h1>
		
			<p> 

				<li><a href="../../index.php">Restart</a></li>
				
			</p>
			<div class = "row">
				<div class="col-lg-6 left">
					<input type="button" name = "afcconfwinner" id="afcwc1-3"> 

				</div>

				<div class="col-lg-6 right">
					<input type="button" name = "afcconfwinner" id="afcwc1-6">
				</div>

			</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>

			$(document).ready(function(){
  				$("#afcwc1-3").click(function(){
    				
  					var afcconfwinner  = 6;
  					var session = '../../session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						afcconfwinner: afcconfwinner 
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = '../../redirect.php';
       					}
        			});
  				});
  				$("#afcwc1-6").click(function(){
    				
  					var afcconfwinner  = 4;
  					var session = '../../session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						afcconfwinner: afcconfwinner 
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