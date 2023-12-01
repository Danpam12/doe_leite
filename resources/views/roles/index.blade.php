@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card text-white" style="background-color: #e24ab4">Lista de Perfis</div>
    <div class="card-body">
        @can('create-role')
            <a href="{{ route('roles.create') }}" class="btn btn-success btn-sm my-2" style="background-color: #e24ab4"><i class="bi bi-plus-circle"></i> Adicionar novo Perfil</a>
        @endcan
         <table class="table table-hover">

    <thead>    
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col" style="width: 250px;">Ações</th>
        </tr>
    </thead>
            <tbody>
                @forelse ($roles as $role)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $role->name }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('roles.show', $role->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Mostrar</a>
                                @if ($role->name != 'Super Admin')
                                    @can('edit-role')
                                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</a>
                                    @endcan
                                    @can('delete-role')
                                        @if ($role->name != Auth::user()->hasRole($role->name))
                                            <form action="{{ route('roles.destroy', $role->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this role?');"><i class="bi bi-trash"></i> Excluir</button>
                                            </form>
                                        @endif
                                    @endcan
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            <div class="alert alert-danger" role="alert">
                                <strong>Nenhum Perfil Encontrado!</strong>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $roles->links() }}

    </div>
</div>
@endsection
