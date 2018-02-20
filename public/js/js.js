$(function () {
    'use strict';
    var counter = 0;
    $.each($('textarea'), function () {
        counter++;
        // console.log($('textarea#comment' + counter).val());
        if ($('textarea#comment' + counter).val().length != 0) {
            $('textarea#comment' + counter).parent().find('.panel-body').css('display', 'block');
            $('.toggle-info').addClass('selected');
            $('.toggle-info').html('<i class="fa fa-minus"></i>');

        } else {
            $('textarea#comment' + counter).parent().parent('.panel-body').css('display', 'none');
                $('.toggle-info').removeClass('selected');
        }
    });

    $('.toggle-info').click(function () {
        $(this).toggleClass('selected').parent().next('.panel-body').slideToggle(100);
        if ($(this).hasClass('selected')) {
            $(this).html('<i class="fa fa-minus"></i>');
        } else {
            $(this).html('<i class="fa fa-plus"></i>');
        }
    });


    $('input[class="radio-btn"]').click(function () {
        if ($(this).val() === 'Ja') {
            $(this).parent().siblings('.open').slideDown();

        } else {
            $(this).parent().siblings('.open').slideUp();
        }
    });

    $('.events a').click(function () {
        $('.events a.selected').removeClass('selected');
        $(this).addClass('selected');
        var date = $(this).attr('data-date');
        $('.content li.selected').slideUp(500, function () {
            $(this).removeClass('selected');
            $('.content').find('li[data-date="' + date + '"]').slideDown(500, function () {
                $(this).addClass('selected');
            });
        });
    });

    $('.anders input').on('click', function () {
        $('.open_anders').toggle(400);
    });

    // start Error Message

    $("#register-form").click(function () {

        var isFormValid = true;

        $("textarea").each(function () {
            if ($(this).val().length == '') {
                $('body').not($('.error_message')).addClass("overlay");
                isFormValid = false;
            }
            else {
                $('body').removeClass("overlay");
            }
        });

        if (!isFormValid) {
            $('.error_message').css('display', 'block');

        }

        return isFormValid;
    });
    $(document).ready(function () {
        $('body').click(function () {

            $('div.error_message').hide(40);
            $('body').removeClass("overlay");

        });
    });
});

