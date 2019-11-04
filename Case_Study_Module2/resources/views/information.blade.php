@extends('home')

@section('index')
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-6">
                <img src="{{asset( 'storage/'. $student->image)}}" style="width:200px;height: 150px" >
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Name: {{$student->name}}</h5>
                    <p class="card-text">Phone: {{$student->phone}}</p>
                    <p class="card-text">Address: {{$student->address}}</p>
                    <p class="card-text">Group: {{$student->group}}</p>
                    <p class="card-text">Point: {{$student->point}}</p>
                    <p class="card-text">Capacity: {{$student->capacity}}</p>
                    <div>
                        <a href="{{route('student.index')}}" class="btn btn-success">Cancel</a>
                        <a href="{{route('student.delete', $student->id)}}" class="btn btn-success">Delete</a>
                        <a href="{{route('student.update',$student->id)}}" class="btn btn-success">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
