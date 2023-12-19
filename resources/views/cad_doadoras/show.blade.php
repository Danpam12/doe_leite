@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card p-1 m-2 md:m-8">
            <div class="card-header" style="background-color: #e24ab4">
                <div class="float-start" style="color:white">
                    Informações da Doadora
                </div>
                <div class="float-end">
                    <a href="{{ route('cad_doadoras.index') }}" class="btn btn-primary btn-sm" style="background-color: white; color: black">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body bg-pink-200">
                
                <div class="row">
                    <label for="nome" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Nome:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $cad_doadora->nome }}
                    </div>
                </div>

                <div class="row">
                    <label for="data_nasc" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Nascimento:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $cad_doadora->data_nasc }}
                    </div>
                </div>

                <div class="row">
                    <label for="endereco" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Endereço:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $cad_doadora->endereco }}
                    </div>
                </div>

                <div class="row">
                    <label for="fone" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Fone:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $cad_doadora->fone }}
                    </div>
                </div>

                <div class="row">
                    <label for="email" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Email:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $cad_doadora->email }}
                    </div>
                </div>

                <div class="row">
                    <label for="pre_nat" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Pré-natal:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $cad_doadora->pre_nat}}
                    </div>
                </div>

                <div class="row">
                    <label for="data_parto" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Data do Parto:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $cad_doadora->data_parto }}
                    </div>
                </div>

                <div class="row">
                    <label for="tabagismo" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Tabagismo:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $cad_doadora->tabagismo }}
                    </div>
                </div>

                <div class="row">
                    <label for="etilismo" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Etilismo:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $cad_doadora->etilismo }}
                    </div>
                </div>

                <div class="row">
                    <label for="drogas" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Drogas:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $cad_doadora->drogas }}
                    </div>
                </div>

                <div class="row">
                    <label for="vdrl" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Vdrl:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $cad_doadora->vdrl }}
                    </div>
                </div>

                <div class="row">
                    <label for="hbsag" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Hbsag:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $cad_doadora->hbsag }}
                    </div>
                </div>

                <div class="row">
                    <label for="hiv" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Hiv:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                        {{ $cad_doadora->hiv }}
                    </div>
                </div>

                <div class="row">
                        <label for="file" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Aquivo:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;color: #e24ab4">

                        <textarea name="file" id="file" type="file" class="form-control @error('file') is-invalid @enderror"style="color: #e24ab4">{{$cad_doadora->file}}</textarea>


                        </div>
                    </div>

                <!-- Adicionar mais campos conforme necessário -->

            </div>
        </div>
    </div>
</div>
@endsection
