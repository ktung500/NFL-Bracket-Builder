<!DOCTYPE html>

<html>

	<head>
	
		<meta charset='utf-8'>
		<neta name="viewport" content = "width=device-width, initial-scale=1">
		<title> Website </title>


		<style>
			@import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');

			div.left input {
				background:url("../../images/eagles-logo.jpg") no-repeat;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			div.right input {
				background:url("../../images/saints-logo.jpg") no-repeat;
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
		
		
		<h1>NFC Conference Round Seed 4 vs Seed 3</h1>
		
			<p> 

				<li><a href="../../index.php">Restart</a></li>
				
			</p>
			<div class = "row">
				<div class="col-lg-6 left">
					<input type="button" name = "nfcconfwinner" id="nfcwc1-3"> 

				</div>

				<div class="col-lg-6 right">
					<input type="button" name = "nfcconfwinner" id="nfcwc1-6">
				</div>

			</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>

			$(document).ready(function(){
  				$("#nfcwc1-3").click(function(){
    				
  					var nfcconfwinner  = 4;
  					var session = '../../session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						nfcconfwinner: nfcconfwinner 
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = '../../redirect.php';
       					}
        			});
  				});
  				$("#nfcwc1-6").click(function(){
    				
  					var nfcconfwinner  = 3;
  					var session = '../../session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						nfcconfwinner: nfcconfwinner 
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