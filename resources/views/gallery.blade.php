@extends('layouts.master')
@section('content')
    <div class="mainContent container">
        <h1 class="mainHeading">Galerija</h1>
        <div class="row">
        @foreach($images as $image)
            <div class="col-lg-4 col-md-6 col-sm-6 galImage">
                <div class="bottom-gd">
                    <a href="{{ $image }}" data-lightbox="gallery">
                        <img src="{{ $image }}" alt="" class="galleryImage">  
                    </a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection