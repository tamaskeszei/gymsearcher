<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYMSearcher</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <section id="header">
        <a href="{{route('home.index')}}"><img src="{{asset('/storage/logo2.png') }}">
            <div>
                <ul id="navbar">
                    <li><a  href="{{route('gyms.index')}}">Konditermek</a></li>
                    <li><a href="{{route('food.index')}}">Táplálékkiegészítők</a></li>
                    <li><a href="{{route('machine.index')}}">Kondigépek</a></li>
                    @if (auth()->check())
                        @if( Auth::user()->usertype == 'admin')
                            <li><a href="{{ route('gyms.create') }}">Létrehozás</a></li>
                        @endif
                        <li><a href="{{route('profile.edit')}}">Profil</a></li>
                        
                        <li>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button class="submitbtn" type="submit">Kijelentkezés | {{auth()->user()->name}}</button>
                            </form>
                        </li>
                    @endif
                    
                </ul>
            </div>
    </section>
    <main>
        @yield('content')
    </main>

    <div class="footer">
        <table class="footerTable">
            <tr>
                {{-- <td class="footerTd">
                    <h3>Oktatóanyag</h3>
                    <br>
                </td> --}}
                <td class="footerTd logo">
                    <img src="{{asset('/storage/logo2.png') }}">
                    <b>©2023 GYMSearcher Minden jog fenntartva!</b>
                </td>
                <td class="footerTd">
                    <h3>Elérhetőség</h3>
                    <div class="info">
                        <h3> +3630356789</h3>
                        <h3>gymsearcher@gmail.com</h3>
                    </div>
                    <br>
                </td>
            </tr>
        </table>
    </div>
    
</body>
</html>