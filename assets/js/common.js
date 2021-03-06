/**
 * common.js
 *
 *  version --- 3.7
 *  updated --- 2012/10/12
 */


/* !stack ------------------------------------------------------------------- */
jQuery(document).ready(function() {
	pageScroll();
	rollover();
	addCss();
        subMenu();
        scrollPageTop();
        toggleSubMenu();
        videoYT();
        
        $('#menuMobileTemplate').slicknav();
        $('#menuClose').slicknav('close');
});


/* !isUA -------------------------------------------------------------------- */
var isUA = (function(){
	var ua = navigator.userAgent.toLowerCase();
	indexOfKey = function(key){ return (ua.indexOf(key) != -1)? true: false;}
	var o = {};
	o.ie      = function(){ return indexOfKey("msie"); }
	o.fx      = function(){ return indexOfKey("firefox"); }
	o.chrome  = function(){ return indexOfKey("chrome"); }
	o.opera   = function(){ return indexOfKey("opera"); }
	o.android = function(){ return indexOfKey("android"); }
	o.ipad    = function(){ return indexOfKey("ipad"); }
	o.ipod    = function(){ return indexOfKey("ipod"); }
	o.iphone  = function(){ return indexOfKey("iphone"); }
	return o;
})();

/* !rollover ---------------------------------------------------------------- */
var rollover = function(){
    var suffix = { normal : '_no.', over   : '_on.'}
    $('a.over, img.over, input.over').each(function(){
            var a = null;
            var img = null;

            var elem = $(this).get(0);
            if( elem.nodeName.toLowerCase() == 'a' ){
                    a = $(this);
                    img = $('img',this);
            }else if( elem.nodeName.toLowerCase() == 'img' || elem.nodeName.toLowerCase() == 'input' ){
                    img = $(this);
            }

            var src_no = img.attr('src');
            var src_on = src_no.replace(suffix.normal, suffix.over);

            if( elem.nodeName.toLowerCase() == 'a' ){
                    a.bind("mouseover focus",function(){ img.attr('src',src_on); })
                     .bind("mouseout blur",  function(){ img.attr('src',src_no); });
            }else if( elem.nodeName.toLowerCase() == 'img' ){
                    img.bind("mouseover",function(){ img.attr('src',src_on); })
                       .bind("mouseout", function(){ img.attr('src',src_no); });
            }else if( elem.nodeName.toLowerCase() == 'input' ){
                    img.bind("mouseover focus",function(){ img.attr('src',src_on); })
                       .bind("mouseout blur",  function(){ img.attr('src',src_no); });
            }

            var cacheimg = document.createElement('img');
            cacheimg.src = src_on;
    });
};
/* !pageScroll -------------------------------------------------------------- */
var pageScroll = function(){
	jQuery.easing.easeInOutCubic = function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	}; 
	$('a.scroll, .scroll a, .pageTop a').each(function(){
		$(this).bind("click keypress",function(e){
			e.preventDefault();
			var target  = $(this).attr('href');
			var targetY = $(target).offset().top;
			var parent  = ( isUA.opera() )? (document.compatMode == 'BackCompat') ? 'body': 'html' : 'html,body';
			$(parent).animate(
				{scrollTop: targetY },
				400,
				'easeInOutCubic'
			);
			return false;
		});
	});
};

/* !popWindow --------------------------------------------------------------- */
var popWindow = function (){
	var param = null;
	// param[0] = width
	// param[1] = height
	// param[2] = window.name
	$('a[class^="js_popup"], area[class^="js_popup"]').each(function(i){
		$(this).click(function(){
			var w = null;
			param = $(this).attr('class').match(/[0-9]+/g);
			// get window.name
			param[2] = window.name ? window.name+'_' : '';
			w = window.open(this.href, param[2]+'popup'+i,'width='+param[0]+',height='+param[1]+',scrollbars=yes');
			w.focus();
			return false;
		});
	});
};
/* !defFunc ----------------------------------------------------------------- */
var defFunc = (function(){
	Print = function(){ window.print(); return false;}
	Close = function(){ window.close(); return false;}
})();
/* !Addition Fitst & Last --------------------------------------------------- */
var addCss = (function(){
	$('li:first-child:not(:last-child)').addClass('first');
	$('li:last-child').addClass('last');
});
/* !subMenu ---------------------------------------------------------------- */
var subMenu = function(){
 $('#subMenu li').hover(function(){
  $(this).addClass('active');
 },function(){
  $(this).removeClass('active');
 });
};

/* !scrollPageTop ---------------------------------------------------------------- */
var scrollPageTop = function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
                $('.pageTop').fadeIn();
        }else {
                $('.pageTop').fadeOut();
        }
        
        var breakPoint = $('#footerWrap').offset().top - 809;
        if($(this).scrollTop() >= breakPoint){
            $('.pageTop').addClass('nofixed');
        }else{
            $('.pageTop').removeClass('nofixed');
        }
    });
    
};
/* !toggleSubMenu ---------------------------------------------------------------- */
var toggleSubMenu = function(){
    $('a#btnSubMenu').click(function(e){
        e.preventDefault();
        $(this).next().slideToggle('slow');
    });
    
    $('.list_submenu01>li>a').click(function(e){
        e.preventDefault();
        if($('.list_submenu01>li').hasClass('open')){
            $('.list_submenu01>li.open ul').slideToggle('slow');
            $('.list_submenu01>li').removeClass('open');
        }else{
            $('.list_submenu01>li>a').next().removeAttr('style');
            $(this).next().slideToggle('slow');
            $(this).parent().addClass('open');
        }
        
        
    });
    
};

var videoYT = function(){
    videos = document.querySelectorAll("video");
    for (var i = 0, l = videos.length; i < l; i++) {
        var video = videos[i];
        var src = video.src || (function () {
            var sources = video.querySelectorAll("source");
            for (var j = 0, sl = sources.length; j < sl; j++) {
                var source = sources[j];
                var type = source.type;
                var isMp4 = type.indexOf("mp4") != -1;
                if (isMp4) return source.src;
            }
            return null;
        })();
        if (src) {
            var isYoutube = src && src.match(/(?:youtu|youtube)(?:\.com|\.be)\/([\w\W]+)/i);
            if (isYoutube) {
                var id = isYoutube[1].match(/watch\?v=|[\w\W]+/gi);
                id = (id.length > 1) ? id.splice(1) : id;
                id = id.toString();
                var mp4url = "http://www.youtubeinmp4.com/redirect.php?video=";
                video.src = mp4url + id;
            }
        }
    }
};