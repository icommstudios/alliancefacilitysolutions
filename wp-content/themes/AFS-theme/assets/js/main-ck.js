// Clear inputs on focus
$(document).ready(function(){swapValue=[];$(".clear-val").each(function(e){swapValue[e]=$(this).val();$(this).focus(function(){$(this).val()==swapValue[e]&&$(this).val("");$(this).addClass("focus")}).blur(function(){if($.trim($(this).val())==""){$(this).val(swapValue[e]);$(this).removeClass("focus")}})})});$(function(){$("#deadline").datepicker()});jQuery(window).load(function(){jQuery("#alert-wrapper").has(".alert").fadeIn("medium");jQuery("#alert-wrapper").delay(6e3).fadeOut("medium")});$(".show-references").on("click",function(){$(this).next("div.reference-popup").slideToggle();return!1});