@extends('layouts.admin')

@section('content')

    <h1>UTENTI</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>id_user</th>
                <th>Nome</th>
                <th>email</th>
                <th>Ruolo</th>
                <th>Stato</th>
                <th>Creato</th>
                <th>Modificato</th>
            </tr>
        </thead>

        <tbody>

        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    @if($user->role)
                        <td>{{$user->role->name}}</td>
                    @else
                        <td>Not Selected</td>
                    @endif
                    <td>{{$user->is_active==1 ? 'Attivo': 'Non Attivo'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@endsection