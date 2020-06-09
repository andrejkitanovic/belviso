$(document).ready(function () {

    //MOBILE ONE AND MOBILE THREE
    var menu = "close";
    $("nav .menu-toggle").click(function () {

        if (menu === "close") {
            $(this).parent().next(".mobile-nav").css("transform", "translate(0, 0)");
            menu = "open";
        } else {
            $(this).parent().next(".mobile-nav").css("transform", "translate(-100%, 0)");
            menu = "close";
        }
    });




});