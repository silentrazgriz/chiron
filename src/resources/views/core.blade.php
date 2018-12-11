@extends('base')

@section('content')
    @include('chiron::list')
@append

@section('styles')
    <link rel="stylesheet" href="{{ asset('vendor/public/datatables/datatables.min.css') }}"/>
@append

@section('scripts')
    <script src="{{ asset('vendor/public/datatables/datatables.min.js') }}"></script>
@append