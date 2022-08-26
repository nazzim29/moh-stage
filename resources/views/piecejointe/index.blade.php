@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb text-center">
            <div class="pull-left">
                <h2><strong>Liste des pieces jointes :</strong></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pj.add',$dossier) }}"><strong> Uploader une pieces jointe </strong></a>
            </div>
        </div>
    </div><br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>nom</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->nom }}</td>
            {{-- <td>{{ $value->chemin }}</td> --}}
            <td>
                <a class="btn btn-info" href="{{ route('pj.download',$value->id) }}">download</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
