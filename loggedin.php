<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style/loggedinstyle.css" />		
	</head>
	<body>
		<div id="ezaz">
			<div id="header"><center><img src="img/receptekheader.png" width="70%"></center></div>
			
			<div id="searchblock">
			<form>
				<input class="inputtext" type="text" name="searchfor" />
				<input id="submitb" class="inputtext" type="submit" name="search" value="search" />
			</form>
			</div>
		</div>
		<br>
		<div id="mostpop" class="card" style="background: #fff;">
		<h2 style="padding:1.5rem;">Most popular</h2>
		
		<?php		
		$jsondata = file_get_contents('http://takkerapp.com:3000/list');
		$obj = json_decode($jsondata);
		for ($i=2; $i >= 0; $i--) { 
			?>
			<div class="card">
				<table>
					<tr>
					<td><h1>
					</h1></td>
					<td>
						<img class="imgcard" src="<?php echo $obj[$i]->{'image'}->{'url'}?>">
					</td>
						<td>
							<a href="<?php echo $obj[$i]->{'_id'}; ?>">
								<div class="detcard">
									
									<p class="rpneve"><?php echo $obj[$i]->{'name'}; ?></p>
									<h3><?php echo $obj[$i]->{'description'};  ?></h3>
								</div>
							</a>
						</td>
					</tr>
				</table>
			</div>
			<br />
			<?php
		}
		?>
		</div>
		
	</body>
</html>