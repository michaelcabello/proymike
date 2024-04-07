<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\Brand;
use App\Imports\BrandImport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class BrandController extends Controller
{
    public function importStore(Request $request)
    {
        //return Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(44477));
        //return Carbon::createFromFormat('d/m/Y', "08/10/2022");//cuando la fecha esta de tipo string en el excel
        $request->validate([
            'file' => 'required|mimes:csv,xlsx'
        ]);

        $file = $request->file('file');
        //return Excel::toCollection(new BrandImport, $file);  //para ver los datos que estan pasando lo muestra en json, las fechas pasan como string
        //toCollection devuelve l coleccion por eso se muestra en el Json
        Excel::import(new BrandImport, $file);
        return redirect()->route('brand.list')->withFlash('Importación Satisfactoria');
        //return "se importo el archivo";
    }


    public function pdfReport(){
        $brands = Brand::all();
        $pdf = Pdf::loadView('admin.brands.report', compact('brands'));
        //return $pdf->download('brand.pdf');//descarga
        return $pdf->stream('brand_report.pdf');//ve en linea

    }



}
