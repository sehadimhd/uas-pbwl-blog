@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center font-weight-bold bg-primary text-light" style="color: #000;">Dashboard</div>
                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="image/das.jpg" class="img">
                    <br><br>
                    <div style="color: #000;">Selamat datang <span class="text-primary">{{ Auth::user()->name }} </span>
                    <br>
                    Silahkan dilihat-lihat dahulu barangnya mana tau cocok</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
