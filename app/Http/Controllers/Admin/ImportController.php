<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\StockImport;
use App\Models\Stock;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class ImportController extends Controller
{
    public function index()
    {
        $stocks = Stock::select('date', 'open', 'high', 'low', 'close', 'adj_close', 'volume')->orderBy('date', 'desc')->paginate(50);
        return view('admin.data.index', compact('stocks'));
    }

    public function import(Request $request)
    {
        if ($request->isMethod('post')) {


            $file = $request->file;

            Excel::queueImport(new StockImport, $file);

            Alert::success('Notifikasi', 'Data berhasil di import');
            return back();

        }
    }

    public function destroy()
    {
        $destroy = Stock::truncate();
        
        Alert::success('Notifikasi', 'Data berhasil di hapus');
        return back();
    }
}
