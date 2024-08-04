<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\TeacherCreateRequest;


class TeacherController extends Controller
{
    public function index(Request $request)
    {
    $keyword = $request->keyword;
    $teacher = Teacher::where('name', 'LIKE', '%'.$keyword.'%')->Paginate(5);
     return view('teacher' , ['teacherlist' => $teacher]);
    }

    public function show($id)
   {
       $teacher = Teacher::with('class.student')->findOrFail($id);
       return view('teacher-detail' , ['teacher' => $teacher]);
   }
    public function create() {
        return view('teacher-add');
    }


    public function store(TeacherCreateRequest $request) {

        $newName = '';

            if ($request->file('photo')) { 
                $extension = $request->file('photo')->getClientOriginalExtension();
                $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
                $request->file('photo')->storeAs('photo', $newName);
            }

        $request['image'] = $newName;

        $teacher = Teacher::create($request->all());
        if($teacher) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new teacher success');
        }
        return redirect('/teacher');
    }

    public function edit(Request $request, $id) {
        $teacher = Teacher::findOrFail($id);
        return view('teacher-edit' , ['teacher' => $teacher]);
           }
  
     public function update(Request $request, $id) {
        $teacher =Teacher::findOrfail($id);
        $teacher->update($request->all());
        return redirect('/teacher');
     }

     public function delete($id) {
        $teacher = Teacher::findOrFail($id);
        return view('teacher-delete' , ['teacher' => $teacher]); 
     }
 
     public function destroy($id) {
        
        $deletedteacher = Teacher::findOrFail($id);
        $deletedteacher->delete();
 
        if($deletedteacher) {
         Session::flash('status', 'success');
         Session::flash('message', 'delete teacher success');
     }
 
         return redirect('/teacher');
     }

        public function deletedStudent() {
            $deletedteacher = Teacher::onlyTrashed()->get();
            return view('teacher-deleted-list' , ['teacher' => $deletedteacher]); 
        }

        public function restore($id) {
            $deletedteacher = Teacher::withTrashed()->where('id' , $id)->restore();
        
            if($deletedteacher) {
                Session::flash('status', 'success');
                Session::flash('message', 'restore teacher success');
            }

            return redirect('/teacher');
        }

}
