@extends('layout')
@section('title', 'Resident Records')

@section('content')
<div class="container">
    <h1>Record List</h1>
    <a href="{{ url('addrecord') }}" class="btn btn-primary">Add New Resident</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Resident ID</th>
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Lastname</th>
                <th>Position</th>
                <th>Birthdate</th>
                <th>Civil Status</th>
                <th>Occupation</th>
                <th>Sitio</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @isset($records)
            @foreach ($records as $record)

                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->firstname }}</td>
                    <td>{{ $record->middlename }}</td>
                    <td>{{ $record->lastname }}</td>
                    <td>{{ $record->position }}</td>
                    <td>{{ $record->birthdate }}</td>
                    <td>{{ $record->civilstatus }}</td>
                    <td>{{ $record->occupation }}</td>
                    <td>{{ $record->sitio }}</td>
                    <td>
                        <a href="{{ URL::to('show/' . $record->id) }}" class="btn btn-primary">View Details</a>
                        <a href="{{ URL::to('delete/' . $record->id) }}" class="btn btn-primary">Delete Record</a>
                        <a href="{{ URL::to('edit/' . $record->id) }}" class="btn btn-primary">Edit Record</a>
                    </td>
                </tr>
            @endforeach
            @endisset
        </tbody>
    </table>
</div>
@endsection