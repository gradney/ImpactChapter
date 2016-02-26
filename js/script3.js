$( function(){

	//var $items = $('#things');

	$.ajax({
		type: 'GET',
		url: 'testsampledata',
		success: function(data) {
			console.log('success', data);

			// $.each(data, function(i, item) {
			// 	$items.append('<li>event</li>');
			// });
		}
	});
});
