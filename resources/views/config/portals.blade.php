@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="/css/configPortals.css">
@endsection

@section('title', 'Situações')

@section('content')
<form action="/config/portal/save" method="post">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                @foreach ($portal as $portals)
                    <div class="input-group mb-2 d-flex align-items-center" id="portalContainer">
                        <input type="text" name="name" id="name-{{$portals->id}}" value="{{ $portals->name }}" aria-label="Nome" placeholder="NOME" class="form-control">
                        <input type="text" name="base_url" id="url-{{$portals->id}}" value="{{ $portals->base_url }}" aria-label="Url" placeholder="URL" class="form-control">
                        <a href="/config/portal/delete/{{$portals->id}}" class="btn btn-danger p-0" type="button" style="padding: 5px !important;"><i data-feather="x"></i></a>
                    </div>
                @endforeach
            </div>

            <div class="col-12 mb-3 d-flex justify-content-center">
                <a href="/config/portal/create" class="btn btn-outline-dark rounded-circle p-1" id="add-portal-btn"><i data-feather="plus"></i></a>
            </div>
            <div class="col-6 d-flex justify-content-start my-5">
                <a class="btn btn-outline-danger rounded-pill d-inline-flex justify-content-between align-items-center"
                    href="/config/portal" onClick="return confirm('Deseja realmente cancelar a edição?')">
                    CANCELAR <i data-feather="x-circle" class="ms-2"></i>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-end my-5">
                <button class="btn btn-outline-success rounded-pill" id="save">
                    SALVAR <i data-feather="check-circle" class="ms-2"></i>
                </button>
            </div>
        </div>
    </div>
    <input type="hidden" name="portalJson" id="portalJson" value="{{ $portal_json }}">
</form>
@endsection

@section('afterFooter')
<script src="/js/configPortals.js"></script>
@endsection
