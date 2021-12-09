@extends('layouts.main')

@section('css')

@endsection

@section('title', 'Usuários')

@section('content')
    <form action="/config/status/save" method="post">
        @csrf
        <div class="container">
            <div class="row">
                @if (is_null($users))
                    <center>
                        <h4>Nenhuma situação cadastrada, clique no "+" para adicionar uma nova situação!</h4>
                        <br />
                    </center>
                @else
                    <table class="table align-middle table-hover table-sm table-responsive mt-2">
                        <thead>
                            <tr>
                                <th scope="col">Avatar</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-Mail</th>
                                <th scope="col">Função</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">
                                        <img src="{{ $user->avatar_url }}" alt="" width="32" height="32" class="rounded-circle me-2 user-avatar">
                                    </th>
                                    <td>{{ $user->name }} @if ($user->primary)<span class="badge bg-secondary rounded-pill small">P</span>@endif</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $ranks[$user->rank] }}</td>
                                    <td id="actions" class="d-flex align-items-center">
                                        <a href="#" class="link-primary me-3" title="Ver"><i data-feather="eye"></i></a>
                                        <a href="/edit/" class="link-dark me-3" title="Editar"><i data-feather="edit"></i></a>
                                        @if( !$user->primary )<a href="/delete/" class="link-danger me-3" title="Excluir" onClick="return confirm('Deseja realmente deletar o registro?')"><i data-feather="trash"></i></a> @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                <div class="col-12 mb-3 d-flex justify-content-center">
                    <a href="/config/status/create" class="btn btn-outline-dark rounded-circle p-1" id="add-status-btn"><i data-feather="plus"></i></a>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('afterFooter')

@endsection
