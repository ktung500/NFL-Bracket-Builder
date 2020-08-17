<?php 
	session_start();

    if(isset($_POST['afcwc1winner'])) {
        $_SESSION['afcwc1winner']=$_POST['afcwc1winner'];
        $result['valid'] = TRUE;
    }

    if(isset($_POST['afcwc2winner'])) {
        $_SESSION['afcwc2winner']=$_POST['afcwc2winner'];
        $result['valid'] = TRUE;
    }

    if(isset($_POST['nfcwc1winner'])) {
        $_SESSION['nfcwc1winner']=$_POST['nfcwc1winner'];
        $result['valid'] = TRUE;
    }

    if(isset($_POST['nfcwc2winner'])) {
        $_SESSION['nfcwc2winner']=$_POST['nfcwc2winner'];
        $result['valid'] = TRUE;
    }

    if(isset($_POST['afcdiv1winner'])) {
        $_SESSION['afcdiv1winner']=$_POST['afcdiv1winner'];
        $result['valid'] = TRUE;
    }

    if(isset($_POST['afcdiv2winner'])) {
        $_SESSION['afcdiv2winner']=$_POST['afcdiv2winner'];
        $result['valid'] = TRUE;
    }

    if(isset($_POST['nfcdiv1winner'])) {
        $_SESSION['nfcdiv1winner']=$_POST['nfcdiv1winner'];
        $result['valid'] = TRUE;
    }

    if(isset($_POST['nfcdiv2winner'])) {
        $_SESSION['nfcdiv2winner']=$_POST['nfcdiv2winner'];
        $result['valid'] = TRUE;
    }

    if(isset($_POST['afcconfwinner'])) {
        $_SESSION['afcconfwinner']=$_POST['afcconfwinner'];
        $result['valid'] = TRUE;
    }

    if(isset($_POST['nfcconfwinner'])) {
        $_SESSION['nfcconfwinner']=$_POST['nfcconfwinner'];
        $result['valid'] = TRUE;
    }

    if(isset($_POST['superbowlwinner'])) {
        $_SESSION['superbowlwinner']=$_POST['superbowlwinner'];
        $result['valid'] = TRUE;
    }



    echo json_encode($result);

    
    exit();
 ?>