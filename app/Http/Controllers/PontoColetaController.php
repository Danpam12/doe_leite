<?php

namespace App\Http\Controllers;

use App\Models\Ponto_coleta;
use App\Http\Requests\StorePonto_coletaRequest;
use App\Http\Requests\UpdatePonto_coletaRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PontoColetaController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-ponto-coleta|edit-ponto-coleta|delete-ponto-coleta|show-ponto-coleta', ['only' => ['index','show']]);
       $this->middleware('permission:create-ponto-coleta', ['only' => ['create','store']]);
       $this->middleware('permission:edit-ponto-coleta', ['only' => ['edit','update']]);
       $this->middleware('permission:show-ponto-coleta', ['only' => ['show']]);
       $this->middleware('permission:delete-ponto-coleta', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ponto_coletas.index', [
            'ponto_coletas' => Ponto_coleta::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ponto_coletas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePonto_coletaRequest $request): RedirectResponse
    {
        Ponto_coleta::create($request->all());
        return redirect()->route('ponto_coletas.index')
                ->withSuccess('Ponto de coleta foi adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ponto_coleta $ponto_coleta): View
    {
        return view('ponto_coletas.show', [
            'ponto_coleta' => $ponto_coleta
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ponto_coleta $ponto_coleta)
    {
        return view('ponto_coletas.edit', [
            'ponto_coleta' => $ponto_coleta
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePonto_coletaRequest $request, Ponto_coleta $ponto_coleta): RedirectResponse
    {
        $ponto_coleta->update($request->all());
        return redirect()->route('ponto_coletas.index')
                ->withSuccess('Ponto de coleta foi atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ponto_coleta $ponto_coleta): RedirectResponse
    {
        $ponto_coleta->delete();
        return redirect()->route('ponto_coletas.index')
                ->withSuccess('Ponto de coleta foi deletado com sucesso!');
    }
}
