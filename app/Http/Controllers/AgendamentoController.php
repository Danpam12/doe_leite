<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Http\Requests\StoreAgendamentoRequest;
use App\Http\Requests\UpdateAgendamentoRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Ponto_coleta;

class AgendamentoController extends Controller
{
    /**
     * Instantiate a new ProductController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-agendamento|edit-agendamento|delete-agendamento|show-agendamento', ['only' => ['index','show']]);
       $this->middleware('permission:create-agendamento', ['only' => ['create','store']]);
       $this->middleware('permission:edit-agendamento', ['only' => ['edit','update']]);
       $this->middleware('permission:show-agendamento', ['only' => ['show']]);
       $this->middleware('permission:delete-agendamento', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('agendamentos.index', [
            'agendamentos' => Agendamento::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pontosDeColeta = Ponto_coleta::all(); // Supondo que PontoColeta seja o modelo dos pontos de coleta

        return view('agendamentos.create', compact('pontosDeColeta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgendamentoRequest $request): RedirectResponse
    {
        Agendamento::create($request->all());
        return redirect()->route('agendamentos.index')
                ->withSuccess('Novo agendamento adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agendamento $agendamento): View
    {
        return view('agendamentos.show', [
            'agendamento' => $agendamento
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agendamento $agendamento): View
    {
        $pontosDeColeta = Ponto_coleta::all();

        return view('agendamentos.edit', [
            'agendamento' => $agendamento,
            'pontosDeColeta' => $pontosDeColeta
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgendamentoRequest $request, Agendamento $agendamento): RedirectResponse
    {
        $agendamento->update($request->all());
        return redirect()->route('agendamentos.index')
                ->withSuccess('Agendamento atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agendamento $agendamento): RedirectResponse
    {
        $agendamento->delete();
        return redirect()->route('agendamentos.index')
                ->withSuccess('Agendamento excluido com sucesso!');
    }
}