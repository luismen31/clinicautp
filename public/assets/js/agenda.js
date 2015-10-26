(function($){
			
	var options = {
		events_source: baseurl+'/getAgenda',
		view: 'week',
		language: 'es-CO',
		tmpl_path: baseurl+'/tmpls/',
		tmpl_cache: false,				
		width: '100%',
		
		onAfterEventsLoad: function(events) 
		{
			if(!events) 
			{
				return;
			}
			var list = $('#eventlist');
			list.html('');

			$.each(events, function(key, val) 
			{
				$(document.createElement('li'))
					.html('<a href="' + val.url + '">' + val.title + '</a>')
					.appendTo(list);
			});
		},
		onAfterViewLoad: function(view) 
		{
			$('.page-header h3').text(this.getTitle());
			$('.btn-group button').removeClass('active');
			$('button[data-calendar-view="' + view + '"]').addClass('active');
		},
		views:{
			day: {enable: 1}
		},
		classes: {
			months: {
				general: 'label'
			}
		}
	}

	var calendar = $('#agenda').calendar(options);

	$('.btn-group button[data-calendar-nav]').each(function(){
		var $this = $(this);
		$this.click(function() 
		{
			calendar.navigate($this.data('calendar-nav'));
		});
	});

	$('.btn-group button[data-calendar-view]').each(function() {
		var $this = $(this);
		$this.click(function() 
		{
			calendar.view($this.data('calendar-view'));
		});
	});

	
}(jQuery));