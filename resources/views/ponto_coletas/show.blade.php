@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Informações do Ponto de Coleta
                </div>
                <div class="float-end">
                    <a href="{{ route('ponto_coletas.index') }}" class="btn btn-primary btn-sm">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="nome" class="col-md-6 col-form-label text-md-end text-start"><strong>Nome:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $ponto_coleta->nome }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="email" class="col-md-6 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $ponto_coleta->email }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="fone" class="col-md-6 col-form-label text-md-end text-start"><strong>Fone:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $ponto_coleta->fone }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="endereco" class="col-md-6 col-form-label text-md-end text-start"><strong>Endereço:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $ponto_coleta->endereco }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection
