@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header" style="background-color: #e24ab4">
                <div class="float-start" style="color: white">
                    Adicionar Novo Agendamento
                </div>
                <div class="float-end">
                    <a href="{{ route('agendamentos.index') }}" class="btn btn-primary btn-sm"style="background-color: white; color: black">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('agendamentos.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <!-- Adicione o campo para selecionar o ponto de coleta -->
                        <label for="ponto_coleta_id" class="col-md-4 col-form-label text-md-end text-start">Ponto de Coleta</label>
                        <div class="col-md-6">
                            <select class="form-control @error('ponto_coleta_id') is-invalid @enderror" id="ponto_coleta_id" name="ponto_coleta_id">
                                <option value="">Selecione um ponto de coleta</option>
                                @foreach ($pontosDeColeta as $ponto)
                                    <option value="{{ $ponto->id }}">{{ $ponto->nome }}</option>
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
                          <input type="date" class="form-control @error('data') is-invalid @enderror" id="data" name="data" value="{{ old('data') }}">
                            @if ($errors->has('data'))
                                <span class="text-danger">{{ $errors->first('data') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="hora" class="col-md-4 col-form-label text-md-end text-start">Hora</label>
                        <div class="col-md-6">
                            <select class="form-control @error('hora') is-invalid @enderror" id="hora" name="hora">
                                <option value="">Selecione a hora</option>
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
                            @if ($errors->has('hora'))
                                <span class="text-danger">{{ $errors->first('hora') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tipo_coleta" class="col-md-4 col-form-label text-md-end text-start">Tipo de Coleta</label>
                        <div class="col-md-6">
                            <select class="form-control @error('tipo_coleta') is-invalid @enderror" id="tipo_coleta" name="tipo_coleta">
                                <option value="domicilio">Domicílio</option>
                                <option value="presencial-coleta">Presencial - Coleta</option>
                                <option value="presencial-entrega">Presencial - Entrega</option>
                            </select>
                            @error('tipo_coleta')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nome" class="col-md-4 col-form-label text-md-end text-start">Nome</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ old('nome') }}">
                            @error('nome')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="cpf" class="col-md-4 col-form-label text-md-end text-start">CPF</label>
                        <div class="col-md-6">
                            <input type="text" maxlength="11" class="form-control @error('cpf') is-invalid @enderror" id="cpf" name="cpf" value="{{ old('cpf') }}">
                            @error('cpf')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="telefone" class="col-md-4 col-form-label text-md-end text-start">Telefone</label>
                        <div class="col-md-6">
                            <input type="text" maxlength="11" class="form-control @error('telefone') is-invalid @enderror" id="telefone" name="telefone" value="{{ old('telefone') }}">
                            @error('telefone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-end text-start">Endereço</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco">{{ old('endereco') }}</textarea>
                            @error('endereco')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    @can('create-role')
                        <div class="mb-3 row">
                            <label for="quantidade" class="col-md-4 col-form-label text-md-end text-start">Quantidade</label>
                            <div class="col-md-6">
                                <input type="number" name="quantidade" class="form-control" @error('quantidade') is-invalid @enderror id="quantidade"  value="{{ old('quantidade') }}">
                                @error('quantidade')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    @endcan

                    <div class="mb-3 row">
                        <div class="col-md-6 offset-md-4">
                            <input type="submit" class="btn btn-primary" style="background-color: #e24ab4" value="Adicionar Agendamento">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection
