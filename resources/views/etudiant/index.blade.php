@extends('layouts.menu')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('etudiant.create') }}"> Create New Etudiant</a>
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
            <th></th>
            <th>Name</th>
            <th>email</th>
            <th>tel</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($etudiants as $etudiant)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $etudiant->name }}</td>
            <td>{{ $etudiant->user->email }}</td>
            <td>{{ $etudiant->tel }}</td>
            <td>
                <form action="{{ route('etudiant.destroy',$etudiant->id) }}" method="POST">
   
                 <!--   <a class="btn btn-info" href="{{ route('etudiant.show',$etudiant->id) }}">Show</a>
    -->
                    <a class="btn btn-primary" href="{{ route('etudiant.edit',$etudiant->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $etudiants->links() !!}
      
@endsection