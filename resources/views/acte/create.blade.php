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
        <div class="row justify-content-center" >
            <div class="col-md-8" >
                <div class="card" style="background-color: #e0ba2fa4">
                    <div class="card-header">
                        <div align="center" class="card-header" style="background-color: #e08d2fc8"><strong>{{ __('Ajouter nouvel Act') }}</strong> </div>

                        <form align="center" action= "{{ route('acte.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <br>
                            <div style="display:none">
                                <label for="dossier_id"><strong>Numero de dossier :</strong> </label><br>
                                <input type="number" name="dossier_id" value={{ $dossier }} ><br><br>
                            </div>

                            <label for="nom"><strong>Nature :</strong></label><br>
                            <select class="form-select form-select-xm" aria-label=".form-select-sm example"  name="nature" value="{{ ('nature') }}">
                                <option value="Consultation/produit pharmacie">Consultation/Produit Pharmacie</option>
                                <option value="Echographie">Echographie</option>
                                <option value="Radio">Radio</option>
                                <option value="Analyse">Analyse</option>
                                <option value="Act chirurgical">Act Chirurgical </option>
                                <option value="Act de naissance">Act de Naissance </option>
                                <option value="Act de décès">Act de Décès  </option>
                                <option value="Act de maternité">Act de Maternité</option>
                                <option value="Act de Circoncision">Act de Circoncision</option>
                            </select><br>

                            <label for="date_act"> <strong>Date Act :</strong> </label><br>
                            <input type="date"  name="date_act"><br><br>

                            <label for="montant"> <strong>Montant :</strong> </label><br>
                            <input type="number"  name="montant"> <strong>DA</strong> <br><br>

                            {{-- <label class="form-label" for="chemin">Selectionnez l'image de l'acte</label><br>
                            <input type="file" name="chemin" class="form-control" id="customFile" /><br> --}}

                            <button> <strong>Enregistrer</strong> </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

