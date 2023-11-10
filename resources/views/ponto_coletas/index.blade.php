@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Ponto List</div>
    <div class="card-body">
        @can('create-ponto-coleta')
            <a href="{{ route('ponto_coletas.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Ponto</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">S#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Fone</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ponto_coletas as $ponto_coleta)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $ponto_coleta->nome }}</td>
                    <td>{{ $ponto_coleta->email }}</td>
                    <td>{{ $ponto_coleta->fone }}</td>
                    <td>{{ $ponto_coleta->enderco }}</td>
                    <td>
                        <form action="{{ route('ponto_coletas.destroy', $ponto_coleta->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('ponto_coletas.show', $ponto_coleta->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                            @can('edit-ponto-coleta')
                                <a href="{{ route('ponto_coletas.edit', $ponto_coleta->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                            @endcan

                            @can('delete-ponto-coleta')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');"><i class="bi bi-trash"></i> Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="4">
                        <span class="text-danger">
                            <strong>No ponto coleta Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $ponto_coletas->links() }}

    </div>
</div>
@endsection
