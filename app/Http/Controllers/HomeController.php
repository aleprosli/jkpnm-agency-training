<?php

namespace App\Http\Controllers;

use App\Models\Agensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->search) {
            /*query untuk search persis*/
            $senaraiAgensi = Agensi::where('alamat', 'LIKE', '%'.$request->search.'%')
                            ->OrWhere('name', 'LIKE', '%'.$request->search.'%')->get();

            /*query untuk search exact*/
            // $senaraiAgensi = Agensi::where('alamat', '=', $request->search)->get();
        } else {
            // $senaraiAgensi = Agensi::where('user_id', '=', Auth::user()->id)->paginate(5);
            $senaraiAgensi = Auth::user()->agencies()->paginate(5);
        }

        return view('home', compact('senaraiAgensi'));
    }
}
