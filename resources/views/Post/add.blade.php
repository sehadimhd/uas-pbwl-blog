@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<h4 class="m-auto">Input Data Post</h4>
	</div>
	<form class="px-4 mx-4" method="post" action="{{url('/post')}}">
		<div class="form-group">
			@csrf
		</div>
		<div class="form-group">
			Kategori<br>
				<select name="post_cat_id" class="form-control">
					@foreach($cat as $row)
					<option value="{{$row->cat_id}}">{{$row->cat_name}}</option>
					@endforeach
				</select>	
		</div>
		<div class="form-group">
			Tanggal<br>
				<input type="date" name="post_date" class="form-control">
		</div>
		<div class="form-group">
			Slug<br>
				<input type="text" name="post_slug" class="form-control" placeholder="Slug..." required>
		</div>
		<div class="form-group">
			Judul<br>
				<input type="text" name="post_tittle" class="form-control" placeholder="Judul..." required>
			
		</div>
		<div class="form-group">
			Keterangan<br>
			<textarea name="post_text" id="" cols="30" rows="10" placeholder="Keterangan..." class="form-control" required></textarea>
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