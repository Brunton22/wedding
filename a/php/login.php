<?php

	$action = $_GET['action'];

	switch($action) {

		case "login":
			login();
			break;
		}

	function login(){

		include ('connect_db.php');

		$mypassword=$_POST['p_word'];

		$sql ="SELECT * FROM secure WHERE PASS='$mypassword'";
		$result=mysqli_query($conn, $sql);

		$count=mysqli_num_rows($result);
		$row=mysqli_fetch_row($result);

		if($count==1 && $mypassword==$row[1] && $row[0]=='1'){

			session_start();
			$_SESSION["mypassword"]="$mypassword";
			echo "day";
		}

		else if ($count==1 && $mypassword==$row[1] && $row[0]=='2'){

			session_start();
			$_SESSION["mypassword"]="$mypassword";
			echo "night";
		}

		else if ($count==1 && $mypassword==$row[1] && $row[0]=='3'){

			session_start();
			$_SESSION["mypassword"]="$mypassword";
			echo "guestlist";
		}
	};

?>