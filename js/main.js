(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
        let $formHasError = true;
        const $phone_reg = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        const $email_reg = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        // Contact form validation
        $('#contact form #sendMessageButton').attr("disabled", true);
        $('#contact #contact_name').on('change keyup paste', function(e){
            if($.trim(this.value).length>2) {removeErrorFromElement(this);checkFormValidation();}
            else applyErrorToElement(this);
        });
        $('#contact #contact_message').on('change keyup paste', function(e){
            if($.trim(this.value).length>3) {removeErrorFromElement(this);checkFormValidation();}
            else applyErrorToElement(this);
        });
        $('#contact #contact_phone').on('change keyup paste', function(e){
            if(!$.trim(this.value).length || ($.trim(this.value).length>0 && $phone_reg.test(this.value)) ) {removeErrorFromElement(this);checkFormValidation();}
            else applyErrorToElement(this);
        });
        $('#contact #contact_email').on('change keyup paste', function(e){
            if($.trim(this.value).length)
                if($email_reg.test(this.value)) {removeErrorFromElement(this);checkFormValidation();}
                else applyErrorToElement(this);
        });

        function applyErrorToElement(element) {
            $(element).addClass('has-error');
        }

        function removeErrorFromElement(element) {
            $(element).removeClass('has-error');
        }
        
        function checkFormValidation() {
            $formHasError = false;
            if($.trim($('#contact #contact_name')[0].value).length>2) {
                removeErrorFromElement($('#contact #contact_name'));
            }
            else {applyErrorToElement(this); $formHasError=true;};

            if($.trim($('#contact #contact_message')[0].value).length) {
                removeErrorFromElement($('#contact #contact_message'));
            }
            else {applyErrorToElement(this); $formHasError=true;};

            if($.trim($('#contact #contact_email')[0].value).length){
                if($email_reg.test($('#contact #contact_email')[0].value)) {
                    removeErrorFromElement($('#contact #contact_email'));
                }
                else {applyErrorToElement(this); $formHasError=true;}
            }

            if($.trim($('#contact #contact_phone')[0].value).length && $phone_reg.test($('#contact #contact_phone')[0].value))
                removeErrorFromElement($('#contact #contact_phone'));
            else {applyErrorToElement(this); $formHasError=true;}

            if($formHasError) $('#contact form #sendMessageButton').attr("disabled", true);
            else $('#contact form #sendMessageButton').attr("disabled", false);
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
    
})(jQuery);

