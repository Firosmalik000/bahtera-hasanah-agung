<?php

namespace App\Http\Controllers;
use App\Models\WhyUs;
use App\Models\Icon;

use Illuminate\Http\Request;
class WhyUsController extends Controller
{
    public function index()
    {
        $data = WhyUs::all();
        $icon = Icon::all();
        return view('admin.whyUs',[
            'data' => $data,
            'icon' => $icon
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->id ? WhyUs::find($request->id) : new WhyUs();
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
