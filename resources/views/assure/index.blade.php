@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb text-center">
            <div class="pull-left">
                <h2><strong>Liste des Assurés</strong></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('assure.create') }}"><strong>Créer nouvel assuré</strong></a>
            </div>
        </div>
    </div><br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div style="overflow-x:auto;">
        <table class="table table-hover table-bordered" >
                <tr class="text-center" style="background-color: #14680cd2">
                    <th class="text-white">No</th>
                    <th class="text-white">Numéro d'assuré</th>
                    <th class="text-white">Nom</th>
                    <th class="text-white">Prénom</th>
                    <th class="text-white">Date de naissance</th>
                    <th class="text-white">Sexe</th>
                    <th class="text-white">Email</th>
                    <th class="text-white">Adresse</th>
                    <th class="text-white">Crée le</th>
                    <th class="text-white">Mis à jour</th>
                    <th class="text-white" width="280px">Action</th>
            </tr>
            @foreach ($data as $key => $value)
            <tr class="text-center" style="background-color: #1aa90e73">
                <td><strong>{{ $value->id }}</strong></td>
                <td>{{ $value->numero_assure }}</td>
                <td>{{ $value->nom }}</td>
                <td>{{ $value->prenom }}</td>

                <td>{{ $value->date_naissance }}</td>
                <td>{{ $value->sexe }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->commune }},{{ $value->adresse }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
                <td>
                        {{-- <a class="btn btn-info" href="{{ route('assure.show',$value->id) }}">Show</a>
                        <a class="btn btn-info" href="{{ route('beneficiaire',$value->id) }}">Bénéficiaires</a> --}}

                        <form action="{{ route('assure.destroy',$value->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('assure.show',$value->id) }}"><strong>Afficher</strong></a>
                            <a class="btn btn-warning" href="{{ route('beneficiaire',$value->id) }}"><strong>Bénéficiaire</strong></a>
                            <a class="btn btn-primary" href="{{ route('assure.edit',$value->id) }}"><strong>Modifier</strong></a>
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-danger"><strong>Supprimer</strong></button>
                        </form>

                </td>
            </tr>
            @endforeach
        </table>
    </div>
    {!! $data->links() !!}
@endsection
