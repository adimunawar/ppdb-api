<?php

namespace App\Http\Controllers;
use App\Siswa;
use App\Exports\SiswaExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
class ExcelController extends Controller
{
    public function export_excel()
	{
        $data = Siswa::all();
        return Excel::download(new SiswaExport, 'siswa.xlsx');
		
	}
}
