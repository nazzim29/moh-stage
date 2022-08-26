@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb text-center">
                <div class="pull-left">
                    <h2>Modifier Bénéficiaires </h2>
                </div>
                <div class="pull-right text-center">
                    <a class="btn btn-primary " href="{{ route('beneficiaire.index') }}"> Retour</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br><form action="{{ route('beneficiaire.update',$ben->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="numero_assure">Numero d'assuré:</label><br>
                            <input type="number" name="assure_id" value={{ $assu }} ><br>
                        </div>
                    </div><br>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nom :</strong>
                            <input type="string" name="nom" value="{{ $ben->nom }}" class="form-control" placeholder="nom">
                        </div>
                    </div><br>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Prénom :</strong>
                            <input type="string" name="prenom" value="{{ $ben->prenom }}" class="form-control" placeholder="prenom">
                        </div>
                    </div><br>

                    <br><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </div>

                    </div>
                </div>
            </form>

    </div>
@endsection

                            {{-- <label for="numero_assure">Numero d'assuré:</label><br>
                            <input type="sting" name="numero_assure"><br>

                            <label for="nom">Nom:</label><br>
                            <input type="text"  name="nom"><br>

                            <label for="prenom">Prénom:</label><br>
                            <input type="text"  name="prenom"><br>

                            <label for="email">Email:</label><br>
                            <input type="text"  name="email"><br>

                            <label for="adresse">Adresse:</label><br>
                            <input type="text"  name="adresse"><br><br>

                            {{-- <label for="adresse">Beneficiaires ?</label>
                            <label class="container">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label> --}}

{{--
                            <button>Enregistrer </button>  --}}
