var QueryLoader = {
    /*
     * QueryLoader		Preload your site before displaying it!
     * Author:			Gaya Kessler
     * Date:			23-09-09
     * URL:				http://www.gayadesign.com
     * Version:			1.0
     *
     * A simple jQuery powered preloader to load every image on the page and in the CSS
     * before displaying the page to the user.
     */

    overlay: "",
    loadBar: "",
    preloader: "",
    items: new Array(),
    doneStatus: 0,
    doneNow: 0,
    selectorPreload: "body",
    ieLoadFixTime: 2000,
    ieTimeout: "",

    init: function() {
        if (navigator.userAgent.match(/MSIE (\d+(?:\.\d+)+(?:b\d*)?)/) == "MSIE 6.0,6.0") {
            //break if IE6
            return false;
        }
        if (QueryLoader.selectorPreload == "body") {
            QueryLoader.spawnLoader();
            QueryLoader.getImages(QueryLoader.selectorPreload);
            QueryLoader.createPreloading();
        } else {
            $(document).ready(function() {
                QueryLoader.spawnLoader();
                QueryLoader.getImages(QueryLoader.selectorPreload);
                QueryLoader.createPreloading();
            });
        }

        //help IE drown if it is trying to die :)
        QueryLoader.ieTimeout = setTimeout("QueryLoader.ieLoadFix()", QueryLoader.ieLoadFixTime);
    },

    ieLoadFix: function() {
        var ie = navigator.userAgent.match(/MSIE (\d+(?:\.\d+)+(?:b\d*)?)/);
        if (ie[0].match("MSIE")) {
            while ((100 / QueryLoader.doneStatus) * QueryLoader.doneNow < 100) {
                QueryLoader.imgCallback();
            }
        }
    },

    imgCallback: function() {
        QueryLoader.doneNow ++;
        QueryLoader.animateLoader();
    },

    getImages: function(selector) {
        var everything = $(selector).find("*:not(script)").each(function() {
            var url = "";

            if ($(this).css("background-image") != "none") {
                var url = $(this).css("background-image");
            } else if (typeof($(this).attr("src")) != "undefined") {
                var url = $(this).attr("src");
            }

            url = url.replace("url(\"", "");
            url = url.replace("url(", "");
            url = url.replace("\")", "");
            url = url.replace(")", "");

            if (url.length > 0) {
                QueryLoader.items.push(url);
            }
        });
    },

    createPreloading: function() {
        QueryLoader.preloader = $("<div></div>").appendTo(QueryLoader.selectorPreload);
        $(QueryLoader.preloader).css({
            height: 	"0px",
            width:		"0px",
            overflow:	"hidden"
        });

        var length = QueryLoader.items.length;
        QueryLoader.doneStatus = length;

        for (var i = 0; i < length; i++) {
            var imgLoad = $("<img></img>");
            $(imgLoad).attr("src", QueryLoader.items[i]);
            $(imgLoad).unbind("load");
            $(imgLoad).bind("load", function() {
                QueryLoader.imgCallback();
            });
            $(imgLoad).appendTo($(QueryLoader.preloader));
        }
    },

    spawnLoader: function() {
        QueryLoader.overlay = $("#loading");
        QueryLoader.loadBar = $(".gram");
        QueryLoader.loadAmt = $("#load-percent");
    },

    animateLoader: function() {
        var perc = (100 / QueryLoader.doneStatus) * QueryLoader.doneNow;
        if (perc > 99) {
            $(QueryLoader.loadAmt).html("100%");
            QueryLoader.doneLoad();
        } else {
            $(QueryLoader.loadAmt).html(Math.floor(perc)+"%");
        }
    },

    doneLoad: function() {
        //prevent IE from calling the fix
        clearTimeout(QueryLoader.ieTimeout);
        $(QueryLoader.preloader).remove();
    }
}