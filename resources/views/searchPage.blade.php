@extends("layouts.main")
@section("content")

			<div class="content">
				<div class="title-content js-title-discription">
					Результат вашего поиска
				</div>
				<div class="text-content js-content-discription">
						@if($termsSearch)
							@foreach($termsSearch as $term)
								<div class="term-list__item">
									<a class="term-list__link" href="/detail/{{$term['id']}}">{{$term['nameTerm']}}</a>
								</div>
							@endforeach
						@else
							<p></p>
						@endif
				</div>
				<div class="title-content">
					Полный список терминов
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
