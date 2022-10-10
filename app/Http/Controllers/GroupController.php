<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(){
        $groups = Group::with('students')->get();

        dd($groups); // detiene la ejecucion del codigo y muestra el detalle de lo que le mandas como parametro

        // $students = Student::all();

        return view('groups', compact('groups'));
    }
}