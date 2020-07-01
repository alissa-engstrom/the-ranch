/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
/*!
 * Generated using the Bootstrap Customizer (<none>)
 * Config saved to config.json and <none>
 */
if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");!function(t){"use strict";var e=t.fn.jquery.split(" ")[0].split(".");if(e[0]<2&&e[1]<9||1==e[0]&&9==e[1]&&e[2]<1||3<e[0])throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4")}(jQuery),function(a){"use strict";
// AFFIX CLASS DEFINITION
// ======================
// AFFIX PLUGIN DEFINITION
// =======================
function i(o){return this.each(function(){var t=a(this),e=t.data("bs.affix"),i="object"==typeof o&&o;e||t.data("bs.affix",e=new h(this,i)),"string"==typeof o&&e[o]()})}var h=function(t,e){this.options=a.extend({},h.DEFAULTS,e),this.$target=a(this.options.target).on("scroll.bs.affix.data-api",a.proxy(this.checkPosition,this)).on("click.bs.affix.data-api",a.proxy(this.checkPositionWithEventLoop,this)),this.$element=a(t),this.affixed=null,this.unpin=null,this.pinnedOffset=null,this.checkPosition()};h.VERSION="3.3.7",h.RESET="affix affix-top affix-bottom",h.DEFAULTS={offset:0,target:window},h.prototype.getState=function(t,e,i,o){var f=this.$target.scrollTop(),n=this.$element.offset(),s=this.$target.height();if(null!=i&&"top"==this.affixed)return f<i&&"top";if("bottom"==this.affixed)return null!=i?!(f+this.unpin<=n.top)&&"bottom":!(f+s<=t-o)&&"bottom";var r=null==this.affixed,a=r?f:n.top,h;return null!=i&&f<=i?"top":null!=o&&t-o<=a+(r?s:e)&&"bottom"},h.prototype.getPinnedOffset=function(){if(this.pinnedOffset)return this.pinnedOffset;this.$element.removeClass(h.RESET).addClass("affix");var t=this.$target.scrollTop(),e=this.$element.offset();return this.pinnedOffset=e.top-t},h.prototype.checkPositionWithEventLoop=function(){setTimeout(a.proxy(this.checkPosition,this),1)},h.prototype.checkPosition=function(){if(this.$element.is(":visible")){var t=this.$element.height(),e=this.options.offset,i=e.top,o=e.bottom,f=Math.max(a(document).height(),a(document.body).height());"object"!=typeof e&&(o=i=e),"function"==typeof i&&(i=e.top(this.$element)),"function"==typeof o&&(o=e.bottom(this.$element));var n=this.getState(f,t,i,o);if(this.affixed!=n){null!=this.unpin&&this.$element.css("top","");var s="affix"+(n?"-"+n:""),r=a.Event(s+".bs.affix");if(this.$element.trigger(r),r.isDefaultPrevented())return;this.affixed=n,this.unpin="bottom"==n?this.getPinnedOffset():null,this.$element.removeClass(h.RESET).addClass(s).trigger(s.replace("affix","affixed")+".bs.affix")}"bottom"==n&&this.$element.offset({top:f-t-o})}};var t=a.fn.affix;a.fn.affix=i,a.fn.affix.Constructor=h,
// AFFIX NO CONFLICT
// =================
a.fn.affix.noConflict=function(){return a.fn.affix=t,this}
// AFFIX DATA-API
// ==============
,a(window).on("load",function(){a('[data-spy="affix"]').each(function(){var t=a(this),e=t.data();e.offset=e.offset||{},null!=e.offsetBottom&&(e.offset.bottom=e.offsetBottom),null!=e.offsetTop&&(e.offset.top=e.offsetTop),i.call(t,e)})})}(jQuery);