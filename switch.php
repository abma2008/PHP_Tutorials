<?php
	/*
	Basic Tutorial for learning switch in PHP.
	please make sure to revise this tutorial for future reference.
	*/
		$msg = ""; // setting the value to empty string to avoid getting the error
	if($_SERVER['REQUEST_METHOD'] == "POST"):
		if(empty($_POST['dayname'])){
			$msg =  "Empty Value is not acceptable...";
		}
		else{
			$today = $_POST['dayname'];

		switch(strtolower($today)):
		case "saturday":
			$msg = "This is the first day of the week";
			break;
		case "sunday":
			$msg = "This is the second day of the week";
			break;
		case "monday":
			$msg = "This is the third day of the week";
			break;
		case "tuesday":
			$msg = "This is the fourth day of the week";
			break;
		case "wednesday":
			$msg = "This is the Fifth day of the week";
			break;
		case "thursday":
			$msg = "This is the weekend day 1";
			break;
		case "friday":
			$msg = "This is the weekend day 2";
			break;
		default:
			$msg = "Option not recognized";
		endswitch;
		}
	endif;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		form, .msg{
			width: 50%;
			margin: 0 auto;
			font-size: 25px;
		}
		form > input {
			width: 100%;
			font-weight: bold;
			height: 25px;
		}
		form > button{
			width: 100%;
			height: auto;
			text-align: center;
			font-size: 25px;
		}
		form > *{
			margin-top:20px;
		}
	</style>
</head>
<body>
	<div class="msg">
		<?php strlen($msg) > 0? print $msg: "";?>
	</div>
	<form class="" action="" method="post">
		<input type="text" name="dayname">
		<button type="submit">Check Day</button>
	</form>

</body>
</html>