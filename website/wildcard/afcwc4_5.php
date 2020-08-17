<!DOCTYPE html>

<html>

	<head>
	
		<meta charset='utf-8'>
		<neta name="viewport" content = "width=device-width, initial-scale=1">
		<title> Website </title>


		<style>
			@import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');

			div.left input {
				background:url("../images/texans-logo.jpg") no-repeat;
				width: 775px;
				height: 660px;
				font-size: .1px;
			}
			div.right input {
				background:url("../images/bills-logo.jpg") no-repeat;
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
		
		
		<h1>AFC Wild Card 2</h1>
		
			<p> 

				<li><a href="../index.php">Restart</a></li>
				
			</p>
			<div class = "row">
				<div class="col-lg-6 left">
					<input type="button" name = "afcwc2winner" id="afcwc2-4"> 
					<!-- <button> next page</button> -->

				</div>

				<div class="col-lg-6 right">
					<input type="button" name = "afcwc2winner" id="afcwc2-5">
						<!-- onclick="window.location = 'result.php';"> -->
				</div>

			</div>
	
	
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>

			$(document).ready(function(){
  				$("#afcwc2-4").click(function(){
    				
  					var afcwc2winner  = 4;
  					var session = '../session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						afcwc2winner: afcwc2winner 
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'nfcwc3_6.php';
       					}
        			});
  				});
  				$("#afcwc2-5").click(function(){
    				
  					var afcwc2winner  = 5;
  					var session = '../session.php';
    				$.ajax({
    					url: session,
    					type: 'POST',
    					dataType: 'json',
    					data: {
    						afcwc2winner: afcwc2winner 
    					}
    				}).done(function(res) {
            			if (res.valid) {
            				document.location.href = 'nfcwc3_6.php';
       					}
        			});
  				});
			});

		</script>
</html>
