<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginAdmRequest;
use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Http\view;

class AdminController extends Controller
{

    /**
     * Display the products dashboard.
     *
     * @return \Iluminate\Http\Response
     */

    public function index(Request $request){

        $search = $request->search;
        $cadastro = DB::table('usuarios')
            ->where('id', 'like', '%'.$search.'%')
            ->orWhere('nome', 'like', '%'.$search.'%')
            ->orWhere('sobrenome', 'like', '%'.$search.'%')
            ->orWhere('fase', 'like', '%'.$search.'%')
            ->orderBy('id','desc')
            ->paginate(5);

        return view('administracao.index',  compact('cadastro', 'search'));
    }


    public function fetch_data(Request $request)
    {
        if($request->ajax())
        {
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');
                $query = $request->get('query');
                $query = str_replace(" ", "%", $query);
            $cadastro = DB::table('usuarios')
                ->where('id', 'like', '%'.$query.'%')
                ->orWhere('nome', 'like', '%'.$query.'%')
                ->orWhere('sobrenome', 'like', '%'.$query.'%')
                ->orWhere('fase', 'like', '%'.$query.'%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(5);
        return view('administracao.adminTable', compact('cadastro'))->render();
        }

    }


    public function login(){

        return view('administracao.login');
    }


    public function postLogin(LoginAdmRequest $request){

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if( auth()->guard('admin')->attempt($credentials)){
            return redirect()->route('admin');
        }

        return redirect()->route('admin.login')
        ->with('error', 'Usuário e/ou senha incorretos.');
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('admin/login');
    }



}
