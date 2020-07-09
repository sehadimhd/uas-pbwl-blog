@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<h4 class="m-auto">Input Data Foto</h4>
	</div>
	<form class="px-4 mx-4" method="post" action="{{url('/photo')}}" enctype="multipart/form-data">
		<div class="form-group">
			@csrf
		</div>
		<div class="form-group">
			Post<br>
			<select name="pho_post_id" class="form-control">
					@foreach($post as $row)
					<option value="{{$row->id}}">{{$row->post_tittle}}</option>
					@endforeach
				</select>
		</div>
		<div class="form-group">
			File Foto<br>
			<input type="file" name="gambar" class="form-control">
		</div>
		<div class="form-group">
			Tanggal<br>
			<input type="date" name="pho_date" class="form-control">
		</div>
		<div class="form-group">
			Judul<br>
			<input type="text" name="pho_tittle" placeholder="Judul..." class="form-control">
		</div>
		<div class="form-group">
			Keterangan<br>
			<textarea name="pho_text" id="" cols="30" rows="10" placeholder="Keterangan..." class="form-control" required></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="" value="Simpan" class="btn btn-primary btn-block">
		</div>
		<div class="form-group">
			<a href="/photo" class="btn btn-block btn-danger" role="button">Kembali</a>
		</div>
	</form>
</div>
@endsection