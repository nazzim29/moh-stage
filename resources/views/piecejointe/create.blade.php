@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div align="center" class="pull-right">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div align="center" class="card-header">{{ __('Ajouter Piéce jointe') }}</div>
                        
                        <form align="center" action="{{ route('pj.store',$dossier) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <br>
                            <label for="numero_dossier">Numero de dossier :</label><br>
                            <input type="number" name="dossier_id" value={{ $dossier }} disabled><br>
                            <label for="nmo">Nom :</label><br>
                            <input type="text" name="nom" id="nom" required><br>
                            <label for="fichier">Fichier :</label><br>
                            <input type="file" name="fichier" id="fichier" required><br>
                            <button> Enregistrer </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
