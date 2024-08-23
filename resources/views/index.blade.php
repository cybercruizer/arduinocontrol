@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="row justify-content-center align-items-center g-2">
            <div class="col col-md-4">
                <h2 class="h2">Selamat Datang</h2>
            </div>
            <div class="col">Column</div>
            <div class="col">Column</div>
        </div>

    </div>
@endsection
