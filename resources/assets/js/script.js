

/* Activities toggle */

$("#pevents_title").addClass('active_activities');	

$('#pevents_title').click(function(){

	$(this).addClass('active_activities');	
	
	
	$("#sevents_title").removeClass('active_activities');	
	$("#mproductions_title").removeClass('active_activities');	
	
	$('#pevents').show();
	$('#sevents').hide();
	$('#mproductions').hide();	
	
});

$('#sevents_title').click(function(){

	$(this).addClass('active_activities');	
	$("#pevents_title").removeClass('active_activities');	
	$("#mproductions_title").removeClass('active_activities');	
	
	$('#sevents').show();
	$('#pevents').hide();	
	$('#mproductions').hide();	
});

$('#mproductions_title').click(function(){
	
	$(this).addClass('active_activities');	
	$("#pevents_title").removeClass('active_activities');	
	$("#sevents_title").removeClass('active_activities');	
	

	$('#mproductions').show();
	$('#pevents').hide();	
	$('#sevents').hide();	
	
});





/* Calendar */
$(function() {

  $('#calendar').fullCalendar({
    themeSystem: 'bootstrap4',
    header: {
      //left: 'prev,next today',
      //center: 'title',
      //right: 'month,agendaWeek,agendaDay,listMonth'
    },
    //weekNumbers: true,
    //eventLimit: true, // allow "more" link when too many events
    //events: 'https://fullcalendar.io/demo-events.json'
  });

});

/* Popover */

 $('.dropdown-menu').find('form').click(function (e) {
    e.stopPropagation();
  });

$(function () {
  $('[data-toggle="popover"]').popover();
})


/* Owl Carousel */
$('.site_venue_space_carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})




