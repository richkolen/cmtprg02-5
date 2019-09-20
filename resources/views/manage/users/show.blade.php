@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">{{$user->name}}</h1>
                <h4 class="subtitle">Gegevens gebruiker</h4>
            </div> <!-- end of column-->
        
            <div class="column">
                <a href="{{route('users.edit', $user->id)}}" class="button is-primary"><i class="fa fa-user m-r-10"></i>Bewerken</a>
            </div>
        </div>
        <hr class="m-t-0">

        <div class="columns">
            <div class="column">
                <div class="field">
                    <label for="name" class="label">Naam</label>
                    <pre>{{$user->name}}</pre>
                </div>
    
                <div class="field">
                    <label for="email" class="label">Email:</label>
                    <pre>{{$user->email}}</pre>
                </div>
            </div>
        </div>
    </div> <!-- end of .flex-container-->
@endsection