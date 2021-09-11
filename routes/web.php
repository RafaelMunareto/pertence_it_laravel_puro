<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/index', 'PertenceController@index')->name('index');
Route::get('/primeiro_passo', 'PertenceController@passo')->name('passo');
Route::get('/servicos', 'PertenceController@servicos')->name('servicos');
Route::get('/historia', 'PertenceController@historia')->name('historia');
Route::get('/preco', 'PertenceController@preco')->name('preco');
Route::get('/direito', 'PertenceController@direito')->name('direito');
Route::get('/vantagens', 'PertenceController@vantagens')->name('vantagens');


Route::get('/passo', 'ContatoController@indexPasso')->name('contato.passo');
Route::get('/contato', 'ContatoController@indexContato')->name('contato.index');
Route::post('/enviarContato', 'ContatoController@enviarContato');
Route::post('/enviarPasso', 'ContatoController@enviarPasso');


/*
Route::get('/mailable', function (Request $request) {
    return new App\Mail\ContatoPasso($request);
});
*/

Route::get('/registrar', 'RegistroController@create');
Route::post('/registrar', 'RegistroController@store');

Route::group(['middleware' => 'web'], function() {
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.update');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.request');

    Route::get('/sair', function () {
        Auth::logout();
        return redirect('/login');
    });
});
//admin

Route::group(['middleware' => 'admin'], function() {
    Route::group(['middleware' => 'auth:admin'], function() {
        Route::get('/admin', 'AdminController@index')->name('admin');
        Route::post('/admin', 'AdminController@index')->name('admin');
        Route::get('/admin/fetch_data', 'AdminController@fetch_data');
        Route::get('/cadastro', 'CadastroController@index')->name('cadastro.index');
        Route::post('/cadastro', 'CadastroController@store');
        Route::delete('/remover/{id}', 'CadastroController@destroy')->name('destroy');
        Route::get('/alteraCadastro/{id}', 'CadastroController@cadastroAltera')->name('cadastroAltera');
        Route::get('/clientePropriedades/{id}', 'CadastroController@clientePropriedades')->name('clientePropriedades');
        Route::post('/alteraCadastro/{id}', 'CadastroController@altera');

        Route::delete('/removerHistorico/{id}', 'HistoricoController@destroy')->name('historico.destroy');
        Route::get('/historico/{id}', 'HistoricoController@historico')->name('historico');
        Route::GET('/incluiHistorico/{id}', 'HistoricoController@index')->name('historico.index');
        Route::post('/incluiHistorico/{id}', 'HistoricoController@store');
        Route::post('/alteraHistorico/{id}', 'HistoricoController@altera');
    });
    Route::get('/admin/login', 'AdminController@login')->name('admin.login');
    Route::post('/admin/login', 'AdminController@postLogin');
    Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');
});


