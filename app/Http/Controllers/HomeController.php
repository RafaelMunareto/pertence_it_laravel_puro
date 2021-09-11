<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Historico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $email = Auth::user()->email;



        $cadastro = DB::table('historicos')
                    ->where('email', '=', $email)
                    ->get();


        return view('areaCliente.index', compact('cadastro'));
    }
}
