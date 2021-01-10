@extends('layouts.app')
@section('title','Liste')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Liste des Medcecins') }}</div>
                    <div class="card-body">
                        {{ __(' HELLO !!!: ') }}
                        {{ Auth::user()->name }}
                        <div >
                        <table class="table table-hover table-striped">
                            <thead class="thead-light">
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Phone</th>
                                <th colspan="2" class="text-center">Action</th>
                            </tr>
                            </thead>
                            @foreach ($medecins as $item)
                            <tbody>
                            <tr>
                                <td>{{$item->nom}}</td>
                                <td>{{$item->prenom}}</td>
                                <td>{{$item->telephone}}</td>
                                <td><a class=" btn btn-info " href="{{route('editMedecin',['id'=>$item->id])}}">Editer</a></td>
                                <td ><a class="btn btn-danger" href="{{route('deleteMedecin',['id'=>$item->id])}}"
                                     onclick="return confirm('Voulez  vous vraiment supprimer ?');">Supprimer</a></td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                        </div>
                        {{$medecins->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
