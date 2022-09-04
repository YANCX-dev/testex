@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                @include("inc.auth.register")
            </div>
            <div class="col-6">
                @include("inc.auth.login")
            </div>
        </div>
    </div>
@endsection
