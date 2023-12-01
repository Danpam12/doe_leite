@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card text-white" style="background-color: #e24ab4">Lista de Doadoras</div>
    <div class="card-body">
        @can('create-cad-doadora')
            <a href="{{ route('cad_doadoras.create') }}" class="btn btn-success btn-sm my-2"style="background-color: #e24ab4"><i class="bi bi-plus-circle"></i> Adicionar nova doadora</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    
                    <th scope="col">Nome</th>
                    <th scope="col">Fone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cad_doadoras as $cad_doadora)
                    <tr>
                        <!--<th scope="row">{{ $loop->iteration }}</th>-->
                        <td>{{ $cad_doadora->nome }}</td>
                        <td>{{ $cad_doadora->fone }}</td>
                        <td>{{ $cad_doadora->email }}</td>
                        
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

