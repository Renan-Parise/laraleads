<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::all();

        if (auth()->check()) {
            return view('home', compact('leads'));
        } else {
            return view('welcome');
        }
    }

    public function create()
    {
        return view('leads.create');
    }
    
    public function store(Request $request)
    {
        $lead = Lead::create($request->all());
        return redirect()->route('home.index');
    }

    public function show(Lead $lead)
    {
        return view('leads.show', compact('lead'));
    }

    public function edit(Lead $lead)
    {
        return view('leads.edit', compact('lead'));
    }

    public function update(Request $request, Lead $lead)
    {
        $lead->update($request->all());
        return redirect()->route('home.index');
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->route('home.index');
    }

}
