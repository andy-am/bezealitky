APP.mustache = (function( $ ) {

    'use strict';

    var MUSTACHE;

    MUSTACHE = {

        loadUser: function() {

            console.log('Mustache activated bro!');
            var template = $('#template').html();
            Mustache.parse(template);   // optional, speeds up future uses
            var rendered = Mustache.render(template, {name: "Mustache"});
            $('#target').html(rendered);

        },

    };
    return{
        loadUser: MUSTACHE.loadUser(),
    }
})( jQuery );

jQuery(function(){
   APP.mustache.loadUser;
});