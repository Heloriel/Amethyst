@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="css/manager.css">
@endsection

@section('title' , 'Início')

@section('content')
<div class="container-fluid">

  <div class="input-group mb-3">
    <input type="text" class="form-control rounded-pill" placeholder="Procurar..." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div>

<table class="table align-middle table-hover table-sm table-responsive">
    <thead>
      <tr>
        <th scope="col">Situação</th>
        <th scope="col">Portal</th>
        <th scope="col">UASG</th>
        <th scope="col">Pregão</th>
        <th scope="col">Data / Hora</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($fetch as $fetch_result)
    <tr class="@if(date('d/m/Y', strtotime($fetch_result->date)) == $today_date && date('H:i', strtotime($fetch_result->time)) <= $time_now ) table-danger @endif">
        <th scope="row">
            <span class="badge ms-2 p-2 rounded-circle" title="{{ $status[$fetch_result->status][0] }}" style="background-color: {{ $status[$fetch_result->status][1] }};">
                <span class="visually-hidden">{{ $status[$fetch_result->status][0] }}</span>
            </span>
        </th>
      <td>{{ $portal[$fetch_result->portal][0] }}</td>
      <td>{{ $fetch_result->uasg }}</td>
      <td>{{ $fetch_result->preg }}</td>
      <td>{{ date('d/m/Y', strtotime($fetch_result->date)) }} - {{ date('H:i', strtotime($fetch_result->time)) }}</td>
      <td id="actions">
          <a href="/manager/edit/{{ $fetch_result->id }}" class="link-dark me-3"><ion-icon name="create-outline"></ion-icon></a>
          <a href="#" class="link-primary me-3"><ion-icon name="eye-outline" title=></ion-icon></a>
          <a href="#" class="link-secondary me-3"><ion-icon name="open-outline" title=></ion-icon></a>
          <a href="/manager/delete/{{ $fetch_result->id }}" class="link-danger me-3" onClick="return confirm('Deseja realmente deletar o pregão {{ $fetch_result->preg }} ?')"><ion-icon name="trash-outline"></ion-icon></a>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection

@section('afterFooter')

@endsection
