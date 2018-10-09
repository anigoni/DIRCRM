@extends('layouts.admin')

@section('content')

    <h1>CLIENTI</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Ragione Sociale</th>
            <th>Riferimento</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Indirizzo</th>
            <th>Città</th>
            <th>CAP</th>
            <th>Provincia</th>
            <th>Regione</th>
            <th>Creato</th>
            <th>Modificato</th>
        </tr>
        </thead>
        <tbody>

        @if($agencies)
            @foreach($agencies as $agency)
                <tr>
                    <td>{{$agency->RagSociale}}</td>
                    <td>{{$agency->Riferimento}}</td>
                    <td>{{$agency->Telefono}}</td>
                    <td>{{$agency->email}}</td>
                    <td>{{$agency->Indirizzo}}</td>
                    <td>{{$agency->Citta}}</td>
                    <td>{{$agency->CAP}}</td>
                    <td>{{$agency->Provincia}}</td>
                    <td>{{$agency->Regione}}</td>
                    <td>{{$agency->created_at->diffForHumans()}}</td>
                    <td>{{$agency->updated_at->diffForHumans()}}</td>

                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@endsection
