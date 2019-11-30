@extends('layouts.master')
@section('content')

    <div class="mainContent container">
        <h1 class="mainHeading">Naš tim</h1>
        <div class="row">
            @foreach($team as $teamMember)
                <div class="col-lg-4 teamCard">
                    <a href="#{{ $teamMember['id'] }}" class="link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="{{ $teamMember['id'] }}">
                        <div class="col-12">
                            <img src="{{ $teamMember['image'] }}">
                            <h4>
                                {{ $teamMember['nameSurname'] }}
                            </h4>
                            <h6>
                                {{ $teamMember['position']}}
                            </h6>
                        </div>
                    </a>
                    <div class="col-12 collapse" id="{{ $teamMember['id'] }}" style="text-align: left;">
                        <p style="text-align: left"><strong>Ime i prezime: </strong>{{ $teamMember['nameSurname'] }};</p>
                        <p style="text-align: left"><strong>Zvanje: </strong>{{ $teamMember['position'] }};</p>
                        
                        @if(strlen($teamMember['address']) > 0)
                            <p style="text-align: left"><strong>Adresa: </strong>{{ $teamMember['address'] }};</p>
                        @endif

                        @if(strlen($teamMember['phone']) > 0)
                            <p style="text-align: left"><strong>Telefon: </strong>{{ $teamMember['phone'] }};</p>
                        @endif

                        @if(strlen($teamMember['mobile']) > 0)
                            <p style="text-align: left"><strong>Mobitel: </strong>{{ $teamMember['mobile'] }};</p>
                        @endif

                        @if(strlen($teamMember['email']) > 0)
                            <p style="text-align: left"><strong>E-mail: </strong>
                                <u>
                                    <a href="{{ $teamMember['email'] }}">{{ $teamMember['email'] }};</a>
                                </u>
                            </p>
                        @endif

                        @if(strlen($teamMember['dob']) > 0)
                            <p><strong>Datum rođenja: </strong>{{ $teamMember['dob'] }};</p>
                        @endif


                        @if(count($teamMember['workingExperience']) > 0)
                        <p><strong>Radno iskustvo: </strong></p>
                            <ul>
                                @foreach($teamMember['workingExperience'] as $workingExperience )
                                    <li style="text-align: left;">{{ $workingExperience }};</li>
                                @endforeach
                            </ul>                        
                        @endif

                        @if(count($teamMember['education']) > 0)
                            <p><strong>Obrazovanje:</strong></p>
                                <ul>
                                    @foreach($teamMember['education'] as $education)
                                        <li style="text-align: left;">{{ $education }};</li>
                                    @endforeach
                                </ul>
                        @endif

                        @if(count($teamMember['skills']) > 0)
                            <p><strong>Znanja, vještine, poznavanje stranih jezika:</strong></p>
                                <ul>
                                    @foreach($teamMember['skills'] as $skill)
                                        <li style="text-align: left;">{{ $skill }};</li>
                                    @endforeach
                                </ul>
                        @endif

                        @if(count($teamMember['projects']) > 0)
                            <p><strong>Projekti, certifikati:</strong></p>
                            <ul>
                                @foreach($teamMember['projects'] as $project)
                                    <li>{{ $project }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if(count($teamMember['additionalInfo']) > 0)
                            <p><strong>Dodatne informacije:</strong></p>
                            <ul>
                                @foreach($teamMember['additionalInfo'] as $info)
                                    <li>{{ $info }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection