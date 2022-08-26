@extends('layouts.app')

@section('content')


    <div class="container" align="center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2><strong>Afficher Utilisateur</strong></h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('role.index') }}"><strong>Retour</strong></a>
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="container" >
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header" style="background-color: #c8471879">

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Email :</strong><br>
                                        {{ $user->email }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
