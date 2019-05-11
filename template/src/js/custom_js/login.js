"use strict";

$(document).ready(function() {

    //=================Preloader===========//
    $(window).on('load', function () {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut();
    });
    //=================end of Preloader===========//
    
    /*Background slideshow */

    $('.bg-slider').backstretch([
        "img/pages/lbg-1.jpg", "img/pages/lbg-2.jpg", "img/pages/lbg-3.jpg"
    ], {
        duration: 2500,
        fade: 1050
    });

    $('input').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue',
        increaseArea: '20%' // optional
    });
    $("#authentication").bootstrapValidator({
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'Please enter valid email format'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required'
                    }

                }
            }

        }
    });
    
});
