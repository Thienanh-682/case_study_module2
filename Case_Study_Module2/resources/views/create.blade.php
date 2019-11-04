@extends('home')
@section('index')
    <h1 style="text-align: center">Add New Students</h1>
    <div class="row d-flex justify-content-center">
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control
                @if($errors->has('name'))
                    border-danger
                @endif
                    " id="name" placeholder="Enter Name" name="name">
                @if($errors->has('name'))
                    <p class="text-danger"><img
                            src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('name')}}
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control
                        @if($errors->has('phone'))
                    border-danger
                        @endif
                    " id="phone" placeholder="Enter Phone" name="phone">
                @if($errors->has('phone'))
                    <p class="text-danger"><img
                            src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('phone')}}
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control
              @if($errors->has('address'))
                    border-danger
@endif
                    " id="address" placeholder="Enter Address" name="address">
                @if($errors->has('address'))
                    <p class="text-danger"><img
                            src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('address')}}
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label for="group">Group</label>
                <input type="text" class="form-control
                        @if($errors->has('group'))
                    border-danger
                        @endif
                    " id="group" placeholder="Enter Group" name="group">
                @if($errors->has('group'))
                    <p class="text-danger"><img
                            src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('group')}}
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label for="point">Point</label>
                <input type="text" class="form-control
                        @if($errors->has('point'))
                    border-danger
                            @endif
                    " id="Point" placeholder="Enter Point" name="point">
                @if($errors->has('point'))
                    <p class="text-danger"><img
                            src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('point')}}
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label for="capacity">Capacity</label>
                <input type="text" class="form-control
                        @if($errors->has('capacity'))
                    border-danger
                        @endif" id="capacity" placeholder="Enter Capacity" name="capacity">
                @if($errors->has('capacity'))
                    <p class="text-danger"><img
                            src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('capacity')}}
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('student.index')}}" class="btn btn-success">Cancel</a>
        </form>
    </div>
@endsection
