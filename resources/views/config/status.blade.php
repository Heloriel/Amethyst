@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="/css/configStatus.css">
@endsection

@section('title' , 'Situações')

@section('content')

<form action="/create/save" method="post" id="addnew" >
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">

                <div class="input-group">
                    <input type="text" aria-label="Nome" placeholder="NOME" class="form-control">
                    <input type="color" class="form-control form-control-color" id="" value="#000" title="Escolha a Cor" style="max-width: 50px">
                </div>

            </div>

            <div class="col-12 mb-3 d-flex justify-content-center">
                <button class="btn btn-outline-dark rounded-circle" id="add-status-btn"><ion-icon name="add-outline" ></ion-icon></button>
            </div>

            <div class="col-12 d-flex justify-content-end my-5">
                <button class="btn btn-outline-success rounded-pill"><ion-icon name="checkmark-outline" id="save-btn-icon"></ion-icon> SALVAR</button>
            </div>
        </div>
    </div>
    </form>
@endsection

@section("afterFooter")

@endsection
