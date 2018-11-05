@extends('layouts.admin')


@section('content')

    <h1>MODIFICA UTENTE</h1>



    <div class="col-sm-3">

        <img src="{{$user->photo ? $user->photo->file : '/images/NoLogo.jpg'}}" alt="" class="img-responsive img-rounded">

    </div>

    <div class="col-sm-9">


        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id', 'Ruolo:') !!}
            @if($user->role) {{--se è settato un ruolo per lo user, lo setto nella droplist--}}
                {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
            @else {{--//se ruolo user non definito, allora popolo droplist con elenco ruoli + prima voce "choose options"--}}
                {!! Form::select('role_id', array(''=>'Choose options') + $roles, null, ['class'=>'form-control']) !!}
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('is_active', 'Stato:') !!}
            {!! Form::select('is_active', array(0=>'Non Attivo', 1=>'Attivo'), null, ['class'=>'form-control']) !!}
            {{--mettendo il terzo parametro a "null", lascio LARAVEL utilizzare il valore già impostato --}}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Foto:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

        @include('includes.form_error')

    </div>

@endsection