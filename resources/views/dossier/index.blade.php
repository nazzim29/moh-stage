@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb text-center">
            <div class="pull-left">
                <h2> <strong>Liste des dossiers</strong>   </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('dossier.create') }}"> <strong>Créer nouveau dossier</strong> </a>
                <a class="btn btn-success" href="{{ route('dordeuro.last') }}"> <strong>creer un bordeuro</strong> </a>
            </div>
        </div>
    </div><br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div style="overflow-x:auto;">
        <table class="table table-hover table-bordered">
            <tr class="text-center" style="background-color: #b48011d6">
                <th >No dossier</th>
                <th>No Assuré</th>
                <th>Crée le</th>
                <th>Mis à jour</th>
                <th>Statut</th>
                <th>Type</th>
                <th width="220px">Action</th>
            </tr>
            @foreach ($data as $key => $value)
            <tr class="text-center" style="background-color: #e0ba2fa4">
                <td>{{ $value->n_dossier }}</td>
                <td>{{ $value->assure_id }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
                <td>{{ $value->statu }}</td>
                <td>{{ $value->type }}</td>
                <td>
                    <form action="{{ route('dossier.destroy',$value->id) }}" method="POST">

                        <a class="btn btn-info"href="{{ route('dossier.show',$value->id) }}" ><strong>Afficher</strong></a>
                        <a class="btn btn-primary" href="{{ route('acte',$value->id) }}"><strong>Act</strong></a>
                        <a class="btn btn-info" href="{{ route('pj',$value->id) }}"> <strong>PJ</strong> </a>
                        <a class="btn btn-warning" href="{{ route('bordeurau',$value->id) }}"> <strong>Bordereau</strong> </a>
                        {{-- <a class="btn btn-primary" href="{{ route('dossier.rejet',$value->id) }}">Rejet</a>
                        <a class="btn btn-warning" ><strong>Modifier</strong></a> --}}

                            @csrf
                        <button type="submit" class="btn btn-danger"><strong>Supprimer</strong></button>
                    </form>



                </td>
            </tr>
            @endforeach
        </table>
    </div>
    {!! $data->links() !!}
@endsection






