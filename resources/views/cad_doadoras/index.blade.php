@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Lista de Doadoras</div>
    <div class="card-body">
        @can('create-cad-doadora')
            <a href="{{ route('cad_doadoras.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Adicionar nova doadora</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    
                    <th scope="col">Nome</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Fone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Pré-natal</th>
                    <th scope="col">Data do Parto</th>
                    <th scope="col">Tabagismo</th>
                    <th scope="col">Etilismo</th>
                    <th scope="col">Drogas</th>
                    <th scope="col">Exames</th>
                    <th scope="col">Arquivos</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cad_doadoras as $cad_doadora)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $agendamento->nome }}</td>
                        <td>{{ $agendamento->data_nasc }}</td>
                        <td>{{ $agendamento->endereco }}</td>
                        <td>{{ $agendamento->fone }}</td>
                        <td>{{ $agendamento->email }}</td>
                        <td>{{ $agendamento->pre_nat }}</td>
                        <td>{{ $agendamento->data_parto }}</td>
                        <td>{{ $agendamento->tabagismo }}</td>
                        <td>{{ $agendamento->etilismo }}</td>
                        <td>{{ $agendamento->drogas }}</td>
                        <td>{{ $agendamento->exames }}</td>
                        <td>{{ $agendamento->file }}</td>
                        <td>
                            <form action="{{ route('cad_doadoras.destroy', $cad_doadora->id) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('cad_doadoras.show', $cad_doadora->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Mostrar</a>

                                @can('edit-cad-doadora')
                                    <a href="{{ route('cad_doadoras.edit', $cad_doadora->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</a>
                                @endcan

                                @can('delete-cad-doadora')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir esta doadora?');"><i class="bi bi-trash"></i> Excluir</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                @empty
                    <td colspan="10">
                        <span class="text-danger">
                            <strong>Nenhuma doadora encontrada!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $cad_doadoras->links() }}
    </div>
</div>
@endsection

