@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card p-1 m-2 md:m-8">
            <div class="card-header" style="background-color: #e24ab4">
                <div class="float-start"style="color: white">
                    Adicionar Nova Doadora
                </div>
                <div class="float-end">
                    <a href="{{ route('cad_doadoras.index') }}" class="btn btn-primary btn-sm" style="background-color: white; color: black">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body bg-pink-200">
                <form action="{{ route('cad_doadoras.store') }}" method="post" enctype="multipart/form-data">
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
                        <label for="data_nasc" class="col-md-4 col-form-label text-md-end text-start">Nascimento</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('data_nasc') is-invalid @enderror" id="data_nasc" name="data_nasc" value="{{ old('data_nasc') }}">
                          @if($errors->has('data_nasc'))
                                <span class="text-danger">{{ $errors->first('data_nasc') }}</span>
                          @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-end text-start">Endereço</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{ old('endereco') }}">
                          @if($errors->has('endereco'))
                                <span class="text-danger">{{ $errors->first('endereco') }}</span>
                          @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="fone" class="col-md-4 col-form-label text-md-end text-start">Fone</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('fone') is-invalid @enderror" id="fone" name="fone" value="{{ old('fone') }}">
                            @if($errors->has('fone'))
                                <span class="text-danger">{{ $errors->first('fone') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="pre_nat" class="col-md-4 col-form-label text-md-end text-start">Pré-natal</label>
                        <div class="col-md-6">
                            <select class="form-control @error('pre_nat') is-invalid @enderror" id="pre_nat" name="pre_nat">
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                            </select>
                            @if($errors->has('pre_nat'))
                                <span class="text-danger">{{ $errors->first('pre_nat') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="data_parto" class="col-md-4 col-form-label text-md-end text-start">Data do Parto</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('data_parto') is-invalid @enderror" id="data_parto" name="data_parto" value="{{ old('data_parto') }}">
                            @if($errors->has('data_parto'))
                                <span class="text-danger">{{ $errors->first('data_parto') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tabagismo" class="col-md-4 col-form-label text-md-end text-start">Tabagismo</label>
                        <div class="col-md-6">
                        <select class="form-control @error('tabagismo') is-invalid @enderror" id="tabagismo" name="tabagismo">
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                            </select>
                            @if($errors->has('tabagismo'))
                                <span class="text-danger">{{ $errors->first('tabagismo')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="etilismo" class="col-md-4 col-form-label text-md-end text-start">Etilismo</label>
                        <div class="col-md-6">
                        <select class="form-control @error('etilismo') is-invalid @enderror" id="etilismo" name="etilismo">
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                            </select>
                            @if($errors->has('etilismo'))
                                <span class="text-danger">{{ $errors->first('etilismo') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="drogas" class="col-md-4 col-form-label text-md-end text-start">Drogas</label>
                        <div class="col-md-6">
                        <select class="form-control @error('drogas') is-invalid @enderror" id="drogas" name="drogas">
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                            </select>
                            @if($errors->has('drogas'))
                                <span class="text-danger">{{ $errors->first('drogas')}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="vdrl" class="col-md-4 col-form-label text-md-end text-start">Vdrl</label>
                        <div class="col-md-6">
                        <select class="form-control @error('vdrl') is-invalid @enderror" id="vdrl" name="vdrl">
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                        </select>
                            @if($errors->has('vdrl'))
                                <span class="text-danger">{{ $errors->first('vdrl')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="hbsag" class="col-md-4 col-form-label text-md-end text-start">Hbsag</label>
                        <div class="col-md-6">
                        <select class="form-control @error('hbsag') is-invalid @enderror" id="hbsag" name="hbsag">
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                        </select>
                            @if($errors->has('hbsag'))
                                <span class="text-danger">{{ $errors->first('hbsag')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="hiv" class="col-md-4 col-form-label text-md-end text-start">Hiv</label>
                        <div class="col-md-6">
                        <select class="form-control @error('hiv') is-invalid @enderror" id="hiv" name="hiv">
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                        </select>
                            @if($errors->has('hiv'))
                                <span class="text-danger">{{ $errors->first('hiv')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="file" class="col-md-4 col-form-label text-md-end text-start"></label>
                        <div class="col-md-6">
                          <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" value="{{ old('file') }}">
                            @if($errors->has('file'))
                                <span class="text-danger">{{ $errors->first('file') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-6 offset-md-4">
                            <input type="submit" class="btn btn-primary" style="background-color: #e24ab4" value="Adicionar Doadora">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

