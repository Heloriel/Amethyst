@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="css/manager.css">
@endsection

@section('title' , 'Início')

@section('content')

<div class="container-fluid">


<table class="table align-middle table-hover table-sm table-responsive">
    <thead>
      <tr>
        <th scope="col">Pregão</th>
        <th scope="col">UASG</th>
        <th scope="col">Portal</th>
        <th scope="col">Data / Hora</th>
        <th scope="col">Situação</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1021/2021</th>
        <td>903847</td>
        <td>Comprasnet</td>
        <td>12/11/2021 - 10:30</td>
        <td>
            <span class="badge p-2 bg-success rounded-circle" title="Homologado">
                <span class="visually-hidden">Homologado</span>
            </span>
        </td>
        <td id="actions">
            <button class="btn btn-success btn-sm"><ion-icon name="create-outline"></ion-icon></button>
            <button class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
        </td>
      </tr>
      <tr>
        <th scope="row">01/2019</th>
        <td>321654</td>
        <td>Rede Empresas</td>
        <td>27/11/2021 - 13:00</td>
        <td>
            <span class="badge p-2 bg-danger rounded-circle" title="Encerrado">
                <span class="visually-hidden">Encerrado</span>
            </span>
        </td>
        <td id="actions">
            <button class="btn btn-success btn-sm"><ion-icon name="create-outline"></ion-icon></button>
            <button class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
        </td>
      </tr>
      <tr class="table-danger">
        <th scope="row">132/2022</th>
        <td>789123</td>
        <td>Licitações-e</td>
        <td>{{ $today_date }} - {{ $time_now }}</td>
        <td>
            <span class="badge p-2 bg-secondary rounded-circle" title="Aguardando Disputa">
                <span class="visually-hidden">Aguardando Disputa</span>
            </span>
        </td>
        <td id="actions">
            <button class="btn btn-success btn-sm"><ion-icon name="create-outline"></ion-icon></button>
            <button class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
        </td>
      </tr>
      <tr>
        <th scope="row">132/2022</th>
        <td>789123</td>
        <td>Licitações-e</td>
        <td>10/12/2022 - 10:30</td>
        <td>
            <span class="badge p-2 bg-dark rounded-circle" title="Cancelado">
                <span class="visually-hidden">Cancelado</span>
            </span>
        </td>
        <td id="actions">
            <button class="btn btn-success btn-sm"><ion-icon name="create-outline"></ion-icon></button>
            <button class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

@endsection
