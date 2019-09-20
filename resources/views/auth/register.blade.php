@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Registreren</h1>

                <form method="POST" role="form" action="{{route('register')}}">
                    {{csrf_field()}}
                    <div class="field">
                        <label for="name" class="label">Naam</label>
                        <p class="control">
                            <input class="input {{$errors->has('name') ? 'is-danger' : ''}}" type="text" name="name" id="name" value="{{old('name')}}" required>
                        </p>
                        @if ($errors->has('name'))
                            <p class="help is-danger">{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email</label>
                        <p class="control">
                            <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" value="{{old('email')}}" required>
                        </p>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="password" class="label">Wachtwoord</label>
                        <p class="control">
                            <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" required>
                        </p>
                        @if ($errors->has('password'))
                            <p class="help is-danger">{{$errors->first('password')}}</p>
                        @endif
                    </div>
                     <div class="field">
                        <label for="password_confirmation" class="label">Wachtwoord Herhalen</label>
                        <p class="control">
                            <input class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" type="password" name="password_confirmation" id="password_confirmation" required>
                        </p>
                        @if ($errors->has('password_confirmation'))
                            <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                        @endif
                    </div>

                    <button class="button is-primary is-outlined is-fullwidth m-t-40">Registreren</button>
                </form>
            </div> <!-- end of .cart-content-->
        </div> <!-- end of cart-->

         <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Ik heb al een account</a></h5>
    </div>
</div>
@endsection
