@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter un Rendez vous') }}</div>
                <div class="card-body">
                    <div class="align-center">
                    {{ __(' HELLO !!!: ') }}
                    {{ Auth::user()->name }}

                    </div>

                    @if (isset($confirmation))
                        @if ($confirmation==1)
                            <div class="alert alert-success">
                                Rendez ajoutée
                            </div>
                        @else
                            <div class="alert alert-warning">
                                Rendez vous non ajoutée
                            </div>
                        @endif
                    @endif

                    <form action="{{route('traiteFormRv')}}" method="POST" class="was-validated">

                        @csrf

                        <div class="form-group">
                            <label class="control-label"for="libelle">LIBELLE</label>
                            <input class="form-control"type="textarea" name="libelle" id="nom" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label"for="date">DATE</label>
                            {{-- <input class="form-control"type="text" name="prenom" id="date" required> --}}
                            <input class="form-control" type="date" name="date" id="date">
                        </div>
                        <div class="form-group">
                            <label class="control-label"for="medcins_id">Choississez le Medecin</label>
                            <select class=" form-control custom-select" name="medcins_id" id="medcins_id" >
                                <option value="0">Faites un choix</option>
                                @foreach ($medecins as $item)
                                    <option value="{{$item->id}}"> {{$item->prenom}}  {{$item->nom}}  </option>
                                @endforeach
                            </select>
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
