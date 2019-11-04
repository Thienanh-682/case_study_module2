<?php


namespace App\Http\Repositories\eloquent;


use App\Http\Repositories\StudentRepositoryInterface;
use App\Students;

class StudentEloquentRepository implements StudentRepositoryInterface
{
    protected $student;

    public function __construct( Students  $student)
    {
        $this->student = $student;
    }

    public function index()
    {
        return $this->student->paginate(6);
    }

    function findById($id)
    {
        return $this->student->findOrFail($id);
    }

    function store($obj)
    {
        return $obj->save();
    }

    function destroy($obj)
    {
        return $obj->delete();
    }

    function update($obj)
    {
       return $obj->save();
    }

    function search($keyword)
    {
        return $this->student->where('name','like',"%$keyword%")
            ->orwhere('phone','like',"%$keyword%")
            ->orwhere('address','like',"%$keyword%")->paginate(4);
    }
}
