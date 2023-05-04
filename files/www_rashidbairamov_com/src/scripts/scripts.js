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
    spanize( el );
});
/*
$( document ).ready( function () {
    let subtitle_slash = document.getElementById('rsce_spain_title');
    function slash_color ( slash ) {
        slash.innerHTML =  slash.innerHTML.replace('/', '<span>/</span>');
    }
    slash_color( subtitle_slash );
});
 */


/*
    04_rsce_luxembourg;
    Deleting list items;
 */
$( document ).ready( function ( $ ) {
   let a = $( '.homepage__main .rsce_luxembourg__col' );
   a.slice(3).remove();
});

/*
    08_news_category;
    new class "container" has been added;
 */

$( document ).ready( function () {
    const news_category_block = $( '.mod_newscategories' );
    const empty_news = $( '.mod_newslist p.empty' );
    $( news_category_block ).addClass( 'container' );
    $( empty_news ).addClass( 'container' );
});


/*
    09_rsce_card_hover_effect;
 */

// Alle Elemente mit der .rsce_card_hover_effect__item abrufen;
const card_hover_elements = document.querySelectorAll( '.rsce_card_hover_effect__item' );
// Jedem Element einen Event-Handler hinzufügen;
card_hover_elements.forEach( card_hover_element => {
    card_hover_element.addEventListener( 'mouseover', () => {
        // Hinzufügen einer Klasse 'filtered' zu allen Elementen außer dem aktuellen Element;
        card_hover_elements.forEach( card_hover_elem => {
            if ( card_hover_elem !== card_hover_element ) {
                card_hover_elem.classList.add( 'filtered');
            }
        });
    });

    // Die Klasse entfernen, wenn die Maus ein Element verlässt;
    card_hover_element.addEventListener( 'mouseout', () => {
        card_hover_elements.forEach( card_hover_elem => {
            card_hover_elem.classList.remove( 'filtered' );
        });
    });
});
