<!DOCTYPE html>

<html>

	<head>
	
		<meta charset='utf-8'>
		<neta name="viewport" content = "width=device-width, initial-scale=1">
		<title> Website </title>


		<style>
			@import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');

			div.left input {
				background:url("../images/saints-logo.jpg") no-repeat;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			div.right input {
				background:url("../images/vikings-logo.jpg") no-repeat;
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
		
		
		<h1>NFC Wild Card 1</h1>
		
			<p> 

				<li><a href="../index.php">Restart</a></li>
				
			</p>
			<div class = "row">
				<div class="col-lg-6 left">
					<input type="button" name = "nfcwc1winner" id="nfcwc1-3"> 
				</div>

				<div class="col-lg-6 right">
					<input type="button" name = "nfcwc1winner" id="nfcwc1-6">
				</div>

			</div>
	
	
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>

			$(document).ready(function(){
  				$("#nfcwc1-3").click(function(){
    				
  					var nfcwc1winner  = 3;
  					var session = '../session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						nfcwc1winner: nfcwc1winner 
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'nfcwc4_5.php';
       					}
        			});
  				});
  				$("#nfcwc1-6").click(function(){
    				
  					var nfcwc1winner  = 6;
  					var session = '../session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						nfcwc1winner: nfcwc1winner 
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'nfcwc4_5.php';
       					}
        			});
  				});
			});

		</script>
</html>
