
<!DOCTYPE html>
<style>
	body, html {
	  height: 100%;
	  margin: 0;
	}

	.bg {
	  /* The image used */
	  background-image: url("images/bracket.jpg");

	  /* Full height */
	  height: 100%; 

	  /* Center and scale the image nicely */
	  /*background-position: center;*/
	  background-repeat: no-repeat;
	  background-size: 100%;
	}


	@import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
	#afcdiv1{
		position: fixed;
		border:none;
		height: 100px;
		top: 120px;
		left: 310px;
	}
	#afcdiv2{
		position: fixed;
		border:none;
		height: 100px;
		top: 260px;
		left: 310px;
	}
	#afcdiv3{
		position: fixed;
		border:none;
		height: 100px;
		top: 420px;
		left: 310px;
	}
	#afcdiv4{
		position: fixed;
		border:none;
		height: 100px;
		top: 570px;
		left: 310px;
	}
	#afcconf1{
		position: fixed;
		border:none;
		height: 100px;
		top: 270px;
		left: 490px;
	}
	#afcconf2{
		position: fixed;
		border:none;
		height: 100px;
		top: 410px;
		left: 490px;
	}
	#sb1{
		position: fixed;
		border:none;
		height: 100px;
		top: 180px;
		left: 710px;
	}
	#sb2{
		position: fixed;
		border:none;
		height: 100px;
		top: 510px;
		left: 710px;
	}
	#nfcconf1{
		position: fixed;
		border:none;
		height: 100px;
		top: 270px;
		left: 935px;
	}
	#nfcconf2{
		position: fixed;
		border:none;
		height: 100px;
		top: 420px;
		left: 935px;
	}
	#nfcdiv1{
		position: fixed;
		border:none;
		height: 100px;
		top: 120px;
		left: 1120px;
	}
	#nfcdiv2{
		position: fixed;
		border:none;
		height: 100px;
		top: 260px;
		left: 1120px;
	}
	#nfcdiv3{
		position: fixed;
		border:none;
		height: 100px;
		top: 420px;
		left: 1120px;
	}
	#nfcdiv4{
		position: fixed;
		border:none;
		height: 100px;
		top: 570px;
		left: 1120px;
	}
	#afcchamp{
		position: fixed;
		display:none;
		border:none;
		top: 150px;
		left: 730px;
	}

	#nfcchamp{
		position: fixed;
		display:none;
		border:none;
		top: 470px;
		left: 730px;
	}


</style>
<html>

<div class="bg">
	<li><a href="index.php" style="color:white" >Restart</a> </li>
	<input type="image"  id=afcdiv1>
	<input type="image"  id=afcdiv2>
	<input type="image"  id=afcdiv3>
	<input type="image"  id=afcdiv4>
	<input type="image"  id=afcconf1>
	<input type="image"  id=afcconf2>
	<input type="image"  id=sb1>
	<input type="image"  id=nfcdiv1>
	<input type="image"  id=nfcdiv2>
	<input type="image"  id=nfcdiv3>
	<input type="image"  id=nfcdiv4>
	<input type="image"  id=nfcconf1>
	<input type="image"  id=nfcconf2>
	<input type="image"  id=sb2>
	<input type="image"  id=afcchamp src = "images/icons/champ.png">
	<input type="image"  id=nfcchamp src = "images/icons/champ.png">

</div>




<?php 
	session_start();

	if ( $_SESSION['afcwc1winner'] == '3'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcdiv1").src = "images/icons/afc-3.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['afcwc1winner'] == '6'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcdiv1").src = "images/icons/afc-6.jpg"'; 	
    	echo '</script>';
    }

    if ( $_SESSION['afcwc1winner'] > $_SESSION['afcwc2winner']){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcdiv2").src = "images/icons/afc-1.jpg"';
    	echo '</script>';
    } else {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcdiv2").src = "images/icons/afc-2.jpg"'; 	
    	echo '</script>';
    }

    if ( $_SESSION['afcwc2winner'] == '4'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcdiv3").src = "images/icons/afc-4.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['afcwc2winner'] == '5'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcdiv3").src = "images/icons/afc-5.jpg"'; 	
    	echo '</script>';
    }

    if ( (int)$_SESSION['afcwc1winner'] > (int)$_SESSION['afcwc2winner']){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcdiv4").src = "images/icons/afc-2.jpg"';
    	echo '</script>';
    } else {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcdiv4").src = "images/icons/afc-1.jpg"'; 	
    	echo '</script>';
    }

    if ( $_SESSION['afcdiv1winner'] == '1'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcconf1").src = "images/icons/afc-1.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['afcdiv1winner'] == '4'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcconf1").src = "images/icons/afc-4.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['afcdiv1winner'] == '5'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcconf1").src = "images/icons/afc-5.jpg"'; 	
    	echo '</script>';
    }else if ( $_SESSION['afcdiv1winner'] == '6'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcconf1").src = "images/icons/afc-6.jpg"'; 	
    	echo '</script>';
    }

    if ( $_SESSION['afcdiv2winner'] == '2'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcconf2").src = "images/icons/afc-2.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['afcdiv2winner'] == '3'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcconf2").src = "images/icons/afc-3.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['afcdiv2winner'] == '4'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcconf2").src = "images/icons/afc-4.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['afcdiv2winner'] == '5'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcconf2").src = "images/icons/afc-5.jpg"'; 	
    	echo '</script>';
    }

    if ( $_SESSION['afcconfwinner'] == '1'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("sb1").src = "images/icons/afc-1.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['afcdiv2winner'] == '2'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("sb1").src = "images/icons/afc-2.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['afcdiv2winner'] == '3'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("sb1").src = "images/icons/afc-3.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['afcdiv2winner'] == '4'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("sb1").src = "images/icons/afc-4.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['afcdiv2winner'] == '5'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("sb1").src = "images/icons/afc-5.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['afcdiv2winner'] == '6'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("sb1").src = "images/icons/afc-6.jpg"'; 	
    	echo '</script>';
    }



    if ( $_SESSION['nfcwc1winner'] == '3'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcdiv1").src = "images/icons/nfc-3.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['nfcwc1winner'] == '6'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcdiv1").src = "images/icons/nfc-6.jpg"'; 	
    	echo '</script>';
    }

    if ( $_SESSION['nfcwc1winner'] > $_SESSION['nfcwc2winner']){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcdiv2").src = "images/icons/nfc-1.jpg"';
    	echo '</script>';
    } else {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcdiv2").src = "images/icons/nfc-2.jpg"'; 	
    	echo '</script>';
    }

    if ( $_SESSION['nfcwc2winner'] == '4'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcdiv3").src = "images/icons/nfc-4.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['nfcwc2winner'] == '5'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcdiv3").src = "images/icons/nfc-5.jpg"'; 	
    	echo '</script>';
    }

    if ( $_SESSION['nfcwc1winner'] > $_SESSION['nfcwc2winner']){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcdiv4").src = "images/icons/nfc-2.jpg"';
    	echo '</script>';
    } else {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcdiv4").src = "images/icons/nfc-1.jpg"'; 	
    	echo '</script>';
    }

    if ( $_SESSION['nfcdiv1winner'] == '1'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcconf1").src = "images/icons/nfc-1.jpg"'; 	
    	echo '</script>';
    }  else if ( $_SESSION['nfcdiv1winner'] == '4'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcconf1").src = "images/icons/nfc-4.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['nfcdiv1winner'] == '5'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcconf1").src = "images/icons/nfc-5.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['nfcdiv1winner'] == '6'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcconf1").src = "images/icons/nfc-6.jpg"'; 	
    	echo '</script>';
    }

    if ( $_SESSION['nfcdiv2winner'] == '2'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcconf2").src = "images/icons/nfc-2.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['nfcdiv2winner'] == '3'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcconf2").src = "images/icons/nfc-3.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['nfcdiv2winner'] == '4'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcconf2").src = "images/icons/nfc-4.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['nfcdiv2winner'] == '5'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcconf2").src = "images/icons/nfc-5.jpg"'; 	
    	echo '</script>';
    }

    if ( $_SESSION['nfcconfwinner'] == '1'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("sb2").src = "images/icons/nfc-1.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['nfcdiv2winner'] == '2'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("sb2").src = "images/icons/nfc-2.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['nfcdiv2winner'] == '3'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("sb2").src = "images/icons/nfc-3.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['nfcdiv2winner'] == '4'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("sb2").src = "images/icons/nfc-4.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['nfcdiv2winner'] == '5'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("sb2").src = "images/icons/nfc-5.jpg"'; 	
    	echo '</script>';
    } else if ( $_SESSION['nfcdiv2winner'] == '6'){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("sb2").src = "images/icons/nfc-6.jpg"'; 	
    	echo '</script>';
    }

    if ( $_SESSION['superbowlwinner'] == $_SESSION['afcconfwinner']){
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("afcchamp").style.display = "block"'; 	
    	echo '</script>';
    } else {
		echo '<script type="text/javascript">';
    	echo 'document.getElementById("nfcchamp").style.display = "block"';	
    	echo '</script>';
    }

	// echo "<br>";
	// echo "afc wildcard 1 winner: ", $_SESSION['afcwc1winner'];
	// echo "<br>";
	// echo "afc wildcard 2 winner: ", $_SESSION['afcwc2winner'];
	// echo "<br>";
	// echo "nfc wildcard 1 winner: ", $_SESSION['nfcwc1winner'];
	// echo "<br>";
	// echo "nfc wildcard 2 winner: ", $_SESSION['nfcwc2winner'];
	// echo "<br>";

	// echo "<br>";
	// echo "afc division 2 winner: ", $_SESSION['afcdiv2winner'];
	// echo "<br>";
	// echo "nfc division 1 winner: ", $_SESSION['nfcdiv1winner'];
	// echo "<br>";
	// echo "nfc division 2 winner: ", $_SESSION['nfcdiv2winner'];
	// echo "<br>";
	// echo "afc conference winner: ", $_SESSION['afcconfwinner'];
	// echo "<br>";
	// echo "nfc conference winner: ", $_SESSION['nfcconfwinner'];
	// echo "<br>";
	//echo $_SESSION['afcwc1winner'] > $_SESSION['afcwc2winner'];
	// echo "<br>";
    //echo $_SESSION['superbowlwinner'];


?>

