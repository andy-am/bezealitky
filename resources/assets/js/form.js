/**
 * Ajax form based on Bootstrap 3 & Laravel 5
 * 2017 by Michal Gasparik
 */

(function($){

    // form element
    var $form = $('form.ajax');

    // form method
    var method = $form.attr('method');

    // form action
    var action = $form.attr('action');

    // form logic
    var form = {

        // config
        config : {
            grecaptcha : true
        },

        /**
         * Submit method
         *
         * @param e
         * @param self
         * @private
         */
        _submit: function (e, self) {

            e.preventDefault();
            console.log('Im submited form, yeah!');

            // form serialized data
            var data = $form.serialize();

            console.log(data);

            // form ajax options
            var options = {
                method: method,
                url: action,
                data: data,
                dataType: 'json'
            };

            $.ajax(options).done(function (response) {

                console.log(response);
                form._validate(self, response)

            }).fail(function (response) {

                console.log(response);
                form._validate(self, response)

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

                    $group.addClass('has-error').prepend('<div class="help-block">'+ value +'</div>');

                    console.log(index);
                    console.log(value);

                });


            } else if(status == 200){

                form._reset();
                $('#success-notification').addClass('show-up');

            }

        },

        _reset : function(){
            if(form.config.grecaptcha){
                grecaptcha.reset();
            }

            $form.find('.help-block').remove();
            $form[0].reset();
        }
    };

    /**
     * Bind on form submit
     */

    $(document).on('submit', $form, function (e){
        form._submit(e, $(this));
    });

})(jQuery)