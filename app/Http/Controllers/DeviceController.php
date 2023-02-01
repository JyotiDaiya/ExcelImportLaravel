<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportDevice;

class DeviceController extends Controller
{
    public function importView(Request $request){
        //print_r($request->error);
        return view('importFile');
    }

    public function import(Request $request)
    {

        $validator = $request->validate([
            'file' => 'required|mimes:xlsx|max:2048'
        ]);

        $path = $request->file('file')->getRealPath();

        $import = new ImportDevice();
        $import->startRow(2);

        $row = Excel::toArray(new ImportDevice(), request()->file('file'));

        return view('readFile')->with('excel',$row);

        /*Excel::import(new ImportDevice,
            $request->file('file')->store('files'));*/
//        return redirect()->back();
    }

    public function saveFile(Request $request) {

        $validator = $request->validate([
            'sapid.*' => 'required|max:255',
            'hostname.*' => 'required|max:255',
            'loopback.*' => 'required|max:255',
            'mac_address.*' => 'required|max:255',
        ]);



    }
}
