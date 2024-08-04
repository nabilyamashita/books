<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstracurricular;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\EkstracurricularCreateRequest;


class EkstracurricularController extends Controller
{
   public function index(Request $request)
   {

      $keyword = $request->keyword;
      $ekskul = Ekstracurricular::where('name', 'LIKE', '%'.$keyword.'%')->Paginate(5);
      return view('ekstracurricular' , ['ekskullist' => $ekskul]);

   // ini untuk relasi
   //  $ekskul = Ekstracurricular::with('student')->get();
   //  return view('ekstracurricular' , ['ekskullist' => $ekskul]);

   }

   public function show($id)
   {
       $ekskul = Ekstracurricular::with(['student'])->findOrFail($id);
       return view('Ekstracurricular-detail' , ['ekskul' => $ekskul]);
   }

   public function create() {
      return view('ekstracurricular-add');
  }
  

   public function store(EkstracurricularCreateRequest $request) {
      $ekskul = Ekstracurricular::create($request->all());
      if($ekskul) {
         Session::flash('status', 'success');
         Session::flash('message', 'add new ekstra success');
     }
      return redirect('/ekstracurricular');
  }

   public function edit(Request $request, $id) {
      $ekskul = Ekstracurricular::findOrFail($id);
      return view('ekstracurricular-edit' , ['ekskul' => $ekskul]);
         }

   public function update(Request $request, $id) {
      $ekskul =Ekstracurricular::findOrfail($id);
      $ekskul->update($request->all());
      return redirect('/ekstracurricular');
   }

   public function delete($id) {
      $ekskul = Ekstracurricular::findOrFail($id);
      return view('ekstracurricular-delete' , ['ekskul' => $ekskul]); 
   }

   public function destroy($id) {
      
      $deletedekskul = Ekstracurricular::findOrFail($id);
      $deletedekskul->delete();

      if($deletedekskul) {
       Session::flash('status', 'success');
       Session::flash('message', 'delete ekstra success');
   }

       return redirect('/ekstracurricular');
   }

   public function deletedStudent() {
      $deletedekskul = Ekstracurricular::onlyTrashed()->get();
      return view('ekstracurricular-deleted-list' , ['ekskul' => $deletedekskul]); 
  }

  public function restore($id) {
      $deletedekskul = Ekstracurricular::withTrashed()->where('id' , $id)->restore();
     
      if($deletedekskul) {
          Session::flash('status', 'success');
          Session::flash('message', 'restore ekstra success');
      }

      return redirect('/ekstracurricular');
  }

}
