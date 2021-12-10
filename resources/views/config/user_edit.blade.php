@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="/css/create.css">
<link rel="stylesheet" href="/css/customInputs.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
@endsection

@section('title' , 'Adicionar')

@section('content')

<form action="/edit/save/{{ $preg->id }}" method="post" id="addnew" >
@csrf
<div class="container">
    <div class="row">

        <div class="col-12 d-flex justify-content-between align-items-center mb-5" id="actions">
            <div class="col-6">
                <a class="btn btn-outline-danger rounded-pill d-inline-flex justify-content-between align-items-center" href="/" onClick="return confirm('Deseja realmente cancelar a edição?')">
                    CANCELAR <i data-feather="x-circle" class="ms-2"></i>
                </a>
            </div>
            <div class="col-2 text-end">
                <a class="btn btn-outline-danger rounded-pill d-inline-flex justify-content-between align-items-center" href="">
                    EXCLUIR <i data-feather="trash" class="ms-2"></i>
                </a>
            </div>
            <div class="col-2 text-end invisible">

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
