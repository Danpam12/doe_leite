@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="card">
            <div class="card-header">Lista de Agendamentos</div>
            <div class="card-body">
                @can('create-agendamento')
                    <a href="{{ route('agendamentos.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Adicionar novo agendamento</a>
                @endcan
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <!--<th scope="col">S#</th>-->
                            <th scope="col">Ponto de Coleta</th>
                            <th scope="col">Data</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Tipo de Coleta</th>
                            <th scope="col">Nome</th>
                            <!--<th scope="col">CPF</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Endereço</th>-->
                            @can('create-role')
                                <th scope="col">Quantidade</th>
                            @endcan
                            <th scope="col">Status</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($agendamentos as $agendamento)
                            <tr>
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
                            <td colspan="13">
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
