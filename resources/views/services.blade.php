@extends('layouts.master')
@section('content')
    <div class="mainContent container">
        <h1 class="mainHeading">Usluge</h1>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="bottom-gd">
                    <img src="{{ asset('/images/services/1.jpg') }}" alt="" class="serviceImage">
                    <h5 class="my-3 font-weight-bold">
                    Dijagnosticiranje i liječenje svih domaćih životinja
                    </h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="bottom-gd">
                    <img src="{{ asset('/images/services/2.png') }}" alt="" class="serviceImage">
                    <h5 class="my-3 font-weight-bold">
                        Mliječni karton
                    </h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="bottom-gd">
                    <img src="{{ asset('/images/services/3.jpg') }}" alt="" class="serviceImage">
                    <h5 class="my-3 font-weight-bold">
                        Hirurški zahvati
                    </h5>
                </div>
            </div>   
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="bottom-gd">
                    <img src="{{ asset('/images/services/4.jpg') }}" alt="" class="serviceImage">
                    <h5 class="my-3 font-weight-bold">
                        Vještačko osjemenjavanje krava
                    </h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="bottom-gd">
                    <img src="{{ asset('/images/services/5.jpg') }}" alt="" class="serviceImage">
                    <h5 class="my-3 font-weight-bold">
                    Vađenje krvi i izdavanje nalaza
                    </h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="bottom-gd">
                    <img src="{{ asset('/images/services/6.jpg') }}" alt="" class="serviceImage">
                    <h5 class="my-3 font-weight-bold">
                        Vakcinacija svih vrsta domaćih životinja
                    </h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="bottom-gd">
                    <img src="{{ asset('/images/services/7.jpg') }}" alt="" class="serviceImage">
                    <h5 class="my-3 font-weight-bold">
                        Ultrazvučna dijagnostika                    
                    </h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="bottom-gd">
                    <img src="{{ asset('/images/services/8.jpg') }}" alt="" class="serviceImage">
                    <h5 class="my-3 font-weight-bold">
                        Obilježavanje konja i pasa mikročipom                    
                    </h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="bottom-gd">
                    <img src="{{ asset('/images/services/9.jpeg') }}" alt="" class="serviceImage">
                    <h5 class="my-3 font-weight-bold">
                        Izrada programa iz oblasti poljoprivredne proizvodnje
                    </h5>
                </div>
            </div>
        </div>

    </div>
@endsection