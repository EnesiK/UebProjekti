<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<style>
		/* Add some basic styling to the navigation bar */
		/*sdjhfsdjhfkjsdhkfsaldkjfh*/
		nav {
			background-color: #333;
			overflow: hidden;
		}

		/* Style the links in the navigation bar */
		nav a {
			float: left;
			color: white:
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}

		/* Change the background color of the active link */
		nav a.active {
			background-color: #4CAF50;
		}
	</style>
</head>
<body>
	<!-- Add the navigation bar to the top of the page -->
	<nav>
		<?php
			// An array of links and their URLs
			$links = array(
				"Home" => "index.php",
				"About" => "about.php",
				"Services" => "services.php",
				"Contact" => "contact.php"
			);

			// Loop through the links and create a navigation bar
			foreach($links as $label => $url) {
				echo "<a href=\"$url\"";
				if(basename($_SERVER['PHP_SELF']) == $url) {
					echo " class=\"active\"";
				}
				echo ">$label</a>";
			}
		?>
	</nav>
	
	<!-- Add the rest of your website content below the navigation bar -->
	<h1>Welcome to my website!</h1>
	<p>This is the content of my website.</p>
</body>
</html>
