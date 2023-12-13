@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<div class="card p-1 m-2 md:m-8">
<div class="card-header  text-white rounded-xl" style="background-color: #e24ab4">Lista de Pontos</div>
    <div class="card-body rounded-xl">

        @can('create-ponto-coleta')
            <a href="{{ route('ponto_coletas.create') }}" class="btn btn-success btn-xl my-2 font-semibold text-slate-900"style="background-color: #e24ab4"><i class="bi bi-plus-circle"></i> Adicionar novo Ponto de Coletar</a>
        @endcan

        <table class="table table-striped table-bordered border-separate border border-slate-500 rounded-xl md:table-auto">
            <thead>

                <tr>
                <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">ID</th>
                <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Nome</th>
                <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Email</th>
                <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Fone</th>
                <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Endereço</th>
                <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ponto_coletas as $ponto_coleta)
                <tr class="border border-slate-600 rounded-xl"style="color: #e24ab4">
                    <th scope="row" class="border border-slate-600 rounded-xl"style="color: #e24ab4">{{ $loop->iteration }}</th>
                    <td class="border border-slate-600 rounded-xl"style="color: #e24ab4">{{ $ponto_coleta->nome }}</td>
                    <td class="border border-slate-600 rounded-xl"style="color: #e24ab4">{{ $ponto_coleta->email }}</td>
                    <td class="border border-slate-600 rounded-xl"style="color: #e24ab4">{{ $ponto_coleta->fone }}</td>
                    <td class="border border-slate-600 rounded-xl"style="color: #e24ab4">{{ $ponto_coleta->endereco }}</td>
                    <td class="border border-slate-600 rounded-xl">
                        <form action="{{ route('ponto_coletas.destroy', $ponto_coleta->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            @can('show-ponto-coleta')
                            <a href="{{ route('ponto_coletas.show', $ponto_coleta->id) }}" class="btn btn-warning btn-xl mb-2 rounded-xl p-1 m-1"><i class="bi bi-eye"></i> Mostrar</a>
                            @endcan
                            @can('edit-ponto-coleta')
                                <a href="{{ route('ponto_coletas.edit', $ponto_coleta->id) }}" class="btn btn-primary btn-xl mb-2 rounded-xl p-1 m-1"><i class="bi bi-pencil-square"></i> Editar</a>
                            @endcan

                            @can('delete-ponto-coleta')
                                <button type="submit" class="btn btn-danger btn-xl mb-2 rounded-xl p-1 m-1" onclick="return confirm('Está certo que quer deletar o Ponto de Coleta?');"><i class="bi bi-trash"></i> Excluir</button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="6" class="border border-slate-600 rounded-xl">
                        <span class="text-danger">
                            <strong>Nenhum Ponto de Coleta foi Encontrado!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $ponto_coletas->links() }}

    </div>
</div>
@endsection
