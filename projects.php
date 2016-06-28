<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Southern Synergy - Engineering Solutions</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/unslider.css">
		<link rel="stylesheet" href="css/unslider-dots.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/w3.css">
	</head>
	<body>

		<!-- Content -->
		<div class="container inner-page-template">
			<?php include ("modules/nav.php"); ?>

			<div class="slider-container">
				<div class="slider-image"><img src="img/headers/about-header.jpg"/></div>	
				<div class="header-shadow inner-head-shadow"></div>		
			</div>


			<div class="home-sub-section">
				<div class="content-section services-section">								
					<h1>Project Portfolio</h1>
					
					<div class="section-description">
						<p>Southern Synergy has provided engineering and design services for client projects across a wide variety of industries from $5,000-$6,500,000,000 total installed project cost. SSI’s specific scope of work for these projects ranging from $750-$2,000,000. As a growing mid-size firm with low overhead, we can provide the technical expertise and the personal level of service required to assist your team in successfully completing most projects.</p>

						<p>We fully respect and appreciate our client’s confidentiality arrangements and cannot identify specific client projects. For specific client references please contact us at info@southernsynergy.com. The below table lists just a few of the successfully completed projects SSI has assisted clients with.</p>
					</div>
				</div>
			</div>



			<div class="home-sub-section home-sub-gray">
				<div class="content-section services-section">

					<h2>Project One - Mechanical</h2>					

					<div class="split50 split70">
						<div class="w3-content" style="max-width:1200px">
						  <img class="mySlides" src="img/project-slides/slide-tmp1.jpg" style="width:100%">
						  <img class="mySlides" src="img/project-slides/slide-tmp2.jpg" style="width:100%">
						  <img class="mySlides" src="img/project-slides/slide-tmp3.jpg" style="width:100%">
						   <img class="mySlides" src="img/project-slides/slide-tmp4.jpg" style="width:100%">

						  <div class="w3-row-padding w3-section">
						    <div class="w3-col s3">
						      <img class="demo w3-border w3-hover-shadow" src="img/project-slides/slide-tmp1.jpg" style="width:100%" onclick="currentDiv(1)">
						    </div>
						    <div class="w3-col s3">
						      <img class="demo w3-border w3-hover-shadow" src="img/project-slides/slide-tmp2.jpg" style="width:100%" onclick="currentDiv(2)">
						    </div>
						    <div class="w3-col s3">
						      <img class="demo w3-border w3-hover-shadow" src="img/project-slides/slide-tmp3.jpg" style="width:100%" onclick="currentDiv(3)">
						    </div>
						     <div class="w3-col s3">
						      <img class="demo w3-border w3-hover-shadow" src="img/project-slides/slide-tmp4.jpg" style="width:100%" onclick="currentDiv(4)">
						    </div>
						  </div>
						</div>
					</div>

					<div class="split50 split30">
						<h3>Features</h3>
						<ul>
							<li>Capital Project Development w/TICe</li>
							<li>Equipment Specification Development</li>
							<li>Pipe Stress Analysis (Caesar II)</li>
							<li>ASME Pressure Vessel Design (PV Elite)</li>
							<li>3D Plant Equipment Layout (CADWorx)</li>
							<li>Piping Routing and Isometrics</li>
							<li>Piping Hydraulic and Sizing Calculations</li>
							<li>HVAC specification and load calculations</li>
							<li>Root Cause Failure Analysis (RFCA)</li>
						</ul>
					</div>
					
				</div>
			</div>



			<div class="home-sub-section">
				<div class="content-section services-section">								
					<h2>Project Two - Electrical</h2>					

					<div class="split50 split70">
						
						<div class="w3-content" style="max-width:1200px">
						  <img class="mySlides2" src="img/project-slides/slide-tmp1.jpg" style="width:100%">
						  <img class="mySlides2" src="img/project-slides/slide-tmp2.jpg" style="width:100%">
						  <img class="mySlides2" src="img/project-slides/slide-tmp3.jpg" style="width:100%">
						   <img class="mySlides2" src="img/project-slides/slide-tmp4.jpg" style="width:100%">

						  <div class="w3-row-padding w3-section">
						    <div class="w3-col s3">
						      <img class="demo2 w3-border w3-hover-shadow" src="img/project-slides/slide-tmp1.jpg" style="width:100%" onclick="currentDiv2(1)">
						    </div>
						    <div class="w3-col s3">
						      <img class="demo2 w3-border w3-hover-shadow" src="img/project-slides/slide-tmp2.jpg" style="width:100%" onclick="currentDiv2(2)">
						    </div>
						    <div class="w3-col s3">
						      <img class="demo2 w3-border w3-hover-shadow" src="img/project-slides/slide-tmp3.jpg" style="width:100%" onclick="currentDiv2(3)">
						    </div>
						     <div class="w3-col s3">
						      <img class="demo2 w3-border w3-hover-shadow" src="img/project-slides/slide-tmp4.jpg" style="width:100%" onclick="currentDiv2(4)">
						    </div>
						  </div>
						</div>
					</div>

					<div class="split50 split30">
						<h3>Features</h3>
						<ul>
							<li>Capital Project Development w/TICe</li>
							<li>Equipment Specification Development</li>
							<li>Pipe Stress Analysis (Caesar II)</li>
							<li>ASME Pressure Vessel Design (PV Elite)</li>
							<li>3D Plant Equipment Layout (CADWorx)</li>
							<li>Piping Routing and Isometrics</li>
							<li>Piping Hydraulic and Sizing Calculations</li>
							<li>HVAC specification and load calculations</li>
							<li>Root Cause Failure Analysis (RFCA)</li>
						</ul>
					</div>
				<br/><br/>
			</div>
			<?php include ("modules/footer.php"); ?>

			<script>
				//PROEJCT GALELRY SLDIESHOW FUNCTIONS
			    var slideIndex = 1;
				showDivs(slideIndex);
				showDivs2(slideIndex);


				function plusDivs(n) {
				  showDivs(slideIndex += n);
				}

				function currentDiv(n) {
				  showDivs(slideIndex = n);
				}

				function currentDiv2(n) {
				  showDivs2(slideIndex = n);
				}

				function showDivs(n) {
				  var i;
				  var x = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("demo");
				  if (n > x.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = x.length}
				  for (i = 0; i < x.length; i++) {
				     x[i].style.display = "none";
				  }
				  for (i = 0; i < dots.length; i++) {
				     dots[i].className = dots[i].className.replace(" w3-border-red", "");
				  }
				  x[slideIndex-1].style.display = "block";
				  dots[slideIndex-1].className += " w3-border-red";
				}

				function showDivs2(n) {
				  var i;
				  var x = document.getElementsByClassName("mySlides2");
				  var dots = document.getElementsByClassName("demo2");
				  if (n > x.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = x.length}
				  for (i = 0; i < x.length; i++) {
				     x[i].style.display = "none";
				  }
				  for (i = 0; i < dots.length; i++) {
				     dots[i].className = dots[i].className.replace(" w3-border-red", "");
				  }
				  x[slideIndex-1].style.display = "block";
				  dots[slideIndex-1].className += " w3-border-red";
				}
			</script>
		</body>
	</html>