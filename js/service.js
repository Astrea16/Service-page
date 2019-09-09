$(document).ready(function(){
	$('.nav-toggle').on('click', function(){
		$('.nav').toggleClass('active');
	});

	$('form').submit(function(){
		var formID = $(this).attr('id');
		var formNm = $('id' + formID);
		$.ajax({
			type: "POST",
			url: 'service.php',
			data: formNm.serialaze(),
			success: function(data){
				$(formNm).html(data)
			}
		});
		return false;
	});
})