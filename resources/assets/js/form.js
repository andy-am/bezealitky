/**
 * Ajax form based on Bootstrap 3 & Laravel 5
 * 2017 by Michal Gasparik
 */
var AXFORM = {};

(function($){

    AXFORM.form = $('form.ajax');
    AXFORM.method = AXFORM.form.attr('method');
    AXFORM.action = AXFORM.form.attr('action');
    AXFORM.grecaptcha = AXFORM.form.attr('data-grecaptcha');
    AXFORM.token = $('meta[name="csrf-token"]').attr('content');

    AXFORM.service  = {

            /**
             * Submit method
             *
             * @param e
             * @param self
             * @private
             */
            _submit: function (e, self) {

                e.preventDefault();

                // form serialized data
                var data = AXFORM.token ? AXFORM.form.serialize() + '&_token=' + AXFORM.token : AXFORM.form.serialize();

                console.log(data);

                // form ajax options
                var options = {
                    method: AXFORM.method,
                    url: AXFORM.action,
                    data: data,
                    dataType: 'json'
                };

                $.ajax(options).done(function (response) {

                    console.log('done');
                    console.log(response);
                    AXFORM.service._validate(self, response)

                }).fail(function (response) {

                    console.log('fail');
                    console.log(response);
                    AXFORM.service._validate(self, response)

                });

            },

            /**
             * Validate method
             *
             * @param $form
             * @param response
             * @private
             */

            _validate: function ($form, response) {

                var status = response.status;
                var $group = $('.form-group');

                console.log(status);
                console.log(response);

                if(status == 422){

                    var messages = JSON.parse(response.responseText);

                    // reset validate messages
                    $group.removeClass('has-error');
                    $form.find('.help-block').remove();

                    // fill validate messages
                    $.each(messages, function (index, value) {

                        var index = index.replace(/\./g, '_'),
                            $group = $form.find('*[name="' + index + '"]').closest('.form-group');

                        $group.addClass('has-error').append('<div class="help-block">'+ value +'</div>');

                        console.log(index);
                        console.log(value);

                    });


                } else if(status == 200){

                    AXFORM.service._reset();
                    $('#success-notification').addClass('show-up');

                }

            },

            _reset : function(){

                if(AXFORM.grecaptcha){
                    grecaptcha.reset();
                }
                AXFORM.form.find('.help-block').remove();
                AXFORM.form[0].reset();

            }
        };

        /**
         * Bind on form submit
         */

        $(document).on('submit', AXFORM.form, function (e){
            AXFORM.service._submit(e, $(this));
        });


})(jQuery);

console.log(AXFORM.form);




