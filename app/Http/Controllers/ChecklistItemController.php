<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChecklistItem;

class ChecklistItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($checklistId)
    {
        $items = ChecklistItem::where('checklist_id', $checklistId)->get();
        return response()->json($items);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $checklistId)
    {
        $request->validate(['itemName' => 'required']);

        $item = ChecklistItem::create([
            'checklist_id' => $checklistId,
            'content' => $request->itemName,
            'is_done' => false,
        ]);

        return response()->json($item, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($checklistId, $itemId)
    {
        $item = ChecklistItem::where('checklist_id', $checklistId)->findOrFail($itemId);
        return response()->json($item);
    }

    public function toggleStatus($checklistId, $itemId)
    {
        $item = ChecklistItem::where('checklist_id', $checklistId)->findOrFail($itemId);
        $item->is_done = !$item->is_done;
        $item->save();

        return response()->json($item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function rename(Request $request, $checklistId, $itemId)
    {
        $request->validate(['itemName' => 'required']);

        $item = ChecklistItem::where('checklist_id', $checklistId)->findOrFail($itemId);
        $item->content = $request->itemName;
        $item->save();

        return response()->json($item);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($checklistId, $itemId)
    {
        $item = ChecklistItem::where('checklist_id', $checklistId)->findOrFail($itemId);
        $item->delete();

        return response()->json(['message' => 'Item deleted']);
    }
}
