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
                                <h2>
                                    Registration
                                </h2>
                                <p>
                                    This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
                                </p>
                            </div>
                            <div class="tabbable" id="tabs-800828">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#panel-19538" data-toggle="tab">Person</a>
                                    </li>
                                    <li>
                                        <a href="#panel-270459" data-toggle="tab">Company</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="panel-19538">
                                        <div style="padding:30px">
                                            <form role="form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName">
                                                                First name <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="firstName" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="lastName">
                                                                Last name <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="lastName" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">
                                                                Email <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="email" class="form-control" id="email" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone">
                                                                Phone <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="phone" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">
                                                                Password <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">
                                                                Repeat Password <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="aboutMe">
                                                                About
                                                            </label>
                                                            <textarea class="form-control" id="aboutMe"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" /> I agree with <a href="#">terms</a> and conditions
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">
                                                    Sign Up
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="panel-270459">
                                        <div style="padding:30px">
                                            <form role="form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName">
                                                                Company name <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="firstName" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">
                                                                Email <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="email" class="form-control" id="email" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone">
                                                                Phone <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="phone" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="street">
                                                                Street <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="street" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="street">
                                                                City <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="city" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="zip">
                                                                Zip Code <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="zip" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">
                                                                Password <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">
                                                                Repeat Password <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="aboutMe">
                                                                About
                                                            </label>
                                                            <textarea class="form-control" id="aboutMe"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" /> I agree with <a href="#">terms</a> and conditions
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">
                                                    Sign Up
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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