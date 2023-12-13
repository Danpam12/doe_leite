@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<div class="card p-1 m-2 md:m-8">
    <div class="card-header  text-white rounded-xl" style="background-color: #e24ab4">Lista de Perfis</div>
    <div class="card-body rounded-xl">

        @can('create-role')
            <a href="{{ route('roles.create') }}" class="btn btn-success btn-sm my-2 font-semibold text-slate-900" style="background-color: #e24ab4"><i class="bi bi-plus-circle"></i> Adicionar novo Perfil</a>
        @endcan

        <table class="table table-striped table-bordered border-separate border border-slate-500 rounded-xl md:table-auto ">
    <thead class="table-white" style="color: #e24ab4">

        <tr>
            <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">ID</th>
            <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Nome</th>
            <th scope="col" class="border border-slate-600 rounded-xl" style="color: #e24ab4" style="width: 255px;">Ações</th>
        </tr>
    </thead>
            <tbody>
                @forelse ($roles as $role)
                    <tr>
                        <th scope="row" class="border border-slate-700 rounded-xl" style="color: #e24ab4">{{ $loop->iteration }}</th>
                        <td class="border border-slate-700 rounded-xl" style="color: #e24ab4">{{ $role->name }}</td>
                        <td class="border border-slate-700 rounded-xl" style="color: #e24ab4">
                            <div class="btn-group" role="group">
                                @can('show-role')
                                <a href="{{ route('roles.show', $role->id) }}" class="btn btn-warning btn-xl rounded-xl p-1 m-1"><i class="bi bi-eye"></i> Mostrar</a>
                                @endcan
                                @if ($role->name != 'Super Admin')
                                    @can('edit-role')
                                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-xl rounded-xl p-1 m-1"><i class="bi bi-pencil-square"></i> Editar</a>
                                    @endcan
                                    @can('delete-role')
                                        @if ($role->name != Auth::user()->hasRole($role->name))
                                            <form action="{{ route('roles.destroy', $role->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-xl rounded-xl p-1 m-1" onclick="return confirm('Do you want to delete this role?');"><i class="bi bi-trash"></i> Excluir</button>
                                            </form>
                                        @endif
                                    @endcan
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="border border-slate-600 rounded-xl">
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
