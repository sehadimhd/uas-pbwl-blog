@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<h4 class="m-auto">Input Data Album</h4>
	</div>
	<form class="px-4 mx-4" action="{{ url('/album/' . $rows->id)}}" method="post">
		<div class="form-group">
			<input name="_method" type="hidden" value="patch">
			@csrf
		</div>
		<div class="form-group">
			Foto<br>
			<select name="album_pho_id" class="form-control">
				@foreach($pho as $row)
				<option value="{{$row->id}}"
						@if($row->id ==$rows->album_pho_id)
						selected
						@endif>
					{{$row->pho_tittle}}
				</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			Nama Album<br>
			<input type="text" name="album_name" class="form-control" value="{{ $rows->album_name}}" placeholder="Nama Album..." required>
		</div>
		<div class="form-group">
			Keterangan<br>
			<textarea name="album_text" id="" cols="30" rows="10" placeholder="Keterangan..." class="form-control" required>{{ $rows->album_text}}</textarea>
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