<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Icon;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $data = Service::all();
        $icon = Icon::all();
        return view('admin.service',[
            'data' => $data,
            'icon' => $icon
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->id ? Service::find($request->id) : new Service();
        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->icon = $request->icon;
        $data->color = $request->color;
        $data->save();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
        ]);
    }
}
