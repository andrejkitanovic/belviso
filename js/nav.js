$(document).ready(function () {

    $(document).on('click touch',"nav .menu-toggle",function () {

        $(this).parent().next(".mobile-nav").toggleClass("open");
    });


});