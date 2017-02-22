//https://gist.github.com/GaryJones/15bc42d47a5ab216ee77#file-main-js
APP.console = (function( $ ) {

    'use strict';

    var CONSOLE;

    CONSOLE = {

        onReady: function(){
            console.log('ready');
        },

        settings: {

        }

    }

    return{
        onReady: CONSOLE.onReady()
    }

})( jQuery );

jQuery(APP.console.onReady);