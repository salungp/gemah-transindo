// add class active id current url same href
$(function() {
  $('a[href="'+location.href+'"]').parents().addClass('active');
});

$(document).on('scroll', function() {
	if ($(document).scrollTop() > 100) {
		$('.navbar').addClass('fixed-top');
		$('.navbar').addClass('add-shadow');
	} else if ($(document).scrollTop() < 100) {
		$('.navbar').removeClass('fixed-top');
		$('.navbar').removeClass('add-shadow');
	}
})