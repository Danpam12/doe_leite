@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-1 m-2 md:m-8">
            <div class="card-header" style="background-color: #e24ab4">
                <div class="float-start" style=" color: white" >
                    Informações do Perfil
                </div>
                <div class="float-end" >
                    <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm" style="background-color: white; color: black">&larr; Voltar</a>
                </div>
            </div>
            <div class="card-body bg-pink-200">

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Nome:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $role->name }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="roles" class="col-md-4 col-form-label text-md-end text-start" ><strong>Permissões:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;" >
                            @if ($role->name=='Super Admin')
                                <span class="badge bg-primary" >All</span>
                            @else
                                @forelse ($rolePermissions as $permission)
                                    <span class="badge bg-primary" >{{ $permission->name }}</span>
                                @empty
                                @endforelse
                            @endif
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
