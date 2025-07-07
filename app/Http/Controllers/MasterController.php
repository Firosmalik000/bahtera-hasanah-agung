<?php

namespace App\Http\Controllers;
use App\Models\Icon;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        $icon = Icon::all();
        return view('admin.master', [
            'icon' => $icon,
        ]);

    }

    public function store(Request $request)
    {
        $icon = $request->id ? Icon::find($request->id) : new Icon();
        $icon->icon = "fas fa-" .$request->icon;
        $icon->save();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
        ]);
    }

}
