@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Inloggen</h1>

                <form method="POST" role="form" action="{{route('login')}}">
                    {{csrf_field()}}
                    <div class="field">
                        <label for="email" class="label">Email</label>
                        <p class="control">
                            <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="Emailadres" value="{{old('email')}}">
                        </p>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="password" class="label">Wachtwoord</label>
                        <p class="control">
                            <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password">
                        </p>
                        @if ($errors->has('password'))
                            <p class="help is-danger">{{$errors->first('password')}}</p>
                        @endif
                    </div>

                    <b-checkbox name="remember" class="m-t-20">Onthoud mij</b-checkbox>

                    <button class="button is-primary is-outlined is-fullwidth m-t-40">Inloggen</button>
                </form>
            </div> <!-- end of .cart-content-->
        </div> <!-- end of cart-->

         <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">Wachtwoord vergeten</a></h5>
    </div>
</div>
@endsection
