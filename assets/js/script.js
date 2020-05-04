// add class active id current url same href
$(function() {
  $('a[href="'+location.href+'"]').parents().addClass('active');
});

$('.scroll-to-top').hide();

$(document).on('scroll', function() {
	if ($(document).scrollTop() > 100) {
		$('.navbar').addClass('fixed-top');
		$('.navbar').addClass('add-shadow');
		$('.scroll-to-top').show();
	} else if ($(document).scrollTop() < 100) {
		$('.navbar').removeClass('fixed-top');
		$('.navbar').removeClass('add-shadow');
		$('.scroll-to-top').hide();
	}
});

// if button click back to top
$('.scroll-to-top').on('click', function() {
	$(document).scrollTop(0);
});