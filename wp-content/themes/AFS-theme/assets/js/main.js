// Clear inputs on focus

/*$(document).ready(function() {
    swapValue = [];
    $(".clear-val").each(function(i) {
        swapValue[i] = $(this).val();
        $(this).focus(function() {
            if ($(this).val() == swapValue[i]) {
                $(this).val("");
            }
            $(this).addClass("focus");
        }).blur(function() {
            if ($.trim($(this).val()) == "") {
                $(this).val(swapValue[i]);
                $(this).removeClass("focus");
            }
        });
    });
});*/

// Call jQuery UI Datepicker
$(function() {
    $("#deadline").datepicker();
});

// Show alerts
jQuery(window).load(function() {
    jQuery('#alert-wrapper').has('.alert').fadeIn('medium');
    jQuery('#alert-wrapper').delay(6000).fadeOut('medium');
});


// toggle reference-popup on click
$('.show-references').on('click', function() {
    $(this).next('div.reference-popup').slideToggle();
    return false;
});

// toggle category
$('.show-subcategories-indicator').on('click', function() {

    var children = $(this).closest('ul').children('.sub-cat');
    if ($(children).first().is(":visible")) {
        $(this).html('+');
    } else {
        $(this).html('&ndash;');
    }
    $(this).closest('ul').children('.sub-cat').toggle();
    return false;
});
// toggle subcategory children
$('.sub-cat .show-subcatchildren-indicator').on('click', function() {

    var child_ul = $(this).closest('li').children('ul');
    if ($(child_ul).is(":visible")) {
        $(this).html('+');
    } else {
        $(this).html('&ndash;');
    }
    //toggle
    if (child_ul.length > 0) {
        child_ul.toggle();
    }
    return false;
});

// Initiate Photo carousels

$(function() {
    $('.jcarousel').jcarousel({
        // Core configuration goes here
    });

    $('.jcarousel-prev').jcarouselControl({
        target: '-=1'
    });

    $('.jcarousel-next').jcarouselControl({
        target: '+=1'
    });
    $('.jcarousel').jcarouselAutoscroll({
        target: '+=1'
    });
});



// add .active to first item in photo carousels
//$("#photo-carousel .item:first-child").addClass("active");