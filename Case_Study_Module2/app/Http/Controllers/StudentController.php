<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Services\StudentServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public $studentService;

    public function __construct(StudentServiceInterface $studentService)
    {
        $this->studentService = $studentService;
        $this->middleware('auth');
    }

    public function index()
    {
        $students = $this->studentService->getAll();
        return view('index',compact('students'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(StudentRequest $request)
    {
        $this->studentService->create($request);
        return redirect()->route('student.index');

    }

    public function delete($id)
    {
        $this->studentService->delete($id);
        return redirect()->route('student.index');
    }
    public function edit($id)
    {
        $student = $this->studentService->findById($id);
        return view('edit',compact('student'));
    }
    public function update(StudentRequest $request ,$id)
    {
        $this->studentService->edit($request,$id);
        return redirect()->route('student.index');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $dataSearch = DB::table("students")->where("name", "like", "%$search%")
            ->orwhere("phone", "like", "%$search%")
            ->orWhere('address', "like", "%$search%")->paginate(4);
        return view('search', compact('dataSearch'));
    }

    public function information($id)
    {
        $student = $this->studentService->findById($id);
        return view('information',compact('student'));
    }
}
