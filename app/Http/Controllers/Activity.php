<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\User;

class Resource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();
        return view('activities',['activities' => $activities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activityTypes = ['surf', 'windsurf', 'layak', 'atv', 'hot air ballon'];
        $users = User::all();
        return view('newActivities', ['activityTypes' => $activityTypes, 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'type' => 'required|string',
            'user_id' => 'required|exists:users,id',  
            'datetime' => 'required|date',
            'paid' => 'required|boolean',
            'notes' => 'nullable|string',
            'satisfaction' => 'nullable|integer|min:0|max:10',
        ]);

        $activity = new Activity();
        $activity->type = $validated['type'];
        $activity->user_id = $validated['user_id']; 
        $activity->datetime = $validated['datetime'];
        $activity->paid = $validated['paid'];  
        $activity->notes = $validated['notes'];
        $activity->satisfaction = $validated['satisfaction'];

    
    $activity->save();

    return redirect()->route('activities.index')->with('success', 'Activity created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = Activity::findOrFail($id); 

        return response()->json($activity);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::findOrFail($id);  
        
        $activity -> update([
            'type' => 'windsurf',
            'user_id' => 3,
            'datetime' => '2025-03-24', 
            'paid' => true,
            'notes' => null,
            'satisfaction' => 2,  
        ]);

        return response()->json($activity);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activity = Activity::findOrFail($id);

        // Validación de los datos
        $validated = $request->validate([
            'type' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'datetime' => 'required|date',
            'paid' => 'required|boolean',
            'notes' => 'nullable|string',
            'satisfaction' => 'nullable|integer|min:0|max:10',
        ]);

        $activity->update($validated);

        return response()->json($activity);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $activity = Activity::find($id);
            $activity->delete();

            return response()->json(['message' => 'Activity deleted successfully']);
        } catch (\Throwable $th) {
            return('Delete not found');
        }
        
       
    }
}
