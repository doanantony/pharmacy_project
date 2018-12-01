
<!-- <footer>
  <p>Copy right 2018-2019</p>
</footer> -->
<?php
	$page_name = strtolower($_SERVER["REQUEST_URI"]);

	if(strpos($page_name, 'home/map') !== false) {
		$lat = $map["lat"];
		$lng = $map["lng"];
		?>
	    <script type="text/javascript">
	    	function myMap() {
	    		var lat = parseFloat('<?php echo $lat; ?>');
	    		var lng = parseFloat('<?php echo $lng; ?>');
	    		var myLatLng = {lat: lat, lng: lng};

				var mapProp= {
				    center:new google.maps.LatLng(lat,lng),
				    zoom:5,
				};

				var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
				var marker = new google.maps.Marker({
		          position: myLatLng,
		          map: map,
		          title: 'Pharmacy'
		        });
				} 
	    </script>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1br9lwKFyEpCnS5elLan_90CCsYeak6I&callback=myMap"></script>
	<?php } else if (strpos($page_name, 'register') !== false) {?>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1br9lwKFyEpCnS5elLan_90CCsYeak6I&libraries=places&callback=initAutocomplete" async defer></script>
	<?php } else  {?>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/home-custom.js"></script>
<?php } ?>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/custom.js"></script>
</body>
</html>