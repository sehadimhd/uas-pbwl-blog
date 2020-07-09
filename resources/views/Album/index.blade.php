@extends('layouts.app')
@section('content')

<div class="container">

<form action="{{ url('/category') }}">
@csrf
<center><h2>Data Album</h2></center>
<a href="{{ url('album/create') }}" class="btn btn-primary">+Album</a>
	<p></p>
	<table class="table table-borderless">
		<thead class="bg-primary text-light">
			<th scope="col">ID</th>
			<th scope="col">ID Foto</th>
			<th scope="col">Nama</th>
			<th scope="col">Keterangan</th>
			<th scope="col">Pilihan</th>
		</thead>
		<tbody>
		@foreach($rows as $row)
		<tr class="table-primary">
			<td>{{ $row->id }}</td>
			<td>{{ $row->photo->pho_tittle }}</td>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->album_text }}</td>
			<td><a href="{{ url('album/' . $row->id . '/edit')}}" class="btn btn-primary">Ubah</a>
			<form action="{{ url('album/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-danger">Hapus</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
	</table>
	
</div>

@endsection