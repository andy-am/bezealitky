var APP = {};

APP.init = (function($) {

    /**
     *  Select2
     */
    $('.select2').select2();


    $(function(){


        $("#country_id").select2({
            minimumInputLength: 2,
            tags: [],
            ajax: {
                url: "api/get-countries",
                dataType: 'json',
                type: "GET",
                quietMillis: 50,
                placeholder: $(this).data('placeholder'),
                allowClear: true,
                data: function (term) {
                    return {
                        term: term
                    };
                },
                results: function (data) {
                    console.log(data);
                    return {
                        results: $.map(data, function (item) {
                            console.log(item);
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })

                    };
                }
            }
        });


        $("#county_id").select2({
            minimumInputLength: 2,
            tags: [],
            ajax: {
                url: "api/get-counties",
                dataType: 'json',
                type: "GET",
                quietMillis: 50,
                placeholder: $(this).data('placeholder'),
                allowClear: true,
                data: function (term) {
                    return {
                        term: term
                    };
                },
                results: function (data) {
                    console.log(data);
                    return {
                        results: $.map(data, function (item) {
                            console.log(item);
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })

                    };
                }
            }
        });


        $("#district_id").select2({
            minimumInputLength: 2,
            tags: [],
            ajax: {
                url: "api/get-districts",
                dataType: 'json',
                type: "GET",
                quietMillis: 50,
                placeholder: $(this).data('placeholder'),
                allowClear: true,
                data: function (term) {
                    return {
                        term: term
                    };
                },
                results: function (data) {
                    console.log(data);
                    return {
                        results: $.map(data, function (item) {
                            console.log(item);
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })

                    };
                }
            }
        });

        $("#city_id").select2({
            minimumInputLength: 2,
            selectOnClose: true,
            ajax: {
                url: "api/get-cities",
                dataType: 'json',
                type: "GET",
                quietMillis: 50,
                placeholder: $(this).data('placeholder'),
                allowClear: true,
                data: function (term) {
                    return {
                        term: term
                    };
                },
                results: function (data) {
                    console.log(data);
                    return {
                        results: $.map(data, function (item) {
                            console.log(item);
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })

                    };
                }
            }
        });


        $("#zip_id").select2({
            minimumInputLength: 1,
            ajax: {
                url: "api/get-zips",
                dataType: 'json',
                type: "GET",
                quietMillis: 50,
                placeholder: $(this).data('placeholder'),
                allowClear: true,
                data: function (term) {
                    return {
                        term: term
                    };
                },
                results: function (data) {
                    console.log(data);
                    return {
                        results: $.map(data, function (item) {
                            console.log(item);
                            return {
                                text: item.number,
                                id: item.id
                            }
                        })

                    };
                }
            }
        });


    });


    $('#city_id').on("select2:select", function(e) {

        var city_id = $(this).val();

        $.ajax({
            method: "GET",
            url: "api/get-district-by-city/" + city_id,
            dataType: "json"
        }).done(function( res ) {
            $("#district_id").select2("trigger", "select", {
                data: { id: res.id, text: res.name }
            });


        });

    });

    $('#district_id').on("select2:select", function(e) {

        var district_id = $(this).val();

        $.ajax({
            method: "GET",
            url: "api/get-county-by-district/" + district_id,
            dataType: "json"
        }).done(function( res ) {
            $("#county_id").select2("trigger", "select", {
                data: { id: res.id, text: res.name }
            });

        });

    });

    $('#county_id').on("select2:select", function(e) {

        var county_id = $(this).val();

        $.ajax({
            method: "GET",
            url: "api/get-country-by-county/" + county_id,
            dataType: "json"
        }).done(function( res ) {
            $("#country_id").select2("trigger", "select", {
                data: { id: res.id, text: res.name }
            });

        });

    });

    $(function(){
        $("input.spin-m2").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: 'm<sup>2</sup>'
        });
    });

    $(function(){
        $("input.spin-qty").TouchSpin();
    });

    $( window ).on( "load", function() {
        $('#loader').fadeOut(1500);
    });

}(jQuery));

