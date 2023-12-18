@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card p-1 m-2 md:m-8">
            <div class="card-header" style="background-color: #e24ab4">
                <div class="float-start" style="color:white">
                    Editar Ponto de Coleta
                </div>
                <div class="float-end">
                    <a href="{{ route('ponto_coletas.index') }}" class="btn btn-primary btn-sm" style="background-color: white; color: black">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body bg-pink-200">
                <form action="{{ route('ponto_coletas.update', $ponto_coleta->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="nome" class="col-md-4 col-form-label text-md-end text-start" style="color: #e24ab4">Nome</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nome') is-invalid @enderror" style="color: #e24ab4"id="nome" name="nome" value="{{ $ponto_coleta->nome }}">
                            @if ($errors->has('nome'))
                                <span class="text-danger">{{ $errors->first('nome') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Email</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror"style="color: #e24ab4" id="email" name="email" value="{{ $ponto_coleta->email }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="fone" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Fone</label>
                        <div class="col-md-6 ">
                          <input type="text" class="form-control @error('fone') is-invalid @enderror" style="color: #e24ab4"id="fone" name="fone" value="{{ $ponto_coleta->fone}}">
                            @if ($errors->has('fone'))
                                <span class="text-danger ">{{ $errors->first('fone') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Endereço</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('endereco') is-invalid @enderror" style="color: #e24ab4"id="endereco" name="endereco" value="{{ $ponto_coleta->endereco }}">
                            @if ($errors->has('endereco'))
                                <span class="text-danger">{{ $errors->first('endereco') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" style="background-color: #e24ab4" value="Atualizar">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
