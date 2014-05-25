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
					<a href="mirror/perform_auth.php" class="" data-smoothie-speed="2000">LOG IN</a><br>
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
					<p class="whatname">Mi az a PIE?</p>
					<div id="whatCont">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare magna a lacus fermentum, non blandit ipsum ornare. Sed et commodo lectus. Vestibulum tempus leo a est ornare, pretium pharetra mi fringilla. In feugiat libero risus, eu hendrerit purus consectetur non. Pellentesque sagittis hendrerit elit, vel dignissim risus laoreet a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis ligula ante, auctor sit amet aliquam in, feugiat eget lorem. Nam nibh lectus, cursus et leo quis, sagittis ultricies nisl. Proin vel eros mollis, adipiscing sem at, commodo ligula. Integer non turpis elit. Donec ultrices odio tortor, ut faucibus tellus porttitor luctus. Ut interdum nibh quis mauris accumsan convallis. Donec rhoncus purus eget justo auctor adipiscing.
					</div>
					<img src="images/stopfood.png">
				</div>
			</div>
		</div>
	</body>
</html>

