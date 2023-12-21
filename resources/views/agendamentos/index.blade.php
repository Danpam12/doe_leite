@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
<style>
    @media (max-width: 767px) {
        .carousel {
            display: flex;
            overflow-x: scroll;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            margin-bottom: 1rem;
        }

        .carousel-item {
            flex: 0 0 auto;
            width: 100%;
            scroll-snap-align: start;
       }
    }
</style>
<div class="card p-1 m-2 md:m-8">
               <div class="card-header  text-white rounded-xl" style="background-color: #e24ab4">Lista de Agendamentos</div>
            <div class="card-body rounded-xl">
                @can('create-agendamento')
                    <a href="{{ route('agendamentos.create') }}" class="btn btn-success btn-lx my-2 font-semibold text-slate-900" style="background-color: #e24ab4"><i class="bi bi-plus-circle"></i> Adicionar novo agendamento</a>
                @endcan
                <table class="table table-striped table-bordered border-separate border border-slate-500 rounded-xl md:table-auto carousel flex-wrap divide-y divide-gray-300 w-full"style="color: #e24ab4">
                <thead class="table-white" style="color: #e24ab4">
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
                                <td class="border border-slate-700 rounded-xl"style="color: #e24ab4">{{ $agendamento->pontoColeta->nome }} </td>
                                <td class="border border-slate-700 rounded-xl"style="color: #e24ab4">{{ $agendamento->data }}</td>
                                <td class="border border-slate-700 rounded-xl"style="color: #e24ab4">{{ $agendamento->hora }}</td>
                                <td class="border border-slate-700 rounded-xl"style="color: #e24ab4">{{ $agendamento->tipo_coleta }}</td>
                                <td class="border border-slate-700 rounded-xl"style="color: #e24ab4">{{ $agendamento->nome }}</td>
                                <!--<td>{{ $agendamento->cpf }}</td>
                                <td>{{ $agendamento->telefone }}</td>
                                <td>{{ $agendamento->email }}</td>
                                <td>{{ $agendamento->endereco }}</td>-->
                                @can('create-role')
                                    <td class="border border-slate-700 rounded-xl"style="color: #e24ab4">{{ <p>{{ $agendamento->quantidade}} ml</p></td>
                                @endcan
                                <td class="border border-slate-700 rounded-xl"style="color: #e24ab4">{{ $agendamento->status}}</td>
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
