<?php
	$title = "Accessible Comics";
	include "Include/ACheader.php";
?>

<body>

<!-- 	Exit -->
	<div>
		<div id="mainCarousel" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#mainCarousel" data-slide-to="1"></li>
			</ol>
			<center>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="Media/Control/Comic1-Control.jpg">
				</div>
			
				<div class="item">
					<img src="Media/CompleteComic.jpg">
				</div>
		
			</div>
			</center>
			<!-- Left & Right Controls -->
			<a class="left carousel-control" href="#mainCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#mainCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
	
	<br>
	<br>
	<center>
		<a href="index.php" alt="home">Back</a>
	</center>
	<br>
	<br>
	
</body>
