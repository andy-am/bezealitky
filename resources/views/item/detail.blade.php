@extends('layouts.master')

@section('title', 'Sign Up')
@section('bodyClass', 'signup')


@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <main style="padding-top: 90px">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="jumbotron">
                                <h1 style="font-size: 26px">
                                    {{ $flat->title }} | {{ $flat->itemKind->name }} | {{ $flat->itemType->name }} | {{--Nehnuteľnosť Rodinný dom Predaj Dunajská Streda--}}
                                </h1>
                                <p>
                                    Predaj: exkluzívny rodinný dom, kompletne zariadený, bazén so slanou vodou,priamo v Dunajskej Strede
                                </p>
                                <div class="row" style="font-size:17px; margin-bottom: 15px">
                                    <div class="col-md-6">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-6">
                                        <i class="fa fa-sun-o" aria-hidden="true"></i>
                                        <i class="fa fa-tree" aria-hidden="true"></i>
                                        <i class="fa fa-wifi" aria-hidden="true"></i>
                                        <i class="fa fa-train" aria-hidden="true"></i>
                                        <i class="fa fa-futbol-o" aria-hidden="true"></i>
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img style="width: 100%" src="http://www.archello.com/sites/default/files/imagecache/header_detail_large/architecturalvisualizationluxuryhouse2.jpg">
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>Druh / Typ / Typ Ponuky</th>
                                                <td>{{ $flat->itemKind->name }} / {{ $flat->itemType->name }} / {{ $flat->itemOffer->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Ulica</th>
                                                <td>{{ $flat->street }} {{ $flat->street_number }}</td>
                                            </tr>
                                            <tr>
                                                <th>Mesto</th>
                                                <td>{{ $flat->city}}</td>
                                            </tr>
                                            <tr>
                                                <th>Celková úžitková plocha</th>
                                                <td>{{ $flat->residential_area }} m<sup>2</sup></td>
                                            </tr>
                                            <tr>
                                                <th>Cena</th>
                                                <td><span style="font-size: 26px">{{ number_format($flat->price, 2, "."," ") }} &euro; | {{ number_format($flat->price * 30.126, 2, "."," ") }} sk </span></td>
                                            </tr>
                                        </table>

                                        <div class="btn-group btn-group-md pull-left" style="margin-right: 15px">

                                            <button data-toggle="tooltip" type="button" title="@Lang("detail.buttons.titles.gallery")" class="btn btn-default"><i class="fa fa-picture-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" type="button" title="@Lang("detail.buttons.titles.neviem")" class="btn btn-default"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" type="button" title="@Lang("detail.buttons.titles.print")" class="btn btn-default"><i class="fa fa-print" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" type="button" title="@Lang("detail.buttons.titles.environment")" class="btn btn-default"><i class="fa fa-leaf" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" type="button" title="@Lang("detail.buttons.titles.share")" class="btn btn-default"><i class="fa fa-share" aria-hidden="true"></i></button>
                                        </div>

                                        <div>
                                            <button type="button" class="btn btn-primary">Buy now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>

                                <div style="margin-bottom: 25px">
                                    <p>
                                        Príjemné, bezstarostné bývanie - zariadený, priestranný rodinný dom!

                                        Ak aj Vy patríte medzi ľudí, ktorí žijú v neustálom zhone a radi by sa nasťahovali do hotového.
                                        Tak toto bude asi "láska na prvý pohľad". Jednoducho sa nasťahujte so svojimi osobnými vecami...

                                        Remax ponúka na predaj rodinný dom priamo v Dunajskej Strede, vo veľmi tichej, kľudnej časti mesta, blízko k termálneho kúpaliska pritom blízko k centru - bez bočných susedov,na pozemku s rozlohou 771 m2.

                                        Táto nehnuteľnosť sa skladá - a to: 5 izbový rodinný dom, a vedľajšia stavba - budova na uskladnenie -napr. náradia, veľký prístrešok na autá, zastrešený altánok na príjemné posedenie.
                                    </p>
                                </div>

                                <table class="table table-striped">
                                    <tr>
                                        <th class="col-md-4">Druh / Typ / Typ Ponuky</th>
                                        <td>{{ $flat->itemKind->name }} / {{ $flat->itemType->name }} / {{ $flat->itemOffer->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ulica</th>
                                        <td>{{ $flat->street . " " . $flat->street_number  }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mesto</th>
                                        <td>{{ $flat->city }}</td>
                                    </tr>
                                    <tr>
                                        <th>Celková úžitková plocha</th>
                                        <td>{{ $flat->residential_area }} m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <th>Cena</th>
                                        <td>{{ number_format($flat->price, 2, "."," ") }} &euro; | {{ number_format($flat->price * 30.126, 2, "."," ") }} sk </td>
                                    </tr>
                                </table>

                                <div style="margin-bottom: 25px">
                                    <p>
                                        Dom bol postavený z nízkoenergetických materiálov -systém VELOX, kúrenie je napojené na plynový kotol - podlahové kúrenie s kombináciou radiátorov v izbách, klimatizačné zariadenie je umiestnené v obývacej izbe. Strop domu je vybetónovaný.
                                        Ďalšou veľkou výhodou domu sú nízke režijné náklady na bývanie a to pre 4 člennú rodinu cca 110 Euro!
                                        Kompletné zariadenie ostáva v dome, tak ako to vidíte fotkách...
                                    </p>
                                </div>

                            </div>

                            <div style="margin-top: 35px; margin-bottom: 45px">
                                <div id="map" style="width: 100%; height: 50vh; background-color: grey;"></div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
    </div>
    </div>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Sign In</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')

@endsection