function scrolltop(){$(window).scroll(function(e){if($(window).scrollTop()>80&&$(document).height()!=$(window).height()+$(window).scrollTop())document.getElementById("scrolltop").classList.remove("mdui-fab-hide");else document.getElementById("scrolltop").classList.add("mdui-fab-hide")})};$(function(){$("#scrolltop").click(function(e){$('body,html').animate({scrollTop:0},600)});scrolltop()})