@extends('layouts.app')

@section('content')
<!-- created by Alif -->
<!-- Halaman Home -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    Congrats, You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
