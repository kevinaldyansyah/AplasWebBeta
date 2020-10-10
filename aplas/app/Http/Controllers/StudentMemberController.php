<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Redirect;
use Session;

class StudentMemberController extends Controller
{
  public function index()
  {
      /*
      $entities=\App\StudentTeacher::where('student_teachers.teacher','=',Auth::user()->id)
        ->select('users.id', 'users.name', 'users.roleid', 'users.email','student_submits_count.count','student_submits_count.topicname')
          ->join('users','users.id','=','student_teachers.student')
          ->leftJoin('student_submits_count','users.id','=','student_submits_count.userid')
          ->orderBy('users.name','asc')
          ->get();
*/
          $entities=\App\User::where('users.uplink','=',Auth::user()->id)->where('users.status','=','active')
      ->select('users.id', 'users.name', 'users.roleid', 'users.email','student_submits_count.count','student_submits_count.topicname')
        ->leftJoin('student_submits_count','users.id','=','student_submits_count.userid')
        ->orderBy('users.name','asc')
        ->get();

      $data=['entities'=>$entities];

      return view('teacher/member/index')->with($data);
  }

  public function edit($name)
  {
    $entities=\App\User::where('users.uplink','=',Auth::user()->id)->where('users.status','=','active')
    ->select('users.id', 'users.name', 'users.roleid', 'users.email','users.status')
      ->where('users.name',$name)
      ->orderBy('users.name','asc')
      ->get();

    // dd($entities);
    $data=['entity'=>$entities];
    return view('teacher/editstudent/index')->with($data);
  }

  public function show()
  {
    $entities=\App\User::where('users.uplink','=',Auth::user()->id)->where('users.status','=','active')
      ->select('users.id', 'users.name', 'users.roleid', 'users.email','student_submits_count.count','student_submits_count.topicname')
        ->leftJoin('student_submits_count','users.id','=','student_submits_count.userid')
        ->orderBy('users.name','asc')
        ->get();

    $data=['entities'=>$entities];

    return view('teacher/member/index')->with($data);
  }

  public function destroy(Request $request, $id)
  {
      //
      //$entity = \App\StudentTeacher::where('student','=',$id);
      //$entity->delete();

      $entity = \App\User::find($id);
      $entity->status='deleted';
      $entity->save();
      //
      Session::flash('message','Student Member with Name='.$entity->name.' is deleted');
      return Redirect::to('/teacher/member');
  }
}
