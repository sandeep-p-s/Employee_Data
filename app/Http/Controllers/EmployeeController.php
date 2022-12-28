<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
        ->join('departments','users.Fk_department', '=' ,'departments.id')
        ->join('designations','users.Fk_designation', '=' ,'designations.id')
        ->select('users.Name','departments.department_name','designations.designation_name')
        ->get();
       //return $users;
        return view('index',compact('users'));
    }
}
