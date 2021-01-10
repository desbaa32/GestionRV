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
                                <th>libelle</th>
                                <th>date</th>
                                <th>medecin</th>
                                <th>user</th>
                                <th colspan="2" class="text-center">Action</th>
                            </tr>
                            </thead>
                            @foreach ($rendezvouss as $item)
                            <tbody>
                            <tr>
                                <td>{{$item->libelle}}</td>
                                <td>{{$item->date}}</td>
                                <td>{{$item->medcins_id}}</td>
                                <td>{{$item->users_id}}</td>
                                <td><a class=" btn btn-info " href="{{route('editRendezvous',['id'=>$item->id])}}">Editer</a></td>
                                <td ><a class="btn btn-danger" href="{{route('deleteRendezvous',['id'=>$item->id])}}"
                                     onclick="return confirm('Voulez  vous vraiment supprimer ?');">Supprimer</a></td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
