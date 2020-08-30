<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
class FileController extends Controller
{
    public function siswalist(){
        return response()->download(public_path('user_image.jpg'), 'user_image');
    }

    public function siswalistSave(Request $request){

        $fileName = "user_image.jpg";
        $path = $request->file('photo')->move(public_path("/"), $fileName);
        $photoURL = url('/'.$fileName);
        return response()->json(['url'=>$photoURL],200);
    }

    public function export_excel()
	{
        $excel = Excel::download(new SiswaExport, 'siswa.xlsx');
		return response()->download($excel);
	}
}
