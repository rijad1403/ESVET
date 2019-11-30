@extends('layouts.master')
@section('content')

    <div class="mainContent container">
        <h1 class="mainHeading">Dobrodošli u "E. S. Vet" veterinarsku stanicu</h1>
        <p>E. S. Vet d.o.o. je veterinarska stanica ​koja je potpuno posvećena dobrobiti Vaših ljubimaca. 
            Nudimo preventivnu njegu, opću kirurgiju, zubne usluge, dijagnostičko snimanje, laboratorijska ispitivanja na licu mjesta, 
            identifikaciju mikro čipova, farmaceutske proizvode...
        </p>
        <p>Naš tim nastoji omogućiti dobrobit svih kućnih ljubimaca. Zbog posvećenosti jedinstvenim potrebama svakog pacijenta, cilj 
            nam je da iskoristimo najnovija dostignuća u veterinarskoj medicini i da stalno poboljšavamo naš standard njege. Svakodnevno 
            se trudimo da iskoristimo svoje vještine, znanje i saosećanje da bismo služili Vama i Vašem ljubimcu.
        </p>
        <p>
            Veterinarska stanica E. S. VET d.o.o. je izgrađena 2010. godine kako bi vlasnicima kućnih ljubimaca u gradu i okolini ponudila 
            svaku uslugu neophodnu za njihovog ljubimca - sve pod jednim krovom.
        </p>
        <img src=" {{ asset('/images/cuteDog.jpg') }}" style="width: 80%;">
    </div>

@endsection