@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{ url('/category') }}">
@csrf
<center><h2>Data Kategori</h2></center>
<a href="{{ url('category/create') }}" class="btn btn-primary">+Kategori</a>
<p></p>
	<table class="table table-borderless table-hover table-primary">
		<thead class="text-light bg-primary">
			<th scope="col">ID</th>
			<th scope="col">Nama</th>
			<th scope="col">Keterangan</th>
			<th class="text-center" scope="col">Pilihan</th>
		</thead>
		<tbody>
		@foreach($rows as $row)
		<tr class="table-primary">
			<td>{{ $row->cat_id }}</td>
			<td>{{ $row->cat_name }}</td>
			<td>{{ $row->cat_text }}</td>
			<td class="text-center">
				<a href="{{ url('category/' . $row->cat_id . '/edit')}}" class="btn btn-primary">Ubah</a>
			<form action="{{ url('category/' . $row->cat_id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-danger">Hapus</button>
				</form></td>
			
		</tr>
		@endforeach
	</tbody>
	</table>
	
</div>
@endsection