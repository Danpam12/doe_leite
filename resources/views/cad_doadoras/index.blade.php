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
<div class="card-header  text-white rounded-xl" style="background-color: #e24ab4">Lista de Doadoras</div>
    <div class="card-body rounded-xl">
        @can('create-cad-doadora')
            <a href="{{ route('cad_doadoras.create') }}" class="btn btn-success btn-lx my-2 font-semibold text-slate-900" style="background-color: #e24ab4"><i class="bi bi-plus-circle"></i> Adicionar nova doadora</a>

        @endcan

        <table class="table table-striped table-bordered table-auto border-separate border border-slate-500 rounded-xl md:table-auto carousel flex-wrap divide-y divide-gray-300 w-full">
            <thead>

                <tr class="border border-slate-600 rounded-xl"  >
                    <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">ID</th>
                    <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Nome</th>
                    <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Nascimento</th>
                    <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Fone</th>
                    <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Email</th>
                    <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Arquivos</th>
                    <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cad_doadoras as $cad_doadora)

                    <tr class="border border-slate-600 rounded-xl">

                        <th scope="row" class="border border-slate-700 rounded-xl"style="color: #e24ab4">{{ $cad_doadora->id }}</th>
                        <td class="border border-slate-700 rounded-xl"style="color: #e24ab4">{{ $cad_doadora->nome }}</td>
                        <td class="border border-slate-700 rounded-xl"style="color: #e24ab4">{{ $cad_doadora->data_nasc }}</td>
                        <td class="border border-slate-700 rounded-xl"style="color: #e24ab4">{{ $cad_doadora->fone }}</td>
                        <td class="border border-slate-700 rounded-xl"style="color: #e24ab4">{{ $cad_doadora->email }}</td>
                        <td class="border border-slate-700 rounded-xl"style="color: #e24ab4">{{ $cad_doadora->file }}</td>
                        <td class="border border-slate-700 rounded-xl"style="color: #e24ab4">


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

