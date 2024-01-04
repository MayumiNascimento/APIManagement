<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employees;

class EmployeeController extends Controller
{
    public function index(){
        return Employees::all();
    }

    public function getId($id){
       return Employees::find($id);
    }

    public function store(Request $request){
        
        $Name = $request->input('Name');
        $Position = $request->input('Position');

        $employee = new Employees();
        $employee->Name = $Name;
        $employee->Position = $Position;
        $employee->save();
    }

    public function update(Request $request, $id){
        $employee = Employees::find($id);
    
        $employee->Name = $request->input('Name');
        $employee->Position = $request->input('Position');
        $employee->save();

        return response()->json($employee);
    }

    public function destroy($id){
        $employee = Employees::find($id);
        $employee->delete();
    }

}
