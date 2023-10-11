<?php

namespace App\Http\Controllers;

use App\Models\Agensi;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function create()
    {
        return view('agency.create');
    }

    public function store(Request $request)
    {
        Agensi::create([
            'name' => $request->name,
            'alamat' => $request->alamat
        ]);

        return to_route('home')->with('mesej', 'Agensi berjaya didaftarkan!');
    }

    public function show(Agensi $agency)
    {
        return view('agency.show', compact('agency'));
    }
}
