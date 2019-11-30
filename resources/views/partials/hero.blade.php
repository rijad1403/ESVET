<div class="hero">
        <img src="{{ asset('images/hero.jpg') }}" class="heroImage">
        <a href="/"><img src="{{ asset('images/logo.png') }}" alt="" class="logo"></a>
        <button class="menuButton"><i class="fas fa-bars"></i></button>

        <div class="mainNavbar">
            <nav class="navbar navbar-expand-lg">
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/"><i class="fas fa-home"></i> Početna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/usluge"><i class="fas fa-paw"></i> Usluge</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/galerija"><i class="fas fa-images"></i> Galerija</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tim"><i class="fas fa-users"></i> Naš tim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/onama"><i class="fas fa-info-circle"></i> O nama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kontakt"><i class="fas fa-address-book"></i> Kontakt</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="heroText">
            <h2>Veterinarska stanica "E. S. Vet"</h2>
            <p>"E. S. Vet" s višegodišnjim iskustvom nudi sve usluge s područja liječenja, njege, 
                savjetovanja, dijagnostike, operativnih zahvata, rendgen, ultrazvuk te ostala savremena pomagala u pružanju 
                pomoći za Vaše kućne ljubimce.</p>
            <button class="heroButton"><i class="far fa-handshake"></i> Zakažite termin</button>
        </div>
    </div>


    <div id="myNav" class="overlay">
    <button class="closebtn"><i class="fas fa-times"></i></button>
        <div class="overlay-content">    
            <a href="/">Početna</a>
            <a href="/usluge">Usluge</a>
            <a href="/galerija">Galerija</a>
            <a href="/tim">Naš tim</a>
            <a href="/onama">O nama</a>
            <a href="/kontakt">Kontakt</a>
        </div>
    </div>