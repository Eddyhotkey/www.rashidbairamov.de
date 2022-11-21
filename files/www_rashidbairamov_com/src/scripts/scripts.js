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