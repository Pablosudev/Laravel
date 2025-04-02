<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactController;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts',['contacts' => $contacts]);
    }
    public function create();
    {
        $contacts = Contact::all()
        return view('contacts', ['contacts' => $contacts]);
    }
    public function store(Request $request)
    {
        $validate =$request->validate([
            'date' => 'required|date',
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'comment' => 'required|string',
            'archived' => 'required|boolean',
        ])

        $contacts = new Contact();
        $contacts ->date = $validated['date'];
        $contacts ->name = $validated['name'];
        $contacts ->email = $validated['email'];
        $contacts ->phone = $validated['phone'];
        $contacts ->subject = $validated['subject'];
        $contacts ->comment = $validated['comment'];
        $contacts ->archived = $validated['archived'];

        $contacts->save();
        return ('Contact create.')
    }
    public function show(string $id)
    {
        $contacts = Contact::findOrFail($id);
        return response()->json($contacts)
    }
    public function edit(string $id)
    {
        
    }
    public function update(Request $request,string $id)
    {

    }
    public function destroy(string $id)
    {
        try {
            $contacts = Contact::find($id);
            $contacts->delete();
            return response()->json['message' => 'Contact delete'];
        } catch (\Throwable $th) {
            return('Delete not found');
        }
    }
}
