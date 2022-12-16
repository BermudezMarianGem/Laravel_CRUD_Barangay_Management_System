@extends('layout')
@section('title', 'Edit Records')

@section('content')
<div class="container">
    <h1>Edit Resident</h1>
    <a href="{{ url('/') }}" class="btn btn-primary">Back to Homepage</a>
    
    <div class="card-body">
        <form action="{{ url('update/'.$records->id) }}" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter the firstname" value="{{ $records->firstname }}">
                </div>
                <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Enter the middlename" value="{{ $records->middlename }}">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter the lastname" value="{{ $records->lastname }}">
                </div>
                <div class="form-group">
                    <label for="position">Position in the Family</label>
                    <input type="text" class="form-control" name="position" id="position" placeholder="Enter the position" value="{{ $records->position }}">
                </div>
                <div class="form-group">
                    <label for="birthdate">Birthday</label>
                    <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Enter the birthdate" value="{{ $records->birthdate }}">
                </div>
                <div class="form-group">
                    <label for="civilstatus">Civil Status</label>
                    <input type="text" class="form-control" name="civilstatus" id="civilstatus" placeholder="Enter the civilstatus" value="{{ $records->civilstatus }}">
                </div>
                <div class="form-group">
                    <label for="occupation">Occupation</label>
                    <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Enter the occupation" value="{{ $records->occupation }}">
                </div>
                <div class="form-group">
                    <label for="sitio">Sitio</label>
                    <input type="text" class="form-control" name="sitio" id="sitio" placeholder="Enter the sitio" value="{{ $records->sitio }}">
                </div>
        
                <button type="submit" class="btn btn-primary">Save Record</button>
            </div>
        </form>
    </div>
</div>
@endsection