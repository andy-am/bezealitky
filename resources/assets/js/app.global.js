//https://gist.github.com/GaryJones/15bc42d47a5ab216ee77#file-main-js
APP.global = (function( $ ) {

    'use strict';

    return {

        settings: {},

        config: {},

        token : $('meta[name="csrf-token"]').attr('content'),

    }

})( jQuery );