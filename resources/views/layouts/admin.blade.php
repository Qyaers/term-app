<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Admin panel</title>
</head>
<body>
	<header>
		<nav class="container mt-4">
			<ul class="nav nav-pills nav-fill">
				@foreach(Config::get("menu") as $link)
							@if (Request::is($link["link"]))
							<li class="nav-link active">
								{{$link["title"]}}
							</li>
							@else
							<li class="nav-item">
								<a class="nav-link" href="{{$link["link"]}}">{{$link["title"]}}</a>
							</li>
						@endif
				@endforeach
			</ul>
		</nav>
	</header>
	<div class="container">
		@yield('content')
	</div>
	<script src="/js/app.js"></script>
</body>
</html>