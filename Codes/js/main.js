

$(function() {
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            $("header").addClass("sticky");
        } else {
            $("header").removeClass("sticky");
        }
    });
})

$(function(){
    //stick in the fixed 100% height behind the navbar but don't wrap it
    $('#slide-nav.navbar-inverse').after($('<div class="inverse" id="navbar-height-col"></div>'));
  
    $('#slide-nav.navbar-default').after($('<div id="navbar-height-col"></div>'));  

    // Enter your ids or classes
    var toggler = '.navbar-toggle';
    var pagewrapper = '#page-content';
    var navigationwrapper = '.navbar-header';
    var menuwidth = '100%'; // the menu inside the slide menu itself
    var slidewidth = '250px';
    var menuneg = '-100%';
    var slideneg = '-250px';

    $("#slide-nav").on("click", toggler, function (e) {

        var selected = $(this).hasClass('slide-active');

        $('#slidemenu').stop().animate({
            left: selected ? menuneg : '0px'
        });

        $('#navbar-height-col').stop().animate({
            left: selected ? slideneg : '0px'
        });

        $(pagewrapper).stop().animate({
            left: selected ? '0px' : slidewidth
        });

        $(navigationwrapper).stop().animate({
            left: selected ? '0px' : slidewidth
        });

        $(this).toggleClass('slide-active', !selected);
        $('#slidemenu').toggleClass('slide-active');
        $('#page-content, .navbar, body, .navbar-header').toggleClass('slide-active');
    });

    var selected = '#slidemenu, #page-content, body, .navbar, .navbar-header';

    $(window).on("resize", function () {

        if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
            $(selected).removeClass('slide-active');
        }
    });
});


$(function() {
    $(".navbar-toggle").on("click", function() {
        $(this).toggleClass("active");
    });
})

$(function() {

    if (window.matchMedia("(max-width: 600px)").matches) {
        $('#promo').attr('src', 'img/promo-m-img.png');
        $('#offer').attr('src', 'img/offer-m-img.png');
    } else {
        $('#promo').attr('src', 'img/promo-img.png');
        $('#offer').attr('src', 'img/offer-img.png');
    }

})

$(function() {

    // create the back to top button
    //$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

    // change the value with how many pixels scrolled down the button will appear
    var amountScrolled = 200;

    $(window).scroll(function() {
        if ($(window).scrollTop() > amountScrolled) {
            $('a.back-to-top').fadeIn('slow');
        } else {
            $('a.back-to-top').fadeOut('slow');
        }
    });

    $('a.back-to-top, a.simple-back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 700);
        return false;
    });

})

//$(function() {
//    wow = new WOW({
//        boxClass: 'wow', // default
//        animateClass: 'animated', // default
//        offset: 0, // default
//        mobile: true, // default
//        live: true // default
//    })
//    wow.init();
//})

$(function() {

    $('#demos .owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout:3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            900: {
                items: 4
            },
            1100: {
                items: 5   
            }
        }
    })
    $("#demos .owl-prev").html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
    $("#demos .owl-next").html('<i class="fa fa-angle-right" aria-hidden="true"></i>');


    // owl

})

$(function() {

    $('#demos .owl-item').on('mouseenter', function() {
        var newSrc = $(this).find('img').attr('data-src');
        var img = $(this).find('img');
        img.attr('data-orSrc', img.attr('src'));
        img.attr('src',newSrc);
    }).on('mouseleave', function() {
        var img = $(this).find('img');
        img.attr('src',img.attr('data-orSrc'));
    });


})


//************************
// Scripts
// HK was here
//************************

//********************
//Load Function
//********************
$(window).on("load",function(){
    $(".contentScroll").mCustomScrollbar({
        theme: 'dark-2',
    });

});


//********************
// Ready Function
//********************
$(document).ready(function(){

    //********************
    // Load Map
    //********************
    //if ($('#mapLoc').length > 0) { 
    //    $('#mapLoc').storeLocator({
    //        'slideMap' : false,
    //        'defaultLoc': true,
    //        'originMarker' : true,
    //        'defaultLat': '20.593684',
    //        'defaultLng' : '78.962880',
    //        'dataType': 'json',
    //        'dataLocation': 'json/data.json',
    //        'infowindowTemplatePath' : 'json/infowindow-description.html',
    //        'listTemplatePath' : 'json/location-list-description.html',
    //        'locationList' : 'mapPlaces',
    //        'mapSettings' : { 
    //            zoom : 5, 
    //            mapTypeId: google.maps.MapTypeId.ROADMAP,
    //        },
    //        'storeLimit' : -1,
    //        'autoComplete': true,
    //    });
    //}

    //********************
    // Load Map Address
    //********************
    // var showData = $('.mapPlaces');

    // $.getJSON('json/data.json', function (data) {

    //     var items = data.markers.map(function (item) {
    //         return '<div data-code="'+item.code+'" class="mapPlace" data-latitude="'+item.Latitude+'" data-longtitude="'+item.Longitude+'"><h4 data-type="title">'+item.Name+'</h4><p data-type="address">'+item.Address+'</p><p data-type="city">'+item.State+'</p></div>';
    //     });

    //     showData.html(items);
    // });

    // showData.text('Loading the JSON file.');

    //********************
    // Search Open
    //********************
    $('.searchSite').on('click', function(e) {
        $('.searchForm').toggleClass('open');

        e.preventDefault();
    });


    ////********************
    //// FS Modal
    ////********************
    //$('#fsModal').on('show.bs.modal', function (event) {
    //    var fsClick = $(event.relatedTarget); // Button that triggered the modal
    //    //var recipient = button.data('whatever') // Extract info from data-* attributes
    //    var fsTitle = fsClick.find('.servicetitle').html();
    //    var fsContent = fsClick.find('.serviceDesc').html();

    //    var fsModal = $(this);
    //    fsModal.find('.modal-title').text('').text(fsTitle);
    //    fsModal.find('.modal-body').html('').html(fsContent);

    //});

    //$('#fsModal1').on('show.bs.modal', function (event) {
    //    var fsClick = $(event.relatedTarget); // Button that triggered the modal
    //    //var recipient = button.data('whatever') // Extract info from data-* attributes
    //    var fsTitle = fsClick.find('.servicetitle').html();
    //    var fsContent = fsClick.find('.serviceDesc').html();

    //    var fsModal1 = $(this);
    //    fsModal1.find('.modal-title').text('').text(fsTitle);
    //    fsModal1.find('.modal-body').html('').html(fsContent);

    //    fsModal1.find(".title-txt").on("click", function(){
    //        $(".productport").toggleClass("showbox");            
    //    });

    //    fsModal1.find("button.close").on("click", function(){
    //        $(".productport").removeClass("showbox");            
    //    });

    //});    

    //********************
    // FS Modal
    //********************
    $('#fsModal').on('show.bs.modal', function (event) {
        var fsClick = $(event.relatedTarget); // Button that triggered the modal
        //var recipient = button.data('whatever') // Extract info from data-* attributes
        var fsTitle = fsClick.find('.servicetitle').html();
        var fsContent = fsClick.find('.serviceDesc').html();

        var fsModal = $(this);
        fsModal.find('.modal-title').text('').text(fsTitle);
        fsModal.find('.modal-body').html('').html(fsContent);

    });

    $('#fsModal1').on('show.bs.modal', function (event) {
        var fsClick = $(event.relatedTarget); // Button that triggered the modal
        //var recipient = button.data('whatever') // Extract info from data-* attributes
        var fsTitle = fsClick.siblings('.servicetitle').html();
        var fsContent = fsClick.siblings('.serviceDesc').html();

        var fsModal1 = $(this);
        fsModal1.find('.modal-title').text('').text(fsTitle);
        fsModal1.find('.modal-body').html('').html(fsContent);

        fsModal1.find(".title-txt").on("click", function () {
            $(".productport").toggleClass("showbox");
        });

        fsModal1.find("button.close").on("click", function () {
            $(".productport").removeClass("showbox");
        });

    });
    //********************
    // Advanced Search
    //********************
    $('.advancedSearch').on('click', function(e) {
        $('.advancedRow').slideToggle();

        e.preventDefault();
    });


    //********************
    // Testimonials
    //********************
    $('#customers-testimonials').owlCarousel({
        loop: true,
        center: true,
        items: 1,
        margin: 0,
        autoplay: true,
        dots:true,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 1
          },
          1170: {
            items: 2
          }
        }
    });

})

    //********************
    // Accordion
    //********************

$(function () {
    var $active = $('#accordion .panel-collapse.in').prev().addClass('active');
    
    $('#accordion').on('show.bs.collapse', function (e)
    {
        $('#accordion .panel-heading.active').removeClass('active');
        $(e.target).prev().addClass('active');
    });
    $('#accordion').on('hide.bs.collapse', function (e)
    {
        $(e.target).prev().removeClass('active');
    });
                  
});


//******************************
// Equal Card Heights '.home-cards .card'
//*******************************
$(function () {

    function equalHeight() {

        var heightArray = $(".labePath, .addressPath").map(function () {
            return $(this).height();
        }).get();

        var maxHeight = Math.max.apply(Math, heightArray);
        $(".labePath, .addressPath").height(maxHeight);
    }

    equalHeight();
});

$(function() {

    $("ul.sm-collapsible > li > .has-submenu").on("click", function() {
        $(this).parent().siblings().removeClass("open");
        $(".dropdown-menu").hide();

        if ($(this).parent().hasClass('open')) {
            window.location = $(this).attr("href");
        }
    })

    
})

$(function() {

    $("#ruser ,#ruser1").on('click', function () {
        $('.fixruserbox').addClass("opened");
        $('.user').addClass("backside");
    })

    $(".closeuser").on('click', function() {
        $(this).parent().removeClass("opened");        
         setTimeout(function() {
           $('.user').removeClass("backside");
         }, 700); 
    })

})




$(function() {

    var ravenous = function() { 

        if (window.matchMedia('(max-width: 1100px)').matches)
        {
          
            var newSrc = $('#wows1_2').attr('data-src');
            var img = $('img#wows1_2');
            img.attr('data-orSrc', img.attr('src'));
            img.attr('src',newSrc);
          
        } else if (window.matchMedia('(min-width: 1500px)').matches) {

            var newSrc = $('#wows1_2').attr('data-src1');
            var img = $('img#wows1_2');
            img.attr('data-orSrc', img.attr('src'));
            img.attr('src',newSrc);
          
        } else {
            var img = $('img#wows1_2');
            img.attr('src',img.attr('data-orSrc'));
        }

        
    };

    $(window).resize(ravenous);
    ravenous();  

});


$(function() {
  $(".expand").on( "click", function() {
    alert(1);
    // $(this).next().slideToggle(200);
    $expand = $(this).find(">:first-child");
    
    if($expand.text() == "+") {
      $expand.text("-");
    } else {
      $expand.text("+");
    }
  });
});

$(function() {
    $(".leavecommentbtn").click(function(){
        $("#demo").toggle(1000);
    });
});

$(function() {
    //alert(1);
    
});

$(function() {

    $('#loadbanner .owl-carousel').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout:5000,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            900: {
                items: 1
            },
            1100: {
                items: 1   
            }
        }
    })
    // $("#demos .owl-prev").html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
    // $("#demos .owl-next").html('<i class="fa fa-angle-right" aria-hidden="true"></i>');


    // owl

})

$(function() {
    $('.loadbannerbox').fadeIn('fast').delay(10000).fadeOut('fast');
    //$('body').css("overflow","hidden");
    $('#closeloadbanner a').on("click", function(e) {
        e.preventDefault();
        $('.loadbannerbox').hide();
        //$('body').css("overflow","auto");
    })
})


$(function () {

    if (window.matchMedia("(max-width: 800px)").matches) {
        //alert(2);
        $('#loadbannerimg1').attr('src', 'img/loadbanner/img1-m.jpg');
        $('#loadbannerimg2').attr('src', 'img/loadbanner/img2-m.jpg');

        $('#webbannerimg1').attr('src', 'img/webbanner/img1-m.jpg');
        $('#webbannerimg2').attr('src', 'img/webbanner/img2-m.jpg');
        $('#stationChange').attr('src', 'img/station-banner-m.jpg');
    } else {
        //alert(1);
        $('#loadbannerimg1').attr('src', 'img/loadbanner/img1.jpg');
        $('#loadbannerimg2').attr('src', 'img/loadbanner/img2.jpg');

        $('#webbannerimg1').attr('src', 'img/webbanner/img1.jpg');
        $('#webbannerimg2').attr('src', 'img/webbanner/img2.jpg');
        $('#stationChange').attr('src', 'img/station-banner.jpg');
    }

})

$(function () {
    $("#shareIcons").jsSocials({
        showLabel: false,
        showCount: false,
        shares: ["facebook", "linkedin", "whatsapp", "email", ]
    });
})

$(function () {
    $('#owl-Slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            900: {
                items: 1
            },
            1100: {
                items: 1
            }
        }
    })
    // $("#owl-Slider .owl-prev").html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
    // $("#owl-Slider .owl-next").html('<i class="fa fa-angle-right" aria-hidden="true"></i>');


    // owl

})