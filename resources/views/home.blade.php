@extends('layouts.app')

@section('content')
    @if (session('admin_error'))
        <div class="alert alert-danger">
            <p class="text-center">{{ session('admin_error') }}</p>
        </div>
    @endif
    <div class="container-fluid">
        <h1 class="text-black-50">You are logged in!</h1>
    </div>
@endsection
