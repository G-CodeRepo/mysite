$(document).ready(function(){function t(){e.setAttribute("src",i[n]),n>=i.length-1?n=0:n++}var e=document.getElementById("background_img"),i=["images/i1.jpg","images/i2.jpg","images/i3.jpg","images/i4.jpg"],n=0;setInterval(t,3e3)}),$(document).ready(function(){$("div.thumbnail").hover(function(){$(this).addClass("color_on")},function(){$(this).removeClass("color_on")}),$("div.thumbnail a.pic").magnificPopup({type:"image",gallery:{enabled:!0,preload:[0,2],navigateByImgClick:!1,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',tPrev:"Previous (Left arrow key)",tNext:"Next (Right arrow key)",tCounter:'<span class="mfp-counter">%curr% of %total%</span>'},mainClass:"mfp-with-zoom",zoom:{enabled:!0,duration:200,easing:"ease-in-out",opener:function(t){return t.is("img")?t:t.find("img")}}})});