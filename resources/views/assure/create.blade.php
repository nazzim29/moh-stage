@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 align="center"> <strong>Créer nouvel assuré</strong> </h2>
        </div>
        <div align="center" class="pull-right">
            <a class="btn btn-primary" href="{{ route('assure.index') }}"> <strong>Retour</strong> </a>
        </div>
    </div>
</div><br>
    <div class="container " >
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header rounded" style="background-color: #000000d6">
                                                                                {{-- #e05e2fd6 --}}
                        <form align="center" action= "{{ route('assure.store') }}" method="post">

                            @csrf
                            <br>
                            <label  class="text-white" for="numero_assure"> <strong>Numero d'assuré </strong> </label><br>
                            <input class="form-control" type="sting" name="numero_assure" placeholder="1234567"><br>


                            <div class="row">

                                <div class="col">
                                <label class="text-white" for="nom"> <strong>Nom </strong></label>
                                <input class="form-control" type="text"  name="nom" placeholder="Nom"><br>
                                </div>

                                <div class="col">
                                <label class="text-white" for="prenom"> <strong>Prénom </strong> </label>
                                <input class="form-control" type="text"  name="prenom" placeholder="Prénom"><br>
                                </div>

                            </div>



                            <label class="text-white" for="date_naissance"><strong>Date de naissance </strong></label><br>
                            <input class="form-control" type="date"  name="date_naissance"><br>

                            <label class="text-white" for="sexe"><strong> Sexe </strong></label><br>
                            <select class="form-control" type="text" name="sexe">
                              <option value="Homme">Homme</option>
                              <option value="Femme">Femme</option>
                            </select><br>

                            <label class="text-white" for="email"> <strong>Email </strong> </label><br>
                            <input class="form-control" type="text"  name="email" placeholder="exemple@exemple.com"><br>

                            <label class="text-white" for="adresse"> <strong>Commune</strong> </label><br>
                            <select  class="form-control" aria-label=".form-select-sm example" name="commune">
                            @foreach($communes as $commune)
                            <option value="{{$commune->commune}}">{{$commune->commune}}</option>
                            @endforeach
                            </select><br>

                            <label class="text-white" for="adresse"> <strong>Adresse </strong> </label><br>
                            <input class="form-control" type="text"  name="adresse" placeholder="Adresse"><br>

                            {{-- <label for="adresse">Beneficiaires ?</label>
                            <label class="container">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label> --}}


                            <button class="btn btn-success btn-lg btn-block"> <strong>Enregistrer</strong> </button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


{{--
 <script type="text/javascript">
    function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}
</script> --}}

@endsection

