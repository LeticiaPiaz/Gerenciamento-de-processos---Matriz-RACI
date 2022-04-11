<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cadastro_processo;
use Illuminate\Http\Request;

class CadastroProcessoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('cadastroProcessos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return view('pesquisarProcesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cadastro_processo  $cadastro_processo
     * @return \Illuminate\Http\Response
     */
    public function show(Cadastro_processo $cadastro_processo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cadastro_processo  $cadastro_processo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cadastro_processo $cadastro_processo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cadastro_processo  $cadastro_processo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cadastro_processo $cadastro_processo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cadastro_processo  $cadastro_processo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cadastro_processo $cadastro_processo)
    {
        //
    }
}
