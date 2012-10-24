<!DOCTYPE html> 
<html>

<head>
	<title>VoteCaster | Submit</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>My Title</h1>
		<a href="#" data-icon="check" id="logout" class="ui-btn-right">Logout</a>

	</div><!-- /header -->

	<div data-role="content">	
		
		<?php
		// A malicious user would be hard-pressed to compromise
		// a user's password with crypt because crypt is a one-way
		// function, and the malicious user would also need to guess
		// the salt, which can be set on an individual-user basis.
		$salt = "kr";

		// This saved_password would be saved in the database.
		/*$saved_password = crypt('mypassword', $salt); 
		echo "<p>The saved password is: ".$saved_password."</p>";
*/
		$username = $_POST["username"];
		$entered_password = $_POST["password"];


			include("config.php");
			$query = "select * from passwords where username = `".$username."` and password=`".$entered_password."`";
			echo $query;
			$result = mysql_query($query);
		      // This tells you how many rows were returned
			$num_rows = mysql_num_rows($result);
			echo $num_rows;

			if ($num_rows >0) {
				echo "you're logged in";
			}
			else{
			echo "failed log in";
		}

		echo "<p>The user sent a username of: ".$username ."</p>";
		echo "<p>The user sent a password of: ".$entered_password."</p>";

		// We check the user-entered password against the one
		// saved and retrieved above. If it matches, the user is logged in.
		if (crypt($entered_password, $salt) == $saved_password) {
		   echo "Password verified!";
		}

		echo "<p><a href='index.php'>Go back</a></p>";

		?>

		<!-- THIS WAS THE OLD STUFF BEFORE WE FIXED THE LOGIN INFO
		<?php
		// This is a hack. You should connect to a database here.
		if ($_POST["username"] == "oi") {
			?>
			<script type="text/javascript">
				// Save the username in local storage. That way you
				// can access it later even if the user closes the app.
				localStorage.setItem('username', '<?=$_POST["username"]?>');
			</script>
			<?php
			echo "<p>Thank you, <strong>".$_POST["username"]."</strong>. You are now logged in.</p>";
		} else {
			echo "<p>There seems to have been an error.</p>";
		}
			

		?>-->
	</div><!-- /content -->

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
			<li><a href="index.php" id="home" data-icon="custom">Home</a></li>
			<li><a href="login.php" id="key" data-icon="custom" class="ui-btn-active">Login</a></li>
			<li><a href="filter.php" id="beer" data-icon="custom">Filter</a></li>
			<li><a href="#" id="skull" data-icon="custom">Settings</a></li>
		</ul>
		</div>
	</div>
	
	<script type="text/javascript">
		$("#logout").click(function() {
			localStorage.removeItem('username');
			$("#form").show();
			$("#logout").hide();
		});
	</script>
</div><!-- /page -->

</body>
</html>