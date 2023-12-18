@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-1 m-2 md:m-8">
            <div class="card-header" style="background-color: #e24ab4">
                <div class="float-start" style="color: white">
                    Informações do Usuário
                </div>
                <div class="float-end">
                    <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm" style="background-color: white; color: black">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body bg-pink-200">

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Nome:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;color: #e24ab4"> 
                            {{ $user->name }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                            {{ $user->email }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="roles" class="col-md-4 col-form-label text-md-end text-start"style="color: #e24ab4"><strong>Perfil:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;color: #e24ab4">
                            @forelse ($user->getRoleNames() as $role)
                                <span class="badge bg-white" style="color: #e24ab4">{{ $role }}</span>
                            @empty
                            @endforelse
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
</div>
@endsection
