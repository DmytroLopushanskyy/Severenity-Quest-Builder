<?php include 'base.php' ?>


<?php startblock('content') ?>

<section class="ls" id="visible">
	<div class="distance_title warning_message none"></div>
	<div class="distance_title">Create Action / Goal Quest</div>
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
			<label for="file-6" class="file_label"><img id="blah" class="none" src="#" alt="your image" /><figure class="figure_file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" ><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span></span>
			<div class="progress-bar-cloudinary" id="progress-bar">
			    <div class="progress" id="progress"></div>
			</div>
			</label>

		</div>
		<div class="distance_title mtop float_left mleft">Add Text Content</div>	
		<div class="form-group local_quest_form p-b120 col-md-6 col-xs-12 col-md-offset-3 block" align="center">
			<div class="popup">
		    	<label for="description" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Text Content:</label>
		    	<span class="popuptext">Some text here</span>
		    </div>
		    <textarea type="name" class="form-control title_input textarea_input" name="description" placeholder="Enter Some Text"></textarea> 
		</div>




		<div class="distance_title mtop float_left mleft">Quest Benefit</div>	

	    <div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row marg_top" align="center">
	    	<div class="popup width50">
		    	<label for="description" class="title_head number_title"><i class="fa fa-question-circle" aria-hidden="true"></i>Price:</label>
		    	<span class="popuptext">Some text here</span>
		    </div>
		    <input type="text" class="form-control title_input number_input" name="price" placeholder="Price">
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
		    <input type="text" class="form-control title_input number_input" name="rating" placeholder="+ Value">
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
		    <input type="text" class="form-control title_input number_input" name="experience" placeholder="+ Value">
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
		    <input type="text" class="form-control title_input number_input" name="serenits" placeholder="+ Value">
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
<br><br><br>


<?php endblock() ?>



<?php startblock('custom_scripts') ?>

<script src="cloudinary_upload.js"></script>

<script>
	
// adding images and textboxes


function loading() {
	$('body').css('opacity', '0.2')
	$('body').css('overflow', 'hidden')
	$('html').prepend('<img src="images/animated_spinner.gif" id="spinner">')
}
function loading_disappear(){
	$('body').css('opacity', '1')
	$('body').css('overflow', 'auto')
	$('#spinner').remove()
}

</script>



<script>
	 
$('.create_quest_btn').click(function(e){
	e.preventDefault()
	loading()
	console.log('started creating')
	var title = $('input[name="title"').val()
	var description = $('input[name="description"').val()
	var file = $('input[name="file-6[]"').val()
	var text = $('input[name="value"').val()
	var price = $('input[name="price"').val()
	var rating = $('input[name="rating"').val()
	var experience = $('input[name="experience"').val()
	var serenits = $('input[name="serenits"').val()


	if (title == '' || description == '' || file == '' || price == '' || rating == '' || serenits == '' || text == '') {
		$('.warning_message').removeClass('none')
		$('.warning_message').html('*Fill out all required fields!')
		window.scrollTo(0,0);
		loading_disappear()
	}else if (!$.isNumeric(value), !$.isNumeric(price), !$.isNumeric(rating), !$.isNumeric(experience), !$.isNumeric(serenits)) {
		$('.warning_message').removeClass('none')
		$('.warning_message').html('*Enter valid numeric values!')
		window.scrollTo(0,0);
		loading_disappear()
	}else{
		var status = $.Deferred();
		handleFilesfunc($('#file-6').prop('files'), status)
		console.log('after handle')
		$.when(status).then(function() {
			path_array = $('#blah').attr('src').split('/')
			console.log('dooone', path_array, userId)
			path = path_array[path_array.length-2] + '/' +path_array[path_array.length-1]
			console.log(path)
			console.log('sending ajax', experience, serenits)
			$.ajax({
		        url: 'https://severenity-teo.herokuapp.com/send/quest',
		        data: JSON.stringify(
		        {
		        	'quest': {
		        		'title': title, 
		        		'description': description,
		        		'type': 3, 
		        		'serenits': serenits, 
		        		'experience': experience, 
		        		'image': path, 
		        		'placeId': '', 
		        		'price': price,
		        		'rating': rating,
		        		'createdBy': userId,
		        		'collectQuest': {
		        			'characteristic': text,
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
					}, 50);
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

$(document).on('click', '#menu li', function(e) {
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

function readURL30(input) {
    var numFiles = input.files.length;

    if (input.files && input.files[0]) {

     var reader = new FileReader();
      reader.onload = function (e) {

        	console.log(true)
            $('#img_change').attr('src', e.target.result)

      }
      reader.readAsDataURL(input.files[0]);
    }
}

// $(document).on('change', '#media_input', function(e){
//     readURL30(this);
// });

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

    
<?php endblock() ?>