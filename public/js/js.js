$(function () {
    'use strict';
    $('.panel-body').css('display', 'none');
   $('.toggle-info').click(function () {
    $(this).toggleClass('selected').parent().next('.panel-body').fadeToggle(100);
    if ($(this).hasClass('selected')) {
        $(this).html('<i class="fa fa-plus"></i>');
    } else {
        $(this).html('<i class="fa fa-minus"></i>');
    }
    });


    $('input[class="radio-btn"]').click(function () {
       if ($(this).val() === 'Ja') {
           $(this).parent().siblings('.open').slideDown();

       } else {
           $(this).parent().siblings('.open').slideUp();
       }
    });

    $('.events a').click(function() {
        $('.events a.selected').removeClass('selected');
        $(this).addClass('selected');
        var date = $(this).attr('data-date');
        $('.content li.selected').slideUp(500, function() {
            $(this).removeClass('selected');
            $('.content').find('li[data-date="' + date + '"]').slideDown(500, function() {
                $(this).addClass('selected');
            });
        });
    });

    $('.anders input').on('click', function () {
       $('.open_anders').toggle(400);
    });

    // start Error Message
    $('div.error_message').hide(100);
    $("#register-form").click(function(){

        var isFormValid = true;

        $("textarea").each(function(){
            if ($(this).val().length == ''){
                $('body').not($('.error_message')).addClass("overlay");
                isFormValid = false;
            }
            else{
                $('body').removeClass("overlay");
            }
        });

        if (!isFormValid) {
            // $('body').not($('div.error_message')).css({'opacity' :".4",'background-color': 'rgba(216,216,216,0.5'});
            $('.error_message').show(200);

        }

        return isFormValid;
    });
    $(document).ready(function () {
       $('body').click(function () {
           // $(this).css({'background-color': '#fff', 'opacity': '1'});
           $('div.error_message').hide(40);
           $('body').removeClass("overlay");

       });
    });
});

