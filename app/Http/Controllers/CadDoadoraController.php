<?php

namespace App\Http\Controllers;

use App\Models\Cad_doadora;
use App\Http\Requests\StoreCad_doadoraRequest;
use App\Http\Requests\UpdateCad_doadoraRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CadDoadoraController extends Controller
{


    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-cad-doadora|edit-cad-doadora|delete-cad-doadora', ['only' => ['index','show']]);
       $this->middleware('permission:create-cad-doadora', ['only' => ['create','store']]);
       $this->middleware('permission:edit-cad-doadora', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-cad-doadora', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        return view('cad_doadoras.index', [
            'cad_doadoras' => Cad_doadora::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cad_doadoras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCad_doadoraRequest $request)
    {
        Cad_doadora::create($request->all());
        return redirect()->route('cad_doadoras.index')
                ->withSuccess('Nova doadora adicionada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cad_doadora $cad_doadora)
    {
        return view('cad_doadoras.show', [
            'cad_doadora' => $cad_doadora
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cad_doadora $cad_doadora)
    {
        return view('cad_doadoras.edit', [
            'cad_doadora' => $cad_doadora
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCad_doadoraRequest $request, Cad_doadora $cad_doadora)
    {
        $cad_doadora->update($request->all());
        return redirect()->back()
            ->withSuccess('Doadora atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cad_doadora $cad_doadora)
    {
        $cad_doadora->delete();
        return redirect()->route('cad_doadoras.index')
                ->withSuccess('Doadora excluída com sucesso!');
    }
}
