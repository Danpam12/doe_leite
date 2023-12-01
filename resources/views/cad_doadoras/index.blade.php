@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<div class="card p-1 m-2 md:m-8">
    <div class="card-header rounded-xl">Lista de Doadoras</div>
    <div class="card-body rounded-xl">
        @can('create-cad-doadora')
            <a href="{{ route('cad_doadoras.create') }}" class="btn btn-success btn-lx my-2 font-semibold text-slate-900"><i class="bi bi-plus-circle"></i> Adicionar nova doadora</a>

        @endcan

        <table class="table table-striped table-bordered table-auto border-separate border border-slate-500 rounded-xl md:table-auto">
            <thead>

                <tr class="border border-slate-600 rounded-xl"  >
                    <th scope="col" class="border border-slate-600 rounded-xl">Nome</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Nascimento</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Endereço</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Fone</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Email</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Pré-natal</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Data do Parto</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Tabagismo</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Etilismo</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Drogas</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Exames</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Arquivos</th>
                    <th scope="col" class="border border-slate-600 rounded-xl">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cad_doadoras as $cad_doadora)

                    <tr class="border border-slate-600 rounded-xl">
                        <th scope="row" class="border border-slate-700 rounded-xl">{{ $loop->iteration }}</th>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->nome }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->data_nasc }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->endereco }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->fone }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->email }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->pre_nat }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->data_parto }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->tabagismo }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->etilismo }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->drogas }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->exames }}</td>
                        <td class="border border-slate-700 rounded-xl">{{ $agendamento->file }}</td>
                        <td class="border border-slate-700 rounded-xl">

                            <form action="{{ route('cad_doadoras.destroy', $cad_doadora->id) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('cad_doadoras.show', $cad_doadora->id) }}" class="btn btn-warning btn-xl rounded-xl p-1 m-1"><i class="bi bi-eye"></i> Mostrar</a>

                                @can('edit-cad-doadora')
                                    <a href="{{ route('cad_doadoras.edit', $cad_doadora->id) }}" class="btn btn-primary btn-xl rounded-xl p-1 m-1"><i class="bi bi-pencil-square"></i> Editar</a>
                                @endcan

                                @can('delete-cad-doadora')
                                    <button type="submit" class="btn btn-danger btn-xl rounded-xl p-1 m-1" onclick="return confirm('Deseja excluir esta doadora?');"><i class="bi bi-trash"></i> Excluir</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                @empty
                    <td colspan="10" class="border border-slate-600 rounded-xl">
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

