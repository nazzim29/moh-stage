@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Acte</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('acte.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nature:</strong>
                {{ $acte->Nature }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date acte:</strong>
                {{ $acte->date_act }}
            </div>
        </div>
    </div>
@endsection
