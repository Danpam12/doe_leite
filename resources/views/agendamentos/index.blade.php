@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<div class="card p-1 m-2 md:m-8">
    <div class="card-header rounded-xl">Lista de Agendamentos</div>
    <div class="card-body rounded-xl">
        @can('create-agendamento')
            <a href="{{ route('agendamentos.create') }}" class="btn btn-success btn-xl my-2 font-semibold text-slate-900"><i class="bi bi-plus-circle"></i> Adicionar novo agendamento</a>
        @endcan
        <table class="table table-striped table-bordered border-separate border border-slate-500 rounded-xl md:table-auto">
            <thead class="table-white">
                <tr>
                    <th scope="col" class="border border-slate-600 rounded-xl">S#</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Ponto de Coleta</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Data</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Hora</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Tipo de Coleta</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Nome</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">CPF</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Telefone</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Email</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Endereço</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($agendamentos as $agendamento)
                    <tr class="border border-slate-600 rounded-xl">
                        <th scope="row" class="border border-slate-700 rounded-xl">{{ $loop->iteration }}</th>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->ponto_coleta_id }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->data }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->hora }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->tipo_coleta }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->nome }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->cpf }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->telefone }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->email }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->endereco }}</td>
                        <td class="border border-slate-700 rounded-xl">
                            <form action="{{ route('agendamentos.destroy', $agendamento->id) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('agendamentos.show', $agendamento->id) }}" class="btn btn-warning btn-xl rounded-xl p-1 m-1"><i class="bi bi-eye"></i> Mostrar</a>

                                @can('edit-agendamento')
                                    <a href="{{ route('agendamentos.edit', $agendamento->id) }}" class="btn btn-primary btn-xl rounded-xl p-1 m-1"><i class="bi bi-pencil-square"></i> Editar</a>
                                @endcan

                                @can('delete-agendamento')
                                    <button type="submit" class="btn btn-danger btn-xl rounded-xl p-1 m-1" onclick="return confirm('Deseja excluir este agendamento?');"><i class="bi bi-trash"></i> Excluir</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                @empty
                    <td colspan="10" class="border border-slate-600 rounded-xl">
                        <span class="text-danger">
                            <strong>Nenhum agendamento encontrado!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $agendamentos->links() }}
    </div>
</div>
@endsection
