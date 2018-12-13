@extends('base')

@section('content')
    @include('chiron::list')
@append

@section('chiron-styles')
    <link rel="stylesheet" href="{{ asset('vendor/datatables/datatables.min.css') }}"/>
@append

@section('chiron-scripts')
    <script src="{{ asset('vendor/datatables/datatables.js') }}"></script>
@append