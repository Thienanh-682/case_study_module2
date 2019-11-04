@extends('home')
@section('index')
    <h1 style="text-align: center" >Student Management System</h1>

    <a href="{{route('student.create')}}" class="btn btn-success">Create</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Group</th>
            <th scope="col">Point</th>
            <th scope="col">Capacity</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $key => $student)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->group}}</td>
            <td>{{$student->point}}</td>
            <td>{{$student->capacity}}</td>
            <td> <img src="{{asset( 'storage/'. $student->image)}}" style="width: 50px;height: 60px"></td>
            <td>
                <a href="{{route('student.delete', $student->id)}}" class="btn btn-success">Delete</a>
                <a href="{{route('student.update',$student->id)}}" class="btn btn-success">Edit</a>
            </td>

        </tr>

        </tbody>
        @endforeach
    </table>
    {{$students->links()}}
    @endsection
