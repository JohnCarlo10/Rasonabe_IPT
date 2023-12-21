@extends('pages.base')

@section('content')
@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{url('teachers/create')}}" class="btn btn-primary me-md-2" type="button">
        Add New Teacher
    </a>
</div>

    <table class="table table-bordered table-striped table-sm">

        <thead>
            <tr>
                <th>ID</th>
                <th>Fullname</th>
                <th>Specialty</th>
            </tr>
        </thead>

        <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->user->full_name}}</td>
                    <td>{{ $teacher->specialty }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>

@endsection
