@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Editar Agendamento
                </div>
                <div class="float-end">
                    <a href="{{ route('agendamentos.index') }}" class="btn btn-primary btn-sm">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('agendamentos.update', $agendamento->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    
                    <div class="mb-3 row">
                        <!-- Campo de seleção para o ponto de coleta -->
                        <label for="ponto_coleta_id" class="col-md-4 col-form-label text-md-end text-start">Ponto de Coleta</label>
                        <div class="col-md-6">
                            <select class="form-control @error('ponto_coleta_id') is-invalid @enderror" id="ponto_coleta_id" name="ponto_coleta_id">
                                <option value="">Selecione um ponto de coleta</option>
                                @foreach ($pontosDeColeta as $ponto)
                                    <option value="{{ $ponto->id }}" {{ $agendamento->ponto_coleta_id == $ponto->id ? 'selected' : '' }}>{{ $ponto->nome }}</option>
                                @endforeach
                            </select>
                            @error('ponto_coleta_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="data" class="col-md-4 col-form-label text-md-end text-start">Data</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control @error('data') is-invalid @enderror" id="data" name="data" value="{{ $agendamento->data }}">
                            @error('data')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="hora" class="col-md-4 col-form-label text-md-end text-start">Hora</label>
                        <div class="col-md-6">
                            <input type="time" class="form-control @error('hora') is-invalid @enderror" id="hora" name="hora" value="{{ $agendamento->hora }}">
                            @error('hora')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tipo_coleta" class="col-md-4 col-form-label text-md-end text-start">Tipo de Coleta</label>
                        <div class="col-md-6">
                            <select class="form-control @error('tipo_coleta') is-invalid @enderror" id="tipo_coleta" name="tipo_coleta">
                                <option value="domicilio" {{ $agendamento->tipo_coleta == 'domicilio' ? 'selected' : '' }}>Domicílio</option>
                                <option value="presencial" {{ $agendamento->tipo_coleta == 'presencial' ? 'selected' : '' }}>Presencial</option>
                            </select>
                            @error('tipo_coleta')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nome" class="col-md-4 col-form-label text-md-end text-start">Nome</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ $agendamento->nome }}">
                            @error('nome')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Continuar com os outros campos de edição conforme necessário (cpf, telefone, email, endereco) -->

                    <div class="mb-3 row">
                        <label for="cpf" class="col-md-4 col-form-label text-md-end text-start">CPF</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('cpf') is-invalid @enderror" id="cpf" name="cpf" value="{{ $agendamento->cpf }}">
                            @error('cpf')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="telefone" class="col-md-4 col-form-label text-md-end text-start">Telefone</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('telefone') is-invalid @enderror" id="telefone" name="telefone" value="{{ $agendamento->telefone }}">
                            @error('telefone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $agendamento->email }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-end text-start">Endereço</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco">{{ $agendamento->endereco }}</textarea>
                            @error('endereco')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- Adicione os outros campos de edição conforme necessário (tipo_coleta, nome, cpf, telefone, email, endereco) -->

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Atualizar">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection
