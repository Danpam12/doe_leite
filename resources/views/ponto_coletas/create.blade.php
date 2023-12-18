@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card p-1 m-2 md:m-8">
            <div class="card-header" style="background-color: #e24ab4">
                <div class="float-start" style="color: white">
                    Adicionar Novo Ponto de Coleta
                </div>
                <div class="float-end" >
                    <a href="{{ route('ponto_coletas.index') }}" class="btn btn-primary btn-sm" style="background-color: white; color: black">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body bg-pink-200">
                <form action="{{ route('ponto_coletas.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="nome" class="col-md-4 col-form-label text-md-end text-start" style="color: #e24ab4">Nome</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ old('nome') }}">
                            @if ($errors->has('nome'))
                                <span class="text-danger">{{ $errors->first('nome') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row"style="color: #e24ab4">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Email</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fone" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Fone</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('fone') is-invalid @enderror" id="fone" name="fone" value="{{ old('fone') }}">
                            @if ($errors->has('fone'))
                                <span class="text-danger">{{ $errors->first('fone') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Endereço</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{ old('endereco') }}">
                            @if ($errors->has('endereco'))
                                <span class="text-danger">{{ $errors->first('endereco') }}</span>
                            @endif
                        </div>
                    </div>




                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" style="background-color: #e24ab4" value="Adicionar">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
