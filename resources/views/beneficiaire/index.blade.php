@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb text-center">
            <div class="pull-left">
                <h2><strong> Liste des Bénéficiaires</strong></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('beneficiaire.add',$assu) }}"><strong>Créer nouvel Bénéficiaires</strong></a>
            </div>
        </div>
    </div><br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div style="overflow-x:auto;">
        <table class="table table-bordered">
            <tr style="background-color: #e05e2fd6">
                <th>No</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Crée le</th>
                <th>Mis à jour</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($data as $key => $value)
            <tr style="background-color: #c847184f">
                <td style="background-color: #e05e2fd6"><strong>{{ $value->id }}</strong></td>
                <td>{{ $value->nom }}</td>
                <td>{{ $value->prenom }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>

                <td>
                    <form action="{{ route('beneficiaire.destroy',$value->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('beneficiaire.show',$value->id) }}"><strong>Afficher</strong></a>
                        <a class="btn btn-primary" href="{{ route('beneficiaire.edit',$value->id) }}"><strong>Modifier</strong></a>
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
