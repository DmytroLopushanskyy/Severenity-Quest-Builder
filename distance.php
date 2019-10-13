<?php include 'base.php' ?>


<?php startblock('content') ?>


<section class="ls with_bottom_border">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<ol class="breadcrumb darklinks">
					<li>
						<a href="#">Home</a>
					</li>
					<li>
						<a class="non_hover">Create Quest</a>
					</li>
					<li class="active">Distance</li>
				</ol>
			</div>
			<!-- .col-* -->
		</div>
		<!-- .row -->
	</div>
	<!-- .container -->
</section>

<section class="ls">
	<div class="distance_title warning_message none"></div>
	<div class="distance_title">Create Distance Quest</div>
	<form>
		<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 block" align="center">
			<div class="popup">
				<label for="title" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Title:</label>
		  		<span class="popuptext">Some text here</span>
			</div>
		    <input type="name" class="form-control title_input" name="title" placeholder="Enter Quest Title">
		</div>
		<div class="form-group local_quest_form p-b120 col-md-6 col-xs-12 col-md-offset-3 block" align="center">
			<div class="popup">
		    	<label for="description" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Description:</label>
		    	<span class="popuptext">Some text here</span>
		    </div>
		    <textarea type="name" class="form-control title_input textarea_input" name="description" placeholder="Enter Quest Description"></textarea> 
		</div>
		<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 block" align="center">
			<div class="popup">
		    	<label for="title" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Title Image:</label>
		    	<span class="popuptext">Some text here</span>
		    </div>
		    <input type="file" name="file-6[]" id="file-6" class="inputfile inputfile-5 hidden" data-multiple-caption="{count} files selected" onchange="readURL(this);" />
			<label for="file-6" class="file_label"><img id="blah" status='wait' class="none" src="#" alt="your image" /><figure class="figure_file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" ><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span></span>
				<div class="progress-bar-cloudinary" id="progress-bar">
			    	<div class="progress" id="progress"></div>
				</div>
			</label>
			

		</div>
		<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row" align="center">
			<div class="popup width50">
		    	<label for="description" class="title_head number_title"><i class="fa fa-question-circle" aria-hidden="true"></i>Distance value:</label>
		    	<span class="popuptext">Some text here</span>
		    </div>
		    <input type="number" class="form-control title_input number_input" name="value" placeholder="Value">
		    <ul id="menu">
			  	<li class="active_option"><span>km</span></li>
			  	<li><span>m</span></li>
			  	<li><span>kcal</span></li>
			</ul>
		<!-- <div class="distance_title mtop">Choose way on map (optional)</div> -->
		</div>

		<!-- <div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 block" align="center">
		    <input id="origin-input" name="origin" class="controls" type="text" placeholder="Origin location">
		    <input id="destination-input" name="destination" class="controls title_input" type="text" placeholder="Destination location">
		</div>
		<div id="mode-selector" class="controls hidden">
	      <input type="radio" name="type" id="changemode-walking" checked="checked">
	      <label for="changemode-walking">Walking</label>

	      <input type="radio" name="type" id="changemode-transit">
	      <label for="changemode-transit">Transit</label>

	      <input type="radio" name="type" id="changemode-driving">
	      <label for="changemode-driving">Driving</label>
	    </div>

	    <div id="map2" class="small_width"></div> -->
	    <input id="place_id_hidden" type="text">
	    <input id="pac-input" class="controls form-control map_title" type="text"
        placeholder="Enter a location">
        <input id="origin-input" name="origin" class="controls" type="text" placeholder="Origin location" autocomplete="off" style="z-index: 0; position: absolute; left: 0px; top: 0px;">
	    <div id="map2"></div>
	    <div id="infowindow-content">
	      <span id="place-name"  class="title"></span><br>
	      <span id="place-id"></span><br>
	      <span id="place-address"></span>
	    </div>

	    <div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row marg_top" align="center">
	    	<div class="popup width50">
		    	<label for="description" class="title_head number_title"><i class="fa fa-question-circle" aria-hidden="true"></i>Price:</label>
		    	<span class="popuptext">Some text here</span>
		    </div>
		    <input type="number" class="form-control title_input number_input" name="price" placeholder="Price">
		    <ul id="menu">
			  	<li class="active_option"><span>мон.</span></li>
			  	<li><span>$</span></li>
			  	<li><span>₴</span></li>
			</ul>
		</div>

		<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row" align="center">
			<div class="popup width50">
		    	<label for="description" class="title_head number_title"><i class="fa fa-question-circle" aria-hidden="true"></i>Rating:</label>
		    	<span class="popuptext">Some text here</span>
		    </div>
		    <input type="number" class="form-control title_input number_input" name="rating" placeholder="+ Value">
		    <ul id="menu">
			  	<li class="active_option"><span>мон.</span></li>
			  	<li><span>$</span></li>
			  	<li><span>₴</span></li>
			</ul>
		</div>

		<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row" align="center">
			<div class="popup width50">
		    	<label for="description" class="title_head number_title"><i class="fa fa-question-circle" aria-hidden="true"></i>Experience:</label>
		    	<span class="popuptext">Some text here</span>
		    </div>
		    <input type="number" class="form-control title_input number_input" name="experience" placeholder="+ Value">
		    <ul id="menu">
			  	<li class="active_option"><span>мон.</span></li>
			  	<li><span>$</span></li>
			  	<li><span>₴</span></li>
			</ul>
		</div>

		<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row" align="center">
			<div class="popup width50">
		    	<label for="description" class="title_head number_title"><i class="fa fa-question-circle" aria-hidden="true"></i>Serenits:</label>
		    	<span class="popuptext">Some text here</span>
		    </div>
		    <input type="number" class="form-control title_input number_input" name="serenits" placeholder="+ Value">
		    <ul id="menu">
			  	<li class="active_option"><span>мон.</span></li>
			  	<li><span>$</span></li>
			  	<li><span>₴</span></li>
			</ul>
		</div>

		<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row" align="center">
		    <button class="create_quest_btn">Create</button>
		</div>
		
		

	</form>
	

</section>
<div id="dropbox" class="none">
  <form class="my-form">
      <div class="form_controls">
        <div class="upload_button_holder">
          <input type="file" id="fileElem" multiple accept="image/*" style="display:none" onchange="handleFiles(this.files)">
          <a href="#" id="fileSelect">Select some files</a>
        </div>
      </div>
    </div>
  </form>
  
</div>
<?php endblock() ?>



<?php startblock('custom_scripts') ?>

<script src="cloudinary_upload.js"></script>


<script>
	 
$('.create_quest_btn').click(function(e){
	e.preventDefault()
	console.log('started creating')
	loading()
	var title = $('input[name="title"').val()
	var description = $('textarea[name="description"').val()
	console.log('description', description)
	var file = $('input[name="file-6[]"').val()
	var value = $('input[name="value"').val()
	// var origin = $('input[name="origin"').val()
	// var destination = $('input[name="destination"').val()
	var price = $('input[name="price"').val()
	var rating = $('input[name="rating"').val()
	var experience = $('input[name="experience"').val()
	var serenits = $('input[name="serenits"').val()

	if (title == '' || description == '' || file == '' || price == '' || rating == '') {
		$('.warning_message').removeClass('none')
		$('.warning_message').html('*Fill out all required fields!')
		window.scrollTo(0,0);
		loading_disappear()
	}else if (value == '') {
		$('.warning_message').removeClass('none')
		$('.warning_message').html('*Enter Value or Create way on Map!')
		window.scrollTo(0,0);
		loading_disappear()
	}else if (!$.isNumeric(value), !$.isNumeric(price), !$.isNumeric(rating), !$.isNumeric(experience), !$.isNumeric(serenits)) {
		$('.warning_message').removeClass('none')
		$('.warning_message').html('*Enter valid numeric values!')
		window.scrollTo(0,0);
		loading_disappear()
	}else{
		var status = $.Deferred();
		handleFiles($('#file-6').prop('files'), status)
		$.when(status).then(function() {
			path_array = $('#blah').attr('src').split('/')
			console.log('dooone', path_array, userId)
			path = path_array[path_array.length-2] + '/' +path_array[path_array.length-1]
			console.log(path)
			$.ajax({
		        url: 'https://severenity-teo.herokuapp.com/send/quest',
		        data: JSON.stringify(
		        {
		        	'quest': {
		        		'title': title, 
		        		'description': description,
		        		'type': 1, 
		        		'serenits': serenits, 
		        		'experience': experience, 
		        		'image': path, 
		        		'placeId': '', 
		        		'price': price,
		        		'rating': rating,
		        		'createdBy': userId,
		        		'distanceQuest': {
		        			'distance': value,
		        		}
		        	}
		        }, null, '\t'),
		        contentType: 'application/json;charset=UTF-8',
		        type: 'POST',
		        crossDomain: true,
		        dataType: 'json',
		        success: function(response) {
		            console.log(response)
		            setTimeout(function() {
					 	alert('Quest was succcessfully created! Congratulations!!!')
					}, 100);
		        },
		        error: function(error) {
		             console.log(error);
		        }
		  	});
			loading_disappear()
			
			$('input[name="title"').val('')
			$('textarea[name="description"').val('')
			$('input[name="file-6[]"').val(null)
			$('input[name="value"').val('')
			$('input[name="price"').val('')
			$('input[name="rating"').val('')
			$('input[name="experience"').val('')
			$('input[name="serenits"').val('')
		})
	}

	

	
	
})

$('#menu li').click(function(){
	$(this).parent().children().removeClass('active_option')
	$(this).addClass('active_option')
})

$('.popup').mouseover(function(){
	$(this).find('.popuptext').addClass('show')
	$(this).find('i').css('opacity', '1')
})
$('.popup').mouseleave(function(){
	$(this).find('.popuptext').removeClass('show')
	$(this).find('i').css('opacity', '.7')
})


function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
            	$('#blah').removeClass('none')
            	$('.figure_file').addClass('none')
                $('#blah').attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

$(document).ready(function(){
	if ($('.number_input').width() < 60){
		$('.flex_row').addClass('input_responsive')
	}else{
		$('.flex_row').removeClass('input_responsive')
	}
})


// $(window).resize(function(){
// 	console.log($('.number_input').width())
// 	if ($('.number_input').width() < 60){
// 		$('.flex_row').addClass('input_responsive')
// 	}else{
// 		$('.flex_row').removeClass('input_responsive')
// 	}
// })

</script>

<!-- <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map2'), {
          mapTypeControl: false,
          center: {lat: 49.836875, lng: 24.033966},
          zoom: 13
        });

        new AutocompleteDirectionsHandler(map);
      }

       /**
        * @constructor
       */
      function AutocompleteDirectionsHandler(map) {
        this.map = map;
        this.originPlaceId = null;
        this.destinationPlaceId = null;
        this.travelMode = 'WALKING';
        var originInput = document.getElementById('origin-input');
        var destinationInput = document.getElementById('destination-input');
        var modeSelector = document.getElementById('mode-selector');
        this.directionsService = new google.maps.DirectionsService;
        this.directionsDisplay = new google.maps.DirectionsRenderer;
        this.directionsDisplay.setMap(map);

        var originAutocomplete = new google.maps.places.Autocomplete(
            originInput, {placeIdOnly: true});
        var destinationAutocomplete = new google.maps.places.Autocomplete(
            destinationInput, {placeIdOnly: true});

        this.setupClickListener('changemode-walking', 'WALKING');
        this.setupClickListener('changemode-transit', 'TRANSIT');
        this.setupClickListener('changemode-driving', 'DRIVING');

        this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
        this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);
      }

      // Sets a listener on a radio button to change the filter type on Places
      // Autocomplete.
      AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) {
        var radioButton = document.getElementById(id);
        var me = this;
        radioButton.addEventListener('click', function() {
          me.travelMode = mode;
          me.route();
        });
      };

      AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
        var me = this;
        autocomplete.bindTo('bounds', this.map);
        autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
          if (!place.place_id) {
            window.alert("Please select an option from the dropdown list.");
            return;
          }
          if (mode === 'ORIG') {
            me.originPlaceId = place.place_id;
          } else {
            me.destinationPlaceId = place.place_id;
          }
          me.route();
        });

      };

      AutocompleteDirectionsHandler.prototype.route = function() {
        if (!this.originPlaceId || !this.destinationPlaceId) {
          return;
        }
        var me = this;

        this.directionsService.route({
          origin: {'placeId': this.originPlaceId},
          destination: {'placeId': this.destinationPlaceId},
          travelMode: this.travelMode
        }, function(response, status) {
          if (status === 'OK') {
            me.directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      };
</script> -->
<script>
      // This sample uses the Place Autocomplete widget to allow the user to search
      // for and select a place. The sample then displays an info window containing
      // the place ID and other information about the place that the user has
      // selected.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map2'), {
        	mapTypeControl: false,
          	center: {lat: 49.836875, lng: 24.033966},
          	zoom: 13
        });

        var input = document.getElementById('pac-input');

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });

        autocomplete.addListener('place_changed', function() {
        	

          infowindow.close();
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            return;
          }

          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
          }

          // Set the position of the marker using the place ID and location.
          marker.setPlace({
            placeId: place.place_id,
            location: place.geometry.location
          });
          marker.setVisible(true);

          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-id'].textContent = place.place_id;
          infowindowContent.children['place-address'].textContent =
              place.formatted_address;
          infowindow.open(map, marker);
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANRGLtG9UM6qBpQGZIp_qvm37mD_Us8KI&libraries=places&callback=initMap"
        async defer></script>

<!-- 

if (array_key_exists('REQUEST_SCHEME', $_SERVER)) {   
  $cors_location = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] .
    dirname($_SERVER["SCRIPT_NAME"]) . "/cloudinary_cors.html";
} else {
  $cors_location = "https://" . $_SERVER["HTTP_HOST"] . "/cloudinary_cors.html";
} -->




<script type="text/javascript" src="js/cloudinary/jquery.min.js"></script>
<script type="text/javascript" src="js/cloudinary/jquery.ui.widget.js"></script>
<script type="text/javascript" src="js/cloudinary/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="js/cloudinary/jquery.fileupload.js"></script>
<script type="text/javascript" src="js/cloudinary/jquery.cloudinary.js"></script>

<?php endblock() ?>