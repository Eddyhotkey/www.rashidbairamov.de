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