<?php

$id = $_GET['id'];

$jsondata = file_get_contents('http://takkerapp.com:3000/recipe/' . $id);
$obj = json_decode($jsondata);

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style/item.css" />	
		<script type="text/javascript" src="js/sliderman.1.3.8.js"></script>
		<link rel="stylesheet" type="text/css" href="style/sliderman.css" />
		<title>Easy as PIE!</title>
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
		
		<div class="card">
			<table>
				<tr>
				<td style="padding-right: 20px;">
					<br><br>
							<div id="steps" style="width: 660px; margin-left:auto; margin-right: auto;">
								<div id="wrapper">
	
								<div id="examples_outer">
									
									<div id="slider_container_1">
										<div id="SliderName">
										<?php
											
												
											for ($i=-1; $i < count($obj->{'steps'}); $i++) 
											{
												$type = $obj->{'steps'}[$i]->{'type'};
												
												if($i == -1)
												{
													?>
													<img src="<?php echo $obj->{'image'}->{'url'}; ?>" title="<?php echo $obj->{'image'}->{'url'}; ?>" />
													
													<div class="SliderNameDescription" style="padding: 10px;">
													<?php
													echo '<b>' . $obj->{'name'} . "</b></div>";
												}
												else 
												{
													if ($type == "textTimer")
													{
														?>
															<img src="img/step.png" title="Step" />
														<?php
														print('[' . $obj->{'steps'}[$i]->{'timer'} . ' minutes] - ');
													}
													?>
													
													<?php
													if($type == "text")
													{
														?><img src="img/step.png" title="Step" /><?php
													}
													if($type == "textImage")
													{
														?>
															<img src="<?php echo $obj->{'steps'}[$i]->{'image'}->{'glassUrl'}; ?>" title="<?php echo $obj->{'steps'}[$i]->{'image'}->{'glassUrl'}; ?>" />
														<?php
													}
													?>
													<div class="SliderNameDescription" style="padding: 10px;">
													
													<?php
													echo '<b>'.$obj->{'steps'}[$i]->{'body'} . "</b>";
													?>
													</div>
													<?php	
												}
											}
											
											?>
										</div>
										<div class="c"></div>
										<div id="SliderNameNavigation" style="background:#000;"></div>
										<div class="c"></div>
						
										<script type="text/javascript">
						
											// we created new effect and called it 'demo01'. We use this name later.
											Sliderman.effect({name: 'demo01', cols: 10, rows: 5, delay: 10, fade: true, order: 'straight_stairs'});
						
											var demoSlider = Sliderman.slider({container: 'SliderName', width: 640, height: 310, effects: 'demo01',
											display: {
												pause: true, // slider pauses on mouseover
												autoplay: 300000, // 3 seconds slideshow
												always_show_loading: 200, // testing loading mode
												description: {background: '#ffffff', opacity: 0.5, height: 100, position: 'bottom'}, // image description box settings
												loading: {background: '#000000', opacity: 0.2, image: 'img/loading.gif'}, // loading box settings
												buttons: {opacity: 1, prev: {className: 'SliderNamePrev', label: ''}, next: {className: 'SliderNameNext', label: ''}}, // Next/Prev buttons settings
													
											}});
						
										</script>
						
										<div class="c"></div>
									</div>
									<div class="c"></div>
								</div>
						
								<div class="c"></div>
							</div>
						</div>
				</td>
					<td style=" text-align: justify;">
						<div class="detcard">
							<h1><p class="rpneve"><?php echo $obj->{'name'}; ?></p> 
								<div style="float: right; margin-top: -80px;">
									<button style="padding: 5px 8px;"><a style="text-decoration: none;" href="mirror/send_pie.php?id=<?php echo $obj->{'_id'}; ?>&name=<?php echo $obj->{'name'};?>&url=<?php echo $obj->{'image'}->{'url'}; ?>">Push to Glass</a></button>
									<button style="padding: 5px 8px;">Add to shopping list</button>
								</div>
							<h3>Description:</h3>
							<?php print($obj->{'description'}); ?>
							<h3>Ingredients:</h3>
							<?php print($obj->{'indigrients'}); ?>
						</div>
					</td>
				</tr>
				
			</table>
		</div>
		
	</body>
</html>