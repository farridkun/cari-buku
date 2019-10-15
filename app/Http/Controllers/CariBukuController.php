<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CariBukuController extends Controller
{
    function index(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->filter_penulis)) {
                $data = DB::table('tbl_buku')
                    ->select('nama_buku', 'penulis', 'tahun_terbit')
                    ->where('penulis', $request->filter_penulis)
                    ->where('tahun_terbit', $request->filter_terbit)
                    ->get();
            } else {
                $data = DB::table('tbl_buku')
                    ->select('nama_buku', 'penulis', 'tahun_terbit')
                    ->get();
            }
            return datatables()->of($data)->make(true);
        }
        $angka_tahun = DB::table('tbl_buku')
            ->select('penulis')
            ->groupBy('penulis')
            ->orderBy('penulis', 'ASC')
            ->get();
        return view('caribuku', compact('angka_tahun'));
    }
}
