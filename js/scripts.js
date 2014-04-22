/*                                                         
                                   SSSSSSSSSSSSSSS      QQQQQQQQQ        SSSSSSSSSSSSSS 
         This page                SS::::::::::::::S   QQ:::::::::QQ    SS::::::::::::::S
       built with love            S:::::SSSSSS:::::S QQ:::::::::::::QQ S:::::SSSSSS:::::S
      by Samuel Q Singer          S:::::S     SSSSSSQ:::::::QQQ:::::::QS:::::S     SSSSSS
                                  S:::::S           Q::::::O   Q::::::QS:::::S            
    For more information,         S:::::S           Q:::::O     Q:::::QS:::::S  
  please visit: sqsinger.com       S::::SSSS        Q:::::O     Q:::::Q S::::SSSS
        or contact:                 SS:::::SSSSS    Q:::::O     Q:::::Q  SS::::::SSSSS
  hello[at]sqsinger[dot]com           SSS:::::::SS  Q:::::O     Q:::::Q    SSS::::::::SS  
                                         SSSSSS:::S Q:::::O     Q:::::Q       SSSSSS::::S 
 Welcome to the source code :)                S::::SQ:::::O  QQQQ:::::Q            S::::S
                                              S::::SQ::::::O Q::::::::Q            S::::S
                       @@@#       SSSSSSS     S::::SQ:::::::QQ::::::::Q SSSSSS     S::::S
            @@         @@@@       S::::::SSSSSS::::S QQ::::::::::::::Q  S:::::SSSSSS::::S
           @@@@@@     @@@@@@      S:::::::::::::::SS   QQ:::::::::::Q    S::::::::::::SS 
         @@@@@@@@@@#  @@@@@@       SSSSSSSSSSSSSSS       QQQQQQQQ::::QQ   SSSSSSSSSSSSS
        @@@@   @@@@@@@@@@@@                                       Q:::::Q 
       @@@      @@@@@@@@@@                                         QQQQQQ     
     @@@@       @@@@@@@@@   @@     
     @@@       @@@@@@@@@@   @@     
     @@@       @@@@@@@@@@   @@            .,,~~.                ,~"~.
              @@@@@@@@@@@@  @            { /`,__\     ,Wk       > ::::     x%F
             @@@@@@@@@ @@@ @@           { `}'~.~/   ,' /       <, ?::;   ,'"7
             @@@@@@@@   @@@@            {`}'\._/  ,' ,'         l_  f  ,'  /
            @@@@@@@@    @@@@             ,__/ l_.'`,'         ,__}--{_'  ,'
           @@@@@@@'      @              {  `.__.' <          /          7
           @@@@@@                        \ \    )  )        /   +----+ /
          @@@@@@@@                        \-\`-'`-'        /  , | 42 |7              
          @@@@@@@@@@                       \ \___l,-_,___.'  /1 +----/              
          @@@@@@@@@@@@                      k____-~'-l_____.' |     f               
          @@@@@@@@@@@@@@                   /===#==\           l     j                
         #@@@@@@@@@@@@@@                 .'        `.         I===I=I                 
         @@@@@    '@@@@@               ,' ,'       `.`.       f     }                 
         @@@@     @@@@@              ,' ,'  /      \ `.`.     |     }                
        @@@@@    @@@@              .'^.^.^.'`.'`.^.'`.'`.^.   l    Y;               
        @@@@    @@@@                          `.   \          }    |                 
      @@@@@    @@@                             !`,  \         |    |                  
     @@@@@`  @@@@                              l /   }       ,1    |                  
    @@@@@   '@@@                               l/   /        !l   ,l                 
    @@@      @@@                               /  ,'         ! \    \               
   @@@        @@@                             /  /!          !  \    \             
  @@#          @@@                           / ,f l          l___j.   \               
@@@@             @                          (_ \l_ `_    ,.-'`--(  `.,'`.             
@@@@                                         Y\__Y`--'   `-'~x__J    j'  >     
 @@@                                                               ,/ ,^'
  @@,                                                             f__J  
                                


Welcome once again to my source code! Nice to meet you :)

Feel free to take a look around and send any comments my way: sqsinger [at] post [dot] harvard [dot] edu 

*/



// Utility function: style the top menu by assigning .current to the active page.
function update_current(linkname) {
    $(".current").removeClass("current"); // By default: no current link.
    linkname = linkname + "_link"; // Linkname should be a jQuery selector starting with "#".
    $(linkname).addClass("current"); // Given this class, CSS will style appropriately.
}


// ---------------------------------------------------------- Semi-Ajax Page Loading
// All sections start off shown (for those no-script types)

// The "main" function, if you will, of this page.
function loadpage() {
    // Hide loading icon & Scroll to the top
    $("#loading-icon").slideUp();

    // Rename .page elements for jQuery-enabled menu function
    // Reason: Internal anchor tags will be unchanged and work well for jumps if noscript; no jumps if script.
    $(".page").each(function(index,element) { var x = $(element).attr("id") + "_section"; $(element).attr("id",x); x+=1; });

    // Determine and load the current page on pageload (if applicable)
    var page = window.location.hash.substring(1);
    update_current("." + page);
    var pgelem = $("#" + page + "_section");
    if (pgelem.length > 0) // If this page actually exists.
        pgelem.show();
    else
        $("#home_section").show(); // Show the homepage by default, even if passed a bad reference.

    // page transition support
    $(".nav a, #top_logo a").click(function(e) {
        // Transition out the current page.
        $("#main div.page").slideUp("slow"); // The active section div is always first (only) child of #main div
        
        // Update the top menu appropriately.
        linkname = "." + ($(this).attr("href")).substring(1);
        update_current(linkname); // See my above function for this.
        
        // Update the page content accordingly.
        target = $(this).attr("href") + "_section";
        $(target).slideDown("slow");

        // Scroll nicely toward the top
        if ($(document).scrollTop() > 266 )
          $("body, html").animate({ scrollTop: 266 });
    });

}

// This is the part that calls other functions above.
$(window).load(function() {
    $("body, html").animate({ scrollTop: 0 },200);
    navbar_resize();
    // Create loading effect. Wait for a moment, then load the page properly.
    $(".page").hide();
    loadpage();
    $('#FBalbum').fbAlbum({ 'albumID':'181298895364133' }); // Load facebook album
});


function navbar_resize() {
    var y = $(document).scrollTop();
    var x = $(window).width(); // For proper responsive behavior.
    var w = $("#banner").width();
    if (y > 265) {
      $(".headliner").css("position","fixed").css("top","0").css("left","auto").css("border-top-right-radius","0");
      if(x > w)
        $(".headliner").width(w);
      else
        $(".headliner").width((x-5) + "px").css("left","0");
      $("#navlogo").css("display","inline");
      $(".page, .sidebar").css("margin-top","55px");
    }
    else {
      $(".headliner").css("position","relative").css("top","0").css("border-top-right-radius","40px");
      $("#navlogo").hide();
      $(".page, .sidebar").css("margin-top","5px");
    }
    if(x<850) 
      $("#navlogo img").hide();
    else 
      $("#navlogo img").show();
    if(x<500)
      $("#navlogo span").hide();
    else
      $("#navlogo span").show();
}

// Change styling on the navbar to make it fixed if scrolled past or if window resized
$(window).scroll(function() {
  navbar_resize();
});
$(window).resize(function() {
  navbar_resize();
})




// fbalbumJS.js by zach@lysobey.com
(function ($) {
    $.fn.fbAlbum = function (options) {
        var $targetElement = this,
            graph = "https://graph.facebook.com/",
            settings = {
                'albumID' : '10150302289698306',
                'limit' : 100,
                'limitThumbs' : false,
                'ulClass' : 'album',
                'rel' : 'group',
                'callback' : '',
                'title' : true,
                'thumbSize' : 0,
                'fullSize' : 0,
                'caption' : false
            };
        if (options) {
            $.extend(settings, options);
        }
        graph += settings.albumID + "/photos?fields=name,picture,images,source&limit=" + settings.limit + "&callback=?";
        $.getJSON(graph, function (json) {
            var albumItem = [],
                currentIndex = 0,
                $ul = $('<ul>').addClass(settings.ulClass);
            $.each(json.data, function () {
                if (typeof this.picture !== "undefined") {
                    console.log(this.images);
                    var getThumbnail = function(context) {
                        var n = 9, thumb = context.images[n - settings.thumbSize];
                        if (settings.thumbSize === 0) {
                            return context.picture;
                        }
                        while(!thumb) {
                            console.log(thumb);
                            n--;
                            thumb = context.images[n - settings.thumbSize];
                        }
                        return thumb.source;
                    };
                    var thumbImg = getThumbnail(this),
                        fullImg = settings.fullSize === 0 ? this.source : this.images[8 - settings.fullSize].source,
                        title = (settings.title && this.name) ? this.name : '',
                        $noThumb = (settings.limitThumbs && (currentIndex += 1) >= settings.limitThumbs),
                        $img = $noThumb ? null : $('<img>').attr({
                            'src': thumbImg,
                            'alt': title,
                            'class': "FB-image"
                        }),
                        $caption = (!settings.caption || title === '') ? null : $('<p>').addClass('caption').text(title),
                        $a = $('<a>').attr({
                            'class': 'imageLink',
                            'rel': settings.rel,
                            'title': title,
                            'target': "_blank",
                            'href': "https://www.facebook.com/media/set/?set=a.181298895364133.1073741825.116918721802151&type=3"
                        }),
                        $li = $('<li>').addClass($noThumb ? 'noThumb' : 'fbThumb');
                    $ul.append($li.append($a.append($img, $caption)));
                }
            });
            $targetElement.append($ul);
            if (settings.callback) {
                settings.callback();
            }
        });
        return $targetElement;
    };
}(jQuery));
