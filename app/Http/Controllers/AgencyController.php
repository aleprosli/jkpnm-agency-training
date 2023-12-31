<?php

namespace App\Http\Controllers;

use App\Models\Agensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AgensiBerjayaDaftarMail;
use App\Http\Requests\TambahAgensiRequest;

class AgencyController extends Controller
{
    public function create()
    {
        return view('agency.create');
    }

    public function store(TambahAgensiRequest $request)
    {
        $agensi = Agensi::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'user_id' => auth()->user()->id
        ]);

        Mail::to($agensi->user->email)->send(new AgensiBerjayaDaftarMail());

        return to_route('home')->with('mesej', 'Agensi berjaya didaftarkan!');
    }

    public function show(Agensi $agency)
    {
        return view('agency.show', compact('agency'));
    }

    public function update(Request $request, Agensi $agency)
    {
        $agency->update([
            'name' => $request->name,
            'alamat' => $request->alamat
        ]);

        return to_route('home')->with('mesej', 'Kemaskini telah berjaya');
    }

    public function delete(Agensi $agency)
    {
        $agency->delete();

        return to_route('home')->with('mesej', 'Agensi dipadam');
    }
}
