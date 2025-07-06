<?php

namespace App\Http\Controllers;
use App\Models\Visi;

use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function index()
    {
        $data = Visi::all();
        return view('admin.visi', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->id ? Visi::find($request->id) : new Visi();
        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->save();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
        ]);
    }
}
