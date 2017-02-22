//https://gist.github.com/GaryJones/15bc42d47a5ab216ee77#file-main-js
APP.notification = (function( $ ) {

    'use strict';

    var NOTIFICATION;

    NOTIFICATION = {

        onReady: function(){
            console.log('ready');
        },

        settings: {

        }

    }

    return{
        onReady: NOTIFICATION.onReady()
    }

})( jQuery );

jQuery(APP.notification.onReady);