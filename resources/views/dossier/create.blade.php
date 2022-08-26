@extends('layouts.app')

@section('content')
@push('head')
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script type="text/javascript" defer>
    $(document).ready(function() {
        $('#assure_id').on('change', function() {
            var id = $(this).val();
            const xhr = new XMLHttpRequest();
            const url = '{{ route('beneficiaire.getjson','') }}/'+id;
            xhr.open('GET', url, true);
            xhr.onload = function(){
                if(this.status === 200){
                    const data = JSON.parse(this.responseText);
                    $('#beneficiaire_id').html([`<option value="">l'assurée selectionné</option>`,data.map(function(item) {
                        return `<option value="${item.id}">${item.nom} ${item.prenom}</option>`;
                    })].join(''));
                }
            }
            xhr.send();

            // $.ajax({
            //     url: '{{ route('beneficiaire.getjson',"") }}/' + id,
            //     type: 'GET',
            //     success: function(data) {
            //         console.log(data);
            //     }
            // });
        });
    })
    </script>
@endpush
<div class="row" style="margin-top: 1rem;">
    <div class="col-lg-12 margin-tb text-center">
        <div class="pull-left">
            <h2><strong>Créer nouveau dossier</strong></h2>
        </div>

        <div align="center" class="pull-right">
            <a class="btn btn-primary" href="{{ route('dossier.index') }}"> <strong>Retour</strong> </a>
        </div>

    </div>
</div><br>
    <div class="container" >
        <div class="row justify-content-center" >
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header rounded" style="background-color: #000000d6">



                        <form align="center" action= "{{ route('dossier.store') }}" method="post">
                            @csrf
                            <br>

                            <label class="text-white" for="nom"> <strong>Type</strong> </label><br>
                            <select class="form-control" aria-label=".form-select-sm example" name="type">
                                <option value="mutuelle">Mutuelle</option>
                                <option value="sécurité sociale">Sécurité Sociale</option>
                            </select><br>

                            <label class="text-white" for="assure"> <strong>Assure </strong> </label><br>
                            <select class="form-control" aria-label=".form-select-sm example" name="assure_id" id="assure_id" required >

                                <option value="">choisissez un assure</option>
                                @foreach($assures as $assure)
                                <option value="{{$assure->id}}">{{$assure->nom}}</option>
                                @endforeach
                            </select>

                            <br><label class="text-white" for="beneficiaire"><strong>Beneficiaire </strong></label><br>
                            <select class="form-control" aria-label=".form-select-sm example"  name="beneficiaire_id" id="beneficiaire_id">
                                <option value="">l'assurée selectionné</option>
                            </select><br>


                           <button class="btn btn-success btn-lg btn-block" > Enregistrer </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection



