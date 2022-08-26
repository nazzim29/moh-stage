@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div align="center" class="card-header">{{ __('Créer nouvel assuré') }}</div>

                        <form align="center" action= "/assureform" method="post">

                            @csrf
                            <br>
                            <label for="numero_assure">Numero d'assuré:</label><br>
                            <input type="sting" name="numero_assure"><br>

                            <label for="nom">Nom:</label><br>
                            <input type="text"  name="nom"><br>

                            <label for="prenom">Prénom:</label><br>
                            <input type="text"  name="prenom"><br>

                            <label for="email">Email:</label><br>
                            <input type="text"  name="email"><br>

                            <label for="adresse">Adresse:</label><br>
                            <input type="text"  name="adresse"><br><br>

                            <button>Enregistrer </button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

