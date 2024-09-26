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
          <img class="projcard-img"  src="{{asset('/storage/food_images/biotech_whey_zero.png') }}"/>
          <div class="projcard-textbox">
            <div class="projcard-title">BioTechUSA  - Hydro Whey Zero</div>
            <div class="projcard-subtitle">Kombinált tejsavófehérje italpor</div>
            <div class="projcard-bar"></div>
            <div class="projcard-description">
              <article>
                A fehérje összetétele a hidrolizált tejsavófehérje és a tejsavó izolátum forrásokon túl, 
                hozzáadott L-glutamin és L-arginin aminosavakból áll. A hidrolizált tejsavófehérje lebontása egyszerűbb és
                gyorsabb a szervezetünk számára! A tejsavófehérje komplexhez hozzáadott glutamin és arginin aminosavak a szervezetünk által produkált tápanyagok, 
                de mégis a feltételesen esszenciális aminosavak kategóriájába tartoznak.
              </article>
            </div>
            <div class="projcard-tagbox">
              <span class="projcard-tag">BioTechUSA</span>
              <span class="projcard-tag">Fehérjepor</span>
            </div>
          </div>
        </div>
      </div>

        <div class="projcard projcard-blue">
          <div class="projcard-innerbox">
            <img class="projcard-img" src="{{asset('/storage/food_images/biotech_tabletta.png') }}"  />
            <div class="projcard-textbox">
              <div class="projcard-title">BioTechUSA - Multivitamin for Men</div>
              <div class="projcard-subtitle">Vitamin és ásványi anyag tabletta</div>
              <div class="projcard-bar"></div>
              <div class="projcard-description">
                <article>
                  A Multivitamin for Men egy összetett vitamin és ásványi anyag tabletta férfiak számára. 
                  Kiegyensúlyozott tápanyagokat biztosít az egészséges étrend kiegészítéseként, hangsúlyt fektetve egyes aminosavakra, 
                  különféle gyümölcs- és zöldségkivonatokra, valamint a B-vitaminokra. A növényi kivonatok közül kiemelhető a búzafű-kivonatot és a zöldtea- 
                  kivonatból származó flavonoidokat, valamint a bioflavonoidok forrásaként a keserű narancs kivonatát.
                </article>
              </div>
              <div class="projcard-tagbox">
                <span class="projcard-tag">BioTechUSA</span>
                <span class="projcard-tag">Vitamintabletta</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="projcard projcard-blue">
          <div class="projcard-innerbox">
            <img class="projcard-img" src="{{asset('/storage/food_images/biotech_csoki.png') }}" />
            <div class="projcard-textbox">
              <div class="projcard-title">BioTechUSA - Protein Bar fehérjeszelet</div>
              <div class="projcard-subtitle">Fehérjeszelet</div>
              <div class="projcard-bar"></div>
              <div class="projcard-description">
                <article>
                  20 grammos fehérjetartalma és alacsony cukortartalma miatt ideális választás azoknak, 
                  akik aktívan sportolnak és mindent megtesznek a feszes test érdekében, ugyanakkor remek alternatíva lehet 
                  fogyókúrázóknak is, étrendjük összeállítása során.
                </article>
              </div>
              <div class="projcard-tagbox">
                <span class="projcard-tag">BioTechUSA</span>
                <span class="projcard-tag">Fehérjeszelet</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="projcard projcard-customcolor" style="--projcard-color: gold;">
          <div class="projcard-innerbox">
            <img class="projcard-img" src="{{asset('/storage/food_images/puregold_kreatin.png') }}" />
            <div class="projcard-textbox">
              <div class="projcard-title">PUREGOLD PROTEIN - Creatine Monohydrate</div>
              <div class="projcard-subtitle">Kreatin italpor</div>
              <div class="projcard-bar"></div>
              <div class="projcard-description">
                <article>
                  A kreatin egy több aminosavból álló szerves vegyület. 
                  Az emberi szervezet több formában is tartalmazza. 
                  A normális szükséglet kb. 2-3g/nap egy kb. 90 kg ember esetén.
                  A legtöbb kreatint a lazacban (5g), heringben (8g), sertéshúsban (5g) és a marhahúsokban (5g)/1 kg találjuk.
                  Tudományosan bizonyítottan növeli a fizikai teljesítményt a rövid, sorozatos, nagy intenzitású mozgás során.
                  A kreatin kedvező hatása legalább napi 3g bevitelével érhető el.
                </article>
              </div>
              <div class="projcard-tagbox">
                <span class="projcard-tag">PUREGOLD PROTEIN</span>
                <span class="projcard-tag">Kreatin</span>
              </div>
            </div>
          </div>
        </div>

        <div class="projcard projcard-customcolor" style="--projcard-color: gold;">
          <div class="projcard-innerbox">
            <img class="projcard-img" src="{{asset('/storage/food_images/puregold_pre.png') }}" />
            <div class="projcard-textbox">
              <div class="projcard-title">PUREGOLD PROTEIN - The Beast</div>
              <div class="projcard-subtitle">Edzés előtti energizáló</div>
              <div class="projcard-bar"></div>
              <div class="projcard-description">
                <article>
                  A The Beast egy komplex edzés előtti formula, béta-alaninnal, természetes koffeinnel, növényi kivonatokkal, 
                  aminosavakkal és vitaminokkal.
                </article>
              </div>
              <div class="projcard-tagbox">
                <span class="projcard-tag">PUREGOLD PROTEIN</span>
                <span class="projcard-tag">Edzés előtti energizáló</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="projcard projcard-customcolor" style="--projcard-color: darkorange;">
          <div class="projcard-innerbox">
            <img class="projcard-img"  src="{{asset('/storage/food_images/gymbeam_vitality.png') }}"/>
            <div class="projcard-textbox">
              <div class="projcard-title">Vitality Complex – GymBeam</div>
              <div class="projcard-subtitle">Funkcionális táplálékkiegészítő</div>
              <div class="projcard-bar"></div>
              <div class="projcard-description">
                <article>
                  A Vitality Complex egy funkcionális táplálékkiegészítő a mindennapi egészség és vitalitás megőrzéséhez. 
                  Ez a táplálékkiegészítő 24 gondosan válogatott aktív összetevőt tartalmaz, köztük 10 vitamint, 5 ásványi anyagot 
                  és emésztőenzimeket. Olyan mikrotápanyagok komplex keverékét tartalmazza, amelyek részt vesznek olyan 
                  létfontosságú testi funkciókban, mint a regeneráció, az emésztés, az immunreakció és az idegrendszeri aktivitás.
                </article>
              </div>
              <div class="projcard-tagbox">
                <span class="projcard-tag">GymBeam</span>
                <span class="projcard-tag">Funkcionális táplálékkiegészítő tabletta</span>
              </div>
            </div>
          </div>
        </div>

        <div class="projcard projcard-customcolor" style="--projcard-color: darkorange;">
          <div class="projcard-innerbox">
            <img class="projcard-img" src="{{asset('/storage/food_images/gymbeam_cink.png') }}" />
            <div class="projcard-textbox">
              <div class="projcard-title">Cink – GymBeam</div>
              <div class="projcard-subtitle">Cinktabletta</div>
              <div class="projcard-bar"></div>
              <div class="projcard-description">
                <article>
                  A Cink egy olyan ásványi anyag, amely több száz biológiai folyamatban vesz részt a szervezetben. 
                  Hozzájárul az immunrendszer normál működéséhez, a csontok, a haj, a körmök és a bőr megfelelő állapotához, 
                  valamint a vér normál tesztoszteronszintjéhez. Így ideális mindazok számára, akik gondoskodni akarnak 
                  egészségükről és vitalitásukról.
                </article>
              </div>
              <div class="projcard-tagbox">
                <span class="projcard-tag">GymBeam</span>
                <span class="projcard-tag">Cinktabletta</span>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      
</section>

@endsection