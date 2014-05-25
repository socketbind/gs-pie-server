<?php

if(isset($_POST['mail']) && !empty($_POST['mail']))
{
	$mail = htmlspecialchars($_POST['mail']);
	
	$myFile = "followers.txt";
	$fh = @fopen($myFile, 'a');
	$stringData = $mail . "\r\n";
	fwrite($fh, $stringData);
	fclose($fh);
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style/stylesheet.css" />		
		<script src="js/jquery.js"></script>
		<script src="js/smoothie.js"></script>
		<script type="text/javascript">
			$( window ).scroll(function() {
			 	var rect = document.getElementById('after').getBoundingClientRect();
			 	if(rect.top < 50){$( "#navbar" ).css( "display", "block" ).fadeIn( "slow" );}
			 	else{$( "#navbar" ).css( "display", "none" ).fadeOut( "slow" );}
			});
		
		</script>
		
		<title>PIE</title>
	</head>
	<body>
		<div id="starter">
			<div id="topmenu">
				<img src="img/logo.png" class="box"><br>
				<div id="menubox">
					<a href="#what" class="smoothie" data-smoothie-speed="2000">ABOUT</a><br>
					<!--<a href="mirror/perform_auth.php" class="" data-smoothie-speed="2000">LOG IN</a><br>--></br>
					<img class="menukep" src="img/icofb.png"></img>
					<img class="menukep" src="img/icoinsta.png"></img>
					<img class="menukep" src="img/icotwitta.png"></img>
				</div>
				<img src="img/glass.png" class="box">
			</div>
			<div style="position: absolute; top: 0; left: 0; right: 13%;">
				<img src="img/szlogen.png" class="sl">
				<form action="" method="POST">
					<div style="margin-top: -90px;">
						<input type="email" placeholder="E-mail address" class="inp" name="mail">	
					</div>
					<input type="image" src="img/subscribe.png" name="submit" class="kp" width="300"/>
				</form>
				<iframe style="width: 640px; margin-left: 37%;" width="640" height="360" src="//www.youtube.com/embed/Kdgt1ZHkvnM?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div id="after">
			<div id="navbar" style="display: none;">
				<p id="navbartxt">
					<a href="#what" class="topmenuitem smoothie" data-smoothie-speed="2000">ABOUT</a>
					<a href="mirror/perform_auth.php" class="topmenuitem" data-smoothie-speed="2000">LOG IN</a>
				</p>
			</div>
			<div id="wrap">
				<div id="what">
					<p class="whatname">What is the PIE?</p>
					<div id="whatCont">
						At PIE we think about cooking as a process which starts with the demand of cooking some food and ends up with having a delicious meal with your loved ones.<br>
						The essential of cooking is the recipe. With a good recipe anyone can make delicious food without strong kitchen experiences.<br>
						So at PIE we have created a new format for recipes which serves the best structure for cooking at home. People will think about PIE as the platform to make their recipe searches.<br>
						PIE covers every phases of cooking, so users stay on our platform from planning their meals until sharing pictures of the well-done food.<br >
						This is how we create value for our users and why it's the best platform for culinarians to sell their recipes.<br>
						PIE provides the platform so culinarians can focus on making brilliant recipes which serve the needs of millions of home cooks.	<br>
					</div>
					<img src="img/logo.png" width="300px">
				</div>
			</div>
		</div>
	</body>
</html>

