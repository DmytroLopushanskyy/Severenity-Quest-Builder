$('.activate_submenu').parent().click(function (){
	$(this).toggleClass('active-submenu')
})
$('.toggle_menu_side').click(function (){
	if ($(this).hasClass('nice_btn')){
		$('.page_header').removeClass('pad_back')
		$('.page_header').addClass('pad')
		$('.page_header_side').css('overflow', 'initial')
		$('.nice_btn').addClass('nice_btn_anim')
		$('.toggle_menu_side').removeClass('nice_btn_anim')
	}else{
		$('.page_header').removeClass('pad')
		$('.page_header').addClass('pad_back')
		$('.page_header_side').css('overflow-y', 'scroll')
		$('.page_header_side').css('overflow-x', 'hidden')
		
		$('.toggle_menu_side').addClass('nice_btn_anim')
	}
	$(this).toggleClass('nice_btn')
	$('.page_header_side').toggleClass('active-slide-side-header')
})

$('.header-notes-dropdown').click(function(e){
	e.preventDefault()
	if ($(this).hasClass('open')) {
		$(this).removeClass('open')
	}else{
		$('.header-notes-dropdown').removeClass('open')
		$(this).toggleClass('open')
	}
	
})
$(document).mouseup(function(e) 
{
    var container = $(".header-notes-dropdown");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.removeClass('open')
    }
});

$(window).resize(function(e) 
{
    var container = $(".header-notes-dropdown");

    // if the target of the click isn't the container nor a descendant of the container
    if ($(document).width() < 769) 
    {
        container.css('position', 'initial')
    }else{
    	container.css('position', 'relative')
    }
});

