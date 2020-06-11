$(document).ready(function () {

    //MOBILE ONE
    var menu = "close";
    $(document).on('click touch tap',"nav .menu-toggle",function () {

        if (menu === "close") {
            $(this).parent().next(".mobile-nav").css("transform", "translate(0, 0)");
            $(this).parent().next(".mobile-nav").css("-webkit-transform", "translate(0, 0)");
            menu = "open";
            document.write("TEST");
        } else {
            $(this).parent().next(".mobile-nav").css("transform", "translate(-100%, 0)");
            $(this).parent().next(".mobile-nav").css("-webkit-transform", "translate(-100%, 0)");
            menu = "close";
        }
    });


});