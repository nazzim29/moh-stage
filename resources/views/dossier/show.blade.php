@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb text-center">
            <div class="pull-left">
                <h2> <strong>Afficher dossier</strong> </h2>
            </div>
            <div class="pull-right">

                {{-- <--------------------------REJET---------------------------> --}}
                <form class="btn-group" action="{{ route('dossier.rejet',$dossier->id) }} " method="POST">
                @csrf
                @method('PATCH')
                <label >
                <button type="submit" class="btn btn-success ">Rejet</button>
                </label>
                </form>
                {{-- <--------------------------REJET---------------------------> --}}
                {{-- <--------------------------REJET---------------------------> --}}
                <form class="btn-group" action="{{ route('dossier.indemnise',$dossier->id) }} " method="POST">
                @csrf
                @method('PATCH')
                <label >
                <button type="submit" class="btn btn-success ">indemnise</button>
                </label>
                </form>
                {{-- <--------------------------REJET---------------------------> --}}
                {{-- <--------------------------REJET---------------------------> --}}
                <form class="btn-group" action="{{ route('dossier.incomplet',$dossier->id) }} " method="POST">
                @csrf
                @method('PATCH')
                <label >
                <button type="submit" class="btn btn-success ">incomplet</button>
                </label>
                </form>
                {{-- <--------------------------REJET---------------------------> --}}
            </div>
        </div>
    </div><br><br>



    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header" style="background-color: #e0ba2fa4">
                    <div class="row text-center">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <br><strong>Numéro de dossier :</strong>
                                {{ $dossier->n_dossier }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Assuré :</strong>
                                {{$dossier->assure->nom }} {{$dossier->assure->prenom }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Bénéficiaire :</strong>
                                {{$dossier->beneficiaire_id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Statut :</strong>
                                {{$dossier->statu }}
                            </div>
                        </div>
                    </div><br>
                </div>
            </div>
        </div>
    </div><br><br>

    <div class="text-center">
        <a class="btn btn-primary" href="{{ route('dossier.index') }}"> <strong>Retour</strong> </a>
    </div>

@endsection
