<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BasicController extends Controller
{
    public function home()
    {
        return Inertia::render('Home');
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function contact()
    {
        return Inertia::render('Contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string'
        ]);

        Contact::create($validated);

        return Inertia::render('Contact', [
            'isEditing' => false,
            'flash' => [
                'success' => 'Thank you for your message. We will get back to you soon!',
            ],
        ]);
    }

    public function forms()
    {
        $forms = Contact::orderBy('created_at', 'desc')->get();
        return Inertia::render('Forms', [
            'forms' => $forms
        ]);
    }

    public function edit(Contact $contact)
    {
        return Inertia::render('Contact', [
            'contact' => $contact,
            'isEditing' => true
        ]);
    }

    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string'
        ]);

        $contact->update($validated);

        return Inertia::render('Contact', [
            'contact' => $contact,
            'isEditing' => true,
            'flash' => [
                'success' => 'Message updated successfully!',
            ],
        ]);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('forms')->with('error', 'Message deleted successfully!');
    }
}
