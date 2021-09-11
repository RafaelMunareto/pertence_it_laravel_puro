<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertenceController extends Controller
{
    public function index() {
        return view('pertence.index');
    }


    public function servicos() {
        return view('pertence.servicos');
    }


    public function historia() {
        return view('pertence.historia');
    }

    public function direito() {
        return view('pertence.direito');
    }

    public function preco() {
        return view('pertence.preco');
    }

    public function vantagens() {
        return view('pertence.vantagens');
    }

}
