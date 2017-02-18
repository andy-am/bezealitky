/**
 * Ajax form based on Bootstrap 3 & Laravel 5
 * 2017 by Michal Gasparik
 */
var AXFORM = {};

(function($){

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

                this.method = self.attr('method');
                this.action = self.attr('action');
                this.grecaptcha = self.attr('data-grecaptcha');

                // form serialized data
                var data = AXFORM.token ? self.serialize() + '&_token=' + AXFORM.token : self.serialize();

                console.log(data);

                // form ajax options
                var options = {
                    method: this.method,
                    url: this.action,
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

        $(document).on('submit', 'form.ajax', function (e){
            AXFORM.service._submit(e, $(this));
        });


})(jQuery);