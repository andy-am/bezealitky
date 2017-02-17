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
                                <h2>Add Flat</h2>
                                <p>This is a template for a simple marketing or informational website.</p>
                            </div>

                            <div style="padding:30px">
                                <form action="/flat-add" class="ajax" method="post" role="form">
                                    <div class="page-header text-center" style="margin: 0 0 20px">
                                        <h2>Basics</h2>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="offer_type">Offer type <span class="text-danger">*</span></label>
                                                <select class="form-control" id="offer_type" name="offer_type_id">
                                                    @foreach($offers as $offer)
                                                        <option value="{{$offer->id}}">{{$offer->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kind">Kind <span class="text-danger">*</span></label>
                                                <select class="form-control" id="kind" name="kind">
                                                    @foreach($kinds as $kind)
                                                        <option value="{{$kind->id}}">{{$kind->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="title">Title <span class="text-danger">*</span></label> <input class="form-control" id="title" name="title" type="text">
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description <span class="text-danger">*</span></label>
                                                <textarea class="form-control" id="description" name="description" rows="5">default text</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="page-header text-center" style="margin: 0 0 20px">
                                        <h2>Details</h2>
                                    </div>

                                    <div class="page-header text-center" style="margin: 0 0 20px">
                                        <h4>About</h4>
                                    </div>

                                    <div class="form-group">
                                        <label for="thing">Thing type <span class="text-danger">*</span></label>
                                        <select class="form-control" id="selectbasicddd" name="thing">
                                            @foreach($things as $thing)
                                                <option value="{{$thing->id}}">{{$thing->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label for="rooms">Rooms <span class="text-danger">*</span></label> <input class="form-control" id="rooms" type="text">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="usable_area">Usable area (m<sup>2</sup>) <span class="text-danger">*</span></label>
                                                <input class="form-control" id="usable_area" name="usable_area" type="text">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="built-up_area">Built-up area (m<sup>2</sup>) <span class="text-danger">*</span></label>
                                                <input class="form-control" id="built-up_area" name="built-up_area" type="text">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="land_area">Land area (m<sup>2</sup>) <span class="text-danger">*</span></label>
                                                <input class="form-control" id="land_area" name="land_area" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="window_type">Window type <span class="text-danger">*</span></label> <select class="form-control" id="window_type" name="window_type">
                                                    @foreach($windows as $window)
                                                        <option value="{{$window->id}}">{{$window->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="construction_type">Construction type <span class="text-danger">*</span></label> <select class="form-control" id="construction_type" name="construction_type">
                                                    @foreach($constructions as $construction)
                                                        <option value="{{$construction->id}}">{{$construction->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="heating_type">Heating type <span class="text-danger">*</span></label> <select class="form-control" id="heating_type" name="heating_type">
                                                    @foreach($heatings as $heating)
                                                        <option value="{{$heating->id}}">{{$heating->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group text-center">
                                        <label class="control-label" for="checkboxes">Choose</label>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="checkbox-inline">
                                                    <label for="boiler"><input id="boiler" name="boiler" type="checkbox" value="1"> boiler</label>
                                                </div>
                                                <div class="checkbox-inline">
                                                    <label for="garage"><input id="garage" name="garage" type="checkbox" value="2"> garage</label>
                                                </div>
                                                <div class="checkbox-inline">
                                                    <label for="pantry"><input id="pantry" name="pantry" type="checkbox" value="3"> pantry</label>
                                                </div>
                                                <div class="checkbox-inline">
                                                    <label for="storage"><input id="storage" name="storage_room" type="checkbox" value="4"> storage room</label>
                                                </div>
                                                <div class="checkbox-inline">
                                                    <label for="elevator"><input id="elevator" name="elevator" type="checkbox" value="5"> elevator</label>
                                                </div>
                                                <div class="checkbox-inline">
                                                    <label for="air_conditioner"><input id="air_conditioner" name="air_conditioner" type="checkbox" value="6"> air conditioner</label>
                                                </div>
                                                <div class="checkbox-inline">
                                                    <label for="disabled_access"><input id="disabled_access" name="disabled_access" type="checkbox" value="7"> disabled access</label>
                                                </div>
                                                <div class="checkbox-inline">
                                                    <label for="cellar"><input id="cellar" name="cellar" type="checkbox" value="8"> cellar</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="page-header text-center" style="margin: 0 0 20px">
                                        <h4>Location</h4>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <label for="street">Street <span class="text-danger">*</span></label> <input class="form-control" id="street" name="street" type="text">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="street_number">Street number <span class="text-danger">*</span></label> <input class="form-control" id="street_number" name="street_number" type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label for="county_id">County <span class="text-danger">*</span></label> <select class="form-control select2" id="county_id" name="county_id">
                                                            @foreach($counties as $county)
                                                                <option value="{{$county->id}}">{{$county->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="district_id">District <span class="text-danger">*</span></label> <select class="form-control select2" id="district_id" name="district_id">
                                                            @foreach($districts as $district)
                                                                <option value="{{$district->id}}">{{$district->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="city">City <span class="text-danger">*</span></label> <select class="form-control select2" id="city_id" name="city_id">
                                                            @foreach($cities as $city)
                                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="zip">ZIP <span class="text-danger">*</span></label> <input class="form-control" id="zip" name="zip" type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="country">Country <span class="text-danger">*</span></label>
                                                <select class="form-control" id="country" name="country">
                                                    @foreach($countries as $country)
                                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="page-header text-center" style="margin: 0 0 20px">
                                        <h2>Price</h2>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="deposit">Price <span class="text-danger">*</span></label>
                                                        <div class="input-group"> <span class="input-group-addon">&euro;</span> <input class="form-control" aria-label="Amount (to the nearest dollar)"> <span class="input-group-addon">.00</span> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>&nbsp;</label>
                                                        <select class="form-control" id="city" name="city">
                                                            <option value="0">&euro;</option>
                                                            <option value="0">&euro;/m<sup>2</sup></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="deposit">Deposit <span class="text-danger">*</span></label> <input class="form-control" id="deposit" name="deposit" type="text">
                                        </div>
                                        <div class="col-md-4">

                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-6">





                                            <div class="form-group">
                                                <label for="availability_from">Availability from <span class="text-danger">*</span></label> <input class="form-control" id="availability_from" name="availability_from" type="date">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="commission">Commission <span class="text-danger">*</span></label> <input class="form-control" id="commission" name="commission" type="text">
                                            </div>




                                        </div>
                                    </div><button class="btn btn-primary" type="submit">Add flat</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div><!-- Modal -->
    <div aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Sign In</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="email">Email address:</label> <input class="form-control" id="email" type="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label> <input class="form-control" id="pwd" type="password">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div><button class="btn btn-primary" type="submit">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')

@endsection