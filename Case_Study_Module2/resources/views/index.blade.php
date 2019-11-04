@extends('home')

@section('index')

 <div class="container">
     <div class="row">
         @foreach($students as $student )
             <div class="col-12 col-md-4 d-flex justify-content-center" style="margin-top: 20px">
             <div class="card" style="width: 18rem;">
                 <img src="{{asset( 'storage/'. $student->image)}}" style="width:200px;height: 150px">
                 <h5 class="card-title">Name</h5>
                 <p class="card-text">{{$student->name}}</p>
                 <div >
                 <a href="{{route('student.create')}}" class="btn btn-success" >Create</a>
                 <a href="{{route('student.information', $student->id)}}" class="btn btn-success">View</a>
                 </div>
             </div>
             </div>
         @endforeach
     </div>
 </div><br>
    {{$students->links()}}
    @endsection
