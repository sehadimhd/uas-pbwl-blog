@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<h4 class="m-auto">Ubah Data Kategori</h4>
	</div>
	<form class="px-4 mx-4" method="post" action="{{ url('/category/' . $rows->cat_id)}}">
		<div class="form-group">
			<input name="_method" type="hidden" value="patch">
			@csrf
		</div>
		<div class="form-group">
			<th>Nama</th>
			<input type="text" name="cat_name" value="{{ $rows->cat_name}}" class="form-control" required>
		</div>
		<div class="form-group">
			Keterangan<br>
			<textarea name="cat_text" id="" cols="30" rows="10" placeholder="Keterangan..." class="form-control" required>{{ $rows->cat_text}}</textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="" value="Simpan" class="btn btn-primary btn-block">
		</div>
		<div class="form-group">
			<a href="/category" class="btn btn-block btn-danger" role="button">Kembali</a>
		</div>
	</form>
</div>
@endsection