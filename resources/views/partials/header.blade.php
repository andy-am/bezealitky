<header style="position: fixed; width: 97%; margin: auto; left: 0; right: 0; z-index: 999;">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button> <a class="navbar-brand" href="#"><i class="fa fa-home" aria-hidden="true"></i> Flatter</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Flats<strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><span style="display: inline-block; width: 150px;">Garsonka</span> <span class="badge">1085</span></a>
                        </li>
                        <li>
                            <a href="#"><span style="display: inline-block; width: 150px;">Dvojgarsonka</span> <span class="badge">668</span></a>
                        </li>
                        <li>
                            <a href="#"><span style="display: inline-block; width: 150px;">1 izbovy byt</span> <span class="badge">3727</span></a>
                        </li>
                        <li>
                            <a href="#"><span style="display: inline-block; width: 150px;">2 izbovy byt</span> <span class="badge">9858</span></a>
                        </li>
                        <li>
                            <a href="#"><span style="display: inline-block; width: 150px;">3 izbovy byt</span> <span class="badge">12172</span></a>
                        </li>
                        <li>
                            <a href="#"><span style="display: inline-block; width: 150px;">4 izbovy byt</span> <span class="badge">3153</span></a>
                        </li>
                        <li>
                            <a href="#"><span style="display: inline-block; width: 150px;">5 izbovy byt a viac</span> <span class="badge">528</span></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Houses<strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><span style="display: inline-block; width: 150px;">Chata</span> <span class="badge">3757</span></a>
                        </li>
                        <li>
                            <a href="#"><span style="display: inline-block; width: 150px;">Chalopa</span> <span class="badge">1830</span></a>
                        </li>
                        <li>
                            <a href="#"><span style="display: inline-block; width: 150px;">Rodinny dom</span> <span class="badge">30249</span></a>
                        </li>
                        <li>
                            <a href="#"><span style="display: inline-block; width: 150px;">Rodinna vila</span> <span class="badge">779</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Objects</a>
                </li>
                <li>
                    <a href="#">Land</a>
                </li>

            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" />
                </div>
                <button type="submit" class="btn btn-default">
                    Search
                </button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell" aria-hidden="true"></i> Notifications<strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Action</a>
                        </li>
                        <li>
                            <a href="#">Another action</a>
                        </li>
                        <li>
                            <a href="#">Something else here</a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="#">Separated link</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    @if(Auth::user())
                        <a href="{{ url("/profile/" . Auth::user()->id) }}"><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->email }}</a>
                    @else
                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user" aria-hidden="true"></i> Sign in</a>
                    @endif
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars" aria-hidden="true"></i> Menu<strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Action</a>
                        </li>
                        <li>
                            <a href="#">Another action</a>
                        </li>
                        <li>
                            <a href="#">Something else here</a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="#">Separated link</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>