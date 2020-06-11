$(document).ready(function () {

    //MOBILE ONE
    var menu = "close";
    $(document).on('click touch tap',"nav .menu-toggle",function () {

        if (menu === "close") {
            $(this).parent().next(".mobile-nav").toggleClass("open");
            menu = "open";
        } else {
            $(this).parent().next(".mobile-nav").toggleClass("open");
            menu = "close";
        }
    });


});