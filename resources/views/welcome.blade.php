@extends('layouts.app')

@section('title')
    O meni
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light">Dobrodosli na moj sajt</h1>
    </div>
@endsection

@section('content')

<div class="container mb-5">

    <article class="mt-5">
        <h2>Nešto o meni</h2>
        <div class="row">
            <div class="col-md-8 mt-5">


                <p>Poštovanje, ja sam Nenad Savkić, ovaj sajt sam osmislio u cilju predstavljanja
                    sebe i svog znanja iz oblasti programiranja. Završio sam srednju mašinsku školu
                    , smer "Pogonski tehničar", radio sam razne poslove u životu do sada, radio sam
                 kao operater na CNC mašini u Brodogradilištu, i magacinske poslove, zatim u obezbedjenju,
                a trenutno sam zaposlen u jednoj firmi koja se bavi proizvodnjom nameštaja.
                Ali baveći se ovim poslovima, nikada nisam video sebe dugoročno u tim profesijama,
                nisam osetio nikakvu ličnu satisfakciju, niti mogućnost rasta i napredovanja u kompaniji.
                Pre oko 3 godine, iz čiste radoznalosti, napravio sam svoje prve korake iz oblasti programiranja.
                Bilo je to prilično nespretno, da tako kažem, jer nisam znao ni odakle bih trebao početi.
                Niko mi nije rekao da pre učenja Php-a, treba prvo savladati HTML i CSS. Kao što rekoh
                prvi koraci bili su iz radoznalosti, da vidim da li to meni "leži", da li ja to mogu da naučim,
                a onda sam video da se to meni sviđa, i da bih možda mogao spojiti lepo i korisno.

                Pohadjajući razne kurseve online, na srpskom i na engleskom jeziku, upoznao sa osnovama web dizajna i programiranja.
                Trenutno sam se fokusirao na Php, MySql i Laravel, i ovaj sajt je pravljen upravo u Laravel-u, ali takodje
                poznajem solidno HTML, CSS, Bootstrap, JavaScript, Git.
                </p>
                <p>Ovaj sajt je zamišljen tako da predstavi mene, i moje do sada stečeno znanje iz programiranja i web dizajna,
                    odnosno on pretstavlja moju radnu biografiju, jer ja nemam do sada radnog iskustva u IT-u.</p>
                <p>Na ovom sajtu možete pogledati oglase iz kategorija: 'Cars', 'Phones' i 'Computers', naravno ovo nisu pravi oglasi
                    već samo simulacija jednog takvog sajta, možete se registrovati kao novi korisnik, logovati, postaviti sliku na svoj profil,
                    kreirati novi oglas, editovati svoje postojeće oglase, obrisati, itd...
                </p>
                <p> Ako Vi gledate ovaj sajt, to verovatno znači da sam konkurisao za neku poziciju u
                    Vašoj kompaniji, pa eto, čitajući ove redove, možete steći neke prve utiske o meni
                     i proceniti da li moja biografija zadovoljava potrebe tražene pozicije. </p>
                <p>U nadi da ćemo ostvariti uspešnu saradnju.</p>
                <p>Srdačno,</p><br>
                <p>Nenad Savkić</p>



            </div>
            <div class="col-md-4 mt-5">
               <img  src="/me/ja.jpg" alt="ja" class="img-fluid img-thumbnail rounded p-3 ">
            </div>
        </div>


    </article>
    <div class=" container row mt-5 contact">
        <div class="col-6 offset-3 mt-3 ">
            <p>Mozete me kontaktirati putem maila: <span>savkicn@gmail.com</span></p>
            <p>Ili putem telefona: 061 174 09 89</p>
       </div>
    </div>

</div>

@endsection
