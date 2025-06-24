<?php

namespace App\Http\Controllers;

use App\Models\Checklist;
use Illuminate\Http\Request;

class ChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $checklists = Checklist::where('user_id', auth()->id())->get();
        // $checklists = Checklist::where('user_id', auth()->user()->id)->get();
        return response()->json($checklists);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);

        $checklist = Checklist::create([
            'user_id' => auth()->id(),
            'title' => $request->name,
        ]);

        return response()->json($checklist, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $checklist = Checklist::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $checklist->delete();

        return response()->json(['message' => 'Checklist deleted']);
    }
}
