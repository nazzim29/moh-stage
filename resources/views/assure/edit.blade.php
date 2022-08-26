@extends('layouts.app')

@section('content')
    <div class="container" >
        <div class="row">
            <div class="col-lg-12 margin-tb text-center">
                <div class="pull-left">
                    <h2> <strong>Modifier Assuré</strong> </h2>
                </div>
                <div class="pull-right text-center">
                    <a class="btn btn-primary " href="{{ route('assure.index') }}"> <strong>Retour</strong> </a>
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
        <br><form action="{{ route('assure.update',$assure->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Numéro d'assuré :</strong>
                            <input  type="string" name="numero_assure" value="{{ $assure->numero_assure }}" class="form-control" placeholder="numero_assure">
                        </div>
                    </div><br>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nom :</strong>
                            <input type="string" name="nom" value="{{ $assure->nom }}" class="form-control" placeholder="nom">
                        </div>
                    </div><br>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Prénom :</strong>
                            <input type="string" name="prenom" value="{{ $assure->prenom }}" class="form-control" placeholder="prenom">
                        </div>
                    </div><br>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Date de naissance :</strong>
                            <input type="date" name="date_naissance" value="{{ $assure->date_naissnace }}" class="form-control">
                        </div>
                    </div><br>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Sexe :</strong>
                            <select type="text" name="sexe" value="{{ $assure->sexe }}" class="form-control" placeholder="Sexe">
                                <option value="Homme">Homme</option>
                              <option value="Femme">Femme</option>
                            </select>
                        </div>
                    </div><br>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email :</strong>
                            <input type="string" name="email" value="{{ $assure->email }}" class="form-control" placeholder="email">
                        </div>
                    </div>

                    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                        <label for="adresse">Commune:</label><br>

                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="commune">
                            @foreach($communes as $commune)
                            <option value="{{$commune->commune}}">{{$commune->commune}}</option>
                            @endforeach
                            </select>
                    </div> --}}

                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <div class="form-group">
                            <strong>Adresse :</strong>
                            <input type="string" name="adresse" value="{{ $assure->adresse }}" class="form-control" placeholder="adresse">
                        </div>

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
