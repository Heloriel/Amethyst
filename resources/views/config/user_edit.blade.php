@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="/css/user.css">
@endsection

@section('title', 'Adicionar')

@section('content')

    <form action="/edit/save/" method="post" id="addnew">
        @csrf
        <div class="container">
            <div class="row my-5">
                <div class="col-12">
                    <div class="avatar rounded-circle bg-light m-auto" style="background: url({{ $user->avatar_url }});"></div>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-3">
                    <div class="form-floating">
                        <input class="form-control" placeholder="Nome" type="text" name="first_name" id="firstname">
                        <label for="firstname">Nome</label>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="form-floating">
                        <input class="form-control" placeholder="Sobrenome" type="text" name="last_name" id="lastname">
                        <label for="lastname">Sobrenome</label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-6">
                    <input class="form-control" type="text" name="last_name" id="">
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-3">
                    <div class="input-group">
                        <span class="input-group-text">@</span>
                        <input class="form-control " type="text" name="last_name" id="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <select name="" id="" class="form-select">
                        <option value="1">Admin</option>
                        <option value="2">Op</option>
                        <option value="3">Reader</option>
                    </select>
                </div>
            </div>

            <div class="row align-items-baseline">
                <div class="col-12 d-flex justify-content-between align-items-center mt-5" id="actions">
                    <div class="col-8">
                        <a href="/config/user/list" class="btn btn-outline-danger rounded-pill d-inline-flex justify-content-between align-items-center" onClick="return confirm('Deseja realmente cancelar a edição?')">
                            CANCELAR <i data-feather="x-circle" class="ms-2"></i>
                        </a>
                    </div>
                    <div class="col-2 text-end">
                        <a class="btn btn-outline-danger rounded-pill d-inline-flex justify-content-between align-items-center" href="">
                            EXCLUIR <i data-feather="trash" class="ms-2"></i>
                        </a>
                    </div>
                    <div class="col-2 text-end">
                        <button class="btn btn-outline-success rounded-pill d-inline-flex justify-content-between align-items-center">
                            SALVAR <i data-feather="check-circle" class="ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection


@section('afterFooter')

@endsection
