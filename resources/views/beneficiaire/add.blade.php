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
                        <div align="center" class="card-header">{{ __('Créer nouvel beneficiare') }}</div>

                        <form align="center" action= "{{ route('beneficiaire.store') }}" method="post">

                            @csrf
                            <br>
                            <div style="display:none">
                            <label for="numero_assure">Numero d'assuré:</label><br>
                            <input type="number" name="assure_id" value={{ $assu }} ><br>
                            </div>
                            <label for="nom">Nom:</label><br>
                            <input type="text"  name="nom"><br>
                            <label for="prenom">Prénom:</label><br>
                            <input type="text"  name="prenom"><br>
                           <button> Enregistrer </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

