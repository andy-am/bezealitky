@extends('layouts.master')

@section('title', 'Homepage')
@section('bodyClass', 'homepage')


@section('main')
    <header class="home" style="background-image:url('http://placehold.it/2000x450/f2f2f2/?text=&nbsp;');">
        <div class="container">
            <div class="col-sm-4 col-xs-6">
                logo
            </div>

            <div class="mobileIcon">
                <span class="material-icons">person</span>
            </div>

            <div class="col-sm-8">
                <ul class="links">
                    <li><a href="#">Registrovat</a></li>
                    <li><a href="#">Prihlasit</a></li>
                </ul>
            </div>

            <div class="col-sm-12">
                <h1>Bývaj kdekoľvek,<br>kde chceš</h1>
            </div>

            <div class="homeSearch">
                <form action="#">
                    <input type="text" name="address" placeholder="Zadaj adresu" class="address">
                    <div class="localise"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="hide-on-mobile">Lokalizovať</span></div>
                    <div class="clearfix">
                        <input name="search_query" type="text" class="searchMenu" placeholder="Zadaj lokalitu...">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i> Vyhladat</button>
                    </div>
                </form>
            </div>
        </div>
    </header>
@endsection


@section('scripts')

@endsection