// This is supposed to allow the user to swipe.

$(document).ready( function () {
            $("#list").on( "swipeleft", function (e) { e.preventDefault(); ScrollPageLeft() });
            $("#list").on( "swiperight", function (e) { e.preventDefault(); ScrollPageRight() });
        });W