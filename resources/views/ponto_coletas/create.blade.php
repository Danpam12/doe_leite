@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Adicionar Novo Ponto de Coleta
                </div>
                <div class="float-end">
                    <a href="{{ route('ponto_coletas.index') }}" class="btn btn-primary btn-sm">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('ponto_coletas.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="nome" class="col-md-4 col-form-label text-md-end text-start">Nome</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ old('nome') }}">
                            @if ($errors->has('nome'))
                                <span class="text-danger">{{ $errors->first('nome') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fone" class="col-md-4 col-form-label text-md-end text-start">Fone</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('fone') is-invalid @enderror" id="fone" name="fone" value="{{ old('fone') }}">
                            @if ($errors->has('fone'))
                                <span class="text-danger">{{ $errors->first('fone') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-end text-start">Endereço</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{ old('endereco') }}">
                            @if ($errors->has('endereco'))
                                <span class="text-danger">{{ $errors->first('endereco') }}</span>
                            @endif
                        </div>
                    </div>

                    

                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Adicionar">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection
