@extends('layout')
@section('title', 'Product Details')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    <a href="/" class="btn btn-primary">Back to Homepage</a>
    
        <table  class="table table-bordered">
            <tbody>
                <tr>
                    <td>Firstname</td>
                    <td>{{ $record->firstname }}</td>
                </tr>
                <tr>
                    <td>Middlename</td>
                    <td>{{ $record->middlename }}</td>
                </tr>
                <tr>
                    <td>Lastname</td>
                    <td>{{ $record->lastname }}</td>
                </tr>
                <tr>
                    <td>Position</td>
                    <td>{{ $record->position }}</td>
                </tr>
                <tr>
                    <td>Birthdate</td>
                    <td>{{ $record->birthdate }}</td>
                </tr>
                <tr>
                    <td>Civil Status</td>
                    <td>{{ $record->civilstatus }}</td>
                </tr>
                <tr>
                    <td>Occupation</td>
                    <td>{{ $record->occupation }}</td>
                </tr>
                <tr>
                    <td>Sitio</td>
                    <td>{{ $record->sitio }}</td>
                </tr>
            </tbody>
        </table>
</div>
@endsection