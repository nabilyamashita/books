<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentCreateRequest;


class StudentController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        $student = Students::with('class')
        ->where('name', 'LIKE', '%'.$keyword.'%')
        ->orwhere('gender', $keyword)
        ->orwhere('nis', 'LIKE' , '%'.$keyword.'%')
        ->orWhereHas('class', function($query) use($keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })
        ->Paginate(5);
        return view('student' , ['studentlist' => $student]);
    
    }

    public function show($id)
    {
        $student = Students::with('class.teacher' , '_ekstracurriculars')->findOrFail($id);
        return view('student-detail' , ['student' => $student]);
    }

    public function create() {
        $class = Classes::select('id' , 'name')->get();
         return view('student-add' , ['class' => $class]);
    }


    public function store(StudentCreateRequest $request) {
       $newName = '';

            if ($request->file('photo')) { 
                $extension = $request->file('photo')->getClientOriginalExtension();
                $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
                $request->file('photo')->storeAs('photo', $newName);
            }

        $request['image'] = $newName;
        $student = Students::create($request->all());
       
        if($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new student success');
        }

        return redirect('/students');

        // cara ke dua
        // $student = new Student;
        // $student->name = $request->name; 
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student->save();

    }

    public function edit(Request $request, $id) {
        $student = Students::with('class')->findOrFail($id);
        $class = Classes::where('id', '!=', $student->class->id)->get(['id','name']);
        return view('student-edit' , ['student' => $student , 'class' =>$class]);
             }

    public function update(Request $request, $id) {
        $student =Students::findOrfail($id);
        $student->update($request->all());
        return redirect('/students');
    }

    public function delete($id) {
       $student = Students::findOrFail($id);
       return view('student-delete' , ['student' => $student]); 
    }

    public function destroy($id) {
       
        // menggunakan query builder
        // $deletestudent = DB::table('student')->where('id' , $id)->delete(); 
       
       $deletedstudent = Students::findOrFail($id);
       $deletedstudent->delete();

        if($deletedstudent) {
            Session::flash('status', 'success');
            Session::flash('message', 'delete student success');
        }

        return redirect('/students');
    }

    public function deletedStudent() {
        $deletedstudent = Students::onlyTrashed()->get();
        return view('student-deleted-list' , ['student' => $deletedstudent]); 
    }

    public function restore($id) {
        $deletedstudent = Students::withTrashed()->where('id' , $id)->restore();
       
        if($deletedstudent) {
            Session::flash('status', 'success');
            Session::flash('message', 'restore student success');
        }

        return redirect('/students');
    }

}
