@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Informações do Agendamento
                </div>
                <div class="float-end">
                    <a href="{{ route('agendamentos.index') }}" class="btn btn-primary btn-sm">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <label for="ponto_coleta" class="col-md-4 col-form-label text-md-end text-start"><strong>Ponto de Coleta:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->pontoColeta->nome }} <!-- Considerando que você tenha um relacionamento definido para acessar o nome do ponto de coleta -->
                    </div>
                </div>

                <div class="row">
                    <label for="data" class="col-md-4 col-form-label text-md-end text-start"><strong>Data:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->data }}
                    </div>
                </div>

                <div class="row">
                    <label for="hora" class="col-md-4 col-form-label text-md-end text-start"><strong>Hora:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->hora }}
                    </div>
                </div>

                <div class="row">
                    <label for="tipo_coleta" class="col-md-4 col-form-label text-md-end text-start"><strong>Tipo de Coleta:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->tipo_coleta }}
                    </div>
                </div>

                <div class="row">
                    <label for="nome" class="col-md-4 col-form-label text-md-end text-start"><strong>Nome:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->nome }}
                    </div>
                </div>

                <div class="row">
                    <label for="cpf" class="col-md-4 col-form-label text-md-end text-start"><strong>CPF:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->cpf }}
                    </div>
                </div>

                <div class="row">
                    <label for="telefone" class="col-md-4 col-form-label text-md-end text-start"><strong>Telefone:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->telefone }}
                    </div>
                </div>

                <div class="row">
                    <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->email }}
                    </div>
                </div>

                <div class="row">
                    <label for="endereco" class="col-md-4 col-form-label text-md-end text-start"><strong>Endereço:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $agendamento->endereco }}
                    </div>
                </div>

                <!-- Adicionar mais campos conforme necessário -->

            </div>
        </div>
    </div>    
</div>

@endsection
