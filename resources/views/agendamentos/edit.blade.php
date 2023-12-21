@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card p-1 m-2 md:m-8">
            <div class="card-header" style="background-color: #e24ab4">
                <div class="float-start" style="color: white">
                    Editar Agendamento
                </div>
                <div class="float-end">
                    <a href="{{ route('agendamentos.index') }}" class="btn btn-primary btn-sm" style="background-color: white; color: black">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body bg-pink-200">
                <form action="{{ route('agendamentos.update', $agendamento->id) }}" method="post">
                    @csrf
                    @method("PUT")


                    <div class="mb-3 row">
                        <!-- Campo de seleção para o ponto de coleta -->
                        <label for="ponto_coleta_id" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Ponto de Coleta</label>
                        <div class="col-md-6">
                            <select class="form-control @error('ponto_coleta_id') is-invalid @enderror"style="color: #e24ab4" id="ponto_coleta_id" name="ponto_coleta_id">
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
                        <label for="data" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Data</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control @error('data') is-invalid @enderror"style="color: #e24ab4" id="data" name="data" value="{{ $agendamento->data }}">
                            @error('data')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="hora" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Hora</label>
                        <div class="col-md-6">
                            <select class="form-select @error('hora') is-invalid @enderror"style="color: #e24ab4" id="hora" name="hora">
                                <option value="{{$agendamento->hora}}">{{$agendamento->hora}}</option>
                                <option value="08:00">08:00</option>
                                <option value="08:30">08:30</option>
                                <option value="09:00">09:00</option>
                                <option value="09:30">09:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="13:00">13:00</option>
                                <option value="13:30">13:30</option>
                                <option value="14:00">14:00</option>
                                <option value="14:30">14:30</option>
                                <option value="15:00">15:00</option>
                                <option value="15:30">15:30</option>
                                <option value="16:00">16:00</option>
                                <option value="16:30">16:30</option>
                                <option value="17:00">17:00</option>
                                <option value="17:30">17:30</option>
                                <option value="18:00">18:00</option>
                                <option value="18:30">18:30</option>
                                <option value="19:00">19:00</option>
                                <option value="19:30">19:30</option>
                                <option value="20:00">20:00</option>
                            </select>
                            @error('hora')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tipo_coleta" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Tipo de Coleta</label>
                        <div class="col-md-6">
                            <select class="form-control @error('tipo_coleta') is-invalid @enderror" style="color: #e24ab4" id="tipo_coleta" name="tipo_coleta">
                                <option value="domicilio" {{ $agendamento->tipo_coleta == 'domicilio' ? 'selected' : '' }}>Domicílio</option>
                                <option value="presencial-coleta" {{ $agendamento->tipo_coleta == 'presencial-coleta' ? 'selected' : '' }}>Presencial - Coleta</option>
                                <option value="presencial-entrega" {{ $agendamento->tipo_coleta == 'presencial-entrega' ? 'selected' : '' }}>Presencial - Entrega</option>
                            </select>
                            @error('tipo_coleta')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nome" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Nome</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('nome') is-invalid @enderror"style="color: #e24ab4" id="nome" name="nome" value="{{ $agendamento->nome }}">
                            @error('nome')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Continuar com os outros campos de edição conforme necessário (cpf, telefone, email, endereco) -->

                    <div class="mb-3 row">
                        <label for="cpf" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">CPF</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('cpf') is-invalid @enderror" style="color: #e24ab4" id="cpf" name="cpf" value="{{ $agendamento->cpf }}">
                            @error('cpf')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="telefone" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Telefone</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('telefone') is-invalid @enderror" style="color: #e24ab4" id="telefone" name="telefone" value="{{ $agendamento->telefone }}">
                            @error('telefone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Email</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" style="color: #e24ab4"id="email" name="email" value="{{ $agendamento->email }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Endereço</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('endereco') is-invalid @enderror" style="color: #e24ab4"id="endereco" name="endereco">{{ $agendamento->endereco }}</textarea>
                            @error('endereco')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    @can('create-role')
                    <div class="mb-3 row">
                        <label for="quantidade" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4">Quantidade</label>
                        <div class="col-md-6">
                            <input type="number" name="quantidade" class="form-control" @error('quantidade') is-invalid @enderror style="color: #e24ab4" id="quantidade"  value="{{ $agendamento->quantidade }}">
                            @error('quantidade')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="status" class="col-md-4 col-form-label text-md-end text-start" style="color: #e24ab4">Status</label>
                        <div class="col-md-6">
                            <select class="form-control @error('status') is-invalid @enderror" style="color: #e24ab4"id="status" name="status">
                                <option value="Pendente" {{ $agendamento->status == 'Pendente' ? 'selected' : '' }}>Pendente</option>
                                <option value="Aceito" {{ $agendamento->status == 'Aceito' ? 'selected' : '' }}>Aceito</option>
                                <option value="Cancelado" {{ $agendamento->status == 'Cancelado' ? 'selected' : '' }}>Cancelado</option>
                                <option value="Concluido" {{ $agendamento->status == 'Concluido' ? 'selected' : '' }}>Concluido</option>
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    @endcan
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" style="background-color: #e24ab4"value="Atualizar">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
