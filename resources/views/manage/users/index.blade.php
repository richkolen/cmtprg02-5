@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Gebruikers beheren</h1>
            </div>
            <div class="column">
            <a href="{{route('users.create')}}" class="button is-primary"><i class="fa fa-user-add m-r-10"></i> Voeg nieuwe gebruiker toe</a>
            </div>
        </div>
        <hr class="m-t-0">

        <div class="card">
            <div class="card-content">
                <table class="table is-narrow">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Naam</th>
                            <th>Email</th>
                            <th>Aangemaakt sinds</th>
                            <th>Acties</th>
                        </tr>
                    </thead>
                        
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at->toFormattedDateString()}}</td>
                                <td><a class="button is-outlined" href="{{route('users.edit', $user->id)}}">Bewerken</a></td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- end of .card-->
        {{$users->links('vendor.pagination.default')}}
    </div>    
@endsection