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


});

