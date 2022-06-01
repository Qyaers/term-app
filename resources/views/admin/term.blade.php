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
			<th scope="col" data-edit-col="nameTerm" data-edit-type="input">Наименование</th>
			<th scope="col" data-edit-col="discription" data-edit-type="textarea">Описание</th>
			<th scope="col">Изменить</th>
		</tr>
		</thead>
		<tbody data-table-body>
		@foreach($data as $term)
			<tr>
					<td><input type="checkbox" data-checkbox value="{{ $term["id"]}}"></td>
					<td>{{ $term["id"] }}</td>
					<td>{{ $term["nameTerm"] }}</td>
					<td>{{ $term["discription"] }}</td>
					<td><input type="button" data-btn="edit" value="✎"></td>
			</tr>
		@endforeach
		</tbody>
	</table>
{{$data->links()}}
<template id="addElement">
	<tr>
		<td></td>
		<td><input name="nameTerm" type="text"></td>
		<td>
			<textarea name="discription" cols="30" rows="10"></textarea>
		</td>
		<td>
				<input type="button" data-btn="add" value="✔">
				<input type="button" data-btn="decline" value="✖">
		</td>
	</tr>
</template>
@endsection
