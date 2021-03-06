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
                            <div class="jumbotron" style="background-image: url('/assets/grf/interest/img001.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; color:#fff">
                                <h2>North star apartments by nice architects feature extruded balconies</h2>
                                <p>slovakian architectural studio nice architects has completed a residential complex entitled ‘north star apartments’. situated in the center of senec, a popular summer resort, the development takes its name from an adjacent observatory and the building’s exact north-south orientation.</p>
                                <a class="btn btn-primary btn-lg">Read more</a>
                            </div>
                            <div style="padding:30px">

                                <div class="nav-tabs-center">

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Flats</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Houses</a></li>
                                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Objects</a></li>
                                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Land</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">...</div>
                                        <div role="tabpanel" class="tab-pane" id="profile">...</div>
                                        <div role="tabpanel" class="tab-pane" id="messages">...</div>
                                        <div role="tabpanel" class="tab-pane" id="settings">...</div>
                                    </div>

                                </div>

                                <form action="/flat-add" class="ajax" method="post" role="form">
                                    <div class="page-header text-center" style="margin: 0 0 20px">
                                        <h3>Basics</h3>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="offer_type">Offer type <span class="text-danger">*</span></label>
                                                <select class="form-control" id="offer_type" name="offer_type">
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
                                        <h3>Details</h3>
                                    </div>

                                    <div class="page-header text-center" style="margin: 0 0 20px">
                                        <h4>About</h4>
                                    </div>

                                    <div class="form-group">
                                        <label for="thing_id">Thing type <span class="text-danger">*</span></label>
                                        <select class="form-control" id="thing_id" name="thing_id">
                                            @foreach($things as $thing)
                                                <option value="{{$thing->id}}">{{$thing->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="room">Rooms <span class="text-danger">*</span></label> <input class="form-control spin-qty" id="room" type="text" name="room">
                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="usable_area">Usable area <span class="text-danger">*</span></label>
                                                <input class="form-control spin-m2" id="usable_area" name="usable_area" type="text">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="built-up_area">Built-up area</label>
                                                <input class="form-control spin-m2" id="built-up_area" name="built-up_area" type="text">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="land_area">Land area</label>
                                                <input class="form-control spin-m2" id="land_area" name="land_area" type="text">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="window_type_id">Window type <span class="text-danger">*</span></label> <select class="form-control" id="window_type" name="window_type_id">
                                                    <option value="" disabled selected>Choose</option>
                                                    @foreach($windows as $window)
                                                        <option value="{{$window->id}}">{{$window->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="construction_type">Construction type <span class="text-danger">*</span></label> <select class="form-control" id="construction_type" name="construction_type_id">
                                                    <option value="" disabled selected>Choose</option>
                                                    @foreach($constructions as $construction)
                                                        <option value="{{$construction->id}}">{{$construction->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="heating_type">Heating type <span class="text-danger">*</span></label> <select class="form-control" id="heating_type" name="heating_type_id">
                                                    <option value="" disabled selected>Choose</option>
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

                                                <div class="panel panel-default">
                                                    <table class="table table-hover options">
                                                        <tr>
                                                            <td>
                                                                <label for="boiler">Boiler</label>
                                                            </td>
                                                            <td>
                                                                <div class="ui toggle checkbox">
                                                                    <input type="checkbox" id="boiler" name="boiler" value="1">
                                                                    <label for="boiler">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label for="pantry">Pantry</label>
                                                            </td>
                                                            <td>
                                                                <div class="ui toggle checkbox">
                                                                    <input type="checkbox" id="pantry" name="pantry" value="2">
                                                                    <label for="pantry">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label for="storage_room">Storage room</label>
                                                            </td>
                                                            <td>
                                                                <div class="ui toggle checkbox">
                                                                    <input type="checkbox" id="storage_room" name="storage_room" value="3">
                                                                    <label for="storage_room">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label for="elevator">Elevator</label>
                                                            </td>
                                                            <td>
                                                                <div class="ui toggle checkbox">
                                                                    <input type="checkbox" id="elevator" name="elevator" value="5">
                                                                    <label for="elevator">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label for="air_conditioner">Air conditioner</label>
                                                            </td>
                                                            <td>
                                                                <div class="ui toggle checkbox">
                                                                    <input type="checkbox" id="air_conditioner" name="air_conditioner" value="6">
                                                                    <label for="air_conditioner">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label for="disabled_access">Disabled access</label>
                                                            </td>
                                                            <td>
                                                                <div class="ui toggle checkbox">
                                                                    <input type="checkbox" id="disabled_access" name="disabled_access" value="7">
                                                                    <label for="disabled_access">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label for="cellar">Cellar</label>
                                                            </td>
                                                            <td>
                                                                <div class="ui toggle checkbox">
                                                                    <input type="checkbox" id="cellar" name="cellar" value="8">
                                                                    <label for="cellar">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="page-header text-center" style="margin: 0 0 20px">
                                        <h4>Location</h4>
                                    </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label for="street">Street <span class="text-danger">*</span></label>
                                                    <select class="form-control select2" id="street_id" name="street_id" data-placeholder="Select an option">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="street_number">Street number <span class="text-danger">*</span></label> <input class="form-control" id="street_number" name="street_number" type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="county_id">County <span class="text-danger">*</span></label>
                                                    <select class="form-control select2" placeholder="test" id="county_id" name="county_id" data-placeholder="Select an option">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="district_id">District <span class="text-danger">*</span></label>
                                                    <select class="form-control select2" id="district_id" name="district_id" data-placeholder="Select an option">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="city">City <span class="text-danger">*</span></label>
                                                    <select class="form-control" id="city_id" name="city_id" data-placeholder="Select an option">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="zip">ZIP <span class="text-danger">*</span></label>
                                                    <select class="form-control" id="zip_id" name="zip_id" data-placeholder="Zip">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="country">Country <span class="text-danger">*</span></label>
                                            <select class="form-control" id="country_id" name="country" data-placeholder="Select an option"></select>
                                        </div>

                                    <div class="page-header text-center" style="margin: 0 0 20px">
                                        <h3>Price</h3>
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
    </div>
@endsection


@section('scripts')

@endsection