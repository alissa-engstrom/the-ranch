var $=jQuery.noConflict();$(document).ready(function(){$(".social-sharing, #main-content").stick_in_parent({offset_top:100}),console.log("ready!"),$(".btn-search a").click(function(e){$(".search-form").fadeToggle(100),$(this).find("i").toggleClass("fa-search fa-times-circle"),e.stopPropagation(),e.preventDefault()}),$(".search-close").click(function(){$(".search-form").fadeOut(100)}),$(document).click(function(e){null==$(e.target).closest(".search-form").get(0)&&$(".search-form").is(":visible")&&($(".search-form").fadeOut(50),$(".btn-search a").find("i").toggleClass("fa-times-circle fa-search"))}),$("ul#primary-menu li ul").hide(),$("ul#primary-menu li").hover(function(e){$(this).find("ul").fadeIn("fast"),$(this).find("ul").animate({marginTop:"-20px"},200,"swing"),e.preventDefault()},function(e){$(this).find("ul").fadeOut("fast"),$(this).find("ul").animate({marginTop:"0px"},0,"swing"),e.preventDefault()}),$(".testimonials").slick(),$(".location-images-slides").slick(),$(window).width()<=992&&$("#location-bar .program").click(function(e){console.log("Click that location!"),$(this).next("#location-bar .locations").slideToggle({direction:"up"},400),$(this).find("i").toggleClass("fa-angle-up fa-angle-down"),e.preventDefault()}),$(".page-template-faq .cd-faq-trigger").click(function(e){$(this).next(".cd-faq-content").slideToggle(200).end().parent("li").toggleClass("content-visible"),e.stopPropagation(),e.preventDefault()}),$(".select-container ul.faqs").addClass("active").find("> li:eq(0)").addClass("checked"),$(".select-container ul.faqs li").click(function(e){var t=$(this).closest(".select-container"),i=$(this).closest(".select-container ul.faqs li").index();t.find("ul.faqs > li").removeClass("checked"),$(this).closest("li").addClass("checked"),$("div.tabs_item").not("div.tabs_item:eq("+i+")").slideUp(),$("div.tabs_item:eq("+i+")").slideDown(),e.stopPropagation(),e.preventDefault()}),$(".list-group-item a.view-categories").click(function(e){var t=$(this).closest("li").find("ul.list-group-sub").slideToggle("fast");$(".resource-categories").toggleClass("expand"),$("ul.list-group-sub").not(t).slideUp("fast"),event.stopPropagation(),e.preventDefault()}),$(".rp4wp-related-post-content a").append('<br /><span class="rp4wp-read-more">Read More</span>')});