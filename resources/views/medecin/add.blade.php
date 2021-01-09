@extends('layouts.app')
@section('title','Ajout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ajouter un Medcecin') }}</div>
                    <div class="card-body">
                        <div class="align-center">
                        {{ __(' HELLO !!!: ') }}
                        {{ Auth::user()->name }}

                        </div>

                        @if (isset($confirmation))
                            @if ($confirmation==1)
                                <div class="alert alert-success">
                                    Medecin ajoutée
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    Medecin non ajoutée
                                </div>
                            @endif
                        @endif

                        <form action="{{route('traiteForm')}}" method="POST" class="was-validated">

                            @csrf

                            <div class="form-group">
                                <label class="control-label"for="nom">NOM</label>
                                <input class="form-control"type="text" name="nom" id="nom" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="prenom">PRENOM</label>
                                <input class="form-control"type="text" name="prenom" id="prenom" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label"for="telephone">TELEPHONE</label>
                                <input class="form-control"type="text" name="telephone" id="telephone" required>
                            </div>
                            <div class="form-group">
                            <input type="submit" class="btn btn-success"value="Envoyer"name="envoyer"id="envoyer">
                            <input type="reset" class="btn btn-danger"value="Annuler"name="annuler"id="annuler">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
