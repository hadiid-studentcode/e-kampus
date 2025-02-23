<?php

namespace App\Http\Controllers;

use App\Models\materials;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'file' => 'required',
                'title' => 'required',
            ]);


            $material = new materials();
            $material->course_id = $request->course_id;
            $material->title = $request->title;
            $material->file_path = $request->file('file')->store('materials', 'public');
            $material->save();

            return back()->with('success', 'File uploaded successfully');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return back()->with('error', 'Error uploading file');
        }
    }

    public function download($id)
    {
        try {
            $material = materials::find($id);
            return response()->download(storage_path('app/public/' . $material->file_path));
        } catch (\Throwable $th) {
            return back()->with('error', 'Error downloading file');
        }
    }
}
