@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card p-1 m-2 md:m-8">
            <div class="card-header" style="background-color: #e24ab4">
                <div class="float-start" style="color:white">
                    Editar Nova Doadora
                </div>
                <div class="float-end">
                    <a href="{{ route('cad_doadoras.index') }}" class="btn btn-primary btn-sm" style="background-color: white; color: black">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body bg-pink-200">

                <form action="{{ route('cad_doadoras.update', $cad_doadora->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="nome" class="col-md-4 col-form-label text-md-end text-start">Nome</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ $cad_doadora->nome }}">
                            @error('nome')
                                <span class="text-danger">{{ 'nome' }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="data_nasc" class="col-md-4 col-form-label text-md-end text-start">Nascimento</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('data_nasc') is-invalid @enderror" id="data_nasc" name="data_nasc" value="{{ $cad_doadora->data_nasc }}">
                            @error('data_nasc')
                                <span class="text-danger">{{ 'data_nasc' }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-end text-start">Endereço</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{ $cad_doadora->endereco }}">
                            @error('endereco')
                                <span class="text-danger">{{ $errors->first('endereco') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="fone" class="col-md-4 col-form-label text-md-end text-start">Fone</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('fone') is-invalid @enderror" id="fone" name="fone" value="{{ $cad_doadora->fone }}">
                            @error('fone')
                                <span class="text-danger">{{ $fone }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $cad_doadora->email }}">
                            @error('email')
                                <span class="text-danger">{{ $email }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="pre_nat" class="col-md-4 col-form-label text-md-end text-start">Pré-natal</label>
                        <div class="col-md-6">
                            <select class="form-control @error('pre_nat') is-invalid @enderror" id="pre_nat" name="pre_nat">
                                <option value="sim" {{ $cad_doadora->pre_nat == 'sim' ? 'selected' : '' }}>Sim</option>
                                <option value="nao"{{ $cad_doadora->pre_nat == 'nao' ? 'selected' : '' }}>Não</option>
                            </select>
                            @error('pre_nat')
                                <span class="text-danger">{{ $pre_nat }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="data_parto" class="col-md-4 col-form-label text-md-end text-start">Data do Parto</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('data_parto') is-invalid @enderror" id="data_parto" name="data_parto" value="{{ $cad_doadora->data_parto }}">
                            @error('data_parto')
                                <span class="text-danger">{{ $errors->first('data_parto') }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tabagismo" class="col-md-4 col-form-label text-md-end text-start">Tabagismo</label>
                        <div class="col-md-6">
                        <select class="form-control @error('tabagismo') is-invalid @enderror" id="tabagismo" name="tabagismo">
                                <option value="sim"{{ $cad_doadora->tabagismo == 'sim' ? 'selected' : '' }}>Sim</option>
                                <option value="nao"{{ $cad_doadora->tabagismo == 'nao' ? 'selected' : '' }}>Não</option>
                            </select>
                            @error('tabagismo')
                                <span class="text-danger">{{ $tabagismo}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="etilismo" class="col-md-4 col-form-label text-md-end text-start">Etilismo</label>
                        <div class="col-md-6">
                        <select class="form-control @error('etilismo') is-invalid @enderror" id="etilismo" name="etilismo">
                                <option value="sim"{{ $cad_doadora->etilismo == 'sim' ? 'selected' : '' }}>Sim</option>
                                <option value="nao"{{ $cad_doadora->etilismo == 'nao' ? 'selected' : '' }}>Não</option>
                            </select>
                            @error('etilismo')
                                <span class="text-danger">{{ $etilismo}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="drogas" class="col-md-4 col-form-label text-md-end text-start">Drogas</label>
                        <div class="col-md-6">
                        <select class="form-control @error('drogas') is-invalid @enderror" id="drogas" name="drogas">
                                <option value="sim"{{ $cad_doadora->drogas == 'sim' ? 'selected' : '' }}>Sim</option>
                                <option value="nao"{{ $cad_doadora->drogas == 'nao' ? 'selected' : '' }}>Não</option>
                            </select>
                            @error('drogas')
                                <span class="text-danger">{{ $drogas}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="vdrls" class="col-md-4 col-form-label text-md-end text-start">Vdrls</label>
                        <div class="col-md-6">
                        <select class="form-control @error('vdrls') is-invalid @enderror" id="vdrls" name="vdrls">
                                <option value="sim"{{ $cad_doadora->vdrls == 'sim' ? 'selected' : '' }}>Sim</option>
                                <option value="nao"{{ $cad_doadora->vdrls == 'nao' ? 'selected' : '' }}>Não</option>

                            </select>
                            @error('vdrls')
                                <span class="text-danger">{{ $vdrls}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="hbsag" class="col-md-4 col-form-label text-md-end text-start">Hbsag</label>
                        <div class="col-md-6">
                        <select class="form-control @error('hbsag') is-invalid @enderror" id="hbsag" name="hbsag">
                                <option value="sim"{{ $cad_doadora->hbsag == 'sim' ? 'selected' : '' }}>Sim</option>
                                <option value="nao"{{ $cad_doadora->hbsag == 'nao' ? 'selected' : '' }}>Não</option>
                            </select>
                            @error('hbsag')
                                <span class="text-danger">{{ $hbsag}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="hiv" class="col-md-4 col-form-label text-md-end text-start">Hiv</label>
                        <div class="col-md-6">
                        <select class="form-control @error('hiv') is-invalid @enderror" id="hiv" name="hiv">
                                <option value="sim"{{ $cad_doadora->hiv == 'sim' ? 'selected' : '' }}>Sim</option>
                                <option value="nao"{{ $cad_doadora->hiv == 'nao' ? 'selected' : '' }}>Não</option>

                            </select>
                            @error('hiv')
                                <span class="text-danger">{{ $hiv}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="file" class="col-md-4 col-form-label text-md-end text-start">Arquivos</label>
                        <div class="col-md-6">
                        <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" value="{{ $cad_doadora->file }}">
                        <textarea name="file" id="file" type="file" class="form-control @error('file') is-invalid @enderror">{{$cad_doadora->file}}</textarea>
                            @error('file')
                                <span class="text-danger">{{ $file }}</span>
                            @enderror
                        </div>
                    </div>

                    @can('create-role')
                    <div class="mb-3 row">
                        <label for="status" class="col-md-4 col-form-label text-md-end text-start">Status</label>
                        <div class="col-md-6">
                            <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                                <option value="Pendente" {{ $cad_doadora->status == 'Pendente' ? 'selected' : '' }}>Pendente</option>
                                <option value="Aceito" {{ $cad_doadora->status == 'Aceito' ? 'selected' : '' }}>Aceito</option>
                                <option value="Negado" {{ $cad_doadora->status == 'Negado' ? 'selected' : '' }}>Negado</option>
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    @endcan

                    <div class="mb-3 row">
                        <div class="col-md-6 offset-md-4">
                            <input type="submit" class="btn btn-primary" value="Atualizar Doadora"  style="background-color: #e24ab4">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection


