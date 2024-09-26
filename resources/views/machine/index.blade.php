@extends('layout')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<section class="food-style">
    <div class="projcard-container">

        <div class="projcard projcard-blue">
          <div class="projcard-innerbox">
            <img class="projcard-img" src="{{asset('/storage/machine_images/fekvenyomopad.jpg') }}" />
            <div class="projcard-textbox">
              <div class="projcard-title">Fekvenyomó pad</div>
              <div class="projcard-subtitle"><a href="https://www.youtube.com/watch?v=1HKuD27aiCg" target="_blank">Így kell használni</a></div>
              <div class="projcard-bar"></div>
              <div class="projcard-description">
                <article>
                  A fekvenyomás egy több izületes összetett gyakorlat, melynél a váll, és könyök ízületben történik elmozdulás. 
                  Segítségével a nagy mellizmunkat tudjuk erősíteni, de a mozgás közben részt vesz az elülső delta, kis mellizom, illetve a tricepsz is.
                </article>
              </div>
              <div class="projcard-tagbox">
                <span class="projcard-tag">Mellizom</span>
                <span class="projcard-tag">Tricepsz</span>
              </div>
            </div>
          </div>
        </div>
  
          <div class="projcard projcard-blue">
            <div class="projcard-innerbox">
              <img class="projcard-img" src="{{asset('/storage/machine_images/csigaskeret.jpg') }}" />
              <div class="projcard-textbox">
                <div class="projcard-title">Csigás keret</div>
                <div class="projcard-subtitle"><a href="https://www.youtube.com/watch?v=MnMhboPid9w" target="_blank">Így kell használni</a></div>
                <div class="projcard-bar"></div>
                <div class="projcard-description">
                  <article>
                    Főként a nagyobb izomcsoportok dolgoztathatók meg vele, mint az alsótest izmai közül a combfeszítő, vagy a combhajlító izom, 
                    felsőtest izmai közül pedig a mell, hát és váll izmai is kiemelt szerepet kapnak.
                  </article>
                </div>
                <div class="projcard-tagbox">
                  <span class="projcard-tag">Mellizom</span>
                  <span class="projcard-tag">Hátizom</span>
                  <span class="projcard-tag">Vállizom</span>
                  <span class="projcard-tag">Combfeszítő izom</span>
                </div>
              </div>
            </div>
          </div>

          <div class="projcard projcard-blue">
            <div class="projcard-innerbox">
              <img class="projcard-img" src="{{asset('/storage/machine_images/tarogato.jpg') }}" />
              <div class="projcard-textbox">
                <div class="projcard-title">Tárogató-Mellizomerősítő gép</div>
                <div class="projcard-subtitle"><a href="https://m.youtube.com/watch?v=dmsyach6FBc" target="_blank">Így kell használni</a></div>
                <div class="projcard-bar"></div>
                <div class="projcard-description">
                  <article>
                    Az alkar-felkar egymáshoz viszonyított helyzetének változtatásával a mellizmok különböző részeit terhelheted.
                  </article>
                </div>
                <div class="projcard-tagbox">
                  <span class="projcard-tag">Mellizom</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="projcard projcard-customcolor" style="--projcard-color: darkorange;">
            <div class="projcard-innerbox">
              <img class="projcard-img" src="{{asset('/storage/machine_images/vallizomgep.jpg') }}" />
              <div class="projcard-textbox">
                <div class="projcard-title">Oldalemelő – vállizom gép</div>
                <div class="projcard-subtitle"><a href=" https://www.youtube.com/watch?v=LKrblagVhHw" target="_blank">Így kell használni</a></div>
                <div class="projcard-bar"></div>
                <div class="projcard-description">
                  <article>
                    Az oldalemelő – vállizom gép elsődlegesen az oldalsó deltaizmokat, azaz a váll izmainak középső fejét dolgoztatja meg.
                  </article>
                </div>
                <div class="projcard-tagbox">
                  <span class="projcard-tag">Vállizom</span>
                </div>
              </div>
            </div>
          </div>

          <div class="projcard projcard-customcolor" style="--projcard-color: darkorange;">
            <div class="projcard-innerbox">
              <img class="projcard-img" src="{{asset('/storage/machine_images/vallizomerosito.jpg') }}" />
              <div class="projcard-textbox">
                <div class="projcard-title">Vállizomerősítő gép</div>
                <div class="projcard-subtitle"><a href="https://www.youtube.com/watch?v=LKrblagVhHw" target="_blank">Így kell használni</a></div>
                <div class="projcard-bar"></div>
                <div class="projcard-description">
                  <article>
                    A vállgépen végzett nyomás elsősorban a vállizom oldalsó- ill. 
                    elülső fejét terheli és mindenki számára biztonságos végrehajtást tesz lehetővé.
                  </article>
                </div>
                <div class="projcard-tagbox">
                  <span class="projcard-tag">Vállizom</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="projcard projcard-customcolor" style="--projcard-color: purple;">
            <div class="projcard-innerbox">
              <img class="projcard-img" src="{{asset('/storage/machine_images/smithkeret.jpg') }}" />
              <div class="projcard-textbox">
                <div class="projcard-title">Smith keret</div>
                <div class="projcard-subtitle"><a href="https://www.youtube.com/watch?v=dwohLPJUT8o" target="_blank">Így kell használni</a></div>
                <div class="projcard-bar"></div>
                <div class="projcard-description">
                  <article>
                    Ennek segítségével olyan gyakorlatokat tudunk kivitelezni, melyhez kisebb koordináció szükséges, 
                    így remek rávezetés lehet a szabadsúlyos fekvenyomás, illetve szabadsúlyos guggoláshoz is, 
                    hogy megfelelően kialakítsuk az ezekhez szükséges izomtudatot, illetve a tökéletes végrehajtáshoz szükséges technikákat.
                  </article>
                </div>
                <div class="projcard-tagbox">
                  <span class="projcard-tag">Fekvenyomás rávezetés</span>
                  <span class="projcard-tag">Guggolás rávezetés</span>
                </div>
              </div>
            </div>
          </div>

          
          
          

          <div class="projcard projcard-customcolor" style="--projcard-color: green;">
            <div class="projcard-innerbox">
              <img class="projcard-img" src="{{asset('/storage/machine_images/comb.jpg') }}" />
              <div class="projcard-textbox">
                <div class="projcard-title">Ülő combhajlító gép</div>
                <div class="projcard-subtitle"><a href="https://www.youtube.com/watch?v=ltQ1U8tcv4Y" target="_blank">Így kell használni</a></div>
                <div class="projcard-bar"></div>
                <div class="projcard-description">
                  <article>
                    A comb hátsó láncának erősítése a cél.
                  </article>
                </div>
                <div class="projcard-tagbox">
                  <span class="projcard-tag">Combfeszítő</span>
                </div>
              </div>
            </div>
          </div>

          <div class="projcard projcard-customcolor" style="--projcard-color: silver;">
            <div class="projcard-innerbox">
              <img class="projcard-img" src="{{asset('/storage/machine_images/hat.jpg') }}" />
              <div class="projcard-textbox">
                <div class="projcard-title">Hátizom erősítő gép</div>
                <div class="projcard-subtitle"><a href="https://www.youtube.com/watch?v=ol9OSRANsKo" target="_blank">Így kell használni</a></div>
                <div class="projcard-bar"></div>
                <div class="projcard-description">
                  <article>
                    Az optimálisan beállított pálya a teljes tartományban kíméletesen dolgozza át a széles és a középső hátizmokat.
                  </article>
                </div>
                <div class="projcard-tagbox">
                  <span class="projcard-tag">Hátizom</span>
                </div>
              </div>
            </div>
          </div>

          <div class="projcard projcard-customcolor" style="--projcard-color: red;">
            <div class="projcard-innerbox">
              <img class="projcard-img" src="{{asset('/storage/machine_images/futo.jpg') }}" />
              <div class="projcard-textbox">
                <div class="projcard-title">Futópad</div>
                <div class="projcard-subtitle"><a href="https://www.youtube.com/watch?v=8i3Vrd95o2k" target="_blank">Így kell használni</a></div>
                <div class="projcard-bar"></div>
                <div class="projcard-description">
                  <article>
                    A futópad egy hatékony eszköz a kardiovaszkuláris edzéshez és a futómozgás gyakorlásához. 
                    Segíti a testsúlykontrollt, erősíti a szív- és érrendszert, kényelmes és időhatékony edzési lehetőséget biztosít otthon vagy a konditeremben.
                  </article>
                </div>
                <div class="projcard-tagbox">
                  <span class="projcard-tag">Futópad</span>
                </div>
              </div>
            </div>
          </div>

          <div class="projcard projcard-customcolor" style="--projcard-color: red;">
            <div class="projcard-innerbox">
              <img class="projcard-img" src="{{asset('/storage/machine_images/kerekpar.jpg') }}" />
              <div class="projcard-textbox">
                <div class="projcard-title">Kerékpár</div>
                <div class="projcard-subtitle"><a href="https://www.youtube.com/watch?v=NwwDBARCGgo" target="_blank">Így kell használni</a></div>
                <div class="projcard-bar"></div>
                <div class="projcard-description">
                  <article>
                    A konditermi kerékpár hatékony kardioedzést biztosít, erősíti a lábizmokat, 
                    segít a kalóriaveszteségben és fejleszti a szív- és érrendszeri állóképességet.
                  </article>
                </div>
                <div class="projcard-tagbox">
                  <span class="projcard-tag">Kerékpár</span>
                </div>
              </div>
            </div>
          </div>

          <div class="projcard projcard-customcolor" style="--projcard-color: red;">
            <div class="projcard-innerbox">
              <img class="projcard-img" src="{{asset('/storage/machine_images/elipszis.jpg') }}" />
              <div class="projcard-textbox">
                <div class="projcard-title">Elipszistréner</div>
                <div class="projcard-subtitle"><a href="https://www.youtube.com/watch?v=j38LNpTLwzY" target="_blank">Így kell használni</a></div>
                <div class="projcard-bar"></div>
                <div class="projcard-description">
                  <article>
                    Az elliptikus tréner (elipszistréner) egy hatékony kardioedzési eszköz, amely erősíti a láb- és karizmokat, segít a kalóriaveszteségben, 
                    javítja a szív- és érrendszeri állóképességet, és kíméli az ízületeket a visszaható mozgásának köszönhetően.
                  </article>
                </div>
                <div class="projcard-tagbox">
                  <span class="projcard-tag">Elipszistréner</span>
                </div>
              </div>
            </div>
        </div>
          
    </div>
</section>

<script>
    document.querySelectorAll(".projcard-description").forEach(function(box) {
    $clamp(box, {clamp: 6});
  });
</script>

@endsection