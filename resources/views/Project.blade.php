<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Project </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('css/Project.css?v=').time()}}">
	<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/LessProject.css">
	<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/SassProject.css">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
	<div>
		<div class="headDiv" id="top">
			<img src="media/appleLogo.png" id="img1">
			<img src="media/appleLogo.png" id="img2">
			<img src="media/appleLogo.png" id="img3">
			<img src="media/appleLogo.png" id="img4">
			<h1> Компания APPLE </h1>
		</div>
		<div class="container">
			<nav id="menuBar">
				<a href="#top"> Домой </a>
				<a href="#features"> Особенности </a>
				<a href="#allProducts"> Продукты </a>
				<a href="#company"> Компания </a>
				<a href="#contact"> Контакты </a>
			</nav>
		</div>
	</div>

	<div class="backImgDiv">
		<h1> Технологическая компания "Apple Inc." </h1>
		<h3>  American multinational technology company headquartered in Cupertino, California, that designs, develops and sells consumer electronics, computer software, and online services. </h3>
	</div>
	<!-- <br><br>
	<div class="media">
		<div class="iframe">
			<h2>Apple park</h2>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/VaApNeppjvg?playlist=VaApNeppjvg&loop=1&controls=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<div class="audioVideo">
			<div class="audio">
				<h2>Last words of Steve Jobs</h2>
				<audio controls>
					<source src="apple.mp3" type="audio/mpeg">
				</audio>
			</div>
			<div class="video">
				<h2>From new news</h2>
				<video controls>
					<source src="apple.mp4" type="video/mp4">
				</video>
			</div>
		</div>
	</div> -->

	<div id="features">
		<div class="firstDescription">
			<!-- <div id="heading1">
				<img src="appStore.png" width="70" height="70">
				<h2> App Store </h2>
			</div>
			<div id="footing1">
				<p>The App Store is a digital distribution platform, developed and maintained by Apple Inc., for mobile apps on its iOS & iPadOS operating systems. The store allows users to browse and download apps developed with Apple's iOS software development kit.<br><br>Apps can be downloaded on the iPhone smartphone, the iPod Touch handheld computer, or the iPad tablet computer, and some can be transferred to the Apple Watch smartwatch or 4th-generation or newer Apple TVs as extensions of iPhone apps.</p>
			</div> -->
			<canvas id="barChart"></canvas>
			<script type="text/javascript">
				var ctx = document.getElementById("barChart");
				var myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: ["2005", "2008", "2011", "2012", "2015", "2018", "2020"],
						datasets: [{
							label: "Apple's net income (in billion U.S. dollars)",
							data: [1.33, 6.12, 25.92, 41.73, 53.39, 59.53, 57.41],
							backgroundColor: [
							'rgba(255, 129, 102, 1)', 
							'rgba(234, 162, 235, 1)', 
							'rgba(255, 206, 36, 1)', 
							'rgba(75, 192, 192, 1)', 
							'rgba(153, 102, 255, 1)', 
							'rgba(225, 135, 107, 1)', 
							'rgba(147, 119, 15, 1)'],
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero: true
								}
							}]
						}
					}
				});
			</script>
		</div>

		<div class="secondDescription">
			<!-- <div id="heading2">
				<img src="ios.png" width="70" height="70">
				<h2> IOS </h2>
			</div>
			<div id="footing2">
				<p>iOS is a mobile operating system created and developed by Apple Inc. exclusively for its hardware. It is the operating system that powers many of the company's mobile devices, including the iPhone and iPod Touch; <br><br>It is the world's second-most widely installed mobile operating system, after Android. It is the basis for three other operating systems made by Apple: iPadOS, tvOS, and watchOS. It is proprietary software, although some parts of it are open source under the Apple Public Source License and other licenses.</p>
			</div> -->
			<canvas id="pieChart" width="400" height="200">
				<script type="text/javascript">
				var ctx = document.getElementById("pieChart");
				var myChart = new Chart(ctx, {
					type: 'pie',
					data: {
						labels: ["iPhone", "Samsung", "Oppo", "Huawei", "Others"],
						datasets: [{
							label: "Phone users (in million)",
							data: [833.5, 992.4 , 462.1, 448.9, 1063.1],
							backgroundColor: [
							'rgba(255, 129, 102, 1)', 
							'rgba(234, 162, 235, 1)', 
							'rgba(255, 206, 36, 1)', 
							'rgba(75, 192, 192, 1)', 
							'rgba(153, 102, 255, 1)'],
						}]
					}
				});
			</script>
			</canvas>
		</div>

		<!-- <div class="thirdDescription">
			<canvas id="lineChart">
				<script type="text/javascript">
				var ctx = document.getElementById("lineChart");
				var myChart = new Chart(ctx, {
					type: 'line',
					data: {
						labels: ["2010", "2013", "2015", "2018", "2019", "2020", "2021"],
						datasets: [{
							label: "Stock price (in billion U.S. dollars)",
							data: [7.46, 19.2, 27.88, 43.28, 37.88, 73.93, 134.49],
							backgroundColor: [
							'rgba(255, 129, 102, 1)', 
							'rgba(234, 162, 235, 1)', 
							'rgba(255, 206, 36, 1)', 
							'rgba(75, 192, 192, 1)', 
							'rgba(153, 102, 255, 1)', 
							'rgba(225, 135, 107, 1)', 
							'rgba(147, 119, 15, 1)'],
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero: true
								}
							}]
						}
					}
				});
			</script>
			</canvas>
		</div> -->
	</div>

	<div id="allProducts">
		<div class="myProducts">
			<div id="firstProduct" class="products">
	            <div class="product">
	              <img src="media/iphone.jpg" alt="Image" width="180px" height="180px" />
	            </div>

	            <div class="aboutProduct">
	              <h3>IPHONE 12 PRO FEATURES</h3>
	              <p>
	              	<ul>
	              		<li>
	              			New design
	              		</li>

	              		<li>
	              			6.1- and 6.7-inch sizes
	              		</li>

	              		<li>
	              			5G Support
	              		</li>

	              		<li>
	              			Major camera improvements
	              		</li>

	              		<li>
	              			LiDAR
	              		</li>

	              		<li>
	              			Ceramic Shield display
	              		</li>
	              	</ul>
	              </p>
	          </div>
	        </div>

	        <div id="secondProduct" class="products">
	            <div class="product">
	              <img src="media/appleWatch.jpg" alt="Image" width="180px" height="180px" />
	            </div>

	            <div class="aboutProduct">
	              <h3>APPLE WATCH SERIES 6 FEATURES</h3>
	              <p>
	              	<ul>
	              		<li>
	              			Two sizes: 40mm and 44mm
	              		</li>

	              		<li>
	              			Faster S6 chip
	              		</li>

	              		<li>
	              			New low-cost SE option
	              		</li>

	              		<li>
	              			Blood oxygen monitoring
	              		</li>

	              		<li>
	              			New colors
	              		</li>

	              		<li>
	              			LTE and non-LTE options
	              		</li>
	              	</ul>
	              </p>
	          </div>
	        </div>
		</div>

		<div class="myProducts">
			<div id="firstProduct" class="products">
	            <div class="product">
	              <img src="media/ipad.jpg" alt="Image" width="180px" height="180px" />
	            </div>

	            <div class="aboutProduct">
	              <h3>IPAD AIR 10.9" FEATURES</h3>
	              <p>
	              	<ul>
	              		<li>
	              			10.9-inch Liquid Retina display
	              		</li>

	              		<li>
							True Tone & Wide color
	              		</li>

	              		<li>
	              			A14 Bionic processor
	              		</li>

	              		<li>
	              			12-megapixel rear camera
	              		</li>

	              		<li>
	              			7-megapixel front camera
	              		</li>

	              		<li>
	              			Touch ID in the power button
	              		</li>
	              	</ul>
	              </p>
	          </div>
	        </div>

	        <div id="secondProduct" class="products">
	            <div class="product">
	              <img src="media/macbook.jpg" alt="Image" width="180px" height="180px" />
	            </div>

	            <div class="aboutProduct">
	              <h3>MACBOOK PRO 13" FEATURES</h3>
	              <p>
	              	<ul>
	              		<li>
	              			True Tone display and Touch Bar
	              		</li>

	              		<li>
	              			Up to 8 TB SSD on 16", up to 4 TB on 13"
	              		</li>

	              		<li>
	              			T2 chip for enhanced security and "Hey Siri" support
	              		</li>
	              	</ul>
	              </p>
	          </div>
	        </div>
		</div>
	</div>

	<div id="company">
		<div class="company">
			<div class="textCompany">
				<img src="media/companytext.jpg" alt="Image">
				<div class="text">
					<h1>Our company</h1>
					<p>Apple was founded by Steve Jobs, Steve Wozniak, and Ronald Wayne in April 1976 to develop and sell Wozniak's Apple I personal computer, though Wayne sold his share back within 12 days. It was incorporated as Apple Computer, Inc., in January 1977, and sales of its computers, including the Apple II, grew quickly. Within a few years, Jobs and Wozniak had hired a staff of computer designers and had a production line.</p>
					<a href="https://en.wikipedia.org/wiki/History_of_Apple_Inc." class="btn">Read more</a>
				</div>
			</div>
			<div class="mapContainer">
				<div id="map"></div>
			</div>
		</div>
	</div>

	<div id="contact">
		<div class="contact">
			<div class="inputs">
				<div class="reg">
					<form action="http://localhost/project/public/project" method="POST" enctype="multipart/form-data">
						{{csrf_field() }}
					  <div class="container1">
					    <hr>
					
					    <input type="text" placeholder="Product name" name="name" class="form-control">
					
					     <!-- <label for="surname"><b>Surname</b></label>
					    <input type="text" placeholder="Enter Surname" name="surname" id="surname" required>
					
					    <label for="email"><b>Email</b></label>
					    <input type="text" placeholder="Enter Email" name="email" id="email" required>
					
					    <label for="msg"><b>Message</b></label><br>
					    <textarea name="msg" cols="35" rows="10">  </textarea>
					    <br>  -->
					    
					    <input type="file" name="photos[]" class="form-control" multiple>
						<input type="submit" value="Upload">

						<br>

						<a href="http://localhost/project/public/mail/send"> Send message</a>
					
					    <!-- <button type="submit" class="registerbtn">Send</button> -->
					  </div>
					</form>
					<!-- <?php
    				    /*echo Form::open(array('url' => '/project', 'files' => 'true'));
    				    echo Form::text('name');
    				    echo Form::file('photos'); echo "<br>";
    				    echo Form::submit('Upload');
    				    echo Form::close();*/
    				?> -->
				</div>
			</div>

			<div class="adress">
				<embed type="image/jpg" src="media/company.jpg" width="90%" height="70%"> </embed>
					<p>Apple Park is the corporate headquarters of Apple Inc., located at One Apple Park Way in Cupertino, California, United States. It was opened to employees in April 2017, while construction was still underway, and has superseded the original headquarters at 1 Infinite Loop, which opened in 1993.</p>
			</div>
		</div>
	</div>

	<div class="footerPart">
		<div class="adressFoot">
			<h3>Apple company</h3>
			<h5><address>Cupertino, California, United States</address></h5>
		</div>
		<div class="contactsFoot">
			<img name="phone" src="media/phone.png" style="width: 6%; height: 15%;">
			<label for="phone">+1 942 156 854 </label>
			<br><br>
			<img name="mail" src="media/mail.png" style="width: 6%; height: 15%;">
			<label for="mail">apple@gmail.com</label>
		</div>
		<div class="socialsFoot">
			<img id="facebookImg" src="media/facebook.png" style="width: 12%; height: 25%; cursor: pointer;" onmouseover="incOpacity1()" onmouseout="retOpacity1()" onclick="window.open('https://www.facebook.com/apple/')">
			<img id="twitterImg" src="media/twitter.png" style="width: 10%; height: 22%; cursor: pointer;" onmouseover="incOpacity2()" onmouseout="retOpacity2()" onclick="window.open('https://twitter.com/apple?lang=en')">
			<img id="instagramImg" src="media/instagram.png" style="width: 9%; height: 20%; cursor: pointer;" onmouseover="incOpacity3()" onmouseout="retOpacity3()" onclick="window.open('https://www.instagram.com/apple/?hl=en')">
		</div>
	</div>

	<script type="text/javascript">
		window.onscroll = function() {myFunction()};

		var navbar = document.getElementById("menuBar");

		var sticky = navbar.offsetTop;

		function myFunction() {
		  if (window.pageYOffset >= sticky) {
		    navbar.classList.add("sticky")
		  } else {
		    navbar.classList.remove("sticky");
		  }
		}

		var myVideo = document.getElementById("myVideo");

		function controls() {
			if(myVideo.controls) myVideo.controls = false;
			else myVideo.controls = true;
		}

		function auto() {
			if(myVideo.autoplay) myVideo.autoplay = false;
			else {
				myVideo.autoplay = true;
				myVideo.load();
			}
		}

		function mute() {
			if(myVideo.muted) myVideo.muted = false;
			else myVideo.muted = true;
		}

		function loop() {
			if(myVideo.loop) myVideo.loop = false;
			else myVideo.loop = true;
		}

		function incOpacity1() {
			document.getElementById("facebookImg").style.opacity = 1;
		}

		function retOpacity1() {
			document.getElementById("facebookImg").style.opacity = 0.7;
		}

		function incOpacity2() {
			document.getElementById("twitterImg").style.opacity = 1;
		}

		function retOpacity2() {
			document.getElementById("twitterImg").style.opacity = 0.7;
		}

		function incOpacity3() {
			document.getElementById("instagramImg").style.opacity = 1;
		}

		function retOpacity3() {
			document.getElementById("instagramImg").style.opacity = 0.7;
		}
	</script>
</body>
</html>