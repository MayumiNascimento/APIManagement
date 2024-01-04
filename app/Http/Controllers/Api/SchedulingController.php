<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Scheduling;

class SchedulingController extends Controller
{

    public function index(){
        return Scheduling::all();
    }

    public function store(Request $request){
        
        $Client = $request->input('Client');
        $HInitial = $request->input('HInitial');
        $HFinal = $request->input('HFinal');
        $Description = $request->input('Description');
        $TotalValue = $request->input('TotalValue');
        $Day = $request->input('Day');
        $EmployeeId = $request->input('EmployeeId');
        $ServiceId = $request->input('ServiceId');

        $scheduling = new Scheduling();
        $scheduling->Client = $Client;
        $scheduling->Hinitial = $HInitial;
        $scheduling->Hfinal = $HFinal;
        $scheduling->Description = $Description;
        $scheduling->TotalValue = $TotalValue;
        $scheduling->Day = $Day;

        $scheduling->EmployeeId = $EmployeeId;
        $scheduling->ServiceId = $ServiceId;
        $scheduling->save();
    }
    
    public function update(Request $request, $id){
        $scheduling = Scheduling::find($id);
        
        $scheduling->Client = $request->input('Client');
        $scheduling->Hinitial = $request->input('Hinitial');
        $scheduling->Hfinal = $request->input('Hfinal');
        $scheduling->Description = $request->input('Description');
        $scheduling->TotalValue = $request->input('TotalValue');
        $scheduling->Day = $request->input('Day');
        $scheduling->EmployeeId = $request->input('EmployeeId');
        $scheduling->ServiceId = $request->input('ServiceId');
        $scheduling->save();
    }

    public function destroy($id){
        $scheduling = Scheduling::find($id);
        $scheduling->delete();
    }
}
