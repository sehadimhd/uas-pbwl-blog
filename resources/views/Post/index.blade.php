@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{ url('/post') }}">
@csrf
<center><h2>Data Post</h2></center>
<a href="{{ url('post/create') }}" class="btn btn-primary">+Post</a>
<p></p>
	<table class="table table-borderless table-hover table-primary">
		<thead class="bg-primary text-light">
			<th scope="col">ID</th>
			<th scope="col">Kategori</th>
			<th scope="col">Tanggal</th>
			<th scope="col">Slug</th>
			<th scope="col">Judul</th>
			<th scope="col">Keterangan</th>
			<th scope="col">Ubah</th>
			<th scope="col">Hapus</th>
		</thead>
		<tbody>
		@foreach($rows as $row)
		<tr class="table-primary">
			<td>{{ $row->id }}</td>
			<td>{{ $row->category->cat_name }}</td>
			<td>{{ $row->post_date }}</td>
			<td>{{ $row->post_slug }}</td>
			<td>{{ $row->post_tittle }}</td>
			<td>{{ $row->post_text }}</td>
			<td><a href="{{ url('post/' . $row->id . '/edit')}}" class="btn btn-primary">Ubah</a></td>
			<td><form action="{{ url('post/' . $row->id)}}" method="post" class="d-inline">
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

</body>
</html>

@endsection