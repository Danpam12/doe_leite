@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card p-1 m-2 md:m-8">
            <div class="card-header" style="background-color: #e24ab4">
                <div class="float-start" style="color: white">
                    Informações do Agendamento
                </div>
                <div class="float-end">
                    <a href="{{ route('agendamentos.index') }}" class="btn btn-primary btn-sm" style="background-color: white; color: black">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body bg-pink-200">
                -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <div class="row">
                    <label for="ponto_coleta" class="col-md-4 col-form-label text-md-end text-start"><strong>Ponto de Coleta:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->pontoColeta->nome }} <!-- Considerando que você tenha um relacionamento definido para acessar o nome do ponto de coleta -->
                    </div>
                </div>
                -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <div class="row">
                    <label for="data" class="col-md-4 col-form-label text-md-end text-start"><strong>Data:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->data }}
                    </div>
                </div>
                -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <div class="row">
                    <label for="hora" class="col-md-4 col-form-label text-md-end text-start"><strong>Hora:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->hora }}
                    </div>
                </div>
                -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <div class="row">
                    <label for="tipo_coleta" class="col-md-4 col-form-label text-md-end text-start"><strong>Tipo de Coleta:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->tipo_coleta }}
                    </div>
                </div>
                -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <div class="row">
                    <label for="nome" class="col-md-4 col-form-label text-md-end text-start"><strong>Nome:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->nome }}
                    </div>
                </div>
                -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <div class="row">
                    <label for="cpf" class="col-md-4 col-form-label text-md-end text-start"><strong>CPF:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->cpf }}
                    </div>
                </div>
                -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <div class="row">
                    <label for="telefone" class="col-md-4 col-form-label text-md-end text-start"><strong>Telefone:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->telefone }}
                    </div>
                </div>
                -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <div class="row">
                    <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->email }}
                    </div>
                </div>
                -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <div class="row">
                    <label for="endereco" class="col-md-4 col-form-label text-md-end text-start"><strong>Endereço:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->endereco }}
                    </div>
                </div>
                -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <div class="row">
                    <label for="quantidade" class="col-md-4 col-form-label text-md-end text-start"><strong>Quantidade:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->quantidade }} <strong>ml</strong>
                    </div>
                </div>
                -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <div class="row">
                    <label for="status" class="col-md-4 col-form-label text-md-end text-start"><strong>Status:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->status }}
                    </div>
                </div>
                -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            </div>
        </div>
    </div>
</div>

@endsection
