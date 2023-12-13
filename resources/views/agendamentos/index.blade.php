@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<div class="card p-1 m-2 md:m-8">
               <div class="card-header  text-white rounded-xl" style="background-color: #e24ab4">Lista de Agendamentos</div>
            <div class="card-body rounded-xl">
                @can('create-agendamento')
                    <a href="{{ route('agendamentos.create') }}" class="btn btn-success btn-lx my-2 font-semibold text-slate-900" style="background-color: #e24ab4"><i class="bi bi-plus-circle"></i> Adicionar novo agendamento</a>
                @endcan
                <table class="table table-striped table-bordered border-separate border border-slate-500 rounded-xl md:table-auto">
                    <thead>
                        <tr>
                            <!--<th scope="col">S#</th>-->
                            <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Ponto de Coleta</th>
                            <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Data</th>
                            <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Hora</th>
                            <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Tipo de Coleta</th>
                            <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Nome</th>
                            <!--<th scope="col">CPF</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Endereço</th>-->
                            @can('create-role')
                                <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Quantidade</th>
                            @endcan
                            <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Status</th>
                            <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($agendamentos as $agendamento)
                        <tr class="border border-slate-600 rounded-xl" style="color: #e24ab4">
                                <!--<th scope="row">{{ $loop->iteration }}</th>-->
                                <td>{{ $agendamento->pontoColeta->nome }}</td>
                                <td>{{ $agendamento->data }}</td>
                                <td>{{ $agendamento->hora }}</td>
                                <td>{{ $agendamento->tipo_coleta }}</td>
                                <td>{{ $agendamento->nome }}</td>
                                <!--<td>{{ $agendamento->cpf }}</td>
                                <td>{{ $agendamento->telefone }}</td>
                                <td>{{ $agendamento->email }}</td>
                                <td>{{ $agendamento->endereco }}</td>-->
                                @can('create-role')
                                    <td>{{ $agendamento->quantidade}} <strong>ml</strong></td>
                                @endcan
                                <td>{{ $agendamento->status}}</td>
                                <td>
                                    <form action="{{ route('agendamentos.destroy', $agendamento->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('agendamentos.show', $agendamento->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Mostrar</a>

                                        @can('edit-agendamento')
                                            <a href="{{ route('agendamentos.edit', $agendamento->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</a>
                                        @endcan

                                        @can('delete-agendamento')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir este agendamento?');"><i class="bi bi-trash"></i> Excluir</button>
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
    </div>
</div>
@endsection
