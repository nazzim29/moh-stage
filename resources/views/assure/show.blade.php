@extends('layouts.app')

@section('content')


    <div class="container" align="center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2><strong>Afficher assuré</strong></h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('assure.index') }}"><strong>Retour</strong></a>
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="container" >
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header" style="background-color: #c8471879">

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Numero d'assuré :</strong>
                                        {{ $assure->numero_assure }}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nom :</strong>
                                        {{ $assure->nom }}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong> Prénom : </strong>
                                        {{ $assure->prenom }}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Date de naissance :</strong>
                                        {{ $assure->date_naissance }}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Sexe :</strong>
                                        {{ $assure->sexe }}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Email :</strong>
                                        {{ $assure->email }}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Adresse :</strong>
                                        {{ $assure->adresse }}
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
