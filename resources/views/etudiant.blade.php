@extends('layout')
@section('content')

<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des Etudiants</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('etudiant.create')}}">Create New Student</a>
        </div>
    </div>
</div>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Classe</th> <!-- Ajout de l'en-tête 'Classe' -->
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($liste as $value)
            <tr>
                <td>{{$loop->index}}</td>
                <td>{{$value->nom}}</td>
                <td>{{$value->prenom}}</td>
                <td>{{ $value->classes->libelle}}</td> 
                <td>
                <form action="{{ route('etudiant.delete', $value->id) }}" method="post">
                    <a class="btn btn-info" href="{{ route('etudiant.show',$value->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{ route('etudiant.edit', $value->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="_method" value="delete">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Etes vous sur de vouloir effectuer cette operation');" >Delete</button>
                   </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
