@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Informações da Doadora
                </div>
                <div class="float-end">
                    <a href="{{ route('cad_doadoras.index') }}" class="btn btn-primary btn-sm">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <label for="nome" class="col-md-4 col-form-label text-md-end text-start"><strong>Nome:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $cad_doadora->nome }}
                    </div>
                </div>

                <div class="row">
                    <label for="data_nasc" class="col-md-4 col-form-label text-md-end text-start"><strong>Nascimento:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $cad_doadora->data_nasc }}
                    </div>
                </div>

                <div class="row">
                    <label for="endereco" class="col-md-4 col-form-label text-md-end text-start"><strong>Endereço:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $cad_doadora->endereco }}
                    </div>
                </div>

                <div class="row">
                    <label for="fone" class="col-md-4 col-form-label text-md-end text-start"><strong>Fone:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $cad_doadora->fone }}
                    </div>
                </div>

                <div class="row">
                    <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $cad_doadora->email }}
                    </div>
                </div>

                <div class="row">
                    <label for="pre_nat" class="col-md-4 col-form-label text-md-end text-start"><strong>Pré-natal:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $cad_doadora->pre_nat}}
                    </div>
                </div>

                <div class="row">
                    <label for="data_parto" class="col-md-4 col-form-label text-md-end text-start"><strong>Data do Parto:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $cad_doadora->data_parto }}
                    </div>
                </div>

                <div class="row">
                    <label for="tabagismo" class="col-md-4 col-form-label text-md-end text-start"><strong>Tabagismo:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $cad_doadora->tabagismo }}
                    </div>
                </div>

                <div class="row">
                    <label for="etilismo" class="col-md-4 col-form-label text-md-end text-start"><strong>Etilismo:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $cad_doadora->etilismo }}
                    </div>
                </div>

                <div class="row">
                    <label for="drogas" class="col-md-4 col-form-label text-md-end text-start"><strong>Drogas:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $cad_doadora->drogas }}
                    </div>
                </div>

                <div class="row">
                    <label for="exames" class="col-md-4 col-form-label text-md-end text-start"><strong>Exames:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $cad_doadora->exames }}
                    </div>
                </div>

                <!-- Adicionar mais campos conforme necessário -->

            </div>
        </div>
    </div>    
</div>
@endsection