<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teacher = Teacher::orderBy('id')->get();

        return view('teacher.index',['teachers' => $teacher]);
    }

    public function create()
    {
        $users = User::list();
        return view('teacher.create',['users' => $users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'     => 'required|numeric',
            'specialty'   => 'required'
        ]);

        Teacher::create([
            'user_id'     => $request->user_id,
            'specialty'   => $request->specialty
        ]);

        return redirect('teachers')->with('message', 'A new trainor has been added.');
    }
}
