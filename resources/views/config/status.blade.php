@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="/css/configStatus.css">
@endsection

@section('title', 'Situações')

@section('content')
<form action="/config/status/save" method="post">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                @foreach ($status as $statuses)
                    <div class="input-group mb-2 d-flex align-items-center">
                        <input type="hidden" name="status[]" value="{{ $statuses->id }}">
                        <input type="text" name="status[]" aria-label="Nome" placeholder="NOME" class="form-control" value="{{ $statuses->name }}">
                        <input type="color" name="status[]" class="form-control form-control-color" id="" value="{{ $statuses->color }}" title="Escolha a Cor" style="max-width: 50px">
                            <a href="#" class="link-danger p-0 ms-2" id="add-status-btn"><i data-feather="x"></i></a>
                    </div>
                @endforeach
            </div>

            <div id="statusContainer" class="">

            </div>

            <div class="col-12 mb-3 d-flex justify-content-center">
                <button class="btn btn-outline-dark rounded-circle p-1" id="add-status-btn"><i
                        data-feather="plus"></i></button>
            </div>
            <div class="col-6 d-flex justify-content-start my-5">
                <a class="btn btn-outline-danger rounded-pill d-inline-flex justify-content-between align-items-center"
                    href="/list" onClick="return confirm('Deseja realmente cancelar a edição?')">
                    REINICIAR <i data-feather="refresh-cw" class="ms-2"></i>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-end my-5">
                <button class="btn btn-outline-success rounded-pill">
                    SALVAR <i data-feather="check-circle" class="ms-2"></i></button>
            </div>
        </div>
    </div>
</form>
@endsection

@section('afterFooter')

@endsection
