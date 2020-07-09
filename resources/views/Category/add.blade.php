@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<h4 class="m-auto">Input Data Kategori</h4>
	</div>
	<form class="px-4 mx-4" method="post" action="{{url('/category')}}">
		<div class="form-group">
			@csrf
		</div>
		<div class="form-group">
			<th>Nama</th>
			<input type="text" name="cat_name" class="form-control" required>
		</div>
		<div class="form-group">
			Keterangan<br>
			<textarea name="cat_text" id="" cols="30" rows="10" placeholder="Keterangan..." class="form-control" required></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="" value="Simpan" class="btn btn-primary btn-block">
		</div>
		<div class="form-group">
			<a href="/post" class="btn btn-block btn-danger" role="button">Kembali</a>
		</div>
	</form>
</div>
@endsection