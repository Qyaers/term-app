@extends("layouts.main")
@section("content")

			<div class="content">
				<div class="title-content js-title-discription">
					{{$term['nameTerm']}}
				</div>
				<div class="text-content js-content-discription">
					<p> 
						{{$term['discription']}}
					</p>
				</div>
				<div class="title-content">
					Примеры
				</div>
				@if($examples)
				@foreach($examples as $example)
				<div class="text-content js-content-about">
					
					<p>
						{{$example["text"]}}
					</p>
				</div>
				@endforeach
				@endif
			</div>

@endsection
