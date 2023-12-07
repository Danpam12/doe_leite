@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<div class="card p-1 m-2 md:m-8" >
<div class="card-header text-white rounded-xl" style="background-color: #e24ab4">Lista de Usuários</div>
    <div class="card-body rounded-xl ">

            @can('create-user')
                <a href="{{ route('users.create') }}" class="btn btn-success btn-xl font-semibold text-slate-900" style="background-color: #e24ab4"><i class="bi bi-plus-circle"></i> Adicionar novo Usuário</a>
            @endcan

            <table class="table table-striped table-bordered border-separate border border-slate-500 rounded-xl md:table-auto">
                <thead class="table-white" style="color: #e24ab4">
                    <tr>
                        <th scope="col" class="border border-slate-600 rounded-xl">ID</th>
                        <th scope="col" class="border border-slate-600 rounded-xl">Nome</th>
                        <th scope="col" class="border border-slate-600 rounded-xl">Email</th>
                        <th scope="col" class="border border-slate-600 rounded-xl">Perfis</th>
                        <th scope="col" class="border border-slate-600 rounded-xl">Ação</th>
                    </tr>
                </thead>
            <tbody>
                @forelse ($users as $user)
                <tr class="border border-slate-600 rounded-xl">
                    <th scope="row" class="border border-slate-700 rounded-xl">{{ $loop->iteration }}</th>
                    <td class="border border-slate-700 rounded-xl">{{ $user->name }}</td>
                    <td class="border border-slate-700 rounded-xl">{{ $user->email }}</td>
                    <td class="border border-slate-700 rounded-xl">
                        @forelse ($user->getRoleNames() as $role)
                            <span class="badge bg-primary rounded-xl">{{ $role }}</span>
                        @empty
                        @endforelse
                    </td>
                    <td class="border border-slate-700 rounded-xl">
                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-xl rounded-xl p-1 m-1"><i class="bi bi-eye"></i> Mostrar</a>

                            @if (in_array('Super Admin', $user->getRoleNames()->toArray() ?? []) )
                                @if (Auth::user()->hasRole('Super Admin'))
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-xl rounded-xl p-1 m-1"><i class="bi bi-pencil-square"></i> Editar</a>
                                @endif
                            @else
                                @can('edit-user')
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-xl rounded-xl p-1 m-1"><i class="bi bi-pencil-square"></i> Editar</a>
                                @endcan

                                @can('delete-user')
                                    @if (Auth::user()->id!=$user->id)
                                        <button type="submit" class="btn btn-danger btn-xl rounded-xl p-1 m-1" onclick="return confirm('Está certo que quer deletar o Usuário?');"><i class="bi bi-trash rounded-xl"></i> Excluir</button>
                                    @endif
                                @endcan
                            @endif

                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="5" class="border border-slate-600 rounded-xl">
                        <span class="text-danger">
                            <strong>Usuário Não Encontrado!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $users->links() }}

    </div>
</div>

@endsection
