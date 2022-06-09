@extends('layouts.app')

@section('content')
@if (session('message'))
        <div class="alert alert-success">
            <p>{{ session('message') }}</p>
        </div>
    @endif
    <div class="container-fluid">
        <h1 class="text-black-50">Dashbroad</h1>
    </div>
@endsection
