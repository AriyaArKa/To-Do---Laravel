@extends('layouts.main')
@push('head')
    <title>To Do List App</title>

@endpush



@section('main-section')

<div class="container">
    <div class="d-flex jutify-content-between align-items-center my-5">
        <div class="h2">All Todos</div>
        <a href="" class="btn btn-primary btn-lg">Add Todo</a>
    </div>
</div>
@endsection