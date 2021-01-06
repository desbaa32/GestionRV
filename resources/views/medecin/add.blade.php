@extends('layouts.app')
@section('title','Ajout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ajouter un Medcecin') }}</div>
                    <div class="card-body">
                        {{ __(' HELLO !!!: ') }}
                        <br>
                        {{ Auth::user()->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
