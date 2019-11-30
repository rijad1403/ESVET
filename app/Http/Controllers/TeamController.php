<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = array('enes' => [
            'id' =>"enes",
            'image' => asset('images/team/enes.jpg'),
            'nameSurname' => "Enes Selimović",
            'position' => "Doktor veterinarske medicine",
            'address' => "Ulice Nurije Pozderca bb, 77230 Velika Kladuša",
            'phone' => "037/772-002",
            'mobile' => "062/647-943",
            'email' => "esvet.vk@gmail.com",
            'dob' => "01.02.1964",
            'workingExperience' => [
                '1990 - 1992: Tehnolog u proizvodnji kunića – "Agrokomerc" d. d',
                '1995 - 1996: Direktor JP, Veterinarska stanica Velika Kladuša',
                '1997 - 2000: Direktor sektora primarne proizvodnje – "Agrokomerc" d. d',
                '2000 - 2003: Direktor mesne industrije Bihać - BIM',
                '2003 - 2006: Direktor marketing službe – "Agrokomerc" d. d',
                '2006 - 2007: V.D. generalnog direktora – "Agrokomerc" d. d',
                '2007 - 2011: Direktor marketing službe – "Agrokomerc" d. d',
                '2011 - 2013: Direktor i suvlasnik privatne tvrtke "EU – Vet" d. o. o.',
                '2013 - danas: Direktor i vlasnik privatne tvrtke "E.S. Vet" d. o. o'
            ],
            'education' => [
                '1980 - 1984: Gimnazija Bihać',
                '1984 - 1989: Veterinarski fakultet, Univerizitet u Sarajevu'
            ],
            'skills' => [
                'Osnovno poznavanje rada na računaru (Word,Excel)',
                'Vozačka dozvola B kategorije',
                'Ruski jezik: dobar nivo pisanja i čitanja, poznavanje osnovnih pojmova za komunikaciju',
                'Ovlašteni i licencirani veterinar za otpremu proizvoda animalnog porijekla u unutarnjem prometu BiH'
            ],
            'projects' => [
                'Program proizvodnje 800.000 koka nesilica – Agrokomerc d.d',
                'Konsultant u proizvodnji brojlera –KOKODŽADA DOO',
                'Konsultant u stvaranju održivih mini farmi 20.-i više grla'
            ],
            'additionalInfo' => [
                'Bračni status: oženjen, otac dvoje djece'
            ]],

            'elvedin' => [
                'id' =>"elvedin",
                'image' => asset('images/team/elvedin.jpg'),
                'nameSurname' => "Elvedin Klapuh",
                'position' => "Doktor veterinarske medicine",
                'address' => "Hazima Behrića bb, 77230 Velika Kladuša",
                'phone' => "",
                'mobile' => "",
                'email' => "pcelvedin@yahoo.com",
                'dob' => "31.03.1976",
                'workingExperience' => [
                    '2006 - danas: E.S. Vet doo Velika Kladuša, Velika Kladuša'
                ],
                'education' => [
                    'Veterinarski fakultet, Univerizitet u Sarajevu'
                ],
                'skills' => [
                    'Vozačka dozvola B i BE kategorije',
                    'Engleski jezik: nivo slušanja C1, čitanje C1, govor B2',
                    'Dobre komunikacijske vještine koje su stečene dugogodišnjom interakcijom sa vlasnicima životinja i
                    poslovnim partnerima,te sposobnosti za motivaciju drugih ljudi kroz timski rad',
                    'Odlične organizacijske i rukovoditeljske sposobnosti ,samostalno ali i u timu',

                ],
                'projects' => [
                    'Uvjerenje o završenom kursu za inseminatore',
                    'Certifikat - obuka službenih veterinara na temu:"Primjena općih
                    propisa iz oblasti uprave"',
                    'Certifikat-Dopunska obuka za provođenje DDD mjera',
                    'Certifikat -obuka za službene veterinare,na teme : Program mjera
                    zdravstvene zaštite,Izrada programa zaštite zdravlja
                    peradi,Ambulantni protokol-softver i ID životinja
                    (nepravilnosti);Sljedivost u proizvodnim objektima ;Kontrola prometa
                    i upotrebe lijekova;Program zaštite zdravlja peradi.',
                    'Certifikat -Obuka za službene veterinare ; na teme .Klasifikacija
                    djelatnosti za BiH;Fiskalizacija u oblasti veterinarstva;Mjere
                    zdravstvene zaštite;Zaštita životinja na farmama;Dobrobit i zaštita
                    životinja u transportu;Kontrole u objektima za preradu
                    mesa;Zbrinjavanje nus-proizvoda životinjskog porijekla;',
                    'Certifikat-međunarodni kongres ONE WORLD-ONE HEALTH-ONE
                    VISION',
                    'Certifikat-obuka za sl.veterinare ,na teme:Sticanje statusa
                    sl.slobodnog stada od bruceloze i tuberkuloze;Uvjeti odobravanja
                    mliječnih farmi za izvoz u EU;Deset koraka u istraživanju trovanja
                    hranom:'
                ],
                'additionalInfo' => []
            ],

            'sabahudin' => [
                'id' =>"sabahudin",
                'image' => asset('images/team/sabahudin.jpg'),
                'nameSurname' => "Sabahudin Galijašević",
                'position' => "Doktor veterinarske medicine",
                'address' => "Glavica 10, 77235 Mala Kladuša",
                'phone' => "",
                'mobile' => "00387 61 612818",
                'email' => "sabahudinqrt@gmail.com",
                'dob' => "15.3.1989",
                'workingExperience' => [
                    '2015 - danas: E.S. Vet doo Velika Kladuša, Velika Kladuša'
                ],
                'education' => [
                    '2008 - 2014: Veterinarski fakultet, Univerzitet u Sarajevu',
                    '2004 - 2008: SPŠ "SANUS FUTURUM", Sanski Most'
                ],
                'skills' => [
                    'Vozačka dozvola A1, A2, A, B1, B, BE, C1, C1E, C, CE kategorije',
                    'Engleski jezik: nivo slušanja A1, čitanje A1, govor A1',
                    'Njemački jezik: nivo slušanja A1, čitanje A1, govor A1',
                ],
                'projects' => [
                    'Veterinarska licenca za samostalno obavljanje veterinarske
                    djelatnosti',
                    'Certifikat za odslušane teme: 1. Službene kontrole u klaonici; 2.
                    Upoznavanje sa instrukcijom o evidenciji o izvršenom ante i post-
                    mortem pregledu i dostavljanju izvještaja; 3. Primjena propisa iz
                    oblasti nusproizvoda životinjskog porijekla i mogućnost korištenja
                    nusproizvoda životinjskog porijekla za dobijanje novih proizvoda i
                    prikupljanje podataka o količinama nusproizvoda životinjskog
                    porijekla u FBiH',
                    'Certifikat o završenoj obuci: Pristup i korištenje baze podataka
                    agencije za obilježavanje životinja'
                ],
                'additionalInfo' => []
            ],

            'ermin' => [
                'id' =>"ermin",
                'image' => asset('images/team/ermin.jpg'),
                'nameSurname' => "Ermin Pajić",
                'position' => "Doktor veterinarske medicine",
                'address' => "Ibrahima Mrzljaka 32/2, 77230 Velika Kladuša",
                'phone' => "",
                'mobile' => "061/619-871",
                'email' => "erminpajic8@gmail.com",
                'dob' => "18.06.1993",
                'workingExperience' => [
                    '2018 - danas: E.S. Vet doo Velika Kladuša, Velika Kladuša'
                ],
                'education' => [
                    '2012 - 2018: Univerzitet u Sarajevu, Veterinarski fakultet',
                    '2008 - 2012: JU Gimnazija Velika Kladuša'
                ],
                'skills' => [
                    'Poznavanje engleskog jezika',
                    'Poznavanje rada na racunaru: MS Office paket (Word, Excel, Power Point), te upotreba email-a',
                    'Komunikativna sam, društvena, odgovorna i ambiciozna osoba, spreman da se prilagodim situaciji u kojoj se nađem. 
                    Otvoren sam za sticanje novih iskustava i dodatno usavršavanje i ucenje. 
                    Za svoje prednosti smatram otvorenost i spremnost za timski rad, prihvatanje savjeta, 
                    te sposobnost brzog usvajanja novih znanja i vještina.'
                ],
                'projects' => [
                ],
                'additionalInfo' => [
                    'Trenutno u statusu pripravnika u "ES VET"'
                ]],

            'senada' => [
                'id' =>"senada",
                'image' => asset('images/team/senada.jpg'),
                'nameSurname' => "Senada Safić",
                'position' => "Veterinarski tehničar",
                'address' => "Ibrahima Mrzljaka 32/2, 77230 Velika Kladuša",
                'phone' => "",
                'mobile' => "",
                'email' => "",
                'dob' => "02.03.1967",
                'workingExperience' => [
                    '2013 - danas: E.S. Vet d.o.o , Velika Kladuša',
                    '2011 - 2013: E.U. Vet d.o.o, Velika Kladuša',
                    '2003 - 2011 godine: Administrativni poslovi u advokatskom uredu u Velikoj Kladuši',
                    '1987 - 1997: Tehničar u proizvodnji pilića, matičnih farmi brojlera, valionice i u 
                    dijagnostičkoj laboratoriji – Agrokomerc d.d',
                    '1986 - 1987: Tehničar u proizvodnji kunica „Kuneks“ – Agrokomerc d.d'
                ],
                'education' => [
                    '1986: Veterinarski tehničar, JU srednja škola „Tono Hrovat“'
                ],
                'skills' => [
                    'Administrativni i stručni poslovi',
                    'Poznavanje njemačkog jezika na osnovnom nivou', 
                    'Odlično poznavanje rada na računaru te ostalih stručnih i administrativnih poslova'
                ],
                'projects' => [
                ],
                'additionalInfo' => [
                    'Komunikativna i pozitivna osoba',
                    'Samohrana majka dvoje odrasle djece'
                ]],
                
                'edin' => [
                'id' =>"edin",
                'image' => asset('images/team/edin.jpg'),
                'nameSurname' => "Edin Žutić",
                'position' => "Veterinarski tehničar",
                'address' => "Konjodor bb 77245 Bužim",
                'phone' => "",
                'mobile' => "061 324 449",
                'email' => "",
                'dob' => "23.07.1979",
                'workingExperience' => [
                    '2017 - danas: Veterinarski tehničar u veterinarskoj stanici E.S. Vet d.o.o Bužim',
                    '2008 - 2017: Veterinarski tehničar u veterinarskoj stanici Meržđan, Bužim'
                ],
                'education' => [
                    '1999: Veterinarski tehničar, srednja škola Bužim'
                ],
                'skills' => [
                ],
                'projects' => [
                ],
                'additionalInfo' => [
                ]
            ]
        );
        return view('team', [
            'team' => $team
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
