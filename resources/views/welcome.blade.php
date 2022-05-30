<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Term</title>
		<link rel="stylesheet" href="/css/app.css">
		<link rel="stylesheet" href="/css/main.css">
	</head>
   <body>
		<div class="wrapper">
			<header class="header">
				<div class="container header-container">
					<div class="header-logo">
						<a href="/"><img src="/img/Logo.png" alt=""></a>
					</div>
					<div class="login-button">
						<input class="login-button-btn" type="button" value="Войти">
					</div>
				</div>
				<div class="search search_container">
					<form class="form-search" method="post" action="#">
						<div class="form-field form-field_search">
							<input class="search-input" type="text" placeholder="Введите термин, чтобы найти информацию о нем.">
							<button class="btn btn-search"><object type="image/svg+xml" data ="/img/search-icon.svg"></object></button>
						</div>
					</form>
				</div>
			</header>

			<div class="content">
				<div class="title-content">
					Текст
				</div>
				<div class="discription-content">
					<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nobis delectus repudiandae
						recusandae.
						Maxime ab aliquam voluptates possimus autem a blanditiis, nostrum nisi fuga debitis, molestiae officiis
						ducimus delectus! Culpa?
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nobis delectus repudiandae
						recusandae.
						Maxime ab aliquam voluptates possimus autem a blanditiis, nostrum nisi fuga debitis, molestiae officiis
						ducimus delectus! Culpa?
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nobis delectus repudiandae
						recusandae.
						Maxime ab aliquam voluptates possimus autem a blanditiis, nostrum nisi fuga debitis, molestiae officiis
						ducimus delectus! Culpa?
					</p>
				</div>
				<div class="title-content">
					Пример
				</div>
				<div class="about-content">
					<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nobis delectus repudiandae
						recusandae.
						Maxime ab aliquam voluptates possimus autem a blanditiis, nostrum nisi fuga debitis, molestiae officiis
						ducimus delectus! Culpa? Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nobis
						delectus repudiandae recusandae.
						Maxime ab aliquam voluptates possimus autem a blanditiis, nostrum nisi fuga debitis, molestiae officiis
						ducimus delectus! Culpa?

					</p>
				</div>
			</div>
			<footer class="footer">
				<p class="copy-right-text">
					© Copyright all rights reserved 2022
				</p>
			</footer>
		</div>		
	</body>
</html>
