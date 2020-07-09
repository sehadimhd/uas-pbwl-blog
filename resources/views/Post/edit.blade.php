@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<h4 class="m-auto">Ubah Data Post</h4>
	</div>
	<form class="px-4 mx-4" action="{{ url('/post/' . $rows->id)}}" method="post">
		<div class="form-group">
			<input name="_method" type="hidden" value="patch">
			@csrf
		</div>
		<div class="form-group">
			Kategori<br>
				<select name="post_cat_id" class="form-control">
					@foreach($cat as $row)
					<option value="{{$row->cat_id}}"
						@if($row->cat_id ==$rows->post_cat_id)
						selected
						@endif
						>{{$row->cat_name}}</option>
					@endforeach
				</select>
		</div>
		<div class="form-group">
			Tanggal<br>
				<td><input type="date" name="post_date" value="{{ $rows->post_date}}" class="form-control"></td>
		</div>
		<div class="form-group">
			Slug<br>
				<input type="text" name="post_slug" value="{{ $rows->post_slug}}" class="form-control" placeholder="Slug..." required>
		</div>
		<div class="form-group">
			Judul<br>
				<input type="text" name="post_tittle" value="{{ $rows->post_tittle}}" class="form-control" placeholder="Judul..." required>
			
		</div>
		<div class="form-group">
			Keterangan<br>
			<textarea name="post_text" id="" cols="30" rows="10" placeholder="Keterangan..." class="form-control" required>{{ $rows->post_text}}"
			</textarea>
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