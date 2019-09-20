@extends('layouts.app')

@section('content')

 @if (session('status'))
    <div class="notification is-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Wachtwoord vergeten</h1>

                <form method="POST" role="form" action="{{route('password.email')}}">
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
                    
                    <button class="button is-primary is-outlined is-fullwidth m-t-40">Verstuur</button>
                </form>
            </div> <!-- end of .cart-content-->
        </div> <!-- end of cart-->

         <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted"><i class="fa fa-caret-left" aria-hidden="true"></i> Terug naar inloggen</a></h5>
    </div>
</div>
@endsection
