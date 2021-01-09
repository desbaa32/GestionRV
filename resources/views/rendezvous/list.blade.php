@extends('layouts.app')
@section('content')

    <div class="align-content-center">
    <table class="table table-dark">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Phone</th>
          </tr>
        </thead>
        @foreach ($medcins as $item)
        <tbody>
          <tr>
            <td>{{$item->nom}}</td>
            <td>{{$item->nom}}</td>
            <td>{{$item->nom}}</td>
          </tr>
        </tbody>
      </table>
    </div>
    @endforeach
@endsection
