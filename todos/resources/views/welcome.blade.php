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

    <table class="table table-stripped table-dark">
        <tr>
            <th>Name</th>
            <th>Work</th>
            <th>Due Date</th>
            <th>Action</th>
        </tr>
    </table>
</div>
@endsection