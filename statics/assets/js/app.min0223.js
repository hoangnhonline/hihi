function load_next_page(){return is_loading_next_page=!0,$(".movie-next-page").hide(),$(".movie-next-page-loading").show(),$.ajax({url:$(".movie-next-page").attr("href"),dataType:"json"}).done(function(e){var i=new EJS({url:Config.base_url+"assets/ejs/movie-list.ejs?_=20150928"}).render(e);$(".movie-list-data").append(i),$(".movie-next-page-loading").hide(),$(".movie-next-page").attr("href",e.next_page_url),e.page<e.total_page&&$(".movie-next-page").show()}),!1}function search(){var e=$(".form-search .keyword").val();return e&&(e=e.replace(/ /g,"+"),e=e.toLowerCase(),window.location.href=Config.base_url+"movie?q="+e),!1}function auto_resize_player(){var e=$(window).width();768>=e?($(".player-width").css("width",e),$(".player-size").css("width",e),$(".player-size").css("height",e/16*9),$(".video-comming-soon").css("width",e),$(".video-comming-soon").css("height",e/16*9)):992>=e?($(".player-width").css("width","640px"),$(".player-size").css("width","640px"),$(".player-size").css("height","360px"),$(".video-comming-soon").css("width","640px"),$(".video-comming-soon").css("height","360px")):($(".player-width").css("width","853.333px"),$(".player-size").css("width","853.333px"),$(".player-size").css("height","480px"),$(".video-comming-soon").css("width","853.333px"),$(".video-comming-soon").css("height","480px"))}function toggle_sidebar(){console.log("toggle_sidebar"),$(".main").hasClass("slide-showing")?$(".main").removeClass("slide-showing"):($(".main").addClass("slide-showing"),$(".sidebar").height("100%"))}function movie_like(e){var i=$.cookie("movie_likes");"undefined"==typeof i&&(i=[]);var o="like";return $.inArray(e,i)>=0&&(o="unlike"),e=parseInt(e),$.ajax({url:"movie/like",method:"POST",dataType:"json",data:{id:e,action:o}}).done(function(t){if("OK"==t.code){if($(".btn-like-action[data-movie-id="+e+"]").toggleClass("btn-like btn-unlike btn-primary btn-warning"),$(".like-icon-movie-"+e).toggleClass("glyphicon-thumbs-up glyphicon-thumbs-down"),"like"==o)$(".like-text-movie-"+e).html(" UnLike"),i.push(e),$.cookie("movie_likes",i,{expires:365,path:"/"});else{$(".like-text-movie-"+e).html(" Like");var a=i.indexOf(e);i.splice(a,1),$.cookie("movie_likes",i,{expires:365,path:"/"})}$(".like-count-movie-"+e).html(t.data.like_count)}}),!1}function apply_like_temp(){var e=$.cookie("movie_likes");"undefined"==typeof e&&(e=[]);for(var i,o=0;o<e.length;o++)i=e[o],$(".btn-like-action[data-movie-id="+i+"]").toggleClass("btn-like btn-unlike btn-primary btn-warning"),$(".like-icon-movie-"+i).toggleClass("glyphicon-thumbs-up glyphicon-thumbs-down"),$(".like-text-movie-"+i).html(" UnLike")}function apply_viewed_temp(){}!function(e,i,o){var t,a=e.getElementsByTagName(i)[0];e.getElementById(o)||(t=e.createElement(i),t.id=o,t.src="//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1742989985931346",a.parentNode.insertBefore(t,a))}(document,"script","facebook-jssdk"),$(document).ready(function(){if($(window).scroll(function(){$(window).scrollTop()+$(window).height()+100>$(document).height()&&!$(".movie-next-page-loading").is(":visible")&&$(".movie-next-page").is(":visible")}),$(".video-js").length&&(videojs.options.flash.swf=Config.statics+"player/video-js.swf",videojs("#player",{autoplay:!1,nativeControlsForTouch:!0,plugins:{resolutionSelector:{default_res:Config.is_mobile&&!Config.is_tablet?"360p":"720p"}}},function(){var e=this;e.on("ended",function(){var e=$(".episodes .active").nextAll(".episode-link").attr("href");e?window.location.href=e:$(".player-ads").show()}),e.on("pause",function(){e.bigPlayButton.show(),$(".player-ads").show()}),e.on("play",function(){e.bigPlayButton.hide(),$(".player-ads").hide()}),e.on("waiting",function(){$("#player-audio").length&&videojs("#player-audio").pause()}),e.on("volumechange",function(){var e=videojs("#player").muted(),i=videojs("#player").volume();$.cookie("player_mute",e?1:0,{expires:365,path:"/"}),$.cookie("player_volume",i,{expires:365,path:"/"}),$("#player-audio").length&&(e?videojs("#player-audio").volume(0):videojs("#player-audio").volume(i))})}),videojs("#player").ready(function(){auto_resize_player();var e=this;muted=$.cookie("player_mute");var i=$.cookie("player_volume");e.muted("1"==muted),e.volume(i);var o="300";if(Config.is_mobile&&!Config.is_tablet)var t="1878336",a="1882204",n="100";else var t="1801468",a="1882442",n="250";if(top===self)var s=document.URL;else var s=document.referrer;var r=(new Date).getTime(),l="https:"!=document.location.protocol&&"http:"!=document.location.protocol?"https:":document.location.protocol;if("undefined"==typeof d)var d="";if("undefined"==typeof p)var p="";var c=o+"x"+n;"100%"==o&&"100%"==n&&(c="auto");var m=screen.width+"x"+screen.height,h='<center><iframe frameborder="0" scrolling="no" width="'+o+'" height="'+n+'" src="'+l+"//syndication.exoclick.com/ads-iframe-display.php?idzone="+t+"&type="+c+"&p="+escape(s)+"&dt="+r+"&sub="+d+"&tags="+p+"&screen_resolution="+m+'"></iframe></center>';'<center><iframe frameborder="0" scrolling="no" width="'+o+'" height="'+n+'" src="'+l+"//syndication.exoclick.com/ads-iframe-display.php?idzone="+a+"&type="+c+"&p="+escape(s)+"&dt="+r+"&sub="+d+"&tags="+p+"&screen_resolution="+m+'"></iframe></center>';if(Config.is_mobile&&!Config.is_tablet)var u='<div class="player-ads" style="position: absolute; z-index: 1; left: 50%; top: 50%; margin-left: -'+o/2+"px; margin-top: -"+(n/2+20)+"px; height: "+n+"px; width: "+o+'px;">'+h+"</div>";else var u='<div class="player-ads" style="position: absolute; z-index: 1; left: 50%; top: 50%; margin-left: -'+o/2+"px; margin-top: -"+n/2+"px; height: "+n+"px; width: "+o+'px;">'+h+"</div>";$("#player").append(u),$("#player-audio").length&&e.setInterval(function(){var e=videojs("#player").currentTime(),i=videojs("#player-audio").currentTime();Math.abs(e-i)>1&&videojs("#player-audio").currentTime(e),videojs("#player").paused()?videojs("#player-audio").pause():videojs("#player-audio").play()},500)}),$("#player-audio").length&&videojs("#player-audio",{},function(){})),$(window).resize(function(){($("#player").length||$(".player-width").length)&&auto_resize_player()}),$(".player-size").length&&auto_resize_player(),$(document).on("click",".btn-like-action",function(){var e=parseInt($(this).attr("data-movie-id"));movie_like(e)}),$(document).on("click",".show-sidebar-left",toggle_sidebar),$(document).on("click",".overlay",toggle_sidebar),$(document).on("click",".slide-showing .header-links .dropdown>a",function(){$(this).parent().find("div.categories-wrapper").toggle()}),$(document).on("click",".captcha-reload",function(){$(this).parent().find("img.captcha-image").attr("src","captcha?_="+(new Date).getTime())}),$.cookie.json=!0,apply_like_temp(),$(".porn-videos-ads").length){var e=$(".porn-videos-ads").attr("data-url");$.ajax({url:e,cache: true,jsonpCallback: 'cb_movies_ads',jsonp:"callback",dataType:"jsonp",success:function(e){var i=new EJS({url:Config.base_url+"assets/ejs/porn-videos-ads.ejs?_=20151214"}).render(e);$(".porn-videos-ads").html(i)}})}if(!Config.is_mobile&&window.innerWidth-document.getElementsByClassName("container")[0].clientWidth>240){var i="1595946",o="120",t="600";if(top===self)var a=document.URL;else var a=document.referrer;var n=(new Date).getTime(),s="https:"!=document.location.protocol&&"http:"!=document.location.protocol?"https:":document.location.protocol;if("undefined"==typeof r)var r="";if("undefined"==typeof l)var l="";var d=o+"x"+t;"100%"==o&&"100%"==t&&(d="auto");var p=screen.width+"x"+screen.height,c='<div class="ads-banner-left" style="position: fixed; left: 0; top: 50px;"><iframe frameborder="0" scrolling="no" width="'+o+'" height="'+t+'" src="'+s+"//syndication.exoclick.com/ads-iframe-display.php?idzone="+i+"&type="+d+"&p="+escape(a)+"&dt="+n+"&sub="+r+"&tags="+l+"&screen_resolution="+p+'"></iframe></div>',m='<div class="ads-banner-right" style="position: fixed; right: 0; top: 50px;"><iframe frameborder="0" scrolling="no" width="'+o+'" height="'+t+'" src="'+s+"//syndication.exoclick.com/ads-iframe-display.php?idzone="+i+"&type="+d+"&p="+escape(a)+"&dt="+n+"&sub="+r+"&tags="+l+"&screen_resolution="+p+'"></iframe></div>';$(".main-page").append(c),$(".main-page").append(m)}});