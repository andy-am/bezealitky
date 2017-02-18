var APP = {};

APP.init = (function($) {

    /**
     *  Select2
     */
    $('.select2').select2();


    $(function(){
        var url = "api/get-cities";
        $("#city_id").select2({
            minimumInputLength: 2,
            tags: [],
            ajax: {
                url: url,
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

