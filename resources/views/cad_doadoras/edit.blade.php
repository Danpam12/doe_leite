@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Adicionar Nova Doadora
                </div>
                <div class="float-end">
                    <a href="{{ route('cad_doadoras.index') }}" class="btn btn-primary btn-sm">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('cad_doadoras.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">

                    <div class="mb-3 row">
                        <label for="nome" class="col-md-4 col-form-label text-md-end text-start">Nome</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nome') is-invalid @enderror" id="name" name="name" value="{{ $cad_doadora->nome }}">
                            @if ($errors->has('nome'))
                                <span class="text-danger">{{ $errors->first('nome') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="data_nasc" class="col-md-4 col-form-label text-md-end text-start">Nascimento</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('data_nasc') is-invalid @enderror" id="data_nasc" name="data_nasc" value="{{ $cad_doadora->data_nasc }}">
                            @if ($errors->has('data_nasc'))
                                <span class="text-danger">{{ $errors->first('data_nasc') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-end text-start">Endereço</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error(endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{ $cad_doadora->endereco }}">
                            @if ($errors->has('endereco'))
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
                            @if ($errors->has('data_parto'))
                                <span class="text-danger">{{ $errors->first('data_parto') }}</span>
                            @endif
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
                        <label for="exames" class="col-md-4 col-form-label text-md-end text-start">Exames</label>
                        <div class="col-md-6">
                        <select class="form-control @error('exames') is-invalid @enderror" id="exames" name="exames">
                                <option value="vdrl"{{ $cad_doadora->exames == 'vdrl' ? 'selected' : '' }}>vdrl</option>
                                <option value="hbsag"{{ $cad_doadora->exames == 'hbsag' ? 'selected' : '' }}>hbsag</option>
                                <option value="hiv"{{ $cad_doadora->exames == 'hiv' ? 'selected' : '' }}>hiv</option>
                            </select>
                            @error('exames')
                                <span class="text-danger">{{ $exames}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="file" class="col-md-4 col-form-label text-md-end text-start">Aquivos</label>
                        <div class="col-md-6">
                          <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" value="{{ $cad_doadora->file }}">
                            @if ($errors->has('file'))
                                <span class="text-danger">{{ $files }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-6 offset-md-4">
                            <input type="submit" class="btn btn-primary" value="Adicionar Doadora">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection


