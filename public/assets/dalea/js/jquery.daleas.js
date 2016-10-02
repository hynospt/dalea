var animate = true;

function hideAbout(active) {

    if (active === 'history') {
        $('#history .history-desc').stop().animate({opacity:'0', right: '+470'}, 750);
        $('#history .history-icon').stop().animate({left: '+470'}, 750);
        setTimeout(function() {
            $('#history').stop().fadeTo(750, 0).hide(0).removeClass('active');
        }, 750);
    } else if (active === 'why') {
        $('#why-bg').stop().fadeTo(750, 0).hide(0);
        setTimeout(function() {
            $('#why').stop().fadeTo(750, 0).hide(0).removeClass('active');
        }, 750);
    }  else if (active === 'team') {
        $('#team-bg').stop().fadeTo(750, 0).hide(0);
        setTimeout(function() {
            $('#team').stop().fadeTo(750, 0).hide(0).removeClass('active');
        }, 750);
    } else if (active === 'vandm') {
        $('#vandm .left').stop().animate({left: '-150', opacity: 0}, 750);
        $('#vandm .right').stop().animate({left: '+150', opacity: 0}, 750);
        setTimeout(function() {
            $('#vandm').stop().fadeTo(750, 0).hide(0).removeClass('active');
        }, 750);
    } else if (active === 'dna') {
        $('.dna-part').each(function() {
            $(this).stop().delay(750).addClass('bounceOut').fadeOut(0);
        });
        setTimeout(function() {
            $('#dna').stop().fadeTo(750, 0).hide(0).removeClass('active');
        }, 750);
        setTimeout(function() {
            $('.dna-part').stop().removeClass('bounceOut');
        }, 1500);
    } else if (active === 'management') {
        $('#management #management-part-04').animate({opacity: 0}, 300);
        setTimeout(function() {
            $('#management #management-part-03').animate({opacity: 0}, 300);
            $('#management #management-sub-part-03').animate({opacity: 0}, 300);
        }, 300);
        setTimeout(function() {
            $('#management #management-part-02').animate({opacity: 0}, 300);
            $('#management #management-sub-part-02').animate({opacity: 0}, 300);
        }, 600);
        setTimeout(function() {
            $('#management #management-part-01').animate({opacity: 0}, 300);
            $('#management #management-sub-part-01').animate({opacity: 0}, 300);
        }, 900);
        setTimeout(function() {
            $('#management #management-icon').animate({top: 0, left: '0'}, 300);
            $('#management #management-icon img').animate({width: 160}, 300);
        }, 1200);
        setTimeout(function() {
            $('#management').stop().fadeTo(1, 0).hide(0).removeClass('active');
        }, 1500);
    } else {
        $('#green-icon').css({'transform':'scale(1)','opacity':'1'});
        $('#green-icon .left').css({'left':'0px'});
        $('#green-icon .right').css({'right':'0px'});
        $('#green-cont').css({'transform':'scale(0)','opacity':'0'});
        setTimeout(function() {
            $('#green').stop().fadeTo(750, 0).hide(0).removeClass('active');
        }, 750);
    }

};

function animateAbout(dest) {
    if (dest === '#history') {
        $('#history').stop().fadeTo(750, 1).show(0).addClass('active');
        setTimeout(function() {
            $('#history .history-desc').stop().animate({opacity:'1', right: '0'}, 750);
            $('#history .history-icon').stop().animate({left: '0'}, 750);
            animate = true;
        }, 750);

    } else if (dest === '#why') {
        $('#why').stop().fadeTo(750, 1).show(0).addClass('active');
        setTimeout(function() {
            $('#why-bg').stop().fadeTo(750, 1).show(0);
        }, 750);
        setTimeout(function() {
            animate = true;
        }, 1500);

    } else if (dest === '#team') {
        $('#team').stop().fadeTo(750, 1).show(0).addClass('active');
        setTimeout(function() {
            $('#team-bg').stop().fadeTo(750, 1).show(0);
        }, 750);
        setTimeout(function() {
            animate = true;
        }, 1500);

    } else if (dest === '#vandm') {
        $('#vandm').stop().fadeTo(750, 1).show(0).addClass('active');
        setTimeout(function() {
            $('#vandm .left').stop().animate({left: '0', opacity: 1}, 750);
            $('#vandm .right').stop().animate({left: '0', opacity: 1}, 750);
        }, 750);
        setTimeout(function() {
            animate = true;
        }, 1500);

    } else if (dest === '#dna') {
        $('#dna').stop().fadeTo(750, 1).show(0).addClass('active');
        $('.dna-part').each(function() {
            $(this).stop().delay(750).fadeIn(0).addClass('bounceIn');
        });
        setTimeout(function() {
            $('.dna-part').stop().removeClass('bounceIn');
            animate = true;
        }, 1500);

    } else if (dest === '#management') {
        $('#management').stop().fadeTo(1, 1).show(0).addClass('active');
        $('#management #management-icon').animate({top: 180, left: '-250'}, 500);
        $('#management #management-icon img').animate({width: 120}, 500);
        setTimeout(function() {
            $('#management #management-part-01').animate({opacity: 1}, 300);
            $('#management #management-sub-part-01').animate({opacity: 1}, 300);
        }, 300);
        setTimeout(function() {
            $('#management #management-part-02').animate({opacity: 1}, 300);
            $('#management #management-sub-part-02').animate({opacity: 1}, 300);
        }, 600);
        setTimeout(function() {
            $('#management #management-part-03').animate({opacity: 1}, 300);
            $('#management #management-sub-part-03').animate({opacity: 1}, 300);
        }, 900);
        setTimeout(function() {
            $('#management #management-part-04').animate({opacity: 1}, 300);
            animate = true;
        }, 1200);

    } else {
        $('#green').stop().fadeTo(750, 1).show(0).addClass('active');
        setTimeout(function() {
            //$('#green-icon').css({'transform':'scale(3)','opacity':'0'});
            $('#green-icon').css({'opacity':'0'});
            //$('#green-icon .left').css({'left':'-140px'});
            //$('#green-icon .right').css({'right':'-140px'});
            $('#green-cont').css({'transform':'scale(1)','opacity':'1'});
        }, 750);
        setTimeout(function() {
            animate = true;
        }, 1500);

    }
};

$(window).on('load resize', function() {
    var currY = $(this).scrollTop();
    var navH = $('.navbar').height();
    var winH = $(window).height();
    var winHdb = winH * 2;
    var topN = winH - navH;
    var mapH = winH - 50;
    var newH = winH - 213;
    //$('#intro').css({'margin-top': navH+'px', 'min-height': topN+'px'});
    //$('.about-content').css('min-height', winH+'px');
    //if (currY < topN) {
    //	$('.navbar').css('top', topN+'px');
    //};


    $('section').css('min-height', winH+'px');
    $('#intro').css('min-height', winH+'px');
    $('.carousel').css({'margin': 0, 'width': $(window).outerWidth(), 'height': $(window).outerHeight()});
    $('#map_canvas').height(mapH);
    $('.content-height').height(newH);
    $('#social .bx-viewport').height(newH);

    $('#about-content > .about-content').each(function() {
        var tHeight = $(this).height();
        var margin = (newH - tHeight) / 2;
        $(this).css('min-height', newH+'px');
    });

//    var currentCenter = map.getCenter();
//    google.maps.event.trigger(map, 'resize');
// 	map.setCenter(currentCenter);
//
//    coordInfoWindow.setContent(latlngStr);
//    coordInfoWindow.setPosition(point);
//    coordInfoWindow.open(map);
});

$(window).scroll(function() {
    var currY = $(this).scrollTop();
    var navH = $('.navbar').height();
    var winH = $(window).height();
    var topN = winH - navH;
    var abtT = $('#about').offset().top;
    var prodT = $('#products').offset().top;
    var prodB = $('#social').offset().top - 10;
    var contT = $('#contact').offset().top;
    var mapT = $('#map-wrapper').offset().top;
    var plistT = $('#product_list').offset().top;

    if (currY >= 105) {
        //$('.navbar').css('top', '0').addClass('top');
        $('.navbar').stop().addClass('scroll');
        $('.navbar-header').stop().addClass('scroll');
    } else {
        //$('.navbar').css('top', topN+'px').removeClass('top');
        $('.navbar').stop().removeClass('scroll');
        $('.navbar-header').stop().removeClass('scroll');
    }

    clearTimeout($.data( this, "scrollCheck" ));
    $.data(this, "scrollCheck", setTimeout(function() {
        if (abtT <= currY && currY <= (abtT + 200)) {
            $('html, body').stop().animate({ scrollTop: abtT }, 250);
        }
    }, 1000));

//	if (abtT <= currY && currY < prodT) {
//		$('#about-nav').stop().fadeIn(0);
//	} else {
//		$('#about-nav').stop().fadeOut(0);
//	}
//
//	if (prodT <= currY && currY < plistT) {
//		$('#product-nav .map').stop().addClass('active');
//	} else {
//		$('#product-nav .map').stop().removeClass('active');
//	}
//
//	if (plistT <= currY && currY < prodB) {
//		$('#product-nav .list').stop().addClass('active');
//	} else {
//		$('#product-nav .list').stop().removeClass('active');
//	}
//
//
//	if (prodT <= currY && currY <= prodB) {
//		$('#product-nav').stop().fadeIn(0);
//	} else {
//		$('#product-nav').stop().fadeOut(0);
//	}
//
//	if (contT <= currY) {
//		$('#contact-nav').stop().fadeIn(0);
//	} else {
//		$('#contact-nav').stop().fadeOut(0);
//	}
});

$(function() {
    var sections = $(".section");
    var navigation_links = $(".navbar-collapse li");

    sections.waypoint({
        handler: function(event, direction) {

            var active_section;
            active_section = $(this);
            if (direction === "up") active_section = active_section.prev();

            var active_link = $('.navbar-collapse li[title="#' + active_section.attr("id") + '"]');
            navigation_links.removeClass("active");
            active_link.addClass("active");

        },
        offset: '0'
    })
});

$(document).ready(function() {
    $('.carousel').carousel({
        pause: "false",
        interval: 4000
    });

    $('.carousel .item').css({'position': 'absolute', 'width': '100%', 'height': '100%'});
    $('.carousel-inner div.item img.cover').each(function() {
        var imgSrc = $(this).attr('src');
        $(this).parent().css({'background': 'url('+imgSrc+') center center no-repeat', '-webkit-background-size': '100% ', '-moz-background-size': '100%', '-o-background-size': '100%', 'background-size': '100%', '-webkit-background-size': 'cover', '-moz-background-size': 'cover', '-o-background-size': 'cover', 'background-size': 'cover'});
        $(this).remove();
    });


    $(".navbar-brand").click(function() {
        var dest = $(this).attr('href');
        $('html, body').stop().animate({
            scrollTop: 0
        }, 1500);

        return false
    });

    $(".navbar-collapse li a").click(function() {
        var dest = $(this).attr('href');

        $('html, body').stop().animate({
            scrollTop: $(dest).offset().top
        }, 1500);

        return false
    });

    $(".title-top > #about-nav > li > a").live('click', function() {
        var act = $(this).hasClass('active');
        if (animate == true && act != true) {
            animate = false;
            var dest = $(this).attr('href');
            var active = $('#about-content').find('.active').attr('id');

            hideAbout(active);
            $("#about-nav a.active").stop().removeClass('active');
            $(this).stop().addClass('active');

            setTimeout(function() {
                animateAbout(dest)
            }, 1500);

            return false
        } else {
            return false
        }
    });

    $("#product-nav a").click(function() {
        var dest = $(this).attr('href');

        $('html, body').stop().animate({
            scrollTop: $(dest).offset().top
        }, 1500);

        return false
    });

//	$('#team #team-overlay .teams').hover(function() {
//		var desc = $(this).attr('data-desc');
//		var overlay = $(this).attr('data-overlay');
//		$(desc).css('opacity', '1');
//		$(overlay).find('.overlay').css('opacity', '1');
//	}, function() {
//		var desc = $(this).attr('data-desc');
//		var overlay = $(this).attr('data-overlay');
//		$(desc).css('opacity', '0');
//		$(overlay).find('.overlay').css('opacity', '0');
//	});
//
//	$('#team #team-cont .desc').hover(function() {
//		var select = $(this).attr('data-overlay');
//		$(select).find('.overlay').css('opacity', '1');
//	}, function() {
//		var select = $(this).attr('data-overlay');
//		$(select).find('.overlay').css('opacity', '0');
//	});

    $(".backtotop").click(function() {
        var dest = $(this).attr('href');
        $('html, body').stop().animate({
            scrollTop: 0
        }, 1500);

        return false
    });

    $('#intro .item .more').hover(function() {
        $('#carousel-intro').carousel('pause');
    },function() {
        $('#carousel-intro').carousel('cycle');
    });
});

$(window).load(function() {
    $('#loading').fadeOut(250);
    setTimeout(function() {
        $('#loading').remove();
        $('body').css('overflow', 'inherit');
        $('html').niceScroll({'cursorwidth':'6','zindex':'10'});
    }, 260);
});

$(function() {
    $('.scroll-pane').jScrollPane({
        autoReinitialise: true, contentWidth: '0px', mouseWheelSpeed: 20
    });

});