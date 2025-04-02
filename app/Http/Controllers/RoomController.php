<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms', ['rooms' => $rooms]);
    }
    public function create();
    {
        $rooms = Room::all()
        return view('rooms', ['rooms' => $rooms]);
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'number' => 'required|integer',
            'price' => 'required|integer',
            'offer' => 'required|integer',
            'roomStatus' => 'required|boolean',
            'type' => 'required|string',
            'amenities' => 'required|string',
        ]);

        $rooms = new Room();
        $rooms ->number = $validate['number'];
        $rooms ->price = $validate['price'];
        $rooms ->offer = $validate['offer'];
        $rooms ->roomStatus = $validate['roomStatus'];
        $rooms ->type = $validate['type'];
        $rooms ->amenities = $validate['amenities'];

        $rooms->save();
        return ('Rooms Create.');
    }
    public function show(string $id)
    {
        $rooms = Room::findOrFail($id);
        return response()->json($contacts)
    }
    public function edit(string $id)
    {

    }
    public function update(Request $request, string $id)
    {

    }
    public function destroy(string $id)
    {
        try{
            $rooms = Room::find($id);
            $rooms->delete();
            return response()->json['message' => 'Room delete'];
        } catch (){
            return ('Delete Room not found')
        }
    }
}
