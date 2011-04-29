<?php
	require_once("config.php");
	error_reporting(0);
	@ini_set(‘display_errors’, 0);
	
?>

<!doctype html>
<html>
<head>
	<title>OPRF Tech Kiosk</title>
	
	<link rel="stylesheet" href="style.css" />
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript">
		$(document).ready(function() {

			$("#signup").fancybox({
				'width'				: 500,
				'height'			: 500,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			
			$(".sites").fancybox({
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe',
				'centerOnScroll'	: true,
				'autoScale'			: true,
				'width'				: 1000,
				'height'			: 600
			});
		});
	</script>
	
</head>
<body>
	<div id="site" class="section">
	<?php
		include_once("mainpage.html");
	?>
	</div>
	
	<div id="overlay">
		<div class="section">
			<ul id="nav">
			<?php 
				foreach (glob("sites/*") as $site) {
					$site = substr($site, 6);
					$name = "";
					$namearr = explode("-", $site);
					foreach ($namearr as $piece) {
						$name = $name . " " . $piece;
					}
					echo "<li><a class=\"sites\" href=\"$kiosk/sites/$site\">$name</a></li>";
				}
			?>
			</ul>
			
			<div id="button">
				<a id="signup" href="<?php echo $kiosk; ?>/signup/signup.php">Signup For Technology Club Info</a>
			</div>
		</div>
	</div>
	
</body>
</html>