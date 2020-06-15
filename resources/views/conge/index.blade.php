@extends('layouts.menu')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste Des Demande de Congés</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Raison</th>
            <th>Prof</th>
            <th>Début</th>
            <th>Fin</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($conges as $conge)
        <tr>
            <td>{{ $conge->raison }}</td>
            <td>{{ $conge->id_prof }}</td>
            <td>{{ $conge->start }}</td>
            <td>{{ $conge->end }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('conge.approuve', ['id' => $conge->id]) }}">Approuve</a>                
            </td>
        </tr>
        @endforeach
    </table>      
@endsection