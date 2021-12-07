@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="css/list.css">
@endsection

@section('title' , 'Início')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-8">
            <input type="text" class="form-control rounded-pill" placeholder="Procurar..." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div>
        <div class="col-4">
            <select name="statusFilter" id="" class="form-control rounded-pill">
                @foreach ($all_status as $option_status)
                <option value="{{ $option_status->id }}">{{ $option_status->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

<table class="table align-middle table-hover table-sm table-responsive mt-2">
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
            @if (isset($status[$fetch_result->status]))
            <span class="badge ms-2 p-2 rounded-circle" title="{{ $status[$fetch_result->status][0] }}" style="background-color: {{ $status[$fetch_result->status][1] }};">
                <span class="visually-hidden">{{ $status[$fetch_result->status][0] }}</span>
            </span>
            @else
            <span class="badge ms-2 p-2 rounded-circle" title="Sem Status" style="background-color: black;">
                <span class="visually-hidden">Sem Status</span>
            </span>
            @endif
        </th>
      <td>{{ $portal[$fetch_result->portal][0] }}</td>
      <td>{{ $fetch_result->uasg }}</td>
      <td>{{ $fetch_result->preg }}</td>
      <td>{{ date('d/m/Y', strtotime($fetch_result->date)) }} - {{ date('H:i', strtotime($fetch_result->time)) }}</td>
      <td id="actions" class="d-flex align-items-center">
        <a href="#" class="link-primary me-3" title="Ver"><i data-feather="eye"></i></a>
        <a href="/edit/{{ $fetch_result->id }}" class="link-dark me-3" title="Editar"><i data-feather="edit"></i></a>
        <a href="/delete/{{ $fetch_result->id }}" class="link-danger me-3" title="Excluir" onClick="return confirm('Deseja realmente deletar o registro {{ $fetch_result->preg }} ?')"><i data-feather="trash"></i></a>
        @if(!empty($direct_url[$fetch_result->id]))
        <a href="{{ $direct_url[$fetch_result->id] }}" class="link-secondary me-3" title="Abrir Externo" target="_blank"><i data-feather="external-link"></i></a>
        @endif
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection

@section('afterFooter')

@endsection
