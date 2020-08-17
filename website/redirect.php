<?php
	
	session_start();
	function matchupdiv(){
		$afcdiv1opp = max($_SESSION['afcwc1winner'], $_SESSION['afcwc2winner']);
		$afcdiv2opp = min($_SESSION['afcwc1winner'], $_SESSION['afcwc2winner']);
		$nfcdiv1opp = max($_SESSION['nfcwc1winner'], $_SESSION['nfcwc2winner']);
		$nfcdiv2opp = min($_SESSION['nfcwc1winner'], $_SESSION['nfcwc2winner']);
		
		
		if ($_SESSION['match'] == 'result') {
			header ('Location: result.php');
		}

		if ($_SESSION['match'] == 'superbowl') {
			$_SESSION['match'] = 'result';
			header ('Location: superbowl.php');
		}


		if ($_SESSION['match'] == 'nfcconf') {
			$_SESSION['match'] = 'superbowl';

			if ($_SESSION['nfcdiv1winner'] == '1') {

  				if ($_SESSION['nfcdiv2winner'] == '2') {
  					header ('Location: conference/nfcconf1/nfcconf1_2.php');
  				} elseif ($_SESSION['nfcdiv2winner'] == '3') {
  					header ('Location: conference/nfcconf1/nfcconf1_3.php');
  				} elseif ($_SESSION['nfcdiv2winner'] == '4') {
  					header ('Location: conference/nfcconf1/nfcconf1_4.php');
  				} elseif ($_SESSION['nfcdiv2winner'] == '5') {
  					header ('Location: conference/nfcconf1/nfcconf1_5.php');
  				}

			} elseif ($_SESSION['nfcdiv1winner'] == '4') {
				// nfcdiv2 = 2 or 3
  				if ($_SESSION['nfcdiv2winner'] == '2') {
  					header ('Location: conference/nfcconf4/nfcconf4_2.php');
  				} elseif ($_SESSION['nfcdiv2winner'] == '3') {
  					header ('Location: conference/nfcconf4/nfcconf4_3.php');
  				}
  			} elseif ($_SESSION['nfcdiv1winner'] == '5') {
  				// nfcdiv2 = 2 or 3
  				if ($_SESSION['nfcdiv2winner'] == '2') {
  					header ('Location: conference/nfcconf5/nfcconf5_2.php');
  				} elseif ($_SESSION['nfcdiv2winner'] == '3') {
  					header ('Location: conference/nfcconf5/nfcconf5_3.php');
  				}
  			} elseif ($_SESSION['nfcdiv1winner'] == '6') {
  				if ($_SESSION['nfcdiv2winner'] == '2') {
  					header ('Location: conference/nfcconf6/nfcconf6_2.php');
  				} elseif ($_SESSION['nfcdiv2winner'] == '4') {
  					header ('Location: conference/nfcconf6/nfcconf6_4.php');
  				} elseif ($_SESSION['nfcdiv2winner'] == '5') {
  					header ('Location: conference/nfcconf6/nfcconf6_5.php');
  				}
  			}
		}

		if ($_SESSION['match'] == 'afcconf') {
			$_SESSION['match'] = 'nfcconf';

			if ($_SESSION['afcdiv1winner'] == '1') {

  				if ($_SESSION['afcdiv2winner'] == '2') {
  					header ('Location: conference/afcconf1/afcconf1_2.php');
  				} elseif ($_SESSION['afcdiv2winner'] == '3') {
  					header ('Location: conference/afcconf1/afcconf1_3.php');
  				} elseif ($_SESSION['afcdiv2winner'] == '4') {
  					header ('Location: conference/afcconf1/afcconf1_4.php');
  				} elseif ($_SESSION['afcdiv2winner'] == '5') {
  					header ('Location: conference/afcconf1/afcconf1_5.php');
  				}

			} elseif ($_SESSION['afcdiv1winner'] == '4') {
				// afcdiv2 = 2 or 3
				if ($_SESSION['afcdiv2winner'] == '2') {
  					header ('Location: conference/afcconf4/afcconf4_2.php');
  				} elseif ($_SESSION['afcdiv2winner'] == '3') {
  					header ('Location: conference/afcconf4/afcconf4_3.php');
  				}
  			} elseif ($_SESSION['afcdiv1winner'] == '5') {
  				// afcdiv2 = 2 or 3
  				if ($_SESSION['afcdiv2winner'] == '2') {
  					header ('Location: conference/afcconf5/afcconf5_2.php');
  				} elseif ($_SESSION['afcdiv2winner'] == '3') {
  					header ('Location: conference/afcconf5/afcconf5_3.php');
  				}
  			} elseif ($_SESSION['afcdiv1winner'] == '6') {
  				// afcdiv2 = 2,4 or 5
  				if ($_SESSION['afcdiv2winner'] == '2') {
  					header ('Location: conference/afcconf6/afcconf6_2.php');
  				} elseif ($_SESSION['afcdiv2winner'] == '4') {
  					header ('Location: conference/afcconf6/afcconf6_4.php');
  				} elseif ($_SESSION['afcdiv2winner'] == '5') {
  					header ('Location: conference/afcconf6/afcconf6_5.php');
  				}
  			}
		}
		
		if ($_SESSION['match'] == 'nfcdiv2') {
			$_SESSION['match'] = 'afcconf';
			if ($nfcdiv1opp == '4') {
  				header ('Location: divisional/nfcdiv2/nfcdiv2_3.php');
			} elseif ($nfcdiv1opp == '5') {
  				header ('Location: divisional/nfcdiv2/nfcdiv2_4.php');
  			} elseif ($nfcdiv1opp == '6') {
  				header ('Location: divisional/nfcdiv2/nfcdiv2_5.php');
  			}
		}



		if ($_SESSION['match'] == 'nfcdiv1') {
			$_SESSION['match'] = 'nfcdiv2';
			if ($nfcdiv1opp == '4') {
  				header ('Location: divisional/nfcdiv1/nfcdiv1_4.php');
			} elseif ($nfcdiv1opp == '5') {
  				header ('Location: divisional/nfcdiv1/nfcdiv1_5.php');
  			} elseif ($nfcdiv1opp == '6') {
  				header ('Location: divisional/nfcdiv1/nfcdiv1_6.php');
  			}
		}

		if ($_SESSION['match'] == 'afcdiv2') {
			$_SESSION['match'] = 'nfcdiv1';
			if ($afcdiv2opp == '3') {
  				header ('Location: divisional/afcdiv2/afcdiv2_3.php');
			} elseif ($afcdiv2opp == '4') {
  				header ('Location: divisional/afcdiv2/afcdiv2_4.php');
  			} elseif ($afcdiv2opp == '5') {
  				header ('Location: divisional/afcdiv2/afcdiv2_5.php');
  			}
		}
		
		if (!isset($_SESSION['match'])) {
			$_SESSION['match'] = 'afcdiv2';
			if ($afcdiv1opp == '4') {
  				header ('Location: divisional/afcdiv1/afcdiv1_4.php');
			} elseif ($afcdiv1opp == '5') {
  				header ('Location: divisional/afcdiv1/afcdiv1_5.php');
  			} elseif ($afcdiv1opp == '6') {
  				header ('Location: divisional/afcdiv1/afcdiv1_6.php');
  			}
		}

	}

	matchupdiv();
?>