var $window = $(window),
$body = $('body'),
$volvo_menu = $('#volvo1_main-menu'),
$volvo_menu_items = $('.menu-item-has-children'),
$volvo_overlay = $('#volvo1_menu-overlay')

// call jRespond and add breakpoints
var jRes = jRespond([
    {
        label: 'smallest',
        enter: 0,
        exit: 479
    },{
        label: 'handheld',
        enter: 480,
        exit: 767
    },{
        label: 'tablet',
        enter: 768,
        exit: 991
    },{
        label: 'laptop',
        enter: 992,
        exit: 1199
    },{
        label: 'desktop',
        enter: 1200,
        exit: 10000
    }
]);
jRes.addFunc([
    {
        breakpoint: 'desktop',
        enter: function() { $body.addClass('device-lg'); },
        exit: function() { $body.removeClass('device-lg'); }
    },{
        breakpoint: 'laptop',
        enter: function() { $body.addClass('device-md'); },
        exit: function() { $body.removeClass('device-md'); }
    },{
        breakpoint: 'tablet',
        enter: function() { $body.addClass('device-sm'); },
        exit: function() { $body.removeClass('device-sm'); }
    },{
        breakpoint: 'handheld',
        enter: function() { $body.addClass('device-xs'); },
        exit: function() { $body.removeClass('device-xs'); }
    },{
        breakpoint: 'smallest',
        enter: function() { $body.addClass('device-xxs'); },
        exit: function() { $body.removeClass('device-xxs'); }
    }
]);

$(document).ready(function() {
	init_map_footer();
    mobileCTA();
    desktopHeader();
    mobileHeader();
    initContactPageMap();

    $(window).resize(mobileCTA);
    //$(window).resize(init_map_footer);
});
/* ---------------------------------------------
 Mobile CTA collapsing menu
 --------------------------------------------- */
function mobileCTA() {
    var pageWidth = $(window).width();
    if (pageWidth <= 767) {
        $('.volvo1_cta-title').attr("data-toggle", "collapse");
        $('#volvo1_cta1, #volvo1_cta2, #volvo1_cta3, #volvo1_cta4').addClass("collapse");
        // Arrow icons
        $('.volvo1_cta-title').click(function() {
            $(this).children('i').toggleClass('fa-chevron-right fa-chevron-down');
        });
    } else {
        $('.volvo1_cta-title').attr("data-toggle", "");
        $('.toggle-wrapper').removeClass("collapse").css("height", "auto");
    }
}

/* ---------------------------------------------
 Google map on footer
 --------------------------------------------- */
function init_map_footer(){
    var gmMapDiv = $("#volvo1_dealer-gmap");

    (function($){

        if (gmMapDiv.length) {

            var gmCenterAddress = gmMapDiv.attr("data-address");
            var gmMarkerAddress = gmMapDiv.attr("data-address");


            gmMapDiv.gmap3({
                action: "init",
                marker: {
                    address: gmMarkerAddress,
                    options: {
                        icon: "https://raw.githubusercontent.com/louisdalligos/DS-Volvo/master/img/map-marker.png"
                    }
                },
                map: {
                    options: {
                        zoom: 16,
                        zoomControl: true,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL
                        },
                        mapTypeControl: false,
                        scaleControl: false,
                        scrollwheel: false,
                        streetViewControl: false,
                        draggable: true,
                        styles: [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#b8c3ca"}]}]
                    }
                }
            });
        }
    })(jQuery);
}


function initContactPageMap() {
    var gmapContactPage = $("#contact-page-map");

    (function($){

        if (gmapContactPage.length) {

            var gmCenterAddress = gmapContactPage.attr("data-address");
            var gmMarkerAddress = gmapContactPage.attr("data-address");


            gmapContactPage.gmap3({
                action: "init",
                marker: {
                    address: gmMarkerAddress,
                    options: {
                        icon: "../build/img/map-marker.png"
                    },
                    events:{ // events trigged by markers
                        click: function(){
                            $(this).gmap3({
                                infowindow:{
                                    address: gmMarkerAddress,
                                    options:{
                                        content: '<div class="marker-popup"><h3 class="light-text">Peter Warren Volvo</h3><p class="light-text">Address: Cnr Hume Highway & Todman Road Warwick Farm NSW 2170<br /><span>Phone: (02)877 0303</span></p></div>'
                                    }
                                }
                            });
                        }
                    },
                },
                map: {
                    options: {
                        zoom: 16,
                        zoomControl: true,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL
                        },
                        mapTypeControl: false,
                        scaleControl: false,
                        scrollwheel: false,
                        streetViewControl: false,
                        draggable: true,
                        styles: [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#b8c3ca"}]}]
                    }
                }
            });
        }
    })(jQuery);
}

function mobileHeader(){

}

function desktopHeader(){
    if( $body.hasClass('device-lg') || $body.hasClass('device-md') ) {

        $volvo_menu_items.bind('mouseenter',function(){

            $('.volvo1_page-header').addClass('header-white-bg').removeClass('default-header-bg');
            var $this = $(this);
            $this.addClass('slided selected');
            $this.children('a').css('border-color','#003057');
            $this.children('div').css('z-index','9999').stop(true,true).fadeIn(50,function(){
                $volvo_menu_items.not('.slided').children('div').hide();
                $this.removeClass('slided');
            });
            $('.mega-menu').css('display','block');
            $volvo_overlay.show();
            $volvo_overlay.stop(true,true).fadeTo(200, 0.6);

        }).bind('mouseleave',function(){

            var $this = $(this);
            $this.removeClass('selected').children('div').css('z-index','1');
            $this.children('a').css('border-color','transparent');
            $('.volvo1_page-header').removeClass('header-white-bg').addClass('default-header-bg');
            $('.mega-menu').css('display','none');

            $volvo_overlay.stop(true,true).fadeTo(200, 0);
            $volvo_menu_items.children('div').hide();
            $volvo_overlay.hide();

        });

    } else {
        //mobileHeader();
    }
}
