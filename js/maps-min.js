!function(a){
/*
	 *  new_map
	 *
	 *  This function will render a Google Map onto the selected jQuery element
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	4.3.0
	 *
	 *  @param	$el (jQuery element)
	 *  @return	n/a
	 */
function e(e){function t(e,t){
// Creating divs & styles for custom zoom control
e.style.padding="5px";
// Set CSS for the control wrapper
var o=document.createElement("div");o.style.backgroundColor="transparent",o.style.borderWidth="0px",o.style.cursor="pointer",o.style.textAlign="center",o.style.width="40px",o.style.height="100px",o.style.padding="20px",e.appendChild(o);
// Set CSS for the zoomIn
var l=document.createElement("div");l.style.width="40px",l.style.height="40px",l.style.marginBottom="10px",
/* Change this to be the .png image you want to use */
l.style.backgroundImage='url("/wp-content/themes/right-step-2015/img/zoomin.png")',o.appendChild(l);
// Set CSS for the zoomOut
var r=document.createElement("div");r.style.width="40px",r.style.height="40px",
/* Change this to be the .png image you want to use */
r.style.backgroundImage='url("/wp-content/themes/right-step-2015/img/zoomout.png")',o.appendChild(r),
// Setup the click event listener - zoomIn
google.maps.event.addDomListener(l,"click",function(){t.setZoom(t.getZoom()+1)}),
// Setup the click event listener - zoomOut
google.maps.event.addDomListener(r,"click",function(){t.setZoom(t.getZoom()-1)})}
// vars
// var
var o=e.find(".marker"),l=480<a(document).width(),r={zoom:16,center:new google.maps.LatLng(0,0),panControl:!1,draggable:l,disableDefaultUI:!1,mapTypeControl:!0,mapTypeControlOptions:{style:google.maps.MapTypeControlStyle.HORIZONTAL_BAR,position:google.maps.ControlPosition.TOP_CENTER},zoomControl:!0,zoomControlOptions:{position:google.maps.ControlPosition.LEFT_CENTER},scaleControl:!0,streetViewControl:!0,streetViewControlOptions:{position:google.maps.ControlPosition.LEFT_TOP},mapTypeId:google.maps.MapTypeId.ROADMAP,styles:[{elementType:"geometry",stylers:[{color:"#e6e4e1"}]},{elementType:"labels.text.fill",stylers:[{color:"#555048"}]},{elementType:"labels.text.stroke",stylers:[{color:"#ffffff"}]},{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#c9b2a6"}]},{featureType:"administrative.land_parcel",elementType:"geometry.stroke",stylers:[{color:"#dcd7cf"}]},{featureType:"administrative.land_parcel",elementType:"labels.text.fill",stylers:[{color:"#ae9e90"}]},{featureType:"landscape.natural",elementType:"geometry",stylers:[{color:"#e6e4e1"},{lightness:15}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#e6e4e1"},{lightness:-20}]},{featureType:"poi",elementType:"labels.text.fill",stylers:[{color:"#93817c"}]},{featureType:"poi.park",elementType:"geometry.fill",stylers:[{color:"#c7c9b3"}]},{featureType:"poi.park",elementType:"labels.text.fill",stylers:[{color:"#747757"}]},{featureType:"road",elementType:"geometry",stylers:[{color:"#ffffff"}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{color:"#fdfcf8"}]},{featureType:"road.highway",elementType:"geometry",stylers:[{color:"#b4764d"}]},{featureType:"road.highway",elementType:"geometry.stroke",stylers:[{color:"#b4764d"}]},{featureType:"road.highway.controlled_access",elementType:"geometry",stylers:[{color:"#b69e67"}]},{featureType:"road.highway.controlled_access",elementType:"geometry.stroke",stylers:[{color:"#b69e67"}]},{featureType:"road.local",elementType:"labels.text.fill",stylers:[{color:"#806b63"}]},{featureType:"transit.line",elementType:"geometry",stylers:[{color:"#e6e4e1"},{lightness:-65}]},{featureType:"transit.line",elementType:"labels.text.fill",stylers:[{color:"#8f7d77"}]},{featureType:"transit.line",elementType:"labels.text.stroke",stylers:[{color:"#ffffff"}]},{featureType:"transit.station",elementType:"geometry",stylers:[{color:"#e6e4e1"},{lightness:-30}]},{featureType:"water",elementType:"geometry.fill",stylers:[{color:"#b5c6ce"}]},{featureType:"water",elementType:"labels.text.fill",stylers:[{color:"#92998d"}]}]},n=new google.maps.Map(e[0],r);
// return
// add a markers reference
return n.markers=[],
// add markers
o.each(function(){s(a(this),n)}),
// center map
i(n),n}
/*
	 *  add_marker
	 *
	 *  This function will add a marker to the selected Google Map
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	4.3.0
	 *
	 *  @param	$marker (jQuery element)
	 *  @param	map (Google Map object)
	 *  @return	n/a
	 */function s(e,t){
// var
var o=new google.maps.LatLng(e.attr("data-lat"),e.attr("data-lng")),l=new google.maps.Marker({position:o,map:t,animation:google.maps.Animation.DROP,icon:"/wp-content/themes/the-ranch-2018/img/marker.svg"});
// create marker
// if marker contains HTML, add it to an infoWindow
if(
// add to array
t.markers.push(l),e.html()){
//create info window
var r=new google.maps.InfoWindow({content:"<div></div>"});
// show info window when marker is clicked
//google.maps.event.addListener(marker, 'click', function() {
// infowindow.close();
//infowindow.open( map, marker );
//});
liTag=a("body").find("[data-lat='"+e.attr("data-lat")+"']"),
// console.log(liTag);
// show info window when marker is clicked
a(liTag).click(function(){r.setContent(e.html()),r.open(t,l)}),google.maps.event.addListener(l,"click",function(){r.setContent(e.html()),r.open(t,l)}),
// close info window when map is clicked
google.maps.event.addListener(t,"click",function(e){r&&r.close()})}}
/*
	 *  center_map
	 *
	 *  This function will center the map, showing all markers attached to this map
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	4.3.0
	 *
	 *  @param	map (Google Map object)
	 *  @return	n/a
	 */function i(e){
// vars
var l=new google.maps.LatLngBounds;
// loop through all markers and create bounds
a.each(e.markers,function(e,t){var o=new google.maps.LatLng(t.position.lat(),t.position.lng());l.extend(o)}),
// only 1 marker?
1==e.markers.length?(
// set center of map
e.setCenter(l.getCenter()),e.setZoom(16)):
// fit to bounds
e.fitBounds(l)}
/*
	 *  document ready
	 *
	 *  This function will render each map when the document is ready (page has loaded)
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	5.0.0
	 *
	 *  @param	n/a
	 *  @return	n/a
	 */
// global var
var t=null;a(document).ready(function(){a(".acf-map").each(function(){
// create map
t=e(a(this))})})}(jQuery);