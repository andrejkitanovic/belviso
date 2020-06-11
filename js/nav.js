$(document).ready(function () {

    //MOBILE ONE
    var menu = "close";
    $("nav .menu-toggle").on('click touch',function () {

        if (menu === "close") {
            $(this).parent().next(".mobile-nav").css("transform", "translate(0, 0)");
            $(this).parent().next(".mobile-nav").css("-webkit-transform", "translate(0, 0)");
            menu = "open";
        } else {
            $(this).parent().next(".mobile-nav").css("transform", "translate(-100%, 0)");
            $(this).parent().next(".mobile-nav").css("-webkit-transform", "translate(-100%, 0)");
            menu = "close";
        }
    });

    $("nav .menu-toggle").on('touchstart',console.log("A"));


});