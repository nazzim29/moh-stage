@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Stat') }}</div>

                <div class="card-body">
                    <div class="card-header">
 Assure
  </div>
  <div class="card-body">
    <h5 class="card-title">Nombre d'assure homme : {{$assure_h}} </h5>
        <h5 class="card-title">Nombre d'assure femme : {{$assure_f}} </h5>
  </div>
</div>

 <div class="card-body">
                    <div class="card-header">
 Dossier
  </div>
  <div class="card-body">
    <h5 class="card-title">Nombre de dossier indemnisé : {{$dossier_i}} </h5>
        <h5 class="card-title">Nombre de dossier en cours: {{$dossier_c}} </h5>
                <h5 class="card-title">Nombre de dossier rejeté : {{$dossier_r}} </h5>
                <h5 class="card-title">Nombre de dossier incomplet : {{$dossier_ip}} </h5>
                <br><br><br>
                <h5 class="card-title">Nombre de type de dossier mutuelle : {{$dossier_t2}} </h5>
                <h5 class="card-title">Nombre de type de dossier sécurité sociale : {{$dossier_t1}} </h5>

  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
