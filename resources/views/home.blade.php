@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h3>{{ __('Login realizado com Sucesso!') }}</h3>

                    <p></p>
                    @canany(['create-role', 'edit-role', 'delete-role'])
                        <a class="btn btn-primary" href="{{ route('roles.index') }}">
                            <i class="bi bi-person-fill-gear"></i> Gerenciar Perfil</a>
                    @endcanany
                    @canany(['create-user', 'edit-user', 'delete-user'])
                        <a class="btn btn-success" href="{{ route('users.index') }}">
                            <i class="bi bi-people"></i> Gerenciar Usuário</a>
                    @endcanany
                    @canany(['create-ponto-coleta', 'edit-ponto-coleta', 'delete-ponto-coleta'])
                        <a class="btn btn-warning" href="{{ route('ponto_coletas.index') }}">
                            <i class="bi bi-bag"></i> Gerenciar Ponto de coleta</a>
                    @endcanany
                    @canany(['create-agendamento', 'edit-agendamento', 'delete-agendamento'])
                        <a class="btn btn-info" href="{{ route('agendamentos.index') }}">
                            <i class="bi bi-bag"></i> Gerenciar Agendamentos</a>
                    @endcanany
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
