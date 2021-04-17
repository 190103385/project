<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
							<a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" 
							aria-haspopup="true" aria-expanded="false" v-pre>
								@switch($locale)
									@case('en')
										<!-- <img width="20" src="{{asset('img/en.png')}}"> -->
										English
										@break
									@case('ru')
										<!-- <img width="20" src="{{asset('img/ru.png')}}"> -->
										Русский
										@break
									@default
										<!-- <img width="20" src="{{asset('img/en.png')}}"> -->
										English
									@endswitch
									<span class="caret"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-menu" href="project">
									<!-- <img width="20" src="{{asset('img/en.png')}}"> -->
										English
								</a><br>
								<a style="color:purple" class="dropdown-menu" href="project/ru">
									<!-- <img width="20" src="{{asset('img/ru.png')}}"> -->
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
</body>
</html>