<?php
	include('../controller/food_controller.php');  
	session_start();	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>haarlem</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<script src="js/jquery.js"></script>	
</head>
<body>
<!-- wrapper  -->
<div class="wrapper">
	<header>
		<div class="container">
			<div class="nav_grid">
				<ul class="nav_link">
					<li><a href="javascript:void(0);">Home</a></li>
					<li><a href="javascript:void(0);">Jazz</a></li>
					<li><a href="javascript:void(0);">Dance</a></li>
					<li><a href="javascript:void(0);">Food</a></li>
					<li><a href="javascript:void(0);">Volunteer</a></li>
				</ul>
				<div class="car_lang">
					<div class="cart"><a href="javascript:void(0);">|0| Items</a></div>
					<div class="lang">
						<a href="javascript:void(0);">EN</a>
						<a href="javascript:void(0);">NL</a>
					</div>
				</div>
				<a class="logo" href="javascript:void(0);"><img src="../images/logo.png"></a>
			</div>
		</div>
	</header>

	<section class="banner_bg">
		<div class="container">			
			<?php echo '<h1>' .$headerDates. '</h1>';?>
		</div>
	</section>
	<section class="red_bg">
		<div class="container">
			<a href="#reservation">CLICK HERE TO MAKE A RESERVATION</a>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="box_content">
				<div class="text_ontent">
					<?php echo '<p>' .$intro. '</p>';?>
				</div>
				<div class="logo_sign">
					<img src="../images/logo_singn.jpg" alt="img">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="by_filter">
				<h4>Filter By</h4>
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'All')" id="defaultOpen">All</button>
					<button class="tablinks" onclick="openCity(event, 'French')">French</button>
					<button class="tablinks" onclick="openCity(event, 'European')">European</button>
					<button class="tablinks" onclick="openCity(event, 'Seafood')">Seafood</button>
					<button class="tablinks" onclick="openCity(event, 'Asian')">Asian</button>
					<button class="tablinks" onclick="openCity(event, 'International')">International</button>
				</div>
			</div>
		</div>
		<div class="red_strep">
			<div class="container">
				<?php echo '<p>' .$note. '</p>';?>
			</div>
		</div>
		<div class="container">
			<div id="All" class="tabcontent">
				<div class="innet_content">
					<div class="mr_miss">
						<img src="../images/name_img1.png" alt="img">
					</div>
					<div class="resturent_text">
						<div class="review_text">
							<div class="title_text">
								<?php echo '<h2>' .$name[1]. '</h2>';?>
							</div>
							<ul class="str_views">
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
							</ul>
						</div>
						<div class="description">
							<ul>
								<li>
									<div class="left_text">Address</div>
									<div class="right_text">
										 <?php echo '<p>' .$address[1]. '</p>';?>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Price</span></div>
									<div class="right_text">
										<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
										<div class="doller_grid"><?php echo '<strong>' .$price[1]. '</strong>';?><?php echo '<strong>' .$price_kids[1]. '</strong>';?></div>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Type</span></div>
									<div class="right_text">
										<?php echo '<p>' .$type[1]. '</p>';?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="innet_content">
					<div class="mr_miss">
						<img src="../images/name_img2.png" alt="img">
					</div>
					<div class="resturent_text">
						<div class="review_text">
							<div class="title_text">
								<?php echo '<h2>' .$name[2]. '</h2>';?>
							</div>
							<ul class="str_views">
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
							</ul>
						</div>
						<div class="description">
							<ul>
								<li>
									<div class="left_text">Address</div>
									<div class="right_text">
										<?php echo '<p>' .$address[2]. '</p>';?>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Price</span></div>
									<div class="right_text">
										<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
										<div class="doller_grid"><?php echo '<strong>' .$price[2]. '</strong>';?><?php echo '<strong>' .$price_kids[2]. '</strong>';?></div>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Type</span></div>
									<div class="right_text">
										<?php echo '<p>' .$type[2]. '</p>';?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="innet_content">
					<div class="mr_miss">
						<img src="../images/name_img3.png" alt="img">
					</div>
					<div class="resturent_text">
						<div class="review_text">
							<div class="title_text">
							<?php echo '<h2>' .$name[3]. '</h2>';?>
							</div>
							<ul class="str_views">
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
							</ul>
						</div>
						<div class="description">
							<ul>
								<li>
									<div class="left_text">Address</div>
									<div class="right_text">
										<?php echo '<p>' .$address[3]. '</p>';?>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Price</span></div>
									<div class="right_text">
										<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
										<div class="doller_grid"><?php echo '<strong>' .$price[3]. '</strong>';?><?php echo '<strong>' .$price_kids[3]. '</strong>';?></div>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Type</span></div>
									<div class="right_text">
										<?php echo '<p>' .$type[3]. '</p>';?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="innet_content">
					<div class="mr_miss">
						<img src="../images/name_img4.png" alt="img">
					</div>
					<div class="resturent_text">
						<div class="review_text">
							<div class="title_text">
							<?php echo '<h2>' .$name[4]. '</h2>';?>
							</div>
							<ul class="str_views">
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
							</ul>
						</div>
						<div class="description">
							<ul>
								<li>
									<div class="left_text">Address</div>
									<div class="right_text">
										<?php echo '<p>' .$address[4]. '</p>';?>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Price</span></div>
									<div class="right_text">
										<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
										<div class="doller_grid"><?php echo '<strong>' .$price[4]. '</strong>';?><?php echo '<strong>' .$price_kids[4]. '</strong>';?></div>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Type</span></div>
									<div class="right_text">
										<?php echo '<p>' .$type[4]. '</p>';?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="innet_content">
					<div class="mr_miss">
						<img src="../images/name_img5.png" alt="img">
					</div>
					<div class="resturent_text">
						<div class="review_text">
							<div class="title_text">
								<?php echo '<h2>' .$name[5]. '</h2>';?>
							</div>
							<ul class="str_views">
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
							</ul>
						</div>
						<div class="description">
							<ul>
								<li>
									<div class="left_text">Address</div>
									<div class="right_text">
										<?php echo '<p>' .$address[5]. '</p>';?>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Price</span></div>
									<div class="right_text">
										<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
										<div class="doller_grid"><?php echo '<strong>' .$price[5]. '</strong>';?><?php echo '<strong>' .$price_kids[5]. '</strong>';?></div>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Type</span></div>
									<div class="right_text">
										<?php echo '<p>' .$type[5]. '</p>';?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="innet_content">
					<div class="mr_miss">
						<img src="../images/name_img6.png" alt="img">
					</div>
					<div class="resturent_text">
						<div class="review_text">
							<div class="title_text">
								<?php echo '<h2>' .$name[6]. '</h2>';?>
							</div>
							<ul class="str_views">
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
							</ul>
						</div>
						<div class="description">
							<ul>
								<li>
									<div class="left_text">Address</div>
									<div class="right_text">
										<?php echo '<p>' .$address[6]. '</p>';?>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Price</span></div>
									<div class="right_text">
										<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
										<div class="doller_grid"><?php echo '<strong>' .$price[6]. '</strong>';?><?php echo '<strong>' .$price_kids[6]. '</strong>';?></div>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Type</span></div>
									<div class="right_text">
										<?php echo '<p>' .$type[6]. '</p>';?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="innet_content">
					<div class="mr_miss">
						<img src="../images/name_img7.png" alt="img">
					</div>
					<div class="resturent_text">
						<div class="review_text">
							<div class="title_text">
								<?php echo '<h2>' .$name[7]. '</h2>';?>
							</div>
							<ul class="str_views">
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
							</ul>
						</div>
						<div class="description">
							<ul>
								<li>
									<div class="left_text">Address</div>
									<div class="right_text">
										<?php echo '<p>' .$address[7]. '</p>';?>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Price</span></div>
									<div class="right_text">
										<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
										<div class="doller_grid"><?php echo '<strong>' .$price[7]. '</strong>';?><?php echo '<strong>' .$price_kids[7]. '</strong>';?></div>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Type</span></div>
									<div class="right_text">
										<?php echo '<p>' .$type[7]. '</p>';?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="innet_content">
					<div class="mr_miss">
						<img src="../images/name_img8.png" alt="img">
					</div>
					<div class="resturent_text">
						<div class="review_text">
							<div class="title_text">
								<?php echo '<h2>' .$name[8]. '</h2>';?>
							</div>
							<ul class="str_views">
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
							</ul>
						</div>
						<div class="description">
							<ul>
								<li>
									<div class="left_text">Address</div>
									<div class="right_text">
										<?php echo '<p>' .$address[8]. '</p>';?>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Price</span></div>
									<div class="right_text">
										<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
										<div class="doller_grid"><?php echo '<strong>' .$price[8]. '</strong>';?><?php echo '<strong>' .$price_kids[8]. '</strong>';?></div>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Type</span></div>
									<div class="right_text">
										<?php echo '<p>' .$type[8]. '</p>';?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="French" class="tabcontent">
				<div class="innet_content">
					<div class="mr_miss">
						<img src="../images/name_img2.png" alt="img">
					</div>
					<div class="resturent_text">
						<div class="review_text">
							<div class="title_text">
								<?php echo '<h2>' .$name[2]. '</h2>';?>
							</div>
							<ul class="str_views">
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
							</ul>
						</div>
						<div class="description">
							<ul>
								<li>
									<div class="left_text">Address</div>
									<div class="right_text">
										<?php echo '<p>' .$address[2]. '</p>';?>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Price</span></div>
									<div class="right_text">
										<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
										<div class="doller_grid"><?php echo '<strong>' .$price[2]. '</strong>';?><?php echo '<strong>' .$price_kids[2]. '</strong>';?></div>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Type</span></div>
									<div class="right_text">
										<?php echo '<p>' .$type[2]. '</p>';?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="innet_content">
					<div class="mr_miss">
						<img src="../images/name_img4.png" alt="img">
					</div>
					<div class="resturent_text">
						<div class="review_text">
							<div class="title_text">
								<?php echo '<h2>' .$name[4]. '</h2>';?>
							</div>
							<ul class="str_views">
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
							</ul>
						</div>
						<div class="description">
							<ul>
								<li>
									<div class="left_text">Address</div>
									<div class="right_text">
										<?php echo '<p>' .$address[4]. '</p>';?>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Price</span></div>
									<div class="right_text">
										<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
										<div class="doller_grid"><?php echo '<strong>' .$price[4]. '</strong>';?><?php echo '<strong>' .$price_kids[4]. '</strong>';?></div>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Type</span></div>
									<div class="right_text">
										<?php echo '<p>' .$type[4]. '</p>';?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="European" class="tabcontent">
				<div class="innet_content">
						<div class="mr_miss">
							<img src="../images/name_img1.png" alt="img">
						</div>
						<div class="resturent_text">
							<div class="review_text">
								<div class="title_text">
									<?php echo '<h2>' .$name[1]. '</h2>';?>
								</div>
								<ul class="str_views">
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								</ul>
							</div>
							<div class="description">
								<ul>
									<li>
										<div class="left_text">Address</div>
										<div class="right_text">
											<?php echo '<p>' .$address[1]. '</p>';?>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Price</span></div>
										<div class="right_text">
											<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
											<div class="doller_grid"><?php echo '<strong>' .$price[1]. '</strong>';?><?php echo '<strong>' .$price_kids[1]. '</strong>';?></div>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Type</span></div>
										<div class="right_text">
											<?php echo '<p>' .$type[1]. '</p>';?>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="innet_content">
						<div class="mr_miss">
							<img src="../images/name_img2.png" alt="img">
						</div>
						<div class="resturent_text">
							<div class="review_text">
								<div class="title_text">
									<?php echo '<h2>' .$name[2]. '</h2>';?>
								</div>
								<ul class="str_views">
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								</ul>
							</div>
							<div class="description">
								<ul>
									<li>
										<div class="left_text">Address</div>
										<div class="right_text">
											<?php echo '<p>' .$address[2]. '</p>';?>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Price</span></div>
										<div class="right_text">
											<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
											<div class="doller_grid"><?php echo '<strong>' .$price[2]. '</strong>';?><?php echo '<strong>' .$price_kids[2]. '</strong>';?></div>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Type</span></div>
										<div class="right_text">
											<?php echo '<p>' .$type[2]. '</p>';?>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="innet_content">
						<div class="mr_miss">
							<img src="../images/name_img3.png" alt="img">
						</div>
						<div class="resturent_text">
							<div class="review_text">
								<div class="title_text">
								<?php echo '<h2>' .$name[3]. '</h2>';?>
								</div>
								<ul class="str_views">
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								</ul>
							</div>
							<div class="description">
								<ul>
									<li>
										<div class="left_text">Address</div>
										<div class="right_text">
											<?php echo '<p>' .$address[3]. '</p>';?>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Price</span></div>
										<div class="right_text">
											<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
											<div class="doller_grid"><?php echo '<strong>' .$price[3]. '</strong>';?><?php echo '<strong>' .$price_kids[3]. '</strong>';?></div>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Type</span></div>
										<div class="right_text">
											<?php echo '<p>' .$type[3]. '</p>';?>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="innet_content">
						<div class="mr_miss">
							<img src="../images/name_img4.png" alt="img">
						</div>
						<div class="resturent_text">
							<div class="review_text">
								<div class="title_text">
								<?php echo '<h2>' .$name[4]. '</h2>';?>
								</div>
								<ul class="str_views">
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								</ul>
							</div>
							<div class="description">
								<ul>
									<li>
										<div class="left_text">Address</div>
										<div class="right_text">
											<?php echo '<p>' .$address[4]. '</p>';?>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Price</span></div>
										<div class="right_text">
											<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
											<div class="doller_grid"><?php echo '<strong>' .$price[4]. '</strong>';?><?php echo '<strong>' .$price_kids[4]. '</strong>';?></div>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Type</span></div>
										<div class="right_text">
											<?php echo '<p>' .$type[4]. '</p>';?>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="innet_content">
						<div class="mr_miss">
							<img src="../images/name_img5.png" alt="img">
						</div>
						<div class="resturent_text">
							<div class="review_text">
								<div class="title_text">
									<?php echo '<h2>' .$name[5]. '</h2>';?>
								</div>
								<ul class="str_views">
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								</ul>
							</div>
							<div class="description">
								<ul>
									<li>
										<div class="left_text">Address</div>
										<div class="right_text">
											<?php echo '<p>' .$address[5]. '</p>';?>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Price</span></div>
										<div class="right_text">
											<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
											<div class="doller_grid"><?php echo '<strong>' .$price[5]. '</strong>';?><?php echo '<strong>' .$price_kids[5]. '</strong>';?></div>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Type</span></div>
										<div class="right_text">
											<?php echo '<p>' .$type[5]. '</p>';?>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="innet_content">
						<div class="mr_miss">
							<img src="../images/name_img6.png" alt="img">
						</div>
						<div class="resturent_text">
							<div class="review_text">
								<div class="title_text">
									<?php echo '<h2>' .$name[6]. '</h2>';?>
								</div>
								<ul class="str_views">
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								</ul>
							</div>
							<div class="description">
								<ul>
									<li>
										<div class="left_text">Address</div>
										<div class="right_text">
											<?php echo '<p>' .$address[6]. '</p>';?>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Price</span></div>
										<div class="right_text">
											<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
											<div class="doller_grid"><?php echo '<strong>' .$price[6]. '</strong>';?><?php echo '<strong>' .$price_kids[6]. '</strong>';?></div>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Type</span></div>
										<div class="right_text">
											<?php echo '<p>' .$type[6]. '</p>';?>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="innet_content">
						<div class="mr_miss">
							<img src="../images/name_img7.png" alt="img">
						</div>
						<div class="resturent_text">
							<div class="review_text">
								<div class="title_text">
									<?php echo '<h2>' .$name[7]. '</h2>';?>
								</div>
								<ul class="str_views">
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								</ul>
							</div>
							<div class="description">
								<ul>
									<li>
										<div class="left_text">Address</div>
										<div class="right_text">
											<?php echo '<p>' .$address[7]. '</p>';?>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Price</span></div>
										<div class="right_text">
											<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
											<div class="doller_grid"><?php echo '<strong>' .$price[7]. '</strong>';?><?php echo '<strong>' .$price_kids[7]. '</strong>';?></div>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Type</span></div>
										<div class="right_text">
											<?php echo '<p>' .$type[7]. '</p>';?>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="innet_content">
						<div class="mr_miss">
							<img src="../images/name_img8.png" alt="img">
						</div>
						<div class="resturent_text">
							<div class="review_text">
								<div class="title_text">
									<?php echo '<h2>' .$name[8]. '</h2>';?>
								</div>
								<ul class="str_views">
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								</ul>
							</div>
							<div class="description">
								<ul>
									<li>
										<div class="left_text">Address</div>
										<div class="right_text">
											<?php echo '<p>' .$address[8]. '</p>';?>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Price</span></div>
										<div class="right_text">
											<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
											<div class="doller_grid"><?php echo '<strong>' .$price[8]. '</strong>';?><?php echo '<strong>' .$price_kids[8]. '</strong>';?></div>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Type</span></div>
										<div class="right_text">
											<?php echo '<p>' .$type[8]. '</p>';?>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="Seafood" class="tabcontent">
			<div class="innet_content">
						<div class="mr_miss">
							<img src="../images/name_img7.png" alt="img">
						</div>
						<div class="resturent_text">
							<div class="review_text">
								<div class="title_text">
									<?php echo '<h2>' .$name[7]. '</h2>';?>
								</div>
								<ul class="str_views">
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								</ul>
							</div>
							<div class="description">
								<ul>
									<li>
										<div class="left_text">Address</div>
										<div class="right_text">
											<?php echo '<p>' .$address[7]. '</p>';?>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Price</span></div>
										<div class="right_text">
											<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
											<div class="doller_grid"><?php echo '<strong>' .$price[7]. '</strong>';?><?php echo '<strong>' .$price_kids[7]. '</strong>';?></div>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Type</span></div>
										<div class="right_text">
											<?php echo '<p>' .$type[7]. '</p>';?>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
			<div class="innet_content">
						<div class="mr_miss">
							<img src="../images/name_img3.png" alt="img">
						</div>
						<div class="resturent_text">
							<div class="review_text">
								<div class="title_text">
								<?php echo '<h2>' .$name[3]. '</h2>';?>
								</div>
								<ul class="str_views">
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								</ul>
							</div>
							<div class="description">
								<ul>
									<li>
										<div class="left_text">Address</div>
										<div class="right_text">
											<?php echo '<p>' .$address[3]. '</p>';?>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Price</span></div>
										<div class="right_text">
											<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
											<div class="doller_grid"><?php echo '<strong>' .$price[3]. '</strong>';?><?php echo '<strong>' .$price_kids[3]. '</strong>';?></div>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Type</span></div>
										<div class="right_text">
											<?php echo '<p>' .$type[3]. '</p>';?>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				<div class="innet_content">
					<div class="mr_miss">
						<img src="../images/name_img1.png" alt="img">
					</div>
					<div class="resturent_text">
						<div class="review_text">
							<div class="title_text">
								<?php echo '<h2>' .$name[1]. '</h2>';?>
							</div>
							<ul class="str_views">
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
							</ul>
						</div>
						<div class="description">
							<ul>
								<li>
									<div class="left_text">Address</div>
									<div class="right_text">
										<?php echo '<p>' .$address[1]. '</p>';?>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Price</span></div>
									<div class="right_text">
										<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
										<div class="doller_grid"><?php echo '<strong>' .$price[1]. '</strong>';?><?php echo '<strong>' .$price_kids[1]. '</strong>';?></div>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Type</span></div>
									<div class="right_text">
										<?php echo '<p>' .$type[1]. '</p>';?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="innet_content">
					<div class="mr_miss">
						<img src="../images/name_img2.png" alt="img">
					</div>
					<div class="resturent_text">
						<div class="review_text">
							<div class="title_text">
								<?php echo '<h2>' .$name[2]. '</h2>';?>
							</div>
							<ul class="str_views">
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
							</ul>
						</div>
						<div class="description">
							<ul>
								<li>
									<div class="left_text">Address</div>
									<div class="right_text">
										<?php echo '<p>' .$address[2]. '</p>';?>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Price</span></div>
									<div class="right_text">
										<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
										<div class="doller_grid"><?php echo '<strong>' .$price[2]. '</strong>';?><?php echo '<strong>' .$price_kids[2]. '</strong>';?></div>
									</div>
								</li>
								<li>
									<div class="left_text"><span>Type</span></div>
									<div class="right_text">
										<?php echo '<p>' .$type[2]. '</p>';?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="Asian" class="tabcontent">
				<div class="innet_content">
						<div class="mr_miss">
							<img src="../images/name_img5.png" alt="img">
						</div>
						<div class="resturent_text">
							<div class="review_text">
								<div class="title_text">
									<?php echo '<h2>' .$name[5]. '</h2>';?>
								</div>
								<ul class="str_views">
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								</ul>
							</div>
							<div class="description">
								<ul>
									<li>
										<div class="left_text">Address</div>
										<div class="right_text">
											<?php echo '<p>' .$address[5]. '</p>';?>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Price</span></div>
										<div class="right_text">
											<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
											<div class="doller_grid"><?php echo '<strong>' .$price[5]. '</strong>';?><?php echo '<strong>' .$price_kids[5]. '</strong>';?></div>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Type</span></div>
										<div class="right_text">
											<?php echo '<p>' .$type[5]. '</p>';?>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					</div>
				<div id="International" class="tabcontent">
				<div class="innet_content">
						<div class="mr_miss">
							<img src="../images/name_img5.png" alt="img">
						</div>
						<div class="resturent_text">
							<div class="review_text">
								<div class="title_text">
									<?php echo '<h2>' .$name[5]. '</h2>';?>
								</div>
								<ul class="str_views">
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
									<li><a href="javascript:void(0);"><img src="../images/star.png" alt="img"></a></li>
								</ul>
							</div>
							<div class="description">
								<ul>
									<li>
										<div class="left_text">Address</div>
										<div class="right_text">
											<?php echo '<p>' .$address[5]. '</p>';?>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Price</span></div>
										<div class="right_text">
											<div class="doller_grid"><span>Regular</span><span>Under 12</span></div>
											<div class="doller_grid"><?php echo '<strong>' .$price[5]. '</strong>';?><?php echo '<strong>' .$price_kids[5]. '</strong>';?></div>
										</div>
									</li>
									<li>
										<div class="left_text"><span>Type</span></div>
										<div class="right_text">
											<?php echo '<p>' .$type[5]. '</p>';?>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
	</section>

	<section id="reservation" class="reservation_bg">
		<div class="container">
			 <?php echo '<h4>' .$banner. '</h4>';?>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="form_grid">
				<form>
					<div class="feild_grid">
						<label>Restaurant</label>
						<select>
							<option value="1">Select a restaurant</option>
							<option value="2">Mr. & Mrs.</option>
							<option value="3">Ratatoville</option>
							<option value="4">ML</option>
							<option value="4">Fris</option>
							<option value="4">Specktakle</option>
							<option value="4">Grand Cafe Brinkman</option>
							<option value="4">Urban Frenchy Bistro Toujours</option>
							<option value="4">The Golden Bull</option>
						</select>
					</div>
					<div class="feild_grid">
						<label>Date</label>
						<select>
							<option value="1">Select a date</option>
							<option value="2">25th of July 2020</option>
							<option value="2">26th of July 2020</option>
							<option value="2">27th of July 2020</option>
							<option value="2">28th of July 2020</option>
							<option value="2">29th of July 2020</option>
						</select>
					</div>
					<div class="feild_grid">
						<label>Time</label>
						<select>
							<option value="1">18:00</option>
							<option value="2">19:30</option>
							<option value="3">21:00</option>
							
						</select>
					</div>
					<div class="feild_grid">
						<label>Number of people</label>
						<select>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="1">5</option>
							<option value="2">6</option>
							<option value="3">7</option>
							<option value="4">8</option>
							<option value="1">9</option>
							<option value="2">10</option>
							<option value="3">11</option>
							<option value="4">12</option>
							<option value="1">13</option>
							<option value="2">14</option>
							<option value="3">15</option>
							
						</select>
					</div>
					<div class="feild_grid">
						<label>Name</label>
						<input type="text" name=""/>
					</div>
					<div class="feild_grid2">
						<label>Your Note (i.e allergies, extra assistance)</label>
						<textarea rows="4" cols="50"></textarea> 
					</div>
					<div class="submit_grid">
						<button class="cart_btn">Add to cart</button>
						<?php echo '<strong>' .$title. '</strong>';?>
						<?php echo '<p>' .$feeText. '</p>';?>
					</div>
				</form>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="event">
				</h4> <?php echo '<h4>' .$cs1. '<br>' .$cs2.'</h4>';?>				
				<a href="javascript:void(0);">
					<img src="../images/dance_btn.png" alt="img">
					<span>Dance</span>
				</a>
				<a href="javascript:void(0);">
					<img src="../images/jazz_btn.png" alt="img">
					<span>Jazz</span>
				</a>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="footer_grid">
				<div class="footer_content">
					<a href="javascript:(0);">Home</a>
					<a href="javascript:(0);">Volunter</a>
					<p>All rights reserved &copy; 2020</p>
				</div>
				<div class="footer_right">
					<ul>
						<li><a href="javascript:void(0);"><img src="../images/youtube.png" alt="img"></a></li>
						<li><a href="javascript:void(0);"><img src="../images/instagram.png" alt="img"></a></li>
						<li><a href="javascript:void(0);"><img src="../images/facebook.png" alt="img"></a></li>
					</ul>
					<a class="footer_logo" href="javascript:void(0);"><img src="../images/footer_logo.png" alt="img"></a>
				</div>
			</div>
		</div>
	</footer>
</div>	

<!--javascript code-->
<script>
function openCity(evt, cityName) {
	var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
<script>
	$(document).ready(function(){
		$("a").on('click', function(event) {
			if (this.hash !== "") {
				event.preventDefault();
				var hash = this.hash;
				$('html, body').animate({
					scrollTop: $(hash).offset().top
					}, 2000, function(){
					window.location.hash = hash;
				});
			}
		});
	});
</script>
</body>
</html>