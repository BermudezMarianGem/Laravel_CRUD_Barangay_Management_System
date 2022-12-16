@extends('layout')
@section('title', 'Resident Records')

@section('content')
<div class="container">
    <h1>Add New Resident</h1>
    <a href="/bins" class="btn btn-primary">Back to Homepage</a>
    
    <form action="addrecord" method="post">
        @csrf
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter the firstname">
        </div>
        <div class="form-group">
            <label for="middlename">Middle Name</label>
            <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Enter the middlename">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter the lastname">
        </div>
        <div class="form-group">
            <label for="position">Position in the Family</label>
            <input type="text" class="form-control" name="position" id="position" placeholder="Enter the position">
        </div>
        <div class="form-group">
            <label for="birthdate">Birthday</label>
            <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Enter the birthdate">
        </div>
        <div class="form-group">
            <label for="civilstatus">Civil Status</label>
            <input type="text" class="form-control" name="civilstatus" id="civilstatus" placeholder="Enter the civilstatus">
        </div>
        <div class="form-group">
            <label for="occupation">Occupation</label>
            <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Enter the occupation">
        </div>
        <div class="form-group">
            <label for="sitio">Sitio</label>
            <input type="text" class="form-control" name="sitio" id="sitio" placeholder="Enter the sitio">
        </div>

        <button type="submit" class="btn btn-primary">Save Record</button>
    </form>
</div>
@endsection