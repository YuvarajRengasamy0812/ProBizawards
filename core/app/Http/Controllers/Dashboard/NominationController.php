<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Nomination;
use Illuminate\Http\Request;

class NominationController extends Controller
{
    public function index()
    {
        $nominations = Nomination::latest()->paginate(config('smartend.backend_pagination'));

        return view('dashboard.nominations.index', compact('nominations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'jobtitle' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'confirm_email' => 'required|email|max:255|same:email',
            'phone' => 'required|string|max:30',
            'country' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'subcategory' => 'required|string|max:255',
            'statement' => 'required|string|max:5000',
            'description' => 'required|string|max:1000',
            'consent1' => 'accepted',
            'consent2' => 'accepted',
        ]);

        $validated['company'] = strip_tags($validated['company']);
        $validated['contact'] = strip_tags($validated['contact']);
        $validated['jobtitle'] = strip_tags($validated['jobtitle']);
        $validated['email'] = strip_tags($validated['email']);
        $validated['confirm_email'] = strip_tags($validated['confirm_email']);
        $validated['phone'] = strip_tags($validated['phone']);
        $validated['country'] = strip_tags($validated['country']);
        $validated['category'] = strip_tags($validated['category']);
        $validated['subcategory'] = strip_tags($validated['subcategory']);
        $validated['statement'] = strip_tags($validated['statement']);
        $validated['description'] = strip_tags($validated['description']);
        $validated['consent1'] = true;
        $validated['consent2'] = true;

        Nomination::create($validated);

        return redirect()->back()->with('success', 'Nomination submitted successfully.');
    }
}
