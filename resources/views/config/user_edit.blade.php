@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="/css/user.css">
@endsection

@section('title' , 'Adicionar')

@section('content')

<form action="/edit/save/" method="post" id="addnew" >
@csrf
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="avatar rounded-circle bg-light" style="background: url({{$user->avatar_url}});"></div>
        </div>
        <div class="col-6">
            <input type="text" name="first_name" id="">
        </div>
        <div class="col-6">
            <input type="text" name="first_name" id="">
        </div>

        <div class="col-12 d-flex justify-content-between align-items-center mb-5" id="actions">
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


@section("afterFooter")

@endsection
