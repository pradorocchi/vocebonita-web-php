<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Employee;
use Auth;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        $page = Page::find(3);
        return view('profissionais')->with('data', $employees)->with('page', $page);
    }

    public function register(){
        return view('admin.new-profissional');
    }

    public function insert(Request $request){
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->description = $request->description;
        $employee->user_id = Auth::user()->id;
        $employee->save();
        if ($request->has('picture')) {
            $request->file('picture')->move(public_path("/img/profissionais"), $employee->id.".jpg");
        }
        return view('admin.new-profissional')->with('return', $employee);
    }

    public function select(){
        $employees = Employee::all();
        return view('admin.list-profissional')->with('data', $employees);
    }

    public function selectById($id){
        $employee = Employee::find($id);
        return view('admin.edit-profissional')->with('data', $employee);
    }

    public function delete($id){
        $employee = Employee::find($id);
        $employee->delete();
        return $employee;
    }

    public function update(Request $request){
        $employee = Employee::find($request->id);
        $employee->name = $request->name;
        $employee->description = $request->description;
        $employee->save();
        if ($request->has('picture')) {
            $request->file('picture')->move(public_path("/img/profissionais"), $employee->id.".jpg");
        }
        $employees = Employee::all();
        return view('admin.list-profissional')->with('data', $employees);
    }
}
