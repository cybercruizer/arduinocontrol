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
                <div class="card border-primary">
                    <div class="card-header">
                        <h3>Ruang tamu</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Lampu 1</label>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col col-md-4">
                <div class="card border-primary">
                    <div class="card-header">
                        <h3>Ruang tengah</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Lampu 1</label>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col col-md-4">
                <div class="card border-primary">
                    <div class="card-header">
                        <h3>Teras</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Lampu 1</label>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
        <div class="row mt-4">
            <div class="footer text-center">
                <div class="small">by gurujaringan.com</div>
            </div>
        </div>
        

    </div>
@endsection

