@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb text-center">
            <div class="pull-left">
                <h2> <strong>Liste des Actes</strong></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('acte.add',$dossier) }}"> <strong>Créer nouvel Acte</strong> </a>
            </div>
        </div>
    </div><br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr style="background-color: #337a19d6">
            <th>No</th>
            <th>Nature</th>
            <th>Montant</th>
            <th>Date d'acte</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr style="background-color: #337a1985">
            <td style="background-color: #337a19d6">{{ $value->id }}</td>
            <td>{{ $value->nature }}</td>
            <td>{{ $value->montant }} DZD</td>
            <td>{{ $value->date_act }}</td>


            <td>
                <form  method="GET" action="/acte/{{$value->id}}/delete">
                    <button type="submit" class="btn btn-danger"><strong>Supprimer</strong></button>
                </form>
            </td>



        </tr>
        @endforeach
    </table>
    {!! $data->links() !!}
@endsection
