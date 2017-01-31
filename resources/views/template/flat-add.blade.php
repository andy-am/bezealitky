@extends('layouts.master')

@section('title', 'Add Flat')
@section('bodyClass', 'add-flat')


@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <main style="padding-top: 90px">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="jumbotron">
                                <h2>
                                    Add Flat
                                </h2>
                                <p>
                                    This is a template for a simple marketing or informational website.
                                </p>
                            </div>
                            <div class="tabbable" id="tabs-800828">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="panel-19538">
                                        <div style="padding:30px">
                                            <form role="form">
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="title">
                                                                Title <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="title" />
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="description">
                                                                Description <span class="text-danger">*</span>
                                                            </label>
                                                            <textarea class="form-control" id="description" rows="5" name="textarea">default text</textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="firstName">
                                                                Offer type <span class="text-danger">*</span>
                                                            </label>
                                                            <select id="selectbasicddd" name="selectbasicddd" class="form-control">
                                                                <option value="0">Choose</option>
                                                                <option value="1">Predaj</option>
                                                                <option value="2">Kupa</option>
                                                                <option value="3">Prenajom</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="firstName">
                                                                Kind <span class="text-danger">*</span>
                                                            </label>
                                                            <select id="selectbasicddd" name="selectbasicddd" class="form-control">
                                                                <option value="0">Choose</option>
                                                                <option value="1">Dom</option>
                                                                <option value="2">Byt</option>
                                                                <option value="3">Priestor</option>
                                                                <option value="4">Objekt</option>
                                                                <option value="5">Rekreačný dom</option>
                                                                <option value="6">Pozemok</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="firstName">
                                                                Window type <span class="text-danger">*</span>
                                                            </label>
                                                            <select id="selectbasicddd" name="selectbasicddd" class="form-control">
                                                                <option value="0">Choose</option>
                                                                <option value="1">plastové</option>
                                                                <option value="2">francúzske</option>
                                                                <option value="3">drevenné</option>
                                                                <option value="4">euro</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="firstName">
                                                                Thig type <span class="text-danger">*</span>
                                                            </label>
                                                            <select id="selectbasicddd" name="selectbasicddd" class="form-control">
                                                                <option value="0">Choose</option>
                                                                <option value="1">rozostavané</option>
                                                                <option value="2">úplná rekonštrukcia</option>
                                                                <option value="3">čiatočná rekonštrukcia</option>
                                                                <option value="4">pôvodný stav</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="firstName">
                                                                Construction type <span class="text-danger">*</span>
                                                            </label>
                                                            <select id="selectbasicddd" name="selectbasicddd" class="form-control">
                                                                <option value="0">Choose</option>
                                                                <option value="1">tehla</option>
                                                                <option value="2">panel</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="firstName">
                                                                Heating type <span class="text-danger">*</span>
                                                            </label>
                                                            <select id="selectbasicddd" name="selectbasicddd" class="form-control">
                                                                <option value="0">podlahové</option>
                                                                <option value="1">elektrické</option>
                                                                <option value="2">plynové</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="availability_from">
                                                                Availability from <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="date" class="form-control" id="availability_from" />
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="price">
                                                                        Price <span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control" id="price" />
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="deposit">
                                                                        Deposit <span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control" id="deposit" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label for="price">
                                                                Commission <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="commission" />
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="rooms">
                                                                Rooms <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="rooms" />
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="country">
                                                                Country <span class="text-danger">*</span>
                                                            </label>
                                                            <select id="countrt" name="selectbasicddd" class="form-control">
                                                                <option value="0">Choose</option>
                                                                <option value="1">Slovak republic</option>
                                                                <option value="2">Czech republic</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="country">
                                                                District <span class="text-danger">*</span>
                                                            </label>
                                                            <select id="countrt" name="selectbasicddd" class="form-control">
                                                                <option value="0">Choose</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                    <label for="street">
                                                                        Street <span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control" id="street" />
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="street-num">
                                                                        Street num <span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control" id="street-num" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                    <label for="city">
                                                                        City <span class="text-danger">*</span>
                                                                    </label>
                                                                    <select id="selectbasicddd" name="city" class="form-control">
                                                                        <option value="0">Choose</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="zip">
                                                                        ZIP <span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control" id="zip" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="residential_area">
                                                                Residential area <span class="text-danger">*</span>
                                                            </label>
                                                            <select id="residential_area" name="city" class="form-control">
                                                                <option value="0">Choose</option>
                                                            </select>
                                                        </div>


                                                        <!-- Multiple Checkboxes -->
                                                        <div class="form-group row">
                                                            <label class="col-md-4 control-label" for="checkboxes">Choose</label>
                                                            <div class="col-md-4">
                                                                <div class="checkbox">
                                                                    <label for="checkboxes-0">
                                                                        <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                                                                        boiler
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label for="checkboxes-1">
                                                                        <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                                                                        garage
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label for="checkboxes-1">
                                                                        <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                                                                        pantry
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label for="checkboxes-1">
                                                                        <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                                                                        storage room
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label for="checkboxes-1">
                                                                        <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                                                                        elevator
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label for="checkboxes-1">
                                                                        <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                                                                        air conditioner
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label for="checkboxes-1">
                                                                        <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                                                                        disabled access
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label for="checkboxes-1">
                                                                        <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                                                                        cellar
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">
                                                    Add flat
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
            </div>
        </div>
    </div>

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