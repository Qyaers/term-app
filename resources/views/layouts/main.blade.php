<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Term</title>
		<link rel="stylesheet" href="/css/main.css">
	</head>
   <body>
		<div class="wrapper">
			@include("layouts.header")
			@yield("content")
			@include("layouts.footer")
		</div>
		<script src="/js/app.js"></script>
</body>
</html>