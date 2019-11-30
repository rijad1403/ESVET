@extends('layouts.master')
@section('content')

    <div class="mainContent container" id="contactForm">
        <h1 class="mainHeading">Kontakt</h1>
        <div class="row">
            <div class="col-12">
                <form action="/sendMail" method="POST">
                    <div class="form-group">
                        @csrf
                        <label for="exampleNameSurname">Vaše ime i prezime*</label>
                        <input type="text" name="name" class="form-control" required title="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Vaš e-mail*</label>
                        <input type="email" name="mail" class="form-control" required title="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Vaše pitanje*</label>
                        <input type="text" name="subject" class="form-control" required title="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Vaša poruka*</label>
                        <textarea class="form-control" name="body" rows="10" required title=""></textarea>
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted">Polja sa oznakom (*) moraju biti popunjena.</small>
                    </div>
                    <button type="submit" class="sendEmail"><i class="far fa-envelope"></i> Pošalji</button>
                </form>
            </div>
            <div class="col-12 mainContent">
                <h1 class="mainHeading">Posjetite nas</h1>
                    <p><i class="fas fa-clinic-medical"></i> Veterinarska stanica E. S. Vet</p>
                    <p><i class="fas fa-map-marker-alt"></i> Ulica Prve muslimanske brigade bb, 77230 Velika Kladuša</p>
                    <p><i class="fas fa-phone"></i> 037 - 772 - 002</p>
                    <p><i class="fas fa-mobile-alt"></i> 062 - 647 - 943</p>
                    <p><i class="fas fa-envelope"></i> esvet.vk@gmail.com</p>
                    <p><i class="fas fa-user-clock"></i> Ponedjeljak - Nedjelja: 07h - 15h (redovne intervencije), 00h - 24h (hitne intervencije)</p>
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas" class="map" src="https://maps.google.com/maps?q=e.s.%20vet%20d.o.o&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe>
                </div>
                <style>
                    .gmap_canvas, iframe {
                        background:none!important;
                        width: 100%;
                        height: 500px;
                    }
                </style>
            </div>
        </div>
    </div>

@endsection
