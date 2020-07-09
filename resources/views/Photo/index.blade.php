@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{ url('/photo') }}">
@csrf
<center><h2>Data Foto</h2></center>
<a href="{{ url('photo/create') }}" class="btn btn-primary">+Foto</a>
<p></p>
	<table class="table table-borderless">
		<thead class="bg-primary text-light">
			<th scope="col">ID</th>
			<th scope="col">Gambar</th>
			<th scope="col">Post</th>
			<th scope="col">Tanggal</th>
			<th scope="col">Judul</th>
			<th scope="col">Keterangan</th>
			<th scope="col">Ubah</th>
			<th scope="col">Hapus</th>
		</thead>
		<tbody>
		@foreach($rows as $row)
		<tr class="table-primary">
			<td>{{ $row->id }}</td>
			<td><center><img width="90px" class="img-thumbnail" src="{{ url('upload/'. $row->gambar) }}"></center></td>
			<td>{{ $row->post->post_tittle }}</td>
			<td>{{ $row->pho_date }}</td>
			<td>{{ $row->pho_tittle }}</td>
			<td>{{ $row->pho_text }}</td>
			<td><a href="{{ url('photo/' . $row->id . '/edit')}}" class="btn btn-primary">Ubah</a></td>
			<td><form action="{{ url('photo/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-danger">Hapus</button>
				</form></td>
			</td>
		</tr>
		@endforeach
	</tbody>
	</table>
</div>

@endsection