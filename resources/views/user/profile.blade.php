@extends('layouts.master')

@section('title', 'Profile')
@section('bodyClass', 'signup')


@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <main style="padding-top: 90px; padding-bottom: 90px">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">

                            <div>

                                <div class="jumbotron text-center" style="background-image: url('/assets/grf/profile/img001.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; color:#fff">
                                    <button class="btn btn-primary btn-xs" style="position: absolute; top: 20px; right: 35px;"><i class="fa fa-plus" aria-hidden="true"></i> Follow</button>
                                    <div>
                                        <img style="width: 150px; height: 150px" class="img-circle" src="https://pbs.twimg.com/profile_images/715755910732378112/vDqNKjCk.jpg">
                                    </div>
                                    <h2>
                                        {{ $user->first_name }} {{ $user->last_name }}
                                    </h2>
                                    <p style="font-size: 13px">
                                        {{--This is a template for a simple marketing or informational website.--}}
                                        {{ $user->about_me }}
                                    </p>
                                    <hr>
                                    <div>
                                        <h2><i class="fa fa-mobile" aria-hidden="true"></i></h2>
                                        @if($user->phone ) +421{{ $user->phone }} @else N/A @endif
                                    </div>
                                </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div style="margin-bottom: 40px">
                                                <h4 class="text-center">
                                                    <i class="fa fa-bookmark" aria-hidden="true"></i><br>
                                                    My Offers
                                                </h4>
                                                <div class="panel-group" id="panel-521981">
                                                    @foreach($user->myOffers as $index => $offer)
                                                        <div class="panel panel-default">
                                                            <div id="panel-element-379909" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            @if($index % 2)
                                                                                <img style="width: 100%" src="/images/dummy/01-full.png">
                                                                            @else
                                                                                <img style="width: 100%" src="/images/dummy/02-thumb.png">
                                                                            @endif
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <h4 style="margin:0"><a style="color:#636b6f" href="{{ url("/flat-detail", ["id" => $offer->id]) }}">Nehnuteľnosť Rodinný dom Predaj Dunajská Streda</a></h4>
                                                                            <div>Predaj: exkluzívny rodinný dom, kompletne zariadený, bazén so slanou vodou</div>
                                                                            <div><strong>{{ number_format($offer->price, 2, "."," ") }} &euro; | {{ number_format($offer->price * 30.126, 2, "."," ") }} sk </strong></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <div>
                                                <h4 class="text-center">
                                                    <i class="fa fa-heart" aria-hidden="true"></i><br>
                                                    My Favourites
                                                </h4>
                                                <div class="panel-group" id="panel-521981">
                                                    @foreach($user->favourites as $index => $favourite)
                                                        <div class="panel panel-default">
                                                            <div id="panel-element-379909" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            @if($index % 2)
                                                                                <img style="width: 100%" src="/images/dummy/03-thumb.png">
                                                                            @else
                                                                                <img style="width: 100%" src="/images/dummy/04-thumb.png">
                                                                            @endif
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <h4 style="margin:0"><a style="color:#636b6f" href="{{ url("/flat-detail/{id}") }}">Nehnuteľnosť Rodinný dom Predaj Dunajská Streda</a></h4>
                                                                            <div>Predaj: exkluzívny rodinný dom, kompletne zariadený, bazén so slanou vodou</div>
                                                                            <div><strong>{{ number_format($favourite->price, 2, "."," ") }} &euro; | {{ number_format($favourite->price * 30.126, 2, "."," ") }} sk </strong></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>



                                        </div>

                                        <div class="col-md-6">



                                            <div>
                                                <h4 class="text-center">
                                                    <i class="fa fa-users" aria-hidden="true"></i><br>
                                                    My Contacts
                                                </h4>
                                                <div class="panel-group" id="panel-521981">
                                                    <div class="panel panel-default">
                                                        <div id="panel-element-379909" class="panel-collapse collapse in">
                                                            <div class="panel-body text-center">
                                                                <div class="text-center" style="display: inline-block; margin: 0 10px">
                                                                    <img style="width: 60px; height: 60px" class="img-circle" src="http://img1.closermag.fr/var/closermag/storage/images/media/images-des-contenus/teen/articles/2014-12-08-justin-bieber-c-est-quoi-cette-couleur-de-cheveux/justin-bieber-voulait-il-ressembler-a-son-idole-eminem/3958732-1-fre-FR/Justin-Bieber-voulait-il-ressembler-a-son-idole-Eminem_square500x500.jpg">
                                                                    <h6 class="text-center">Martinko<br>Klingacik</h6>
                                                                </div>

                                                                <div class="text-center" style="display: inline-block; margin: 0 10px">
                                                                    <img style="width: 60px; height: 60px" class="img-circle" src="https://pbs.twimg.com/profile_images/536279638155075584/SJhCLck2.jpeg">
                                                                    <h6 class="text-center">Julia<br>Vlastofkova</h6>
                                                                </div>

                                                                <div class="text-center" style="display: inline-block; margin: 0 10px">
                                                                    <img style="width: 60px; height: 60px" class="img-circle" src="https://pbs.twimg.com/profile_images/554726386946953216/eadJzgEO.jpeg">
                                                                    <h6 class="text-center">Bi<br>Ajdzi</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                            </div>

                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection


@section('scripts')

@endsection