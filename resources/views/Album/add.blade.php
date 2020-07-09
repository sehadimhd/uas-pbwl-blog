@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<h4 class="m-auto">Input Data Album</h4>
	</div>
	<form class="px-4 mx-4" method="post" action="{{url('/album')}}">
		<div class="form-group">
			@csrf
		</div>
		<div class="form-group">
			Foto<br>
			<select name="album_pho_id" class="form-control">
				@foreach($pho as $row)
				<option value="{{$row->id}}">{{$row->pho_tittle}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			Nama Album<br>
			<input type="text" name="album_name" class="form-control" placeholder="Nama Album..." required>
		</div>
		<div class="form-group">
			Keterangan<br>
			<textarea name="album_text" id="" cols="30" rows="10" placeholder="Keterangan..." class="form-control" required></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="" value="Simpan" class="btn btn-primary btn-block">
		</div>
		<div class="form-group">
			<a href="/album" class="btn btn-block btn-danger" role="button">Kembali</a>
		</div>
	</form>
</div>
@endsection