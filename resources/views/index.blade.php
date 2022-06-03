@extends("layouts.main")
@section("content")

			<div class="content">
				<div class="title-content js-title-discription">
					Текст
				</div>
				<div class="text-content js-content-discription">
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
				<div class="text-content js-content-about">
					<div class="term-list term-list__container">
						@foreach($terms as $term)
							<div class="term-list__item">
								<a class="term-list__link" href="/detail/{{$term['id']}}">{{$term['nameTerm']}}</a>
							</div>
						@endforeach
					</div>
				</div>
			</div>

@endsection
