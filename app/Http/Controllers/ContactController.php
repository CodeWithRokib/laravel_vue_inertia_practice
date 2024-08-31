<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return Inertia::render('Contacts/Index', ['contacts' => $contacts]);
    }

    public function create()
    {
        return Inertia::render('Contacts/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }

    public function edit(Contact $contact)
    {
        return Inertia::render('Contacts/Edit', ['contact' => $contact]);
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
