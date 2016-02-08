$(document).ready(function(){


    //main menu
    $(".menu-main li, .submenu").hover(function () {

            if ($(this).hasClass("submenu-angebote") || $(this).hasClass("menu-item-angebote")) {
                $(".submenu-angebote").show();
                $(".menu-item-angebote").addClass("hover");
            }

        },
        function () {
            $(".submenu-angebote").hide();
            $(".menu-item-angebote").removeClass("hover");
        }
    );


});