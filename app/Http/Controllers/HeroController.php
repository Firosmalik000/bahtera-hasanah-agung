<?php

namespace App\Http\Controllers;
use App\Models\Hero;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $data = Hero::all();
        return view('admin.hero', compact('data'));
    }


    public function store(Request $request)
    {
        $hero = $request->id ? Hero::find($request->id) : new Hero();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('hero', 'public');
            $hero->image = $imagePath;
        }

        $hero->title = $request->title;
        $hero->desc = $request->desc;
        $hero->save();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
        ]);
    }

}
