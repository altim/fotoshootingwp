$(document).ready(function(){


    //main menu
    $(".menu-main li, .submenu").hover(function () {

            if ($(this).hasClass("menu-item-has-children") || $(this).hasClass("submenu")) {

                //find menu id if it is main menu item
                if($(this).hasClass("menu-item-has-children")){
                    var mainMenuIdClass = $(this).attr("class").match(/menu-item-\d+/gi)[0];
                    var mainMenuId = mainMenuIdClass.split("-").pop();
                }
                else {
                    var mainMenuIdClass = $(this).attr("class").match(/parent-id-\d+/gi)[0];
                    var mainMenuId = mainMenuIdClass.split("-").pop();
                }

                $(".parent-id-"+mainMenuId).show();
                $(".menu-item-"+mainMenuId).addClass("hover");
            }

        },
        function () {

            if($(this).hasClass("menu-item-has-children")){
                var mainMenuIdClass = $(this).attr("class").match(/menu-item-\d+/gi)[0];
                var mainMenuId = mainMenuIdClass.split("-").pop();
            }
            else {
                var mainMenuIdClass = $(this).attr("class").match(/parent-id-\d+/gi)[0];
                var mainMenuId = mainMenuIdClass.split("-").pop();
            }

            $(".parent-id-"+mainMenuId).hide();
            $(".menu-item-"+mainMenuId).removeClass("hover");
        }
    );


});