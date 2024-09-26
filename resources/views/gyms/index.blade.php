@extends('layout')

@section('content')


@if($errors->has('name'))
    <div class="alert alert-warning valerr">{{$errors->first('name')}}</div>
@endif

@if($errors->has('price'))
    <div class="alert alert-warning valerr">{{$errors->first('price')}}</div>
@endif

{{-- -----------------------------------------------------search-------------------- --}}
<div class="gymbg">
    <div class="background-image"></div>
    <div class="content">
        @if (auth()->check())
            <form class="boxSub" method="GET" action="{{ route('gyms.index') }}">
                <input class="inputfield" type="text" name="name"  placeholder="Név (opcionális)">
                <select class="inputfield" name="price-category" >
                    <option value="" selected >Válasszon ár kategóriát </option>
                    <option value="napijegy">Napijegy</option>
                    <option value="10alkalmas_b">10 alkalmas bérlet</option>
                    <option value="diak_b">Diák bérlet</option>
                    <option value="felnott_b">Felnőtt bérlet</option>
                </select>
                <input class="inputfield" type="number" name="price" placeholder=" Maximum ár">
                <select class="inputfield " name="service">
                        <option value="" selected>Válasszon szolgáltatást</option>
                        @foreach($services as $service)
                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                        @endforeach
                </select>
                <button class="submitbtn" type="submit">Szűrés</button>
            </form>
        @else
            <h3 class="notification">Ha személyreszabottan szeretne keresni kérem regisztráljon vagy jelentkezzen be!</h3>
        @endif
    {{-- ------------------------------------------------------------------------------------------- --}}

        <section id="product1" class=section-p1>
            <div class="pro-container">
                @if ($gyms->isNotEmpty())
                    @foreach ($gyms as $gym)
                        <div class="pro">
                            <div class="title">
                                <h1>{{ $gym->name }}</h1>
                            </div>
                            <div class="context-container">
                                @foreach ($gym->gymimages as $image)
                                <div class="images">
                                    <img src="{{ asset('/storage/gym_images/'.$image->image) }}" alt="{{ $gym->name }} képe" id="image{{ $image->id }}">
                                </div>  
                                @endforeach
                                <div class="des">
                                    <h4 style="display: inline; margin: 0;">Cím:</h4><h3 style="display: inline; margin: 0;"> {{ $gym->address }}</h3> <br>
                                    <h4 style="display: inline; margin: 0;">Telefonszám:</h4> <h3 style="display: inline; margin: 0;">{{ $gym->phone }}</h3><br>
                                    <h4 style="display: inline; margin: 0;">Email:</h4> <h3 style="display: inline; margin: 0;">{{ $gym->email }}</h3><br>
                                    <h4 style="display: inline; margin: 0;"><a href="{{$gym->website_link}}">Hivatalos weboldalhoz kattintson</a></h4>
                                    
                                </div>
                                <div class="popupBtn-box">
                                    <button class="popupBtn" data-modal="modal{{ $gym->id }}">További információk</button>
                                </div>
                            </div>
                            
                            <!-- The Modal -->
                            <div id="modal{{ $gym->id }}" class="popup">
                                    <!-- Modal content -->
                                <div class="popup-content">
                                    <div class="popup-header">
                                        <button class="close">&times;</button>
                                    </div>
                                    <div class="popup-body">
                                        <h1 >{{ $gym->name }}</h1>
                                        <h2>Árak</h2>
                                        <div class="price-box">
                                            <div class="sub-price">
                                                <h3>Napijegy</h3>
                                                <h2>{{$gym->prices->napijegy}} Ft</h2>
                                            </div>
                                            <div class="sub-price">
                                                <h3>10 alkalmas bérlet</h3>
                                                <h2>{{$gym->prices->tizalkalmas_b}} Ft</h2>
                                            </div>
                                            
                                            <div class="sub-price">
                                                <h3>Diák bérlet</h3>
                                                <h2>{{$gym->prices->diak_b}} Ft</h2>
                                            </div>
                                            <div class="sub-price">
                                                <h3>Felnőtt bérlet</h3>
                                                <h2>{{$gym->prices->felnott_b}} Ft</h2>
                                            </div>
                                        </div>
                                        <h2>Szolgáltatások</h2>
                                        @if ($gym->services->isNotEmpty())
                                            <div class="service">
                                                @foreach ($gym->services as $service)
                                                <div class="service-item">
                                                    <div class="service-text">
                                                        <h4>{{ $service->name }}</h4>
                                                    </div>
                                                    <div class="service-img">
                                                        <img src="{{ asset('/storage/service_images/'.$service->icon) }}" alt="{{ $service->name }} képe" id="image{{ $service->id }}">
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        @else
                                            Nincsenek hozzárendelve szolgáltatások ehhez a konditeremhez.
                                        @endif
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    @endforeach
                @else
                    <h3>Nincs találat a megadott keresési feltételekkel.</h3>
                @endif
            </div>
        </section>
    </div>
</div>
    <script>
        // Get all buttons with class "popupBtn"
        var buttons = document.querySelectorAll(".popupBtn");

        // Add a click event listener to each button
        buttons.forEach(function (button) {
            button.onclick = function () {
                var modalId = this.getAttribute("data-modal");
                var modal = document.getElementById(modalId);
                modal.style.display = "block";
            };
        });

        // Get all elements with class "close"
        var closeButtons = document.querySelectorAll(".close");

        // Add a click event listener to each close button
        closeButtons.forEach(function (closeButton) {
            closeButton.onclick = function () {
                var modal = closeButton.closest(".popup");
                modal.style.display = "none";
            };
        });

        // When the user clicks anywhere outside of a modal, close it
        window.onclick = function (event) {
            if (event.target.classList.contains("popup")) {
                event.target.style.display = "none";
            }
        };
    </script>
@endsection