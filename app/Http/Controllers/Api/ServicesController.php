<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Services;

class ServicesController extends Controller
{
    public function index(){
        return Services::all();
    }

    public function getId($id){
        return $service = Services::find($id);
     }

    public function store(Request $request){
        
        $Type = $request->input('Type');
        $Service = $request->input('Service');
        $Description = $request->input('Description');
        $Value = $request->input('Value');

        $service = new Services();
        $service->Type = $Type;
        $service->Service = $Service;
        $service->Description = $Description;
        $service->Value = $Value;
        $service->save();
    }

    public function update(Request $request, $id){
        $service = Services::find($id);
    
        $service->Type = $request->input('Type');
        $service->Service = $request->input('Service');
        $service->Description = $request->input('Description');
        $service->Value = $request->input('Value');
        $service->save();
    }
    
    public function destroy($id){
        $service = Services::find($id);
        $service->delete();
    }

}
