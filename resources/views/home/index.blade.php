@extends('layout')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<section id="hero">
    <div class="login2">
            <div class="wrapper">
                @if (auth()->check())
                    <div class="welcome-box">
                        <h2>Üdvözöljük a GYMSearcher weboldalon!</h2>
                        <div class="welcome-text">
                        <h3>A konditermek menüpontban személyreszabottan kiválaszthatja a számára legalkalmasabb konditermet!</h3>
                        </div>
                    </div>

                @else
                    <div class="welcome-box">
                        <h2>Üdvözöljük a GYMSearcher weboldalon!</h2>
                        <h3>Ahhoz hogy személyreszabottan kereshessen a konditermek között szüksége lesz egy felhasználói fiókra!</h3>
                        <h3> Kérem regisztráljon vagy ha rendelkezik fiókkal jelentkezzen be!</h3>
                    </div>
                    <div class="welcome-box-btn">
                        <button class="sendBtn" type="submit"> <a href="{{ route('login')}}">Bejelentkezés</a></button>
                        <button class="sendBtn" type="submit"> <a href="{{ route('register')}}">Regisztráció</a></button>
                    </div>
                @endif
            </div>
    </div>

</section>


@endsection