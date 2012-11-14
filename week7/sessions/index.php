<?php
session_start();
?>
<!DOCTYPE html> 
<html>

<head>
	<title>Sessions Example</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">

	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/jquery.mobile-1.2.0.js"></script>

	<link rel="stylesheet" href="css/jquery.mobile-1.2.0.css" />
	
		
</head>

<body>

<<<<<<< HEAD
<div data-role="page" class="filter">
=======
<div data-role="page" id="filter">
>>>>>>> b5efc25e5d79699e13609e82bbf39bf85734b103
	
	<div data-role="header">
		<h1>User Sessions</h1>
	</div><!-- /header -->
	
	<div data-role="content">	
	
		
		
	<?php echo "<p>The user retrieved from SESSION is: ".$_SESSION["username"]."</p>"; ?>		
	<?php echo "<p>The user retrieved from GET is: ".$_GET["username"]."</p>"; ?>		
		
		<p id="localstoragename"></p>
		
		<form action="set.php" method="post">
			<input type="text" name="username" autocapitalize="off">
			<input type="submit" value="Submit form" />
		</form>
		
		<script type="text/javascript">
<<<<<<< HEAD
		$(".filter").unbind('pageinit');   /* 'filter' is the page's id. Once page is loaded, we get the alert*/
		$(".filter").bind('pageinit', function(event){  /* #filter applies to an id.   .filter applies to a class */
				alert("This is a nice alert");
				$(".filter").find("#localstoragename").html("The user we get from local storage is: " + localStorage.getItem('username'));
		});/* above, this doesn't always show! */
=======
		$("#filter").unbind('pageinit');
		$("#filter").bind('pageinit', function(event){ 
				alert("This is a nice alert");
				$("#filter").find("#localstoragename").html("The user we get from local storage is: " + localStorage.getItem('username'));
		});
>>>>>>> b5efc25e5d79699e13609e82bbf39bf85734b103
		</script>
		
	</div>
	
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="b">
			<ul>
				<li><a href="index.php" id="home" class="ui-btn-active" data-icon="custom">Home</a></li>
				<li><a href="local.php" id="key" data-icon="custom">Blank</a></li>
				<li><a href="set.php" id="map" data-icon="custom">Set</a></li>
				
			</ul>
		</div>
	</div>
</div>
</body>
</html>