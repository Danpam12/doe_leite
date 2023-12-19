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

                <div class="row">
                    <label for="ponto_coleta" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Ponto de Coleta:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $agendamento->pontoColeta->nome }} <!-- Considerando que você tenha um relacionamento definido para acessar o nome do ponto de coleta -->
                    </div>
                </div>

                <div class="row">
                    <label for="data" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Data:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $agendamento->data }}
                    </div>
                </div>

                <div class="row">
                    <label for="hora" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Hora:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $agendamento->hora }}
                    </div>
                </div>

                <div class="row">
                    <label for="tipo_coleta" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Tipo de Coleta:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $agendamento->tipo_coleta }}
                    </div>
                </div>

                <div class="row">
                    <label for="nome" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Nome:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $agendamento->nome }}
                    </div>
                </div>

                <div class="row">
                    <label for="cpf" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>CPF:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $agendamento->cpf }}
                    </div>
                </div>

                <div class="row">
                    <label for="telefone" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Telefone:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $agendamento->telefone }}
                    </div>
                </div>

                <div class="row">
                    <label for="email" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Email:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $agendamento->email }}
                    </div>
                </div>

                <div class="row">
                    <label for="endereco" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Endereço:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $agendamento->endereco }}
                    </div>
                </div>

                <div class="row">
                    <label for="quantidade" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Quantidade:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $agendamento->quantidade }} <strong>ml</strong>
                    </div>
                </div>

                <div class="row">
                    <label for="status" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Status:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $agendamento->status }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
