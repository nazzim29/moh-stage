@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb text-center">
            <div class="pull-left">
                <h2> <strong>Liste des utilisateurs</strong>   </h2>
            </div>
            <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('role.create') }}"> <strong>Créer nouvel utilisateur</strong> </a>

            </div>
        </div>
    </div><br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-hover table-bordered">
        <tr class="text-center" style="background-color: #11b69dd6">
            <th>No User</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Crée le</th>
            <th>Mis à jour</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr class="text-center" style="background-color: #11b69d4c">

            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->created_at }}</td>
            <td>{{ $value->updated_at }}</td>
            <td>

                <form action="{{ route('role.destroy',$value->id) }}" method="POST">
                    <a class="btn btn-info"href="{{ route('user.show',$value->id) }}" ><strong>Afficher</strong></a>
                    {{-- <a class="btn btn-primary" ><strong>Modifier</strong></a> --}}
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger"><strong>Supprimer</strong></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $data->links() !!}
@endsection
