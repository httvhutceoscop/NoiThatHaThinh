 <?php if($session->read('lang')==1){?>

			   
<div class="container">	 
<div class="row rowslide rowlistbottom">   
    	<div id="tieudecacdanhmuc"><?php echo $cat1['Manufacturer']['name']?></div>
      <div style="width:100%; float:left;">
	<div class="content-detail-product-content">
			<?php echo $javascript->link('maps'); ?>
		<script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAVcJQrx7VsumiP2heFwp6URQLaiSrhXTkLq3mA9rOmHpVsHwBjxTg7C5-XXHl634dCROpHwKMO9BzmQ" type="text/javascript"></script>
							
			
			<script type="text/javascript">
					
					var noticeTypeImages = {};
					var general = new GIcon();
					general.image = "<?php echo DOMAIN;?>images/general_pin.png";
					general.iconSize = new GSize(28, 28);
					general.iconAnchor = new GPoint(9, 34);
					general.infoWindowAnchor = new GPoint(9, 2);
					general.printImage = "<?php echo DOMAIN;?>images/general_pin.png";
					general.mozPrintImage = "<?php echo DOMAIN;?>images/general_pin.png";
					var general_pin = new GIcon();
					general_pin.iconSize = new GSize(10, 10);
					general_pin.iconAnchor = new GPoint(10, 10);
					general_pin.infoWindowAnchor = new GPoint(6, 2);
					general_pin.mozPrintImage = "<?php echo DOMAIN;?>images/general_pin.png";
					noticeTypeImages["10"] = {
						imgName: general,
						imgNamePin: general_pin,
						imgFileName: "<?php echo DOMAIN;?>images/general_pin.png"
					};
					var wheelZooming = false;
					var mouseLatLng;
					var zoomRect;
					var map;
					var markerChange = 0;
					var aLongLat = new Array(4);
					var points = new Array();      

					function initialize() {
						if (GBrowserIsCompatible()) {
							var point = null;
							map = new GMap2(document.getElementById("map_canvas"));

							if (!aLongLat[0]) map.setCenter(new GLatLng(56.652851, -3.99719), 15);
							else map.setCenter(new GLatLng(aLongLat[1], aLongLat[2]), aLongLat[3]);

							var bounds = new GLatLngBounds();
							map.addControl(new GSmallMapControl());
							map.addControl(new GMapTypeControl());
							map.enableContinuousZoom();


							var image_marker = (map.getZoom()>11) ? noticeTypeImages[10].imgName : noticeTypeImages[10].imgNamePin;    

							point = new GLatLng(<?php echo $cat1['Manufacturer']['map_x_axis']; ?>, <?php echo $cat1['Manufacturer']['map_y_axis']; ?>);

							if (points[53463] == undefined) points[53463] = new Array();

							points[53463][0] = new GMarker(point, { icon: image_marker });

							var sHTML_53463 = '<div class="bubble">'
										+ '<p class="bubble_ref"><?php echo $cat1['Manufacturer']['map_information']; ?></p></div>';

							points[53463][0].openInfoWindowHtml(sHTML_53463); 
							GEvent.addListener(points[53463][0], "click", function() {
								points[53463][0].openInfoWindowHtml(sHTML_53463); 
							});

							GEvent.addListener(points[53463][0], "mouseover", function() {
								var hover_marker = (map.getZoom()>11) ? noticeTypeImages[10].imgFileNameHover : noticeTypeImages[10].imgFileNamePinHover;
								var hover_marker_link = (map.getZoom()>11) ? noticeTypeImages[10].imgFileNameLinkHover : noticeTypeImages[10].imgFileNameLinkPinHover;

								if (points[53463].length > 1) {
									jQuery.each( points[53463], function(i,j) { j.setImage(hover_marker_link); });
								} else {
									points[53463][0].setImage(hover_marker);
								}
							});

							GEvent.addListener(points[53463][0], "mouseout", function() {
								var normal_marker = (map.getZoom()>11) ? noticeTypeImages[10].imgFileName : noticeTypeImages[10].imgFileNamePin;
								   
								jQuery.each(points[53463],function(i,j) { j.setImage(normal_marker); }); 
							});

							map.addOverlay(points[53463][0]);
							bounds.extend(point);        if (markerChange == 0) map.setCenter(bounds.getCenter(), Math.min(17, map.getBoundsZoomLevel(bounds)-1));
							 
							markerChange = 0;
								   
							GEvent.addDomListener(document.getElementById("map_canvas"), "DOMMouseScroll", wheelZoom);
							GEvent.addDomListener(document.getElementById("map_canvas"), "mousewheel", wheelZoom); 
							GEvent.addListener(map, "zoomend", function(oldLevel, newLevel) {
								if (newLevel == 13 && oldLevel == 12) {
									markerChange = 1;
									saveMapCenter();
								} else if (newLevel == 12 && oldLevel == 13) {
									markerChange = 1;
									saveMapCenter();
								}
							}); 
						}
					}


					function wheelZoom(event) {
						if (wheelZooming) return;

						wheelZooming = true;

						if (event.cancelable) event.preventDefault();


						if ((event.detail || -event.wheelDelta) < 0) {
							window.setTimeout(
								function() {
									map.zoomIn(mouseLatLng, true, true);
									wheelZooming = false;
								},
								200
							);
						} else {
							window.setTimeout(
								function() {
									map.zoomOut(mouseLatLng,true);
									wheelZooming = false;
								},
								200
							);
						}

						return false; 
					}

					function saveMapCenter() {
						re = /^\((.*?),(.*?)\)$/;
						aLongLat = re.exec(map.getCenter());
						aLongLat[3] = map.getZoom();

						initialize();
					}         
					
				</script>
				<!--script>
				(function () {
					google.load("maps", "2");
					google.setOnLoadCallback(function () {
						var map = new google.maps.Map2(document.getElementById("map")),
							markerText = "",
							markOutLocation = function (lat, long) {
								var latLong = new google.maps.LatLng(lat, long),
									marker = new google.maps.Marker(latLong);
								map.setCenter(latLong, 13);
								map.addOverlay(marker);
								marker.openInfoWindow(markerText);
								google.maps.Event.addListener(marker, "click", function () {
									marker.openInfoWindow(markerText);
								});
							};
							map.setUIToDefault();
						if (navigator.geolocation) {
							navigator.geolocation.getCurrentPosition(function (position) {
									markOutLocation(position.coords.latitude, position.coords.longitude);
								}, 
								function () {
									markerText = "<p></p>";
									markOutLocation();
								}
							);
						}
						else {
							markerText = "<p>No location support. Try Easter Island for now. :-)</p>";
							markOutLocation(21.02740897292825, 105.84597587585449);
						}
					});	
				})();
			</-->
			<div id="map_canvas" style="width: 760px; height: 613px; position: relative; background-color: rgb(229, 227, 223);"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%;"><div style="position: absolute; left: 0px; top: 60px; z-index: 0; cursor: url(http://maps.gstatic.com/intl/vi_ALL/mapfiles/openhand_8_8.cur) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 100;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 104; cursor: default;"><img style="width: 57px; height: 34px; border: 0px; padding: 0px; margin: 0px; position: absolute; left: 311px; top: 223px; z-index: -176222656;" src="<?php echo DOMAIN;?>images/general_pin.png"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105;"><div style="position: absolute; left: 264px; top: 102px;" class="gmnoprint"><div style="width: 57px; height: 34px; overflow: hidden; z-index: 1; position: absolute; left: 77px; top: 0px;"><img style="position: absolute; left: -323px; top: 0px; width: 1144px; height: 370px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iws3.png"></div><div style="width: 70px; height: 30px; overflow: hidden; z-index: 1; position: absolute; left: 306px; top: 0px;"><img style="position: absolute; left: -1033px; top: 0px; width: 1144px; height: 370px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iws3.png"></div><div style="width: 70px; height: 60px; overflow: hidden; z-index: 1; position: absolute; left: 0px; top: 78px;"><img style="position: absolute; left: -14px; top: -310px; width: 1144px; height: 370px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iws3.png"></div><div style="width: 70px; height: 60px; overflow: hidden; z-index: 1; position: absolute; left: 259px; top: 78px;"><img style="position: absolute; left: -754px; top: -310px; width: 1144px; height: 370px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iws3.png"></div><div style="width: 140px; height: 60px; overflow: hidden; z-index: 1; position: absolute; left: 70px; top: 78px;"><img style="position: absolute; left: -119px; top: -310px; width: 1144px; height: 370px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iws3.png"></div><div style="position: absolute; left: 147px; top: 0px; width: 159px; height: 30px; overflow: hidden;"><div style="width: 640px; height: 30px; overflow: hidden;"><img style="position: absolute; left: -393px; top: 0px; width: 1144px; height: 370px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iws3.png"></div></div><div style="width: 118px; height: 48px; overflow: hidden; bottom: -1px; position: absolute; left: 29px; top: 30px;"><img style="position: absolute; left: -275px; top: -30px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iws3.png"></div><div style="width: 118px; height: 48px; overflow: hidden; bottom: -1px; position: absolute; left: 288px; top: 30px;"><img style="position: absolute; left: -1015px; top: -30px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iws3.png"></div><div style="position: absolute; left: 70px; top: 78px; width: 0px; height: 60px; overflow: hidden;"><div style="width: 320px; height: 60px; overflow: hidden;"><img style="position: absolute; left: -345px; top: -310px; width: 1144px; height: 370px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iws3.png"></div></div><div style="position: absolute; left: 210px; top: 78px; width: 49px; height: 60px; overflow: hidden;"><div style="width: 320px; height: 60px; overflow: hidden;"><img style="position: absolute; left: -345px; top: -310px; width: 1144px; height: 370px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iws3.png"></div></div><div style="position: absolute; left: 147px; top: 30px; width: 141px; height: 48px; overflow: hidden;"><div style="width: 640px; height: 598px; overflow: hidden;"><img style="position: absolute; left: -360px; top: -30px; width: 1144px; height: 370px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iws3.png"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106;"><img style="position: absolute; left: 311px; top: 223px; width: 28px; height: 28px; border: 0px; padding: 0px; margin: 0px; z-index: -176222656; cursor: pointer;" src="./d_files/markerTransparent.png" class="gmnoprint" id="mtgt_unnamed_0"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; cursor: default;"><div style="position: absolute; left: 239px; top: -31px;" class="gmnoprint"><div style="position: relative; left: 0px; top: 0px; z-index: 10; width: 249px; height: 185px;" class="gmnoprint"><img style="position: absolute; left: 225px; top: 11px; width: 12px; height: 12px; border: 0px; padding: 0px; margin: 0px; cursor: pointer; z-index: 10000;" src="./d_files/iw_close.gif"><img style="position: absolute; left: 0px; top: 0px; width: 12px; height: 12px; border: 0px; padding: 0px; margin: 0px; cursor: pointer; z-index: 10000; display: none;" src="./d_files/iw_plus.gif"><a style="position: absolute; left: 0px; top: 0px; text-decoration: none; white-space: nowrap; display: none;" href="javascript:void(0)"><img style="position: relative; left: 0px; top: 0px; width: 15px; height: 12px; border: 0px; padding: 0px; margin: 0px; cursor: pointer; z-index: 10000; display: none; vertical-align: top;" src="./d_files/iw_fullscreen.gif"><span style="font-size: small; text-decoration: underline; padding-left: 5px; overflow: hidden; position: relative; top: -2px;">Toàn màn hình</span></a><img style="position: absolute; left: 0px; top: 0px; width: 12px; height: 12px; border: 0px; padding: 0px; margin: 0px; cursor: pointer; z-index: 10000; display: none;" src="./d_files/iw_minus.gif"><div style="position: absolute; left: 16px; top: 16px; width: 217px; height: 153px; z-index: 10;"><div><div class="bubble"></div></div></div></div><div style="width: 25px; height: 25px; overflow: hidden; z-index: 1; position: absolute; left: 0px; top: 0px;"><img style="position: absolute; left: 0px; top: 0px; width: 690px; height: 786px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iw3.png"></div><div style="width: 25px; height: 25px; overflow: hidden; z-index: 1; position: absolute; left: 224px; top: 0px;"><img style="position: absolute; left: -665px; top: 0px; width: 690px; height: 786px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iw3.png"></div><div style="width: 97px; height: 96px; overflow: hidden; z-index: 1; position: absolute; left: 76px; top: 160px;"><img style="position: absolute; left: 0px; top: -691px; width: 690px; height: 786px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iw3.png"></div><div style="width: 25px; height: 25px; overflow: hidden; z-index: 1; position: absolute; left: 0px; top: 160px;"><img style="position: absolute; left: 0px; top: -665px; width: 690px; height: 786px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iw3.png"></div><div style="width: 25px; height: 25px; overflow: hidden; z-index: 1; position: absolute; left: 224px; top: 160px;"><img style="position: absolute; left: -665px; top: -665px; width: 690px; height: 786px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/iw3.png"></div><div style="position: absolute; left: 25px; top: 0px; width: 199px; height: 25px; background-color: white; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(171, 171, 171);"></div><div style="position: absolute; left: 0px; top: 25px; width: 247px; height: 135px; background-color: white; border-left-width: 1px; border-left-style: solid; border-left-color: rgb(171, 171, 171); border-right-width: 1px; border-right-style: solid; border-right-color: rgb(171, 171, 171);"></div><div style="position: absolute; left: 25px; top: 160px; width: 199px; height: 24px; background-color: white; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(171, 171, 171);"></div></div></div><div style="position: absolute; left: 0px; top: 0px; display: none;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><img style="position: absolute; left: -144px; top: -231px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32108&s=&y=20705&z=16&s=Galil"><img style="position: absolute; left: -144px; top: 25px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32108&s=&y=20706&z=16&s=Galile"><img style="position: absolute; left: -144px; top: 281px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32108&s=&y=20707&z=16&s=Galileo"><img style="position: absolute; left: -144px; top: 537px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32108&s=&y=20708&z=16&s="><img style="position: absolute; left: 112px; top: -231px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32109&s=&y=20705&z=16&s="><img style="position: absolute; left: 112px; top: 25px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32109&s=&y=20706&z=16&s=G"><img style="position: absolute; left: 112px; top: 281px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32109&s=&y=20707&z=16&s=Ga"><img style="position: absolute; left: 112px; top: 537px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32109&s=&y=20708&z=16&s=Gal"><img style="position: absolute; left: 368px; top: -231px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32110&s=&y=20705&z=16&s=Gal"><img style="position: absolute; left: 368px; top: 25px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32110&s=&y=20706&z=16&s=Gali"><img style="position: absolute; left: 368px; top: 281px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32110&s=&y=20707&z=16&s=Galil"><img style="position: absolute; left: 368px; top: 537px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32110&s=&y=20708&z=16&s=Galile"><img style="position: absolute; left: 624px; top: -231px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32111&s=&y=20705&z=16&s=Galile"><img style="position: absolute; left: 624px; top: 25px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32111&s=&y=20706&z=16&s=Galileo"><img style="position: absolute; left: 624px; top: 281px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32111&s=&y=20707&z=16&s="><img style="position: absolute; left: 624px; top: 537px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=32111&s=&y=20708&z=16&s=G"></div></div><div style="position: absolute; left: 0px; top: 0px;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><img style="position: absolute; left: -96px; top: -149px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64218&s=&y=41412&z=17&s=Ga"><img style="position: absolute; left: -96px; top: 107px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64218&s=&y=41413&z=17&s=Gal"><img style="position: absolute; left: -96px; top: 363px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64218&s=&y=41414&z=17&s=Gali"><img style="position: absolute; left: -96px; top: 619px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64218&s=&y=41415&z=17&s=Galil"><img style="position: absolute; left: 160px; top: -149px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64219&s=&y=41412&z=17&s=Galil"><img style="position: absolute; left: 160px; top: 107px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64219&s=&y=41413&z=17&s=Galile"><img style="position: absolute; left: 160px; top: 363px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64219&s=&y=41414&z=17&s=Galileo"><img style="position: absolute; left: 160px; top: 619px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64219&s=&y=41415&z=17&s="><img style="position: absolute; left: 416px; top: -149px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64220&s=&y=41412&z=17&s="><img style="position: absolute; left: 416px; top: 107px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64220&s=&y=41413&z=17&s=G"><img style="position: absolute; left: 416px; top: 363px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64220&s=&y=41414&z=17&s=Ga"><img style="position: absolute; left: 416px; top: 619px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64220&s=&y=41415&z=17&s=Gal"><img style="position: absolute; left: 672px; top: -149px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64221&s=&y=41412&z=17&s=Gal"><img style="position: absolute; left: 672px; top: 107px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64221&s=&y=41413&z=17&s=Gali"><img style="position: absolute; left: 672px; top: 363px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64221&s=&y=41414&z=17&s=Galil"><img style="position: absolute; left: 672px; top: 619px; width: 256px; height: 256px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/lyrs=m@209000000&hl=vi&src=api&x=64221&s=&y=41415&z=17&s=Galile"></div></div></div></div><div class="gmnoprint" style="z-index: 0; position: absolute; left: 2px; bottom: 2px;"><a title="Nhấp để xem khu vực này trên Google Maps" target="_blank" href="http://maps.google.com/maps?ll=55.069946,-3.615532&spn=0.003164,0.006856&z=17&key=ABQIAAAAsEP3JthzJ4ddmCe5GBzLNRQl6dHQX8SoYBEt1tcos8mnWxzbvxQ0WHYqUv-UDVjbdCV_3HA4sgWdJg&mapclient=jsapi&oi=map_misc&ct=api_logo"><img style="width: 62px; height: 30px; border: 0px; padding: 0px; margin: 0px; cursor: pointer;" src="./d_files/poweredby.png"></a></div><div style="z-index: 0; position: absolute; right: 3px; bottom: 2px; color: black; font-family: Arial, sans-serif; font-size: 11px; white-space: nowrap; text-align: right;" dir="ltr"><span>Dữ liệu bản đồ ©2013 Google - </span><a href="http://www.google.com/intl/vi_ALL/help/terms_maps.html" target="_blank" class="gmnoprint terms-of-use-link" style="color: rgb(119, 119, 204);">Điều khoản sử dụng</a></div><div style="width: 37px; height: 94px; z-index: 0; position: absolute; left: 7px; top: 7px;" class="gmnoprint"><img style="position: absolute; left: 0px; top: 0px; width: 37px; height: 94px; border: 0px; padding: 0px; margin: 0px;" src="./d_files/smc.png"><div style="position: absolute; left: 9px; top: 0px; width: 18px; height: 18px; cursor: pointer;" title="Dời bản đồ lên trên"></div><div style="position: absolute; left: 0px; top: 18px; width: 18px; height: 18px; cursor: pointer;" title="Dời bản đồ sang trái"></div><div style="position: absolute; left: 18px; top: 18px; width: 18px; height: 18px; cursor: pointer;" title="Dời bản đồ sang phải"></div><div style="position: absolute; left: 9px; top: 36px; width: 18px; height: 18px; cursor: pointer;" title="Dời bản đồ xuống dưới"></div><div style="position: absolute; left: 9px; top: 57px; width: 18px; height: 18px; cursor: pointer;" title="Phóng to"></div><div style="position: absolute; left: 9px; top: 75px; width: 18px; height: 18px; cursor: pointer;" title="Thu nhỏ"></div></div><div class="gmnoprint" style="z-index: 0; position: absolute; right: 7px; top: 7px; color: black; font-family: Arial, sans-serif; font-size: small; width: 200px; height: 19px;"><div style="position: absolute; background-color: white; border: 1px solid black; text-align: center; width: 5em; right: 10.2em; cursor: pointer;" title="Hiển thị bản đồ phố"><div style="font-size: 12px; font-weight: bold; border-width: 1px; border-style: solid; border-color: rgb(52, 86, 132) rgb(108, 157, 223) rgb(108, 157, 223) rgb(52, 86, 132);">Bản đồ</div></div><div style="position: absolute; background-color: white; border: 1px solid black; text-align: center; width: 5em; right: 5.1em; cursor: pointer;" title="Hiển thị hình ảnh qua vệ tinh"><div style="font-size: 12px; border-width: 1px; border-style: solid; border-color: white rgb(176, 176, 176) rgb(176, 176, 176) white;">Vệ tinh</div></div><div style="position: absolute; background-color: white; border: 1px solid black; text-align: center; width: 5em; right: 0em; cursor: pointer;" title="Hiển thị hình ảnh cùng tên phố"><div style="font-size: 12px; border-width: 1px; border-style: solid; border-color: white rgb(176, 176, 176) rgb(176, 176, 176) white;">Kết hợp</div></div></div></div>
				<script type="text/javascript">
				initialize();
				</script>
			</div>

			
				
	<table width="100%" cellspacing="4" style="background: #f8f8f8;">
<tbody>
<tr>
<td>
<h3 class="title_help" style="overflow:hidden">
HỆ THỐNG CỬA HÀNG

</h3>
<p style="color: #ea1d1d; font-family:tahoma;">Quý khách vui lòng tự tìm sản phẩm tại quầy. Cửa hàng có thể bị hết hàng vì sản phẩm được bán liên tục.</p>
</td>
</tr>
</tbody>
</table>	
<?php $bando =$this->requestAction('comment/chonmau');
foreach($bando as $bando) {
?><div style="margin-left: 24px; line-height:35px;">
<p>
<img src="<?php echo DOMAIN;?>images/general_pin.png"  align="absmiddle" /> <?php echo $bando['Manufacturer']['name'];?>
<span class="d_store_phone">. ĐT: <?php echo $bando['Manufacturer']['title'];?></span> <a href="<?php echo DOMAIN;?>bando/<?php echo $bando['Manufacturer']['id'];?>" class="fr">Bản đồ cửa hàng </a>

</p>

</div>
<div class="clear"></div>
<?php } ?>
			
         <div >
						</div>
               </div>      
         <!--end sanpham-->      
</div>    
</div>

 <?php } if($session->read('lang')==2){?>
 <div id="main-center">              	
    <div id="sanphams" style="min-height: 680px !important;">
    	<div class="top"><?php echo $cat['Catproduct']['name_en']?></div>
        <?php foreach($products as $pr){?>	
        <div id="dssanpham" align="center">
        	<div class="img" >
            <a href="<?php echo DOMAIN;?>chi-tiet-san-pham/<?php echo $pr['Product']['id'];?>"><img src="<?php echo DOMAINAD.'timthumb.php?src='.$pr['Product']['images']?>&amp;h=105&amp;w=199&amp;zc=1" width="199" height="105"/></a>
            </div>
            <div class="name" align="center">
            	<h5><a href="<?php echo DOMAIN;?>chi-tiet-san-pham/<?php echo $pr['Product']['id'];?>"><?php echo $pr['Product']['title_en'];?></a></h5>
                <h6><a href="#tips">Price: <font color="#FF6600">Contact </font></a>
                <!--<h6><a href="#tips">Giá: <font color="#FF6600"><?php echo number_format( $pr['Product']['price'],3); ?> VNĐ</font></a></h6>-->
                <h4><a href="<?php echo DOMAIN;?>chi-tiet-san-pham/<?php echo $pr['Product']['id'];?>">Detail</a></h4>
            </div>
        </div>
        <?php }?> 
        <div style="float: left; text-align:right;width: 750px; padding-right: 50px; color:#FFFFFF; font-size: 14px;">
         <?php if($paginator->numbers()!=null){?>
            <style>
            a{
             color: #FFFFFF;
            }
            </style>
            <?php
				$paginator->options(array('url' => $this->passedArgs));                                    
				echo $paginator->prev('<<', null, null, array('class' => 'disabled'));echo "&nbsp;&nbsp;&nbsp;";
				echo $paginator->numbers();echo "&nbsp;&nbsp;&nbsp;";
				echo $paginator->next('>>' , null, null, array('class' => 'disabled'));
            }?>
        </div>
    </div>                          
         <!--end sanpham-->      
</div>  
 <?php }?>
