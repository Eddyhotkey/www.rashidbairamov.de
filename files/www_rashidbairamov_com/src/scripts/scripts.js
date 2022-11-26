'use strict'
/*
    01_navigation_widget;
    Animation für navigation icon;
 */

$( document ).ready( function(){

    const navigation_icon = $( '#nav_icon' );
    const navigation_overlay = $( '.mobile_menu_overlay' );

    $( navigation_icon ).click( function(){
        $( this ).toggleClass( 'open' );
    });

    $( navigation_overlay ).click( function ( ) {
        $( navigation_icon ).removeClass( 'open' );
    });
});


/*
    02_sticky_header;
    Sticky header by scrolling;
 */

$( document ).ready( function ( $ ) {

    function sticky ( ) {

        let window_top = $(window).scrollTop();
        let top_position = $('body').offset().top;
        let element_to_stick = $('#header');

        if (window_top > top_position) {
            element_to_stick.addClass('sticky');
        } else {
            element_to_stick.removeClass('sticky');
        }
    }

    $(window).scroll(sticky);
    sticky();
});
/*
    03_first_letter_color;
    The coloured first letter in the line;
 */

$( document ).ready( function ( $ ) {
    let el = document.getElementById('rsce_france_title');
// define the string;

    function spanize(el) {
        //define the function;

        el.innerHTML =  el.innerHTML.replace(/(#)/g, '<span>#</span>');
        // change the content of the string by replacing the first letter with a span tag with the content;
    }
    spanize(el);
});


