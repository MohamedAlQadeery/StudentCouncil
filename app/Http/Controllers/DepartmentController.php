<?php

namespace App\Http\Controllers;

use App\CouncilMember;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    //

    public function index(){

    }
    public function create(){


        dd($users);

//        return view('panel.department.create')->with('councilMembers',$councilMembers);
    }

    public function store(){

    }

}
