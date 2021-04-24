<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Project </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{('css/Project.css?v=')}}.time() ?>">
	<link rel="stylesheet" type="text/css" href="{{('css/LessProject.css?v=')}}.time() ?>">
	<link rel="stylesheet" type="text/css" href="{{('css/SassProject.css?v=')}}.time() ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="app">
		<div style="background-color: #343a40;">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
				<div class="collapse navbar-collapse" id="navbarToggler">
					<ul class="navbar-nav ml-auto">
						@php $locale = session()->get('locale'); @endphp
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"role="button" data-toggle="dropdown" 
							aria-haspopup="true" aria-expanded="false" v-pre>
								@switch($locale)
									@case('en')
										English
										@break
									@case('ru')
										Русский
										@break
									@endswitch
									<span class="caret"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a style="color:blue" class="dropdown-item" href="en">
										English
								</a><br>
								<a style="color:blue" class="dropdown-item" href="ru">
										Русский
								</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<main class="py-4">
			@yield('content')
		</main>
	</div>
	<div>
		<div class="headDiv" id="top">
			<img src="{{('media/appleLogo.png')}}" id="img1">
			<img src="{{('media/appleLogo.png')}}" id="img2">
			<img src="{{('media/appleLogo.png')}}" id="img3">
			<img src="{{('media/appleLogo.png')}}" id="img4">
			<h1> APPLE </h1>
		</div>
		<div class="containerNav">
			<nav id="menuBar">
				<a href="#top"> {{ __("Home") }} </a>
				<a href="#features"> {{ __("Features") }} </a>
				<a href="#allProducts"> {{ __("Products") }} </a>
				<a href="#company"> {{ __("Company") }} </a>
				<a href="#contact"> {{ __("Contacts") }} </a>
			</nav>
		</div>
	</div>

	<div class="backImgDiv">
		<h1> {{ __("Technological company \"Apple Inc.\"") }} </h1>
		<h3>  {{ __("American multinational technology company headquartered in Cupertino, California, that designs, develops and sells consumer electronics, computer software, and online services.") }} </h3>
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

	<h1 style="display:flex; justify-content:center; font-family: 'Times New Roman, sans-serif'; padding-top: 130px;">{{ __("Features") }}</h1>
	<div id="features">
		<div class="firstDescription">
			<!-- <div id="heading1">
				<img src="appStore.png" width="70" height="70">
				<h2> App Store </h2>
			</div>
			<div id="footing1">
				<p>The App Store is a digital distribution platform, developed and maintained by Apple Inc., for mobile apps on its iOS & iPadOS operating systems. The store allows users to browse and download apps developed with Apple's iOS software development kit.<br><br>Apps can be downloaded on the iPhone smartphone, the iPod Touch handheld computer, or the iPad tablet computer, and some can be transferred to the Apple Watch smartwatch or 4th-generation or newer Apple TVs as extensions of iPhone apps.</p>
			</div> -->
			<h2>{{ __("Apple's net income (in billion U.S. dollars)")}}</h2>
			<canvas id="barChart"></canvas>
			<script type="text/javascript">
				var ctx = document.getElementById("barChart");
				var myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: ["2005", "2008", "2011", "2012", "2015", "2018", "2020"],
						datasets: [{
							label: "Apple",
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
			<h2>{{ __("Phone users (in million)")}}</h2>
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
	</div>

	<h1 style="display:flex; justify-content:center; font-family: 'Times New Roman, sans-serif'; padding-top: 150px;">{{ __("Products") }}</h1>
	<div id="allProducts">
		<div class="myProducts">
			<div id="firstProduct" class="products">
	            <div class="product">
	              <img src="{{('media/iphone.jpg')}}" alt="Image" width="180px" height="180px" />
	            </div>

	            <div class="aboutProduct">
	              <h3>{{ __("IPHONE 12 PRO")}}</h3>
	              <p>
	              	<ul>
	              		<li>
	              			{{ __("New design")}}
	              		</li>

	              		<li>
	              			{{ __("6.1- and 6.7-inch sizes")}}
	              		</li>

	              		<li>
	              			{{ __("5G Support")}}
	              		</li>

	              		<li>
	              			{{ __("Major camera improvements")}}
	              		</li>

	              		<li>
	              			{{ __("LiDAR")}}
	              		</li>

	              		<li>
	              			{{ __("Ceramic Shield display")}}
	              		</li>
	              	</ul>
	              </p>
	          </div>
	        </div>

	        <div id="secondProduct" class="products">
	            <div class="product">
	              <img src="{{('media/appleWatch.jpg')}}" alt="Image" width="180px" height="180px" />
	            </div>

	            <div class="aboutProduct">
	              <h3>{{ __("APPLE WATCH SERIES 6")}}</h3>
	              <p>
	              	<ul>
	              		<li>
	              			{{ __("Two sizes: 40mm and 44mm")}}
	              		</li>

	              		<li>
	              			{{ __("Faster S6 chip")}}
	              		</li>

	              		<li>
	              			{{ __("New low-cost SE option")}}
	              		</li>

	              		<li>
	              			{{ __("Blood oxygen monitoring")}}
	              		</li>

	              		<li>
	              			{{ __("New colors")}}
	              		</li>

	              		<li>
	              			{{ __("LTE and non-LTE options")}}
	              		</li>
	              	</ul>
	              </p>
	          </div>
	        </div>
		</div>

		<div class="myProducts">
			<div id="firstProduct" class="products">
	            <div class="product">
	              <img src="{{('media/ipad.jpg')}}" alt="Image" width="180px" height="180px" />
	            </div>

	            <div class="aboutProduct">
	              <h3>{{ __("IPAD AIR 10.9\"")}}</h3>
	              <p>
	              	<ul>
	              		<li>
	              			{{ __("10.9-inch Liquid Retina display")}}
	              		</li>

	              		<li>
							{{ __("True Tone & Wide color")}}
	              		</li>

	              		<li>
	              			{{ __("A14 Bionic processor")}}
	              		</li>

	              		<li>
	              			{{ __("12-megapixel rear camera")}}
	              		</li>

	              		<li>
	              			{{ __("7-megapixel front camera")}}
	              		</li>

	              		<li>
	              			{{ __("Touch ID in the power button")}}
	              		</li>
	              	</ul>
	              </p>
	          </div>
	        </div>

	        <div id="secondProduct" class="products">
	            <div class="product">
	              <img src="{{('media/macbook.jpg')}}" alt="Image" width="180px" height="180px" />
	            </div>

	            <div class="aboutProduct">
	              <h3>{{ __("MACBOOK PRO 13\"")}}</h3>
	              <p>
	              	<ul>
	              		<li>
	              			{{ __("True Tone display and Touch Bar")}}
	              		</li>

	              		<li>
	              			{{ __("Up to 8 TB SSD on 16\", up to 4 TB on 13\"")}}
	              		</li>

	              		<li>
	              			{{ __("T2 chip for enhanced security and \"Hey Siri\" support")}}
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
				<img src="{{('media/companytext.jpg')}}" alt="Image">
				<div class="text">
					<h1>{{ __("Our company")}}</h1>
					<p>{{ __("Apple was founded by Steve Jobs, Steve Wozniak, and Ronald Wayne in April 1976 to develop and sell Wozniak's Apple I personal computer, though Wayne sold his share back within 12 days. It was incorporated as Apple Computer, Inc., in January 1977, and sales of its computers, including the Apple II, grew quickly. Within a few years, Jobs and Wozniak had hired a staff of computer designers and had a production line.")}}</p>
					<a href="https://en.wikipedia.org/wiki/History_of_Apple_Inc." class="btn" style="border: 1px solid black; border-radius: 7px">{{ __("Read more")}}</a>
				</div>
			</div>
			<div class="mapContainer">
				<div id="map"></div>
			</div>
		</div>
	</div>

	<div id="contact">
		<div class="contact">
			<div class="inputs" style="margin-top: -50px">
				@if(count($errors) > 0)
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">x</button>
						<ul>
							@foreach($errors-> all() as $error)
								<li> {{$error}} </li>
							@endforeach
						</ul>
					</div>
				@endif

				@if($message = Session::get('success'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">x</button>
						<strong> {{ $message }}</strong>
					</div>
				@endif
					<form action="{{ url('http://localhost/project/public/project') }}" method="POST" enctype="multipart/form-data">
						{{csrf_field() }}
					    <div class="form-group">
							<p>{{ __("Enter your name") }}: <p>
					    	<input type="text" placeholder="Your name" name="name" class="form-control" autocomplete="off">
						</div>

						<div class="form-group">
							<p>{{ __("Enter your surname") }}: <p>
					    	<input type="text" placeholder="Your surname" name="surname" class="form-control">
						</div>

						<div class="form-group">
							<p>{{ __("Enter your email") }}:<p>
					    	<input type="text" placeholder="Your Email" name="email" id="email">
					    </div>

					    <div class="form-group">
					    	<p>{{ __("Enter your message") }}:<p>
					    	<textarea name="comment" cols="35" rows="10" class="form-control">  </textarea>
					    </div>

					    <input type="file" name="photos[]" class="form-control" multiple><br>

						<input type="submit" name="send" value="Send" class="btn btn-info">

						<br>
					</form>
			</div>

			<div class="adress">
				<embed type="image/jpg" src="{{('media/company.jpg')}}" width="90%" height="70%"> </embed>
					<p>{{ __("Apple Park is the corporate headquarters of Apple Inc., located at One Apple Park Way in Cupertino, California, United States. It was opened to employees in April 2017, while construction was still underway, and has superseded the original headquarters at 1 Infinite Loop, which opened in 1993.")}}</p>
			</div>
		</div>
	</div>

	<div class="footerPart">
		<div class="adressFoot">
			<h3>{{ __("Apple company")}}</h3>
			<h5><address>{{ __("Cupertino, California, United States")}}</address></h5>
		</div>
		<div class="contactsFoot">
			<img name="phone" src="{{('media/phone.png')}}" style="width: 6%; height: 15%;">
			<label for="phone">+1 942 156 854 </label>
			<br><br>
			<img name="mail" src="{{('media/mail.png')}}" style="width: 6%; height: 15%;">
			<label for="mail">apple@gmail.com</label>
		</div>
		<div class="socialsFoot">
			<img id="facebookImg" src="{{('media/facebook.png')}}" style="width: 12%; height: 25%; cursor: pointer;" onmouseover="incOpacity1()" onmouseout="retOpacity1()" onclick="window.open('https://www.facebook.com/apple/')">
			<img id="twitterImg" src="{{('media/twitter.png')}}" style="width: 10%; height: 22%; cursor: pointer;" onmouseover="incOpacity2()" onmouseout="retOpacity2()" onclick="window.open('https://twitter.com/apple?lang=en')">
			<img id="instagramImg" src="{{('media/instagram.png')}}" style="width: 9%; height: 20%; cursor: pointer;" onmouseover="incOpacity3()" onmouseout="retOpacity3()" onclick="window.open('https://www.instagram.com/apple/?hl=en')">
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