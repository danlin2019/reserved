"use strict";function initMap(){var position={lat:25.0334608,lng:121.3007899},map=new google.maps.Map(document.getElementById("map"),{zoom:17,center:position});new google.maps.Marker({position:position,map:map,icon:"files/img/contact/map_icon.png"})}var map;($(".hot-case-detail-page")||$(".history-case-detail-page"))&&$(".fancybox-effects-a").fancybox({prevEffect:"fade",nextEffect:"fade",helpers:{title:{type:"outside"},overlay:{speedOut:0}}}),$(".slider-for").slick({slidesToShow:1,slidesToScroll:1,arrows:!0,focusOnSelect:!0,fade:!0,asNavFor:".slider-nav"}),$(".slider-nav").slick({slidesToShow:4,slidesToScroll:1,asNavFor:".slider-for",dots:!1,focusOnSelect:!0,variableWidth:!0,infinite:!0,responsive:[{breakpoint:800,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:3,slidesToScroll:1}}]}),$(".case-list-img").imgLiquid(),$(".index-page .main-banner ul li").imgLiquid(),$(".main-banner ul").slick({arrows:!1,dots:!0,infinite:!0,fade:!0,autoplay:!0,autoplaySpeed:4e3,pauseOnHover:!1}),$(".featured-content ul").slick({arrows:!0,dots:!1,speed:300,slidesToShow:5,slidesToScroll:1,responsive:[{breakpoint:768,settings:{slidesToShow:4,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:2,slidesToScroll:1}}]}),$(".in-hot-case ul").slick({arrows:!1,dots:!0,speed:300,slidesToShow:4,slidesToScroll:1,responsive:[{breakpoint:768,settings:{slidesToShow:4,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:2,slidesToScroll:1}}]}),$(".in-history-case ul").slick({arrows:!0,dots:!1,speed:300,slidesToShow:4,slidesToScroll:1,responsive:[{breakpoint:768,settings:{slidesToShow:4,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:2,slidesToScroll:1}}]});