@extends("layouts.admin")
@section("content")
<h1>Термин</h1>
<input type="button" data-btn="remove" value="✖">
<input type="button" data-btn="newElem" value="✚">
<input type="button" data-btn="filterElem"  value="❍">
<table class="table">
	<thead>
	<tr data-headers >
		<th scope="col"><input data-select-all type="checkbox"></th>
		<th scope="col">#</th>
		<th scope="col" data-edit-col="text" data-edit-type="textarea">Текст примера</th>
		<th scope="col" data-edit-col="terms" data-edit-type="select" data-edit-target="termSelect">Термин</th>
		<th scope="col">Изменить</th>
	</tr>
	</thead>
	<tbody data-table-body>
	@foreach($data as $example)
		<tr>
				<td><input type="checkbox" data-checkbox value="{{ $example["id"]}}"></td>
				<td>{{ $example["id"] }}</td>
				<td>{{ $example["text"] }}</td>
				<td>
					@if($example["term_id"])
						@foreach($terms as $term)
							@if($term['id'] == $example["term_id"])
								{{$term["nameTerm"]}}
							@endif
						@endforeach
					@endif
				</td>
				<td><input type="button" data-btn="edit" value="✎"></td>
		</tr>
	@endforeach
	</tbody>
</table>
{{$data->links()}}
<template id="termSelect">
		<select>
			@foreach($terms as $term)
					<option value="{{$term["id"]}}">{{$term["nameTerm"]}}</option>
			@endforeach
		</select>
	</template>
<template id="addElement">
<tr>
	<td></td>
	<td>
		<textarea name="text" cols="30" rows="10"></textarea>
	<td>
	<select name="term_id">
			@foreach($terms as $term)
					<option value="{{$term["id"]}}">{{$term["nameTerm"]}}</option>
			@endforeach
		</select>
	</td>
	<td>
			<input type="button" data-btn="add" value="✔">
			<input type="button" data-btn="decline" value="✖">
	</td>
</tr>
</template>
@endsection