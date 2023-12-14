<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreCad_doadoraRequest;
use App\Http\Requests\UpdateCad_doadoraRequest;
use App\Models\Cad_doadora;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class CadDoadoraController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-cad-doadora|edit-cad-doadora|delete-cad-doadora|show-cad-doadora', ['only' => ['index','show']]);
       $this->middleware('permission:create-cad-doadora', ['only' => ['create','store']]);
       $this->middleware('permission:edit-cad-doadora', ['only' => ['edit','update']]);
       $this->middleware('permission:show-cad-doadora', ['only' => ['show']]);
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
    public function store(StoreCad_doadoraRequest $request): RedirectResponse
    {
        $cad_doadora = new cad_doadora;

        Cad_doadora::create($request->all());
        return redirect()->route('cad_doadoras.index')
                ->withSuccess(' Doadora foi adicionada com sucesso!');
   

                //File Upload
        if($request->hasFile('file') && $request->file('file')->isValid()) {
            
            $requestFile = $request->file;

            $extension = $requestFile->extension();

            $fileName = md5($requestFile->file->getClienteOriginalName() . strtotime("now")) . "." . $extension;

            $requestFile->move(public_path('storage'), $fileName);

            $cad_doadora->file = $fileName;
        
        }
            $cad_doadora->save();
 
            return redirect()->route('cad_doadoras.index')->with('msg', 'criado com sucesso');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Cad_doadora $cad_doadora): View
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
       return view('cad_doadoras.edit', compact ('cad_doadora')
        );

    }
   

    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCad_doadoraRequest $request, Cad_doadora $cad_doadora): RedirectResponse
    {
        $cad_doadora->update($request->all());
        return redirect()->route('cad_doadoras.index')
                ->withSuccess('Doadora foi atualizada com sucesso!');


                //Update file

            if ($request->hasFile('file') && $request->file('file')->isValid()) {
                // Verifica se o arquivo existente precisa ser excluído
                if ($cad_doadora->file && file_exists(public_path('storage/' . $cad_doadora->file))) {
                    unlink(public_path('storage/' . $cad_doadora->file));
                }

                // Processa e armazena o novo arquivo
                $requestFile = $request->file;
                $extension = $requestFile->extension();
                $fileName = md5($requestFile->file->getClienteOriginalName() . strtotime("now")) . "." . $extension;
                $requestFile->move(public_path('storage'), $fileName);

                // Atualiza o modelo com o novo nome do arquivo
                $cad_doadora->file = $fileName;
            }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cad_doadora $cad_doadora): RedirectResponse
    {
        $cad_doadora->delete();
        return redirect()->route('cad_doadoras.index')
                ->withSuccess('Doadora foi deletada com sucesso!');
    }
}
