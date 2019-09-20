@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Bewerk gebruiker</h1>
            </div>
        </div>
        <hr class="m-t-0">

        <div class="columns">
            <div class="column">
                <form action="{{route('users.update', $user->id)}}" method="POST">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    <div class="field">
                        <label for="name" class="label">Naam</label>
                        <p class="control">
                        <input type="text" class="input" name="name" id="name" value="{{$user->name}}">    
                        </p>
                    </div>

                    <div class="field">
                        <label for="email" class="label">Email:</label>
                        <p class="control">
                            <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
                        </p>
                    </div>

                    <div class="field">
                        <label for="password" class="label">Wachtwoord</label>
                        
                            <div class="field">
                                <b-radio v-model="password_options" native-value="keep" name="password_options">Wachtwoord niet wijzigen</b-radio>
                            </div>
                            <div class="field">
                                <b-radio v-model="password_options" native-value="auto" name="password_options">Genereer wachtwoord</b-radio>
                            </div>
                            <div class="field">
                                <b-radio v-model="password_options" native-value="manual" name="password_options">Wachtwoord wijzigen</b-radio>
                                <p class="control">
                                    <input type="text" class="input m-t-15" name="password" id="password" v-if="password_options == 'manual'" placeholder="Maak wachtwoord aan">
                                </p>
                            </div>
                        
                    </div>

                    <button class="button is-success">Wijzigingen opslaan</button>
                </form>
            </div>
        </div>
    
    </div> <!-- end of .flex-container-->
@endsection

