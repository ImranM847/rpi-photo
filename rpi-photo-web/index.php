<html>

	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link href="style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="favicon.ico" />

	<title>RPi Photo Web</title>
	</head>

	<body>
	
	<h1>RPi Photo Web</h1>
	
	<?php
	
	echo "<form action='index.php' method='post'>
					<select name='parameter'>
					<option value='--version'>Version</option>
					<option value='--help'>Help</option>
					<option value='--auto-detect'>Auto detect camera</option>
					<option value='--abilities'>Show camera's abilities</option>
					<option value='--list-config'>List configurable parameters</option>
					<option value='--capture-image-and-download --filename \"%Y%m%d-%H%M%S-%03n.%C\"'>Capture and download (custom file name)</option>
					</select>
					<input type='submit' value='Run'/>
			</form>";
			
			$command='gphoto2 '.$_POST['parameter'];
			echo shell_exec("$command");
			echo shell_exec("gphoto2 --reset");
			
			?>
			
	</body>
</html>
