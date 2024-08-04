<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ClassesCreateRequest;


class ClassesController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $classes = Classes::with('teacher')
        ->where('name', 'LIKE', '%'.$keyword.'%')
        ->orWhereHas('teacher', function($query) use($keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })
        ->Paginate(5);
        return view('Classes', ['classeslist' => $classes]);
    }

    public function show($id)
    {
        $class = Classes::with(['student', 'teacher'])->findOrFail($id);
        return view('classes-detail', ['class' => $class]);
    }

    public function create()
    {
        $teachers = Teacher::select('id', 'name')->get();
        return view('classes-add', ['teacher' => $teachers]);
    }

    public function store(ClassesCreateRequest $request)
    {
        $class = Classes::create($request->all());
        if($class) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new class success');
        }
        return redirect('/classes');
    }

    public function edit($id)
    {
        $class = Classes::with('teacher')->findOrFail($id);
        $teachers = Teacher::all(['id', 'name']);
        return view('classes-edit', ['class' => $class, 'teachers' => $teachers]);
    }

    public function update(Request $request, $id)
    {
        $class = Classes::findOrFail($id);
        $class->update($request->all());
        return redirect('/classes');
    }

    public function delete($id) {
        $class = Classes::findOrFail($id);
        return view('classes-delete' , ['class' => $class]); 
     }
 
     public function destroy($id) {
        
        $deletedclass = Classes::findOrFail($id);
        $deletedclass->delete();
 
        if($deletedclass) {
         Session::flash('status', 'success');
         Session::flash('message', 'delete class success');
     }
 
         return redirect('/classes');
     }

     public function deletedStudent() {
        $deletedclass = Classes::onlyTrashed()->get();
        return view('classes-deleted-list' , ['class' => $deletedclass]); 
    }

    public function restore($id) {
        $deletedclass = Classes::withTrashed()->where('id' , $id)->restore();
       
        if($deletedclass) {
            Session::flash('status', 'success');
            Session::flash('message', 'restore class success');
        }

        return redirect('/classes');
    }
}
