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
             * @param self
             * @param response
             * @private
             */

            _validate: function (self, response) {

                var status = response.status;
                var $group = $('.form-group');

                console.log(status);
                console.log(response);

                if(status == 422){

                    var messages = JSON.parse(response.responseText);

                    // reset validate messages
                    $group.removeClass('has-error');
                    self.find('.help-block').remove();

                    // fill validate messages
                    $.each(messages, function (index, value) {

                        var index = index.replace(/\./g, '_'),
                            $group = self.find('*[name="' + index + '"]').closest('.form-group');

                        $group.addClass('has-error').append('<div class="help-block">'+ value +'</div>');

                        console.log(index);
                        console.log(value);

                    });


                } else if(status == 200){

                    AXFORM.service._reset(self);
                    AXFORM.service._done(self);

                }

            },

            _reset : function(self){

                if(this.grecaptcha){
                    grecaptcha.reset();
                }
                self.find('.help-block').remove();
                self[0].reset();

            },

            _done: function(self){
                var done = self.attr('data-done');

                if (done){
                    switch(done) {
                        case "reload":
                            location.reload();
                            break;
                        default:
                            void(0);
                    }
                }

            }
        };

        /**
         * Bind on form submit
         */

        $(document).on('submit', 'form.ajax', function (e){
            AXFORM.service._submit(e, $(this));
        });


})(jQuery);