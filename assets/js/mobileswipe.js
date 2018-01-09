// This is supposed to allow the user to swipe.

$(document).ready( function () {
            // $("#carousel-example").on( "swipeleft", function (e) { e.preventDefault(); ScrollPageLeft() });
            // $("#carousel-example").on( "swipeight", function (e) { e.preventDefault(); ScrollPageRight() });

            $('.carousel').bcSwipe({ threshold: 50 });
        });