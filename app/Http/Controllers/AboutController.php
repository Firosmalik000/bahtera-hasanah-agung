<?php
namespace App\Http\Controllers;
use App\Models\About;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::all();
        return view('admin.about', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->id ? About::find($request->id) : new About();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('about', 'public');
            $data->image = $imagePath;
        }

        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->save();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
        ]);
    }

}
