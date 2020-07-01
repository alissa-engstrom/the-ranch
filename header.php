<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="google-site-verification" content="Lzni-LV0Z5kUlJqA-61IcU56XZ8v44n_2gerQACska8" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1617840921868373');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1617840921868373&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- VWO Infinity Callback -->
<script type="text/javascript">
var _ictVwoIntegration = function(key) {
    if (key !== undefined && _ictt !== undefined && _vis_opt_readCookie != undefined) {
        var vwoCombination = _vis_opt_readCookie('_vis_opt_exp_'+window[key]+'_combi');

        if (typeof _vwo_exp[window[key]] != 'undefined' && typeof(_vwo_exp[window[key]].combination_chosen) != 'undefined') {
            vwoCombination = _vwo_exp[window[key]].combination_chosen;
        }
        if (vwoCombination !== '' && vwoCombination !== null) {
            _ictt.push([ '_setCustomVar', ['vwocomb', vwoCombination] ]);
        }
        _ictt.push([ '_setCustomVar', ['vwoexp', window[key]] ]);
    };
}
</script>
<!-- VWO Infinity Callback -->

<!-- Infinity Tracking Code v2.0
 Copyright Infinity 2015
 www.infinitycloud.com -->
<script type="text/javascript">
    var _ictt = _ictt || [];
    _ictt.push(['_setIgrp','964']); // Installation ID
    _ictt.push(['_setDgrp',['13391',['InfinityNumber13391']]]);
    _ictt.push(['_enableGAIntegration',{'gua':true,'ga':false}]);
    _ictt.push(['_autoPopulateInput', {'id':'input_1_6', 'item':'ictvid'}]);
   _ictt.push(['_includeExternal',[{'from':'_vis_opt_experiment_id','to':'_ictVwoIntegration'}]]);
    _ictt.push(['_setDgrp',['24001',['InfinityNumber24001']]]);  
    _ictt.push(['_setDgrp',['47300',['InfinityNumber47300']]]);
    _ictt.push(['_setDgrp',['47303',['InfinityNumber47303']]]);
    _ictt.push(['_enableOverrideMode']);
    _ictt.push(['_track']);
(function() {
    var ict = document.createElement('script'); ict.type = 'text/javascript'; ict.async = true;
    ict.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'ict.infinity-tracking.net/js/nas.v1.min.js';
    var scr = document.getElementsByTagName('script')[0]; scr.parentNode.insertBefore(ict, scr);
})();
</script>
<!-- Infinity Tracking Code End -->
<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=293212,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
/* DO NOT EDIT BELOW THIS LINE */
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->
<!-- BEGIN LivePerson Monitor. -->
<script type="text/javascript"> window.lpTag=window.lpTag||{};if(typeof window.lpTag._tagCount==='undefined'){window.lpTag={site:'26064940'||'',section:lpTag.section||'',autoStart:lpTag.autoStart===false?false:true,ovr:lpTag.ovr||{},_v:'1.5.1',_tagCount:1,protocol:location.protocol,events:{bind:function(app,ev,fn){lpTag.defer(function(){lpTag.events.bind(app,ev,fn);},0);},trigger:function(app,ev,json){lpTag.defer(function(){lpTag.events.trigger(app,ev,json);},1);}},defer:function(fn,fnType){if(fnType==0){this._defB=this._defB||[];this._defB.push(fn);}else if(fnType==1){this._defT=this._defT||[];this._defT.push(fn);}else{this._defL=this._defL||[];this._defL.push(fn);}},load:function(src,chr,id){var t=this;setTimeout(function(){t._load(src,chr,id);},0);},_load:function(src,chr,id){var url=src;if(!src){url=this.protocol+'//'+((this.ovr&&this.ovr.domain)?this.ovr.domain:'lptag.liveperson.net')+'/tag/tag.js?site='+this.site;}var s=document.createElement('script');s.setAttribute('charset',chr?chr:'UTF-8');if(id){s.setAttribute('id',id);}s.setAttribute('src',url);document.getElementsByTagName('head').item(0).appendChild(s);},init:function(){this._timing=this._timing||{};this._timing.start=(new Date()).getTime();var that=this;if(window.attachEvent){window.attachEvent('onload',function(){that._domReady('domReady');});}else{window.addEventListener('DOMContentLoaded',function(){that._domReady('contReady');},false);window.addEventListener('load',function(){that._domReady('domReady');},false);}if(typeof(window._lptStop)=='undefined'){this.load();}},start:function(){this.autoStart=true;},_domReady:function(n){if(!this.isDom){this.isDom=true;this.events.trigger('LPT','DOM_READY',{t:n});}this._timing[n]=(new Date()).getTime();},vars:lpTag.vars||[],dbs:lpTag.dbs||[],ctn:lpTag.ctn||[],sdes:lpTag.sdes||[],ev:lpTag.ev||[]};lpTag.init();}else{window.lpTag._tagCount+=1;} </script>
<!-- END LivePerson Monitor. -->
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TSP2QB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div class="site-overlay"></div>
<header>
	<?php get_template_part( 'nav', 'mobile' ); ?>
	
	<section id="top-cta" >
		<div class="container">
		 	<div class="row">
		 		<div class="col-lg-3 text-left">
			 		<div class="desktop">
			 			<a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank" class="fab fa-facebook"></a>
			 			<a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank" class="fab fa-twitter"></a>
			 			<div id="LP_DIV_1550010245758"></div>
			 			
			 		</div>
		 		</div>
		 		<div class="col-lg-9 text-right">
		 			<p class="text-right"><span class="local"><strong>Local Numbers</strong> TN: <span class="InfinityNumber47300 clickable">931-272-3007</span> PA: <span class="InfinityNumber47303 clickable">717-969-9139</span></span>&nbsp;&nbsp;&nbsp;
Get a free, confidential consultation. <span class="cta-button"><?php echo do_shortcode('[phone]');?></span>
		 					 			
		 			
		 			</p>
		 		</div>
		 	</div>
	 	</div>
 	</section>
 	<div class="nav-spacer"></div>
 	<nav class="navbar fixed-top">
	 	<div id="nav-container">
 		<div class="container">
	 		<div class="btn-search mobile"><a href="#" onclick="someFunction(); return false;"><i class="fa fa-search"></i></a></div>
	 		<a href="<?php bloginfo( 'url' ); ?>" id="logo-top"><img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="The Ranch"></a>
	 		<div class="menu-btn mobile"><i class="fas fa-bars"></i>Menu</div>
	 		<?php 
			wp_nav_menu( array(
				'theme_location' => 'primary-nav',
				'menu' => 'Primary',
				'menu_id' => 'primary-menu',
				'container' => false,
	 		));
		?>	
		</div>						
 		</div>
 		<div class="rough-edge">
	 		<div class="container">
	 			<img src="<?php bloginfo('template_directory'); ?>/img/rustic-edge.png">
	 		</div>	 		
 		</div>
 		<div class="search-form">
			<div class="container">
				<a href="#" class="search-close" onclick="someFunction(); return false;"><i class="fa fa-times-circle" aria-hidden="true"></i> Close</a>
				<form class="s" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<label class="screen-reader-text" for="s">Search For</label>
					
					<input type="search" id="s" class="sb" name="s" autocomplete="on" placeholder="Search Here Then Press Enter" value="" />
					<button type="submit" class="sbtn" value="Search"><i class="fas fa-search"></i> <span>Search</span></button>
				</form>
				
			</div>  
		</div>
 	</nav> 	
</header>
<div id="container">