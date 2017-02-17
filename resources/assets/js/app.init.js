var APP = {};

APP.init = (function() {

    /**
     *  Select2
     */
    $('.select2').select2();


    $(document).ready(function(){
        var url = "api/get-cities";
        $("#city_id").select2({
            minimumInputLength: 2,
            tags: [],
            ajax: {
                url: url,
                dataType: 'json',
                type: "GET",
                quietMillis: 50,
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



}());

