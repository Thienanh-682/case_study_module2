@extends('home')
@section('index')
    <h1 style="text-align: center">Edit Student Information</h1>
    <div class="row d-flex justify-content-center">
        <form  method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group" >
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name"  placeholder="Enter Name" name="name" value="{{$student->name}}" >
                @if($errors->has('name'))
                    <p class="text-danger"><img
                            src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('name')}}</p>
                    @endif
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone" value="{{$student->phone}}">
                @if($errors->has('phone'))
                    <p class="text-danger"><img
                            src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('phone')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="{{$student->address}}">
                @if($errors->has('address'))
                    <p class="text-danger"><img
                            src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('address')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="group">Group</label>
                <input type="text" class="form-control" id="group" placeholder="Enter Group" name="group" value="{{$student->group}}" >
                @if($errors->has('group'))
                    <p class="text-danger"><img
                            src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('group')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="point">Point</label>
                <input type="text" class="form-control" id="Point" placeholder="Enter Point" name="point" value="{{$student->point}}" >
                @if($errors->has('point'))
                    <p class="text-danger"><img
                            src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('point')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="capacity">Capacity</label>
                <input type="text" class="form-control" id="capacity" placeholder="Enter Capacity" name="capacity" value="{{$student->capacity}}" >
                @if($errors->has('capacity'))
                    <p class="text-danger"><img
                            src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('capacity')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <img src="{{asset('storage/'. $student->image)}}" style="width: 50px;height: 50px">
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{route('student.index')}}" class="btn btn-success">Cancel</a>
        </form>
    </div>
@endsection
